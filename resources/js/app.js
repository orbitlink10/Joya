import './bootstrap';

const whatsappNumber = '254700000000';

document.querySelectorAll('[data-hero-carousel]').forEach((carousel) => {
    const slides = Array.from(carousel.querySelectorAll('.hero-image'));
    const dots = Array.from(carousel.querySelectorAll('.hero-slide-dots span'));

    if (slides.length < 2) {
        return;
    }

    let activeIndex = 0;

    window.setInterval(() => {
        slides[activeIndex].classList.remove('is-active');
        dots[activeIndex]?.classList.remove('is-active');

        activeIndex = (activeIndex + 1) % slides.length;

        slides[activeIndex].classList.add('is-active');
        dots[activeIndex]?.classList.add('is-active');
    }, 5200);
});

document.querySelectorAll('[data-whatsapp-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(form);
        const lines = [form.dataset.whatsappContext || 'Joya Atelier enquiry'];

        for (const [key, value] of formData.entries()) {
            if (value instanceof File) {
                if (value.name) {
                    lines.push(`${formatLabel(key)}: ${value.name}`);
                }

                continue;
            }

            const text = String(value).trim();

            if (text) {
                lines.push(`${formatLabel(key)}: ${text}`);
            }
        }

        window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(lines.join('\n'))}`, '_blank');
    });
});

function formatLabel(key) {
    return key
        .replace(/\[\]$/, '')
        .replace(/_/g, ' ')
        .replace(/\b\w/g, (letter) => letter.toUpperCase());
}
