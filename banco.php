<?php
      $nome = "Rafael";
      $idade = 31;
      $profissao = "pizzaiolo";


      echo "meu nome é {$nome} tenho {$idade} e sou {$profissao}";

      $num1 = $_GET['num1'];
      $num2 = $_GET['num2'];
      echo "Soma         : ","$num1+$num2 = ",$num1+$num2, "<br />";
      echo "Subtração        : ","$num1-$num2 = ",$num1-$num2, "<br />";
      echo "Multiplicação    : ","$num1*$num2 = ",$num1*$num2, "<br />";
      echo "Divisão         : ","$num1/$num2 = ",$num1/$num2, "<br />";
      echo "Resto da divisão : ","$num1%$num2 = ",$num1%$num2, "<br />";

      $valorDia = 80;
      $Gorjetas = 40;
      $diaria = $valorDia + $Gorjetas;

      echo = "segunda-Feira : $diaria";

      $Gorjetas = 15;
      $diaria = $valorDia + $Gorjetas;

      echo "Terça-Feira: $diaria";

      define("valorDia","80");
      define("gorjeta","40");

      echo valorDia + gorjeta;

      define("gorjeta","15");

      echo valorDia + gorjeta;

      $s = "curso de PHP";

      echo $s;

      $texto = "<h1> Curso PHP, incluindo Html no PHP</h1>";
      $h4 = "<h4> textos aleatorios </h4>";

      echo $h4;
      echo $texto;
      
      $number = 10;
      $numberNegativo = -50;
      $soma = $number + $numberNegativo;
      $combustivel = 30;
      $resultado = $valorDia + $Gorjetas - $combustivel;

      echo $soma;
      echo $resultado;
      var_dump($numberNegativo);
      var_dump($number);
      var_dump($resultado);

      $data = date("d/m/y");
      date_default_timezone_set("America/Sao_Paulo");

      
      echo date("H");
      echo date("d");
      echo date("M");
      echo date ("y");
      echo date ("Y");
      echo date ("d/m/y");
      echo $data;





      
   ?>