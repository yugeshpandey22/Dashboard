document.addEventListener('DOMContentLoaded', () => {

    const sidebar = document.querySelector('.sidebar');
    const toggleBtn = document.querySelector('.menu-toggle');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('show');
        });
    }

    document.addEventListener('click', (e) => {
        if (sidebar && sidebar.classList.contains('show') &&
            !sidebar.contains(e.target) &&
            !toggleBtn.contains(e.target)) {
            sidebar.classList.remove('show');
        }
    });

    /* ACTIVE PAGE */
    const currentPath = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-link:not(.menu-collapse-toggle)').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');

            // USER REQUEST: Do not auto-open the submenu on page load
            /* 
            const parentSubmenu = link.closest('.nav-submenu');
            if (parentSubmenu) {
                parentSubmenu.classList.add('open');

                const parentToggle = document.querySelector(
                    `.menu-collapse-toggle[href="#${parentSubmenu.id}"]`
                );
                if (parentToggle) parentToggle.classList.add('active');
            }
            */
        }
    });

    /* SUBMENU TOGGLE */
    document.querySelectorAll('.menu-collapse-toggle').forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();

            const submenu = document.querySelector(toggle.getAttribute('href'));
            if (!submenu) return;

            // accordion behavior
            document.querySelectorAll('.nav-submenu.open').forEach(menu => {
                if (menu !== submenu) {
                    menu.classList.remove('open');
                    const t = document.querySelector(`.menu-collapse-toggle[href="#${menu.id}"]`);
                    if (t) t.classList.remove('active');
                }
            });

            submenu.classList.toggle('open');
            toggle.classList.toggle('active');
        });
    });

});
