<?php

require_once ("../Model/FornecedoresModel.php");

try{
    
    /*Apaga a sessao por mudar de url*/
    @session_start();
    unset($_SESSION["Valores_Fisica"]);
    unset($_SESSION["Valores_Juridica"]);
    unset($_SESSION["Valores_Info"]);

    /*Evita que alguem acesse a pagina pela url*/
    if(!empty($_SESSION['Nome'])){
    
        header("location: ../View/FornecedoresView.php");
    
        $Fornecedores = new FornecedoresModel();
        
        if(!empty($_GET['name'])){
            
            /*Remove todos os valores em branco*/
            $Valor = str_replace(" ","",$_GET['name']);
            
            /*Verifica o tamanho do valor para deletar com cpf ou cnpj*/
            if(strlen($Valor) == 18){
                
                $_SESSION["ResultadoExcluir"] = $Fornecedores->Excluir_Fornecedores_Juridica($Valor);
                
            }else if(strlen($Valor) == 14){
                
                $_SESSION["ResultadoExcluir"] = $Fornecedores->Excluir_Fornecedores_Fisica($Valor);
                
            }
        }
        
        session_start();
        unset($_SESSION['Fornecedores_Juridica']);
        unset($_SESSION['Fornecedores_Fisica']);
        $_SESSION['Fornecedores_Juridica'] = $Fornecedores-> Listar_Fornecedores_Juridica();
        $_SESSION['Fornecedores_Fisica'] = $Fornecedores-> Listar_Fornecedores_Fisica();
        
        setcookie("", "Teste");

        $_SESSION['Teste'] = $_SESSION['Fornecedores_Fisica'];
        print json_encode($_SESSION[$_GET['Teste']]);

    }else{
    
        header("location: LoginController.php");
    
    }

    } catch (Exception $e) {
    }

?>