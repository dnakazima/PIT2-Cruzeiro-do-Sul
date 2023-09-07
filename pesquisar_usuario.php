<?php
    include("conexao.php");

    $PESQUISAR=$_POST['PESQUISAR'];

    $resultado="SELECT * FROM USERS WHERE NOME LIKE '%$PESQUISAR%' LIMIT 5";
    $resultado_cliente=mysqli_query($conexao, $resultado);

    while($rows_cliente=mysqli_fetch_array($resultado_cliente)){
        echo "USERID: ".$rows_cliente['USERID']."<br>";
        echo "NOME: ".$rows_cliente['NOME']."<br>";
        echo "SENHA ".$rows_cliente['PASSWORD']."<br>";
        echo "<br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
?>