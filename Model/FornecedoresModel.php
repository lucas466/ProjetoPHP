<?php

/*Apaga a sessao por mudar de url*/
@session_start();
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Fisica"]);
unset($_SESSION["Valores_Juridica"]);

require_once ("Conexao.php");

/*Classe responsavel por fazer todas as acoes com o banco de dados relacionadas
aos forncedores*/
class FornecedoresModel
{
    
    private $banco;
    private $Resultado;
    
    //Verifica se as informacoes estao no banco
    public function Verifica_Lista_Info($ID)
    {
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $script = "SELECT * FROM INFO WHERE ID = '$ID'";
        
        $resultados = mysqli_query($conn, $script);
        
        $Valores = array();
        
        if(mysqli_num_rows($resultados) > 0){
            
            while ($dados = mysqli_fetch_assoc($resultados)) {
                
                array_push($Valores, $dados);
            }
        }
        
        mysqli_close($conn);
        return $Valores;
    }
    
    //Verifica se o cpf esta no banco
    public function Verifica_Lista_CPF($CPF)
    {
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $script = "SELECT * FROM PESSOA_FISICA WHERE CPF = '$CPF'";
        
        $resultados = mysqli_query($conn, $script);
        
        $Valores = array();
        
        if(mysqli_num_rows($resultados) > 0){
            
            while ($dados = mysqli_fetch_assoc($resultados)) {
                
                array_push($Valores, $dados);
                
            }
        }
        
        mysqli_close($conn);
        return $Valores;
    }
    
    //Verifica se o cnpj esta no banco
    public function Verifica_Lista_CNPJ($CNPJ)
    {
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $script = "SELECT * FROM PESSOA_JURIDICA WHERE CNPJ = '$CNPJ'";
        
        $resultados = mysqli_query($conn, $script);
        
        $Valores = array();
        
        if(mysqli_num_rows($resultados) > 0){
            
            while ($dados = mysqli_fetch_assoc($resultados)) {
                
                array_push($Valores, $dados);
                
            }
        }
        
        mysqli_close($conn);
        return $Valores;
    }
    
    //Funcao responsavel por Inserir ou atualizar, caso ja exista 
    //Os numeros retornados sao para mostrar as mensagens de sucesso ou erro
    public function Inserir_Atualizar_Juridica(&$valores){
        
        if($this->Inserir_Atualizar_Info($valores)){
            
            $Conexao = new Conexao();
            $conn = $Conexao->ConexaoDB();
            
            if (!empty(array_filter($this->Verifica_Lista_CNPJ($valores[21])))){
                
                $fornecedores = "UPDATE PESSOA_JURIDICA SET RAZAOSOCIAL = '$valores[22]', NOMEFANTASIA = '$valores[23]',
                IN_INS_ESTADUAL = '$valores[24]', INS_ESTADUAL = '$valores[25]', INS_MUNICIPAL = '$valores[26]',
                SITUACAO_CNPJ = '$valores[27]', RECOLHIMENTO = '$valores[28]', ATIVO_JURIDICA = '$valores[29]',
                ID_INFO_JURIDICA = '$valores[21]' WHERE CNPJ = '$valores[21]';";
                
                $Atualizar = mysqli_query($conn, $fornecedores);
                
                if($Atualizar){
                    $Resultado = 3;
                }else{
                    $Resultado = 4;
                }
                
            }else{
                
                $fornecedores = "INSERT INTO PESSOA_JURIDICA (CNPJ, RAZAOSOCIAL, NOMEFANTASIA, IN_INS_ESTADUAL, INS_ESTADUAL, INS_MUNICIPAL,
        SITUACAO_CNPJ, RECOLHIMENTO, ATIVO_JURIDICA, ID_INFO_JURIDICA)
        VALUES
        ('$valores[21]', '$valores[22]', '$valores[23]', '$valores[24]', '$valores[25]',
        '$valores[26]', '$valores[27]', '$valores[28]', '$valores[29]', '$valores[21]')";
                
                $Inserir = mysqli_query($conn, $fornecedores);
                
                if($Inserir){
                    $Resultado = 1;
                }else{
                    $Resultado = 2;
                }
            }
            
        }else{
            
            $Resultado = 2;
            
        }
        
        return  $Resultado;
        
        // closing connection
        mysqli_close($conn);
        
    }
    
    //Funcao responsavel por Inserir ou atualizar, caso ja exista 
    //Os numeros retornados sao para mostrar as mensagens de sucesso ou erro
    public function Inserir_Atualizar_Fisica(&$valores){
        
        if($this->Inserir_Atualizar_Info($valores)){
            
            $Conexao = new Conexao();
            $conn = $Conexao->ConexaoDB();
            
            if (!empty(array_filter($this->Verifica_Lista_CPF($valores[21])))){
                
                $fornecedores = "UPDATE PESSOA_FISICA SET NOME = '$valores[22]', APELIDO = '$valores[23]',
            RG = '$valores[24]', ATIVO_FISICA = '$valores[25]', ID_INFO_FISICA = '$valores[21]'
            WHERE CPF = '$valores[21]';";
                
                $Atualizar = mysqli_query($conn, $fornecedores);
                
                if($Atualizar){
                    $Resultado = 3;
                }else{
                    $Resultado = 4;
                }
                
            }else{
                
                $fornecedores = "INSERT INTO PESSOA_FISICA (CPF, NOME, APELIDO, RG, ATIVO_FISICA, ID_INFO_FISICA)
                    
            VALUES
                    
            ('$valores[21]', '$valores[22]', '$valores[23]', '$valores[24]', '$valores[25]',
            '$valores[21]');";
                
                $Atualizar = mysqli_query($conn, $fornecedores);
                
                if($Atualizar){
                    $Resultado = 1;
                }else{
                    $Resultado = 2;
                }
                
            }
            
        }else{
            
            $this->Resultado = "Erro ao cadastrar info";
            
        }
        
        return  $Resultado;
        
        // closing connection
        mysqli_close($conn);
        
    }
    
    //Funcao responsavel por Inserir ou atualizar, caso ja exista 
    //Os numeros retornados sao para mostrar as mensagens de sucesso ou erro
    public function Inserir_Atualizar_Info(&$valores){
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        if (!empty(array_filter($this->Verifica_Lista_Info($valores[21])))){
            
            $fornecedores = "UPDATE INFO SET TELEFONE_PRIN_1 = '".$valores[0]."', TIPO_TELEFONE_PRIN_1 = '".$valores[1]."',
        EMAIL_PRIN_1 = '".$valores[2]."', TIPO_EMAIL_PRIN_1 = '".$valores[3]."', NOME_ADIC_1 = '".$valores[4]."',
        EMPRESA_ADIC_1 = '".$valores[5]."', CARGO_ADIC_1 = '".$valores[6]."', TELEFONE_ADIC_1 = '".$valores[7]."',
        TIPO_ADIC_1 = '".$valores[8]."', EMAIL_ADIC_1 = '".$valores[9]."',TIPO_EMAIL_ADIC_1 = '".$valores[10]."',
        CEP = '".$valores[11]."', LOGRADOURO = '".$valores[12]."', NUMERO = '".$valores[13]."', COMPLEMENTO = '".$valores[14]."',
        BAIRRO = '".$valores[15]."', PONTOREFERENCIA = '".$valores[16]."', UF = '".$valores[17]."', CIDADE = '".$valores[18]."',
        CONDOMINIO = '".$valores[19]."', OBSERVACAO = '".$valores[20]."'  WHERE ID = '".$valores[21]."';";
            
            $resultados = mysqli_query($conn, $fornecedores);
            
            if($resultados){
                $Resultado = true;
            }else{
                $Resultado = false;
            }
            
        }else{
            
            $fornecedores = "INSERT INTO INFO (ID, TELEFONE_PRIN_1, TIPO_TELEFONE_PRIN_1, EMAIL_PRIN_1, TIPO_EMAIL_PRIN_1,
        NOME_ADIC_1, EMPRESA_ADIC_1, CARGO_ADIC_1, TELEFONE_ADIC_1, TIPO_ADIC_1, EMAIL_ADIC_1, TIPO_EMAIL_ADIC_1,
        CEP, LOGRADOURO, NUMERO, COMPLEMENTO, BAIRRO, PONTOREFERENCIA,
        UF, CIDADE, CONDOMINIO, OBSERVACAO)
                
        VALUES
                
        ('$valores[21]', '$valores[0]','$valores[1]','$valores[2]', '$valores[3]',
        '$valores[4]','$valores[5]', '$valores[6]','$valores[7]', '$valores[8]',
        '$valores[9]','$valores[10]', '$valores[11]', '$valores[12]','$valores[13]',
        '$valores[14]','$valores[15]', '$valores[16]','$valores[17]','$valores[18]',
        '$valores[19]', '$valores[20]');";
            $resultados = mysqli_query($conn, $fornecedores);
            
            /*Verifica se já tem algum fornecedor cadastrado com o mesmo CNPJ*/
            
            if($resultados){
                $Resultado = true;
            }else{
                $Resultado = false;
            }
        }
        
        // closing connection
        mysqli_close($conn);
        
        return  $Resultado;
        
    }
    
    /*Faz uma busca das informacoes dos fornecedores
    Estas informacoes sao usadas para montar a tabela*/
    public function Listar_Fornecedores_Fisica()
    {
        $Valores = array();
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $script = "SELECT NOME, APELIDO, CPF, ATIVO_FISICA FROM PESSOA_FISICA";
        
        $resultados = mysqli_query($conn, $script);
        
        if(mysqli_num_rows($resultados) > 0){
            
            while ($dados = mysqli_fetch_assoc($resultados)) {
                
                array_push($Valores, $dados);
                
            }
        }
        
        mysqli_close($conn);
        
        return $Valores;
    }
    
    /*Faz uma busca das informacoes dos fornecedores
    Estas informacoes sao usadas para montar a tabela*/
    public function Listar_Fornecedores_Juridica()
    {
        $Valores = array();
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $script = "SELECT RAZAOSOCIAL, NOMEFANTASIA ,CNPJ, ATIVO_JURIDICA FROM PESSOA_JURIDICA";
        
        $resultados = mysqli_query($conn, $script);
        
        if(mysqli_num_rows($resultados) > 0){
            
            while ($dados = mysqli_fetch_assoc($resultados)) {
                
                array_push($Valores, $dados);
                
            }
        }
        
        mysqli_close($conn);
        
        return $Valores;
    }
 
    //Funcao reponsavel por excluir os fornecedores 
    public function Excluir_Fornecedores_Juridica($CNPJ)
    {
        
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $Resultado = 2;
        
        $script = "DELETE  P, I
            FROM PESSOA_JURIDICA P
            INNER JOIN INFO I ON P.CNPJ = I.ID
            WHERE CNPJ = '$CNPJ'";
        
        if ($conn->query($script)) {
            $Resultado = 1;
        } else {
            $Resultado = 2;
        }
        
        mysqli_close($conn);
        
        return $Resultado;
        
    }
    
    //Funcao reponsavel por excluir os fornecedores 
    public function Excluir_Fornecedores_Fisica($CPF)
    {
        $Conexao = new Conexao();
        $conn = $Conexao->ConexaoDB();
        
        $Resultado = 2;
        
        $script = "DELETE  P, I
        FROM PESSOA_FISICA P
        INNER JOIN INFO I ON P.CPF = I.ID
        WHERE CPF = '$CPF'";
        
        if (mysqli_query($conn, $script)) {
            $Resultado = 1;
        } else {
            $Resultado = 2;
        }
        
        mysqli_close($conn);
        
        return $Resultado;
    }
    
}


?>