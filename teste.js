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

document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os botões de serviço e adiciona o evento de clique
    document.querySelectorAll('.btn-services').forEach(button => {
        button.addEventListener('click', function() {
            const servico = this.getAttribute('data-servico');
            const clienteId = this.getAttribute('data-cliente-id');

            // Desabilita o botão para evitar múltiplos cliques
            button.disabled = true;

            // Envia requisição AJAX para confirmar pedido
            fetch('processar_pedido.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `cliente_id=${clienteId}&servico=${servico}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Mostra o modal de agradecimento
                    const modal = document.getElementById("modalAgradecimento");
                    console.log("Modal encontrado:", modal);  // Adicionado para depuração
                    modal.classList.add("show");  // Adiciona a classe 'show'
                } else {
                    alert(data.message); // Exibe a mensagem de erro do servidor
                }
                button.disabled = false; // Reabilita o botão após a resposta do servidor
            })
            .catch(error => {
                console.error('Erro:', error);
                alert("Erro ao processar sua solicitação. Tente novamente.");
                button.disabled = false; // Reabilita o botão em caso de erro
            });
        });
    });
});

function fecharModal() {
    // Remove a classe 'show' para ocultar o modal com a transição
    const modal = document.getElementById("modalAgradecimento");
    modal.classList.remove("show");
}
