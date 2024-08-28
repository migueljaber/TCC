// Importando a biblioteca ScrollReveal
// Se você estiver usando um ambiente onde não é possível importar diretamente, adicione o script diretamente no HTML.

window.sr = ScrollReveal({ reset: true });

// Configurando animações de ScrollReveal para as seções
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

// Função para animação de texto
const el = document.querySelector("h1");
const text = "ADVANCE, ONDE A INOVAÇÃO TRANSFORMA IDEIAS EM FUTURO.";
const interval = 100;

function showText(el, text, interval) {
    const char = text.split("").reverse();
    const typer = setInterval(() => {
        if (!char.length) {
            return clearInterval(typer);
        }
        const next = char.pop();
        el.innerHTML += next;
    }, interval);
}

showText(el, text, interval);

// IntersectionObserver para os cartões de serviço
document.addEventListener('DOMContentLoaded', function() {
    const serviceCards = document.querySelectorAll('.service-card');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = function(entries, observer) {
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





