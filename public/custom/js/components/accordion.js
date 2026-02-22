"use strict";
(() => {
    document.querySelectorAll('.accordion').forEach((accordion) => {
        const details = accordion.querySelectorAll('details');
        details.forEach((detail) => {
            detail.addEventListener('toggle', () => {
                if (!detail.open)
                    return;
                details.forEach((other) => {
                    if (other !== detail) {
                        other.open = false;
                    }
                });
            });
        });
    });
})();
