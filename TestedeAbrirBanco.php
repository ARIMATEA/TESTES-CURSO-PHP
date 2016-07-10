
<html>
    <head>
        <meta charset="UTF-8">
        <title>TESTE DE CONEXAO AO MySQL</title>
    </head>
    <body>
        <?php
            $usuario = "arimatea";
            $senha = "";
            $endereco = "localhost";
            $banco = "bd_moradia";

                // POR QUE A CONEXÃO NÃO FUNCIONA?
                $sql = mysqli_connect ($endereco,$usuario,$senha,$banco) or die ("Deu merda");                  
                if(!$sql){
                        
                        echo "Falha na conexão com o banco de dados";
                        exit();
                    }
                else
                    
                    {
                        echo "Conectou normalmente";
                    }    

        ?>
    </body>
</html>

