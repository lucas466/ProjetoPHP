<?php

    require_once ("../Model/LoginModel.php");
    require_once ("../Model/FornecedoresModel.php");
    
    try{
        
        @session_start();
        @$Email = $_POST["Email"];
        @$Senha = $_POST["Senha"];
        
        if(!empty($Email) && !empty($Senha)){
            
            $Login = new LoginModel();
            $Logar = $Login->Logar($Email, $Senha);
            
            if (!empty($Logar)) {
                
                $_SESSION['Nome'] = $Logar;
                header("location: HomeController.php"); 
                
            }else{
                
                $_SESSION['Erro'] = "Erro: Usuário e/ou senha incorreto/s";
                header("location: LoginController.php"); 
            }
            
        }
    }catch (Exception $e){
        
    }
    
    require_once ("../View/LoginView.php");

?>
