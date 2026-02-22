"use strict";
(() => {
    document.querySelectorAll('input[role="switch"]')
        .forEach((toggle) => {
        toggle.addEventListener('change', () => {
            toggle.setAttribute('aria-checked', toggle.checked.toString());
        });
    });
})();
