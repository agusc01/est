"use strict";
(() => {
    const toggle = document.querySelector('#dark-mode');
    const root = document.documentElement;
    if (toggle) {
        const saved = localStorage.getItem('theme');
        const theme = saved ?? root.getAttribute('data-theme') ?? 'light';
        root.setAttribute('data-theme', theme);
        toggle.checked = theme === 'dark';
        toggle.setAttribute('aria-checked', toggle.checked.toString());
        toggle.addEventListener('change', () => {
            const isDark = toggle.checked;
            const newTheme = isDark ? 'dark' : 'light';
            root.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }
})();
