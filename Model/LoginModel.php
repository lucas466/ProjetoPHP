<?php

/*Apaga a sessao por mudar de url*/
@session_start();
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Juridica"]);

require_once ("Conexao.php");

//Classe responsavel por realizar o login
class LoginModel
{
    
    //Funcao responsavel por verificar se o usuario ja existe 
    public function Logar($Email, $Senha)
    {
        $Resultado = ""; 
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $fornecedores = "SELECT * FROM ADMIN WHERE EMAIL ='".$Email."' AND SENHA='".$Senha."'";
        
        $resultados = mysqli_query($conn, $fornecedores);
        
        $dados = mysqli_fetch_row($resultados);
        
        if ($dados > 0) {
            
            //O index 1 é porque o nome esta neste index
            $Resultado = $dados[1]; 
        
        } 
        
        return $Resultado;
    }
    
}

?>