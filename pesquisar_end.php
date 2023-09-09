<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM ENDERECO WHERE ID_CLIENTE = '$pesquisar' LIMIT 5";
    $resultado_end=mysqli_query($conexao, $resultado);

    echo "<a href='pesquisar_end.html'>Pesquisar novo endereço?</a>";
    echo "<br>";
    echo "<a href='index.html'>Página inicial</a>";
    echo "<br>";
    echo "<br>";

    while($rows_end=mysqli_fetch_array($resultado_end)){
        echo "IDENDERECO: ".$rows_end['IDENDERECO']."<br>";
        echo "RUA: ".$rows_end['RUA']."<br>";
        echo "BAIRRO: ".$rows_end['BAIRRO']."<br>";
        echo "ESTADO: ".$rows_end['ESTADO']."<br>";
        echo "<br>";
        
    }
?>