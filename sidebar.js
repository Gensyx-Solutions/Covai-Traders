// sidebar.js

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    // Assuming 'main' is the content area next to the sidebar
    const mainContent = document.querySelector('main'); 

    // Toggle a class on the sidebar to control its width and visibility of text
    sidebar.classList.toggle('collapsed'); 
    
    // Adjust the main content's margin to accommodate the sidebar
    if (mainContent) {
        mainContent.classList.toggle('sidebar-collapsed-margin');
    }

    // Toggle visibility of text elements (span) inside sidebar, excluding the logo
    document.querySelectorAll('#sidebar ul li span:not(.logo)').forEach(span => {
        span.classList.toggle('hidden');
    });
    // Also toggle visibility of sub-menu divs
    document.querySelectorAll('#sidebar ul li .sub-menu > div').forEach(div => {
        div.classList.toggle('hidden');
    });
}

function toggleSubMenu(button) {
    const subMenu = button.nextElementSibling; // The ul.sub-menu is the next sibling
    if (subMenu) {
        subMenu.classList.toggle('active'); // Use 'active' class for visibility
        // Optionally, change the arrow icon if it's a separate element
        // For now, we'll just toggle a class on the button itself
        button.classList.toggle('submenu-open');
    }
}

// The original sidebar.js had a DOMContentLoaded listener to fetch sidebar.html
// and initialize. This is no longer needed as sidebar.php is included directly.
// The initialization of sidebar functionality (like highlighting current page)
// should be handled in app.js or dashboard.php's script block if needed.