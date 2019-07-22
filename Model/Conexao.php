<?php

/*Apaga a sessao por mudar de url*/
@session_start();
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Juridica"]);

//Classe responsavel por conectar com o banco
class Conexao{
    
    public static function ConexaoDB() {
        
        try {
            
            $host = "den1.mysql5.gear.host";
            $nomeBanco = "bancophp";
            $usuario = "bancophp";
            $senha = "Zw0j7_3y~MAt";
            
            $conn = new mysqli($host, $usuario, $senha, $nomeBanco);
            
            if (mysqli_connect_error()) {
                echo "Erro";
                exit();
            }
        } catch (Exception $e) {
        }
        return $conn;
    }
    
}


?>