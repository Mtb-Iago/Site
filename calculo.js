function clicar() { //função que envia o calculo do js para o html
    var nota1 = document.querySelector(".nota1").value; //variavel nota1 recebe o valor do input nota1 do html
    var nota2 = document.querySelector(".nota2").value;
    var nota3 = document.querySelector(".nota3").value;

    var resultado = (parseInt(nota1) + parseInt(nota2) + parseInt(nota3)) / 3;
    //variavel resultado recebe o calculo das variaveis que receberam os valores input
    document.querySelector(".resultado").innerHTML = resultado;
    //tag ".resultado" recebe o total da variavel resultado e mostra no html// document.querySelector buscar " "e .innerHTML linka com html
}