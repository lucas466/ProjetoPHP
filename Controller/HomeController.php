<?php
    
try {
    
    /*Apaga a sessao por mudar de url*/
    @session_start();
    unset($_SESSION["Valores_Fisica"]);
    unset($_SESSION["Valores_Juridica"]);
    unset($_SESSION["Valores_Info"]);
    
    if(!empty($_SESSION['Nome'])){
        
        header("location: ../View/HomeView.php");
        
    }else{
        
        header("location: LoginController.php");
        
    }
    
    } catch (Exception $e) {
    }

?>