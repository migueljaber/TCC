

document.addEventListener('DOMContentLoaded', function() {
   
    const sr = ScrollReveal({ reset: true });

    sr.reveal('.inicio', {
        origin: 'top',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.services', {
        origin: 'bottom',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.sobre', {
        origin: 'left',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.motivos', {
        origin: 'right',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.metodologia', {
        origin: 'bottom',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.equipe', {
        origin: 'top',
        distance: '50px',
        duration: 2000
    });
    sr.reveal('.formulario', {
        origin: 'bottom',
        distance: '50px',
        duration: 2000
    });

   
    const el = document.querySelector("h1");
    if (el) {
        const text = "ADVANCE, ONDE A INOVAÇÃO TRANSFORMA IDEIAS EM FUTURO.";
        const interval = 100;

        function showText(el, text, interval) {
            const char = text.split("").reverse();
            const typer = setInterval(() => {
                if (!char.length) {
                    clearInterval(typer);
                    return;
                }
                const next = char.pop();
                el.innerHTML += next;
            }, interval);
        }

        showText(el, text, interval);
    }

    // IntersectionObserver para os cartões de serviço
    const serviceCards = document.querySelectorAll('.service-card');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            } else {
                entry.target.classList.remove('in-view');
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    serviceCards.forEach(card => {
        observer.observe(card);
    });
});


