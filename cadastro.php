/* estilo geral */
*{

    margin: 0;
    padding: 0%;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body{
    background-color: rgb(0, 0, 0);
    height:100vh;
	overflow:auto;

}
.interface{
    max-width: 1280px;
    margin: 0 auto;
}
.flex{
    display: flex;
}
p.txt {
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}


.advance-contato button {
    padding: 10px 40px;
    font-size: 25px;
    font-weight: 600;
    background-color: #128f81;
    border: 0;
    border-radius: 50px;
    cursor: pointer;
    transition: .2s;
}
h2.titulo{
       color: white;
       font-size: 36px;
       text-align: center;

}
h2.titulo span{
    color: #128f81;
}
 button:hover, form .advance-enviar input:hover{
    box-shadow: 0px 0px 8px #1ec2af;
    transform: scale(1.10);
}