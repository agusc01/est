import { toast } from "./components/toast.js";
(() => {
    window.addEventListener('load', () => {
        console.log({ a: 'b' });
        toast.info({ description: 'Profile updated', duration: 2000, position: 'bottom-center' });
        toast.success({ title: 'Saved', duration: 2000, position: 'bottom-left' });
    });
})();
