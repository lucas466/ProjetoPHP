<?php

    require_once ("../Model/FornecedoresModel.php");

try{
    /*Evita que alguem acesse a pagina pela url*/
    @session_start();
    if(!empty($_SESSION['Nome'])){
        
        unset($_SESSION['Valores']);
        $Fornecedores = new FornecedoresModel();
        
        /*Verifica se algum valor foi passado*/
        if(!empty($_GET['name'])){
            
            /*Remove todos os valores em branco*/
            $Valor = str_replace(" ","",$_GET['name']);
            
            /*Verifica o tamanho do valor para preencher com cpf ou cnpj*/
            if(strlen($Valor) == 18){
                
                $_SESSION["Valores_Juridica"] = $Fornecedores->Verifica_Lista_CNPJ($Valor);
                
            }else if(strlen($Valor) == 14){
                
                $_SESSION["Valores_Fisica"] = $Fornecedores->Verifica_Lista_CPF($Valor);
                
            }
            
            $_SESSION["Valores_Info"] = $Fornecedores->Verifica_Lista_Info($Valor);
            
        }
        
        if(!empty($_POST["CPF"]) || (!empty($_POST["CNPJ"]))){
            
            /*Joga os valores dos campos e valida*/
            $Valores = array();
            
            array_push($Valores, $_POST["TELEFONE"]);
            array_push($Valores, $_POST["TIPOTEL"]);
            array_push($Valores, $_POST["EMAIL"]);
            array_push($Valores, $_POST["TIPO_MAIL_PRINCIPAL"]);
            array_push($Valores, $_POST["NOMEAD"]);
            array_push($Valores, $_POST["EMPRESA"]);
            array_push($Valores, $_POST["CARGOAD"]);
            array_push($Valores, $_POST["TELEFONEAD"]);
            array_push($Valores, $_POST["TIPOTE_TELAD"]);
            array_push($Valores, $_POST["EMAILAD"]);
            array_push($Valores, $_POST["TIPO_MAIL_AD"]);
            array_push($Valores, $_POST["CEP"]);
            array_push($Valores, $_POST["LOGRADOURO"]);
            array_push($Valores, $_POST["NUMERO"]);
            array_push($Valores, $_POST["COMPLEMENTO"]);
            array_push($Valores, $_POST["BAIRRO"]);
            array_push($Valores, $_POST["REFERENCIA"]);
            array_push($Valores, $_POST["UF"]);
            array_push($Valores, $_POST["SELECT_CIDADE"]);
            array_push($Valores, $_POST["CONDOMINIO"]);
            array_push($Valores, $_POST["OBSERVACAO"]);
            
            /*Seleciona se é juridica ou fisica que esta sendo cadastraado*/
            if(!empty($_POST["CPF"])){
                array_push($Valores, $_POST["CPF"]);
                array_push($Valores, $_POST["NOME"]);
                array_push($Valores, $_POST["APELIDO"]);
                array_push($Valores, $_POST["RG"]);
                array_push($Valores, $_POST["ATIVO_FISICO"]);
                
                
            }else if(!empty($_POST["CNPJ"])){
                array_push($Valores, $_POST["CNPJ"]);
                array_push($Valores, $_POST["RAZAO_SOCIAL"]);
                array_push($Valores, $_POST["NOME_FANTASIA"]);
                array_push($Valores, $_POST["IN_INS_ESTADUAL"]);
                array_push($Valores, $_POST["IN_ESTADUAL"]);
                array_push($Valores, $_POST["INS_MUNICIPAL"]);
                array_push($Valores, $_POST["SI_CNPJ"]);
                array_push($Valores, $_POST["RECOLHIMENTO"]);
                array_push($Valores, $_POST["ATIVO_JURIDICO"]);
                
            }
            
            $Fornecedores = new FornecedoresModel();
            
            if((!empty($_POST["CPF"]))){
                
                 $_SESSION['Resultado_Inserir_Atualiza'] = $Fornecedores-> Inserir_Atualizar_Fisica($Valores);
                
            }else if((!empty($_POST["CNPJ"]))){
                
                $_SESSION['Resultado_Inserir_Atualiza'] = $Fornecedores->Inserir_Atualizar_Juridica($Valores);
                
            }
            
        }
            
        
        $MatrizDeSiglas = array();
        $MatrizDeCidades = array();
        
        // Read JSON file
        // Atribui o conteúdo do arquivo para variável $arquivo
        $json = file_get_contents('../Content/estados-cidades.json');
        
        $json = json_decode($json, true);
        
        /*Pega os estados*/
        foreach($json['estados'] as $itens) {
            
            array_push($MatrizDeSiglas, $itens['sigla']." - ".$itens['nome']);
            
            
            foreach($itens['cidades'] as $cidade) {
                
                array_push($MatrizDeCidades, $itens['sigla']."-".$cidade);
            }
        }
        
        
        $_SESSION['Siglas'] = $MatrizDeSiglas;
        $_SESSION['Cidade'] = $MatrizDeCidades;
        header("location: ../View/VerView.php");
        
        /* header("location: ../View/CadastroView.php"); */
        
    }else{
        
        header("location: LoginController.php");
        
    }
    
} catch (Exception $e) {
}

?>