document.querySelectorAll('.nav-trigger').forEach(btn => {

    btn.addEventListener('click', () => {

        const item = btn.closest('.nav-item');

        if (!item) return;

        item.classList.toggle('open');

        console.log('Toggle open');

    });

});