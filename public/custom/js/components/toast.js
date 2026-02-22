class Toast {
    constructor() {
        this.containers = new Map();
    }
    getContainer(position) {
        if (this.containers.has(position)) {
            return this.containers.get(position);
        }
        const container = document.createElement('div');
        container.id = `toast-container-${position}`;
        container.dataset.position = position;
        container.style.position = 'fixed';
        container.style.zIndex = '9999';
        container.style.display = 'flex';
        container.style.flexDirection = 'column';
        container.style.gap = '0.75rem';
        document.body.appendChild(container);
        this.applyPositionStyles(container, position);
        this.containers.set(position, container);
        return container;
    }
    applyPositionStyles(container, position) {
        container.style.removeProperty('top');
        container.style.removeProperty('bottom');
        container.style.removeProperty('left');
        container.style.removeProperty('right');
        container.style.removeProperty('transform');
        switch (position) {
            case 'top-left':
                container.style.top = '1rem';
                container.style.left = '1rem';
                container.style.alignItems = 'flex-start';
                break;
            case 'top-right':
                container.style.top = '1rem';
                container.style.right = '1rem';
                container.style.alignItems = 'flex-end';
                break;
            case 'bottom-left':
                container.style.bottom = '1rem';
                container.style.left = '1rem';
                container.style.alignItems = 'flex-start';
                break;
            case 'bottom-right':
                container.style.bottom = '1rem';
                container.style.right = '1rem';
                container.style.alignItems = 'flex-end';
                break;
            case 'top-center':
                container.style.top = '1rem';
                container.style.left = '50%';
                container.style.transform = 'translateX(-50%)';
                container.style.alignItems = 'center';
                break;
            case 'bottom-center':
                container.style.bottom = '1rem';
                container.style.left = '50%';
                container.style.transform = 'translateX(-50%)';
                container.style.alignItems = 'center';
                break;
        }
    }
    show(options) {
        const { title = '', description = '', type = 'info', duration = 3000, icon, position = 'top-right', } = options;
        const container = this.getContainer(position);
        const iconMap = {
            success: '✔',
            error: '✖',
            warning: '⚠',
            info: 'ℹ'
        };
        const toast = document.createElement('div');
        toast.classList.add('toast', type);
        toast.innerHTML = `
			${icon || iconMap[type] ? `<div class='toast-icon'>${icon ?? iconMap[type]}</div>` : ''}
			<div class='toast-content'>
				${title ? `<div class='toast-title'>${title}</div>` : ''}
				${description ? `<div class='toast-description'>${description}</div>` : ''}
			</div>
			<button aria-label='Close'>&times;</button>
		`;
        toast.querySelector('button')?.addEventListener('click', () => this.remove(toast));
        container.appendChild(toast);
        if (duration > 0) {
            setTimeout(() => this.remove(toast), duration);
        }
    }
    success(options) {
        this.show({ ...options, type: 'success' });
    }
    error(options) {
        this.show({ ...options, type: 'error' });
    }
    warning(options) {
        this.show({ ...options, type: 'warning' });
    }
    info(options) {
        this.show({ ...options, type: 'info' });
    }
    remove(toast) {
        toast.style.animation = 'toast-out 0.2s ease forwards';
        setTimeout(() => toast.remove(), 200);
    }
}
export const toast = new Toast();
