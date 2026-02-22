(() => {
    document.querySelectorAll<HTMLElement>(".dropdown").forEach((dropdown) => {

        const trigger = dropdown.querySelector<HTMLButtonElement>(".dropdown-trigger");
        const menu = dropdown.querySelector<HTMLElement>(".dropdown-menu");

        function close() {
            dropdown.classList.remove("active");
            trigger?.setAttribute("aria-expanded", "false");
        }

        trigger?.addEventListener("click", (e: Event) => {
            e.stopPropagation();
            dropdown.classList.toggle("active");

            const expanded = dropdown.classList.contains("active");
            trigger.setAttribute("aria-expanded", String(expanded));
        });

        // ✅ Close when clicking inside a link
        menu?.addEventListener("click", (e: Event) => {
            const target = e.target as HTMLElement;
            if (target.closest("a")) { close(); }
        });

        // ✅ Close when clicking outside
        document.addEventListener("click", (e: Event) => {
            if (!dropdown.contains(e.target as Node)) { close(); }
        });

    });

})();