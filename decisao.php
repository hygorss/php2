<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
   <h1>Cadastro de Cliente</h1>
   <?php 
$nome ="Hygor";
$idade = 16;
$fumante = false;
// false -- falso - 0 / true - verdadeiro - 1
echo "<p>ID do cliente: $nome <br>";
echo "Idade do cliente: $idade <br>";
echo "Fumante: $fumante </p>";

/* OPERADORES ARITIMÉTICOS */

echo 20*3;
echo "<br>";

//OPERADORES RELACIONAIS

echo 20>10;
echo "<br>";

// ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
// SE FOR FUMANTE NÃO PODE ENTRAR
// IDADE NÃO PODE SER < 10 ANOS

//IF SIMPLES - TERÁ NO MAXIMO DUAS RESPOSTAS DIFERENTES
echo "<br>";
$idade = 10;
$fumante = true;
// IF = SE
if($idade > 75 || $fumante == true || $idade <= 10){
   echo "PROIBIDO A ENTRADA ACIMA DE 50 ANOS NA FESTA, NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
}else{
   echo "PODE ENTRAR, SEJA BEM VINDO";
}


//UM ALUNO, SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO

// IF COMPOSTO - TERÁ MAIS DE DUAS RESPOSTAS DIFERENTES
 
$nota = 10;
if($nota >= 8){
   echo " APROVADO (a)";
}else if($nota >=5){
   echo " RECUPERAÇÃO";
}else{
   echo " REPROVADO";
}


// VCS IRÃO NO SENAC SOMENTE SE:
// ESTIVER UNIFORMISADO
// CHEGOU NO HORÁRIO
// MENSSAGEM:VERDADEIRO ---- PAREBÉNS, VC PODE IR
// FALSO ---- FERROU, VC VAI FICAR NA SALA DO VALDEIR


echo "<br>";
$Uniformes = false;
$Chegada = false;
if($Uniformes == true && $Chegada == true ){
   echo "SEM UNIFORME,FERROU, VC VAI FICAR NA SALA DO VALDEIR";
}else{
   echo "PAREBÉNS, VC PODE IR";
}
  

echo "<br><br>";
$Uniformes = false;
$Chegada = true;
echo($Uniformes == true && $Chegada == true )? "SEM UNIFORME,FERROU, VC VAI FICAR NA SALA DO VALDEIR" : "PAREBÉNS, VC PODE IR";

// SUA COR FAVORITA PODE SER: VERMELHO,AZUL,VERDE
// SWTICH - ESCOLHER UMA DAS OPÇÕES 

$cor = "Verde";
switch ($cor) {
   case 'Azul':
      echo " <br><br>";
      echo "Sua cor favorita é $cor";
      break;
   case 'Verde':
       echo " <br><br>";
       echo "Sua cor favorita é $cor";
       break;
   case 'Vermelho':
       echo " <br><br>";
       echo "Sua cor favorita é $cor";
       break;
   default:
      echo "<br><br>";
      echo "Sua cor favorita não é Azul, Verde ou Vermelho";
      break;
}

//dias da semana --- 1 domingo, 2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta e 7 -sábado

echo "<br><br>";
$dia = 6;
switch ($dia ) {
   case '1':
      echo "Domingo";
      break;
   case '2':
      echo "Segunda-Feira";
      break;
   case '3':
      echo "Terça-Feira";
      break;
   case '4':
      echo "Quarta-feira";
      break;
   case '5':
      echo "Quinta-Feira";
      break;
   case '6':
      echo "Sexta-Feira";
      break;
   case '7':
      echo "Sábado";
      break;
   default:
      echo "Dia iválido";
      break;
}



// escolha um presente para o professor em seu aniversário:
//1- um pote de sorvete
//2- mouse quebrado
//3-celular da biqueira funcionando desbloqueado
//4-fone usado
//5-mouse pad rasgado
//6- 1 kg feijão
//7- um vale burger king

echo "<br><br>";
$dia = 5;
switch ($dia ) {
   case '1':
      echo "um pote de sorvete";
      break;
   case '2':
      echo "mouse quebrado";
      break;
   case '3':
      echo "celular da biqueira funcionando desbloqueado";
      break;
   case '4':
      echo "fone usado";
      break;
   case '5':
      echo "mouse pad rasgado";
      break;
   case '6':
      echo "1 kg feijão";
      break;
   case '7':
      echo "um vale burger king";
      break;
   default:
      echo "Presente não listado";
      break;
}


   ?>
</body>
</html>