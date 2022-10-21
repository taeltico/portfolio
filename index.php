<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bot';
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn){
///echo "deu ruim";

}else{

///echo "deu tudo certo";

}

?>

<?php

$menu1 = 'Olá me chamo Victor, e trabalho com internet, e hoje estou recrutando pessoas para trabalharem da sua propria casa por causa da pandemia, gostaria de te explicar como funciona, ok?';

$menu2 = 'Não sei quanto voce ganha, mas a oportunidade que hoje estou oferecendo é salario de 2 mil a 8 mil por mês trabalhando de um celular ou computador, inicialmente trabalhando apenas meio período, o serviço de Marketing online, você ja trabalhou com isso?';


$menu3 = 'Ainda tenho tres vagas na esquipe de vendas online, te interresa saber mais?';


$menu4 = 'da uma olhada nesse link .....';

$menu5 = "Entao como tinha te falado o link \n http://...... \n responde a todas a suas duvidas.";

$menu6 = '';


$data = date('d-m-Y');
?>






<?php
$msg = $_GET['msg'];
$telefone_cliente = $_GET['telefone'];

 $sql = "SELECT * FROM usuario WHERE telefone = '$telefone_cliente'";
    $query = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($query);

while($rows_usuarios = mysqli_fetch_array($query)){
$status = $rows_usuarios['status'];

}



 if( $total > 0){

 	///echo "numero encontrado";
 ///////aqui começa a o bot quando encotra o numero


if($status == 2){

echo $menu2;
 $resposta = $menu2 ;

}


if($status == 3){

echo $menu3;
 $resposta = $menu3 ;


}



if($status == 4){

echo $menu4;
 $resposta = $menu4 ;


}



if($status == 5){

echo $menu5;
 $resposta = $menu5 ;


}


if($status == 6){

echo $menu6;
 $resposta = $menu6 ;


}


if($status == 7){

$menu7 = "Ja ja entramos em contato";
echo $menu7 ;
 $resposta = $menu7 ;


}











 }else{

$sql = "INSERT INTO usuario (telefone, status) VALUES ('$telefone_cliente', '1')";
$query = mysqli_query($conn,$sql);
if(!$query){

}else{
 
echo $menu1;

 $resposta = $menu1 ;


}


 }////nao existe o numero no banco



?>

<?php



$sql = "SELECT * FROM usuario WHERE telefone = '$telefone_cliente'";
$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query);

while($rows_usuarios = mysqli_fetch_array($query)){
$status = $rows_usuarios['status'];

}

if($status < 7){

$status2 = $status + 1;

$sql = "UPDATE usuario SET status = '$status2' WHERE telefone = '$telefone_cliente'";
$query = mysqli_query($conn, $sql);

}



?>

<?php

$sql = "INSERT INTO historico (telefone, cliente1, bot, data) VALUES ('$telefone_cliente', '$msg', '$resposta', '$data')";
$query = mysqli_query($conn,$sql);
if(!$query){

}else{
 


}

?>