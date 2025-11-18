<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} // Assuming sessions are used for user authentication
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection
include 'db_connection.php'; // Assuming this connects to the database where user credentials are stored

// Check if the action is to change password and if it's a POST request
if (isset($_GET['action']) && $_GET['action'] === 'change_password' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json'); // Set header here, only for AJAX response
    $response = ['success' => false, 'message' => ''];

    // Check if user is logged in (assuming user ID is stored in session)
    if (!isset($_SESSION['user_id'])) { // Replace 'user_id' with your actual session variable for user ID
        $response['message'] = 'User not logged in.';
        echo json_encode($response);
        exit();
    }

    $userId = $_SESSION['user_id']; // Get user ID from session
    $oldPassword = $_POST['oldPassword'] ?? '';
    $newPassword = $_POST['newPassword'] ?? '';

    // Validate input
    if (empty($oldPassword) || empty($newPassword)) {
        $response['message'] = 'All fields are required.';
        echo json_encode($response);
        exit();
    }

    // Fetch current hashed password from the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?"); // Replace 'users' and 'id' with your actual table and column names
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if (!$user || !password_verify($oldPassword, $user['password'])) {
        $response['message'] = 'Incorrect old password.';
        echo json_encode($response);
        exit();
    }

    // Hash the new password
    $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update password in the database
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?"); // Replace 'users' and 'id'
    $stmt->bind_param("si", $hashedNewPassword, $userId);

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'Password changed successfully.';
    } else {
        $response['message'] = 'Error updating password: ' . $conn->error;
    }
    $stmt->close();
    $conn->close();
    echo json_encode($response);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="favicon.png" type="image/png">
    <style>
        body {
            font-family: Poppins, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
        }
    </style>
</head>
<body class="loading">
    <?php include 'sidebar.php'; ?>
    <main>
        <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-center text-blue-500 mb-8">Change Password</h1>
            <form id="changePasswordForm" method="POST">
                <div class="mb-4">
                    <label for="oldPassword" class="block text-gray-700 text-sm font-bold mb-2">Old Password:</label>
                    <input type="password" id="oldPassword" name="oldPassword" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-4">
                    <label for="newPassword" class="block text-gray-700 text-sm font-bold mb-2">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-6">
                    <label for="confirmNewPassword" class="block text-gray-700 text-sm font-bold mb-2">Confirm New Password:</label>
                    <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Change Password
                    </button>
                </div>
                <p id="message" class="text-center mt-4"></p>
            </form>
        </div>
    </main>

    <script>
        document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const oldPassword = document.getElementById('oldPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmNewPassword = document.getElementById('confirmNewPassword').value;
            const messageElement = document.getElementById('message');

            if (newPassword !== confirmNewPassword) {
                messageElement.textContent = 'New password and confirm password do not match.';
                messageElement.style.color = 'red';
                return;
            }

            const formData = new FormData();
            formData.append('oldPassword', oldPassword);
            formData.append('newPassword', newPassword);

            fetch('security.php?action=change_password', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageElement.textContent = data.message;
                    messageElement.style.color = 'green';
                    document.getElementById('changePasswordForm').reset();
                } else {
                    messageElement.textContent = data.message;
                    messageElement.style.color = 'red';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                messageElement.textContent = 'An error occurred while changing password.';
                messageElement.style.color = 'red';
            });
        });
    </script>
</body>
</html>