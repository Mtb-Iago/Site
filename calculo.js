function clicar() { //função que envia o calculo do js para o html
    var nota1 = document.querySelector(".nota1").value; //variavel nota1 recebe o valor do input nota1 do html
    var nota2 = document.querySelector(".nota2").value;
    var nota3 = document.querySelector(".nota3").value;

    var resultado = (parseFloat(nota1) + parseFloat(nota2) + parseFloat(nota3)) / 3;
    //variavel resultado recebe o calculo das variaveis que receberam os valores input
    document.querySelector(".resultado").innerHTML = `Sua média..: ${resultado.toFixed(1)}`;
    //tag ".resultado" recebe o total da variavel resultado e mostra no html// document.querySelector buscar " "e .innerHTML linka com html
    alert('Sua média: ' + (resultado.toFixed(1)));


    var resultadofinal = 15 - resultado * 2;
    if (resultadofinal <= 10) {

        alert('Infelizmente vai precisar fazer prova final..');
        document.querySelector(".resultadofinal").innerHTML = 'Infelizmente vai precisar fazer prova final..';
        alert('E sua nota deve ser => ' + (resultadofinal.toFixed(1)));
        document.querySelector(".resultadofinal1").innerHTML = `Sua nota deve ser..: ${resultadofinal.toFixed(1)}`;
    } else if (resultadofinal > 10) {
        alert('Nota insuficiente para fazer prova final..:');
        document.querySelector(".ni").innerHTML = 'Nota insuficiente para fazer prova final..:';
    }



}