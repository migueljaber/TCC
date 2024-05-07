const el = document.querySelector("h1");
const text = "TRANSFORMANDO SUA EMPRESA EM REALIDADE DIGITAL.";
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