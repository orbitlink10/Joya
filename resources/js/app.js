import './bootstrap';

const whatsappNumber = '254746761556';

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
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(form);
        const lines = [form.dataset.whatsappContext || 'Joya Atelier enquiry'];
        const submitButton = form.querySelector('[type="submit"]');
        const originalButtonText = submitButton?.textContent;

        for (const [key, value] of formData.entries()) {
            if (key === '_token') {
                continue;
            }

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

        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(lines.join('\n'))}`;
        const whatsappWindow = window.open('', '_blank');

        submitButton?.setAttribute('disabled', 'disabled');

        if (submitButton) {
            submitButton.textContent = 'Sending...';
        }

        try {
            await sendEmailCopy(form, formData);
            openWhatsapp(whatsappUrl, whatsappWindow);
            form.reset();
        } catch (error) {
            openWhatsapp(whatsappUrl, whatsappWindow);
            window.alert('Your WhatsApp message is ready, but the email copy could not be sent. Please check the mail settings.');
        } finally {
            submitButton?.removeAttribute('disabled');

            if (submitButton && originalButtonText) {
                submitButton.textContent = originalButtonText;
            }
        }
    });
});

function openWhatsapp(url, whatsappWindow) {
    if (whatsappWindow) {
        whatsappWindow.location.href = url;
        return;
    }

    window.location.href = url;
}

async function sendEmailCopy(form, formData) {
    const response = await fetch(form.action, {
        method: 'POST',
        headers: {
            Accept: 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: formData,
    });

    if (!response.ok) {
        throw new Error('Email request failed');
    }
}

function formatLabel(key) {
    return key
        .replace(/\[\]$/, '')
        .replace(/_/g, ' ')
        .replace(/\b\w/g, (letter) => letter.toUpperCase());
}
