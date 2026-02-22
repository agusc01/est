"use strict";
(() => {
    document.querySelectorAll(".dropdown").forEach((dropdown) => {
        const trigger = dropdown.querySelector(".dropdown-trigger");
        const menu = dropdown.querySelector(".dropdown-menu");
        function close() {
            dropdown.classList.remove("active");
            trigger?.setAttribute("aria-expanded", "false");
        }
        trigger?.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("active");
            const expanded = dropdown.classList.contains("active");
            trigger.setAttribute("aria-expanded", String(expanded));
        });
        menu?.addEventListener("click", (e) => {
            const target = e.target;
            if (target.closest("a")) {
                close();
            }
        });
        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
                close();
            }
        });
    });
})();
