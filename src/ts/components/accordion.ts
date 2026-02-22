(() => {
    document.querySelectorAll<HTMLElement>('.accordion').forEach((accordion) => {

        const details = accordion.querySelectorAll<HTMLDetailsElement>('details');

        details.forEach((detail) => {

            detail.addEventListener('toggle', () => {

                if (!detail.open) return;

                details.forEach((other) => {
                    if (other !== detail) { other.open = false; }
                });

            });

        });

    });
})();