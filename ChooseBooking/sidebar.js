function showSidebar(sidebarClass) {
    const sidebar = document.querySelector(sidebarClass);
    if (sidebar) {
        sidebar.classList.add('active');
    }
}

function hideSidebar(sidebarClass) {
    const sidebar = document.querySelector(sidebarClass);
    if (sidebar) {
        sidebar.classList.remove('active');
    }
}