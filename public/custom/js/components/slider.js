"use strict";
(() => {
    document.querySelectorAll(".slider,.tabulator").forEach((slider) => {
        const OFFSET = 40;
        const TIME_LOOP = "5000";
        const radios = slider.querySelectorAll("input[type='radio']");
        const loopEnabled = slider.dataset.loop === "true";
        const loopTime = parseInt(slider.dataset.time || TIME_LOOP, 10);
        let startX = 0;
        let interval = null;
        if (radios.length === 0)
            return;
        function getIndex() {
            const index = Array.from(radios).findIndex(r => r.checked);
            return index === -1 ? 0 : index;
        }
        function goTo(index) {
            const total = radios.length;
            if (total === 0)
                return;
            if (loopEnabled) {
                if (index < 0)
                    index = total - 1;
                if (index >= total)
                    index = 0;
            }
            else {
                if (index < 0 || index >= total)
                    return;
            }
            radios[index].checked = true;
        }
        function startLoop() {
            if (!loopEnabled || radios.length <= 1)
                return;
            stopLoop();
            interval = window.setInterval(() => {
                const current = getIndex();
                goTo(current + 1);
            }, loopTime);
        }
        function stopLoop() {
            if (interval !== null) {
                clearInterval(interval);
                interval = null;
            }
        }
        slider.addEventListener("touchstart", (e) => {
            startX = e.touches[0].clientX;
            stopLoop();
        });
        slider.addEventListener("touchend", (e) => {
            const diff = startX - e.changedTouches[0].clientX;
            const current = getIndex();
            if (diff > OFFSET) {
                goTo(current + 1);
            }
            if (diff < -OFFSET) {
                goTo(current - 1);
            }
            startLoop();
        });
        slider.addEventListener("mouseenter", stopLoop);
        slider.addEventListener("mouseleave", startLoop);
        startLoop();
    });
})();
