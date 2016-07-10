<?php
$usuario    = "arimatea";
$senha        = "";
$endereco    = "localhost";
$banco        = "bd_moradia";
$conn        = mysqli_init();


@$conn->real_connect( $endereco , $usuario , $senha , $banco );

if ( $conn->errno ){
    printf( "Erro ao conectar: %s" , $conn->error );
} else {
    printf( "ok, conectamos..." );
}

$conn->close();


