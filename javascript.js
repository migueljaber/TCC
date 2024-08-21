window.sr = ScrollReveal({ reset: true});


sr.reveal('.especialidades', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});
sr.reveal('.sobre', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});

sr.reveal('.motivos', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});
sr.reveal('.metodologia', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});

sr.reveal('.equipe', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});

sr.reveal('.formulario', {
    rotate: { x: 0, y: 80, z: 0,
        duration: 3000
}
});


const el = document.querySelector("h1");
const text = "ADVANCE, ONDE A INOVAÇÃO TRANSFORMA IDEIAS EM FUTURO.";
const interval = 100;
   
    document.querySelector('h1').style.color = "#128f81"

function showText(el, text, interval){

    const char = text.split ("").reverse();

    const typer = setInterval(() => {

    if(!char.length) {
        return clearInterval(typer);
    }

    const next = char.pop();

    el.innerHTML +=next;

    }, interval);
}

showText(el, text, interval);



