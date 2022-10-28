<?php
$nome = "Murilo";
$anoNasc = 2005;
$anoAtual = 2022;
$idade = $anoAtual - $anoNasc;
$peso = 65;
$altura = 1.78;
$imc =$peso /pow($altura,2);
$imc =ceil($imc * 100)/100; 
$calculo = "";

if($imc <= 18.5){
    $calculo = "<h1 style=' color: purple;
    font-size: 12pt;
    text-align: center
    padding: 30px'
    >Abaixo do peso  </h1>";

}else if($imc > 18.6 && $imc <= 24.99){
    $calculo = "<h1 style=' color: blue;
    font-size: 14pt;
    text-align: center
    padding: 30px'
    >Peso ideal  </h1>";

}else if($imc >= 25 && $imc <=29.99){
    $calculo = "<h1 style=' color: orange;
    font-size: 16pt;
    text-align: center
    padding: 30px'
    >Excesso de peso </h1>";

}else if ($imc >= 30 && $imc <= 34.99){
    $calculo = "<h1 style=' color: red;
    font-size: 18pt;
    text-align: center
    padding: 30px'
    >Obesidade grau I  </h1>";

}else if($imc >= 35 && $imc <= 39.99){
    $calculo = "<h1 style=' color: brown;
    font-size: 20pt;
    text-align: center
    padding: 30px'
    >Obesidade grau II  </h1>";

}else{
    $calculo = "<h1 style=' color: black;
    font-size: 30pt;
    text-align: center
    padding: 30px'
    >Obesidade grau III  </h1>";
}



echo "<h1 style=' color: red;
 font-size: 40px;
 text-align: center
 padding: 30px'

 >Diagnóstico
 <br>
 <br>Nome: $nome 
 <br>Idade: $idade
 <br>Imc: $imc
 <br>Resposta: $calculo
 </h1>";
?>