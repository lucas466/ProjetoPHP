<?php
/*Evita que alguem acesse a pagina pela url*/
try {
    @session_start();
    if (empty($_SESSION['Nome'])) {
        header("location: ../Controller/LoginController.php");
    }
}
catch(Exception $e) {
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Desafio Vercan | Fornecedores</title>
  </style>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Content/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="../Controller/HomeController.php" class="brand-link">
      <img src="../Content/dist/img/vercan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Desafio <strong>Vercan</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Content/dist/img/User.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
		  <!-- Nome da sessao -->
		  <?php
      @session_start();
      echo $_SESSION['Nome'];
      ?>
		   </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item">
                  <a href="../Controller/HomeController.php" class="nav-link">
                    <i class="fa fa-home"></i>
                    <p>
                      Home
                    </p>
                  </a>
          </li>

          <li class="nav-item has-treeview menu-open active">
            <a href="#" class="nav-link active">
              <i class="fa fa-book"></i>
              <p>
                Cadastros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Controller/FornecedoresController.php" class="nav-link">
                  <i class="fa fa-briefcase"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="fa fa-plus-circle"></i>
                    <p>Cadastrar fornecedores</p>
                  </a>
                </li>
              </ul>
          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><strong>Fornecedores</strong> <small>Dados</small></h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cadastro</li>
            </ol>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    <form id="form" action="../Controller/FornecedoresController.php">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"><strong>Dados do fornecedor</strong></h3>
                </div> <!-- /.card-body -->
            
                <div id="grupo" style="margin-left: 15pt; color: rgb(66, 66, 66)">

                    <label class="radio-inline">
                    <input  type="radio" id="Radio_Juridica" name="NIVEL_ACESSO" value="1"> <span>Pessoa jurídica</span>
                    </label>
                
                
                    <label class="radio-inline" style="margin-left: 15pt">
                    <input type="radio" id="Radio_Fisica" name="NIVEL_ACESSO" value="2" ><span>Pesssoa física</span>
                    </label>
               
                </div>

                  <div id="Juridica">

                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                        <label> CNPJ </label><span style="color: red">*</span>

                        <input type="text" value="<?php
                      if (isset($_SESSION["Valores_Juridica"])) {
                    echo $_SESSION["Valores_Juridica"][0]["CNPJ"];
                      }
                        ?>" 
                        class="form-control" id="CNPJ" name="CNPJ" required="" disabled>

                      </div>
                      <div class="col-md-6">
                          <label> Razão social </label><span style="color: red">*</span>
                          <input type="text" value="<?php
                      if (isset($_SESSION["Valores_Juridica"])) {
                     echo $_SESSION["Valores_Juridica"][0]["RAZAOSOCIAL"];
                      }
                        ?>" 
                        class="form-control" id="RAZAO_SOCIAL" name="RAZAO_SOCIAL" required="" disabled maxlength="40">
                      </div>
                      <div class="col-md-3">
                          <label> Nome fantasia </label><span style="color: red">*</span>
                          <input type="text" value="<?php
                      if (isset($_SESSION["Valores_Juridica"])) {
                      echo $_SESSION["Valores_Juridica"][0]["NOMEFANTASIA"];
                      }
                        ?>" 
                          class="form-control" id="NOME_FANTASIA" name="NOME_FANTASIA" required="" maxlength="40" disabled>
                      </div>
      
                        <div class="col-md-3">
                            <label> Indicador de inscrição estadual </label><span style="color: red">*</span>
                            <select class="form-control not-required" type="text" id="IN_INS_ESTADUAL" name="IN_INS_ESTADUAL" required="" disabled>
                                <option value="Selecione" name="IN_INS_ESTADUAL">
                                        Selecione
                                        </option>
                                        <option value="Contribuinte" name="IN_INS_ESTADUAL">
                                        Contribuinte
                                        </option>
                                        <option value="Contribuinte insento" name="IN_INS_ESTADUAL">
                                        Contribuinte insento
                                        </option>
                                        <option value="Não contribuinte" name="IN_INS_ESTADUAL">
										      Não contribuinte
                                        </option>
                        </select>    
                        </div>

                        <div class="col-md-3">  
                          <label> Inscrição estadual </label>
                            <input type="text" value="<?php
                  if (isset($_SESSION["Valores_Juridica"])) {
                    echo $_SESSION["Valores_Juridica"][0]["INS_ESTADUAL"];
                  }
                  ?>" class="form-control" id="IN_ESTADUAL" name="IN_ESTADUAL" disabled maxlength="20">
                        </div>
                        
  
                        <div class="col-md-3">
                            <label> Inscrição municipal </label>
                            <input type="text" value="<?php
                  if (isset($_SESSION["Valores_Juridica"])) {
                    echo $_SESSION["Valores_Juridica"][0]["INS_MUNICIPAL"];
                  }
                  ?>" class="form-control" id="INS_MUNICIPAL" name="INS_MUNICIPAL" maxlength="15" disabled>
                        </div>

                        <div class="col-md-3">
                            <label> Situação CNPJ </label>
                            <input type="text" value="<?php
                  if (isset($_SESSION["Valores_Juridica"])) {
                    echo $_SESSION["Valores_Juridica"][0]["SITUACAO_CNPJ"];
                  }
                  ?>" class="form-control" id="SI_CNPJ" name="SI_CNPJ" disabled maxlength="30">
                        </div>

                        <div class="col-md-3">
                            <label> Recolhimento </label><span style="color: red">*</span>
                            <select class="form-control not-required" type="text" id="RECOLHIMENTO" name="RECOLHIMENTO" required="" disabled>
                                <option value="Selecione" name="RECOLHIMENTO">
                                        Selecione
                                        </option>
                                        <option value=" A recolher pelo prestador" name="RECOLHIMENTO">
                                        A recolher pelo prestador
                                        </option>
                                        <option value="Retido pelo tomador" name="RECOLHIMENTO">
                                        Retido pelo tomador
                                        </option>
                                      
                        </select>    
                        </div>

                        <div class="col-md-3">
                            <label> Ativo </label><span style="color: red">*</span>
                            <select class="form-control not-required" type="text" id="ATIVO_JURIDICO" name="ATIVO_JURIDICO" required="" disabled>
                                <option value="Selecione" name="ATIVO_JURIDICO">
                                        Selecione
                                        </option>
                                        <option value="Sim" name="ATIVO_JURIDICO">
                                        Sim
                                        </option>
                                        <option value="Não" name="ATIVO_JURIDICO">
                                      	Não
                                        </option>
                                      
                        </select>    
                        </div>

                    </div>
                  </div>
                </div>

                <div id="Fisica" style="display: none">
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                        <label> CPF </label><span style="color: red">*</span>
                        <input type="text" value="<?php
if (isset($_SESSION["Valores_Fisica"])) {
    echo $_SESSION["Valores_Fisica"][0]["CPF"];
}
?>" class="form-control" id="CPF" name="CPF" disabled>
                      </div>
                      <div class="col-md-6">
                          <label> Nome </label><span style="color: red">*</span>
                          <input type="text" value="<?php
if (isset($_SESSION["Valores_Fisica"])) {
    echo $_SESSION["Valores_Fisica"][0]["NOME"];
}
?>" class="form-control" id="NOME" name="NOME" maxlength="40" disabled>
                      </div>
                      <div class="col-md-3">
                          <label> Apelido </label>
                          <input type="text" value="<?php
if (isset($_SESSION["Valores_Fisica"])) {
    echo $_SESSION["Valores_Fisica"][0]["APELIDO"];
}
?>" class="form-control" id="APELIDO" name="APELIDO" maxlength="25" disabled>
                      </div>
      
                      <div class="col-md-3">
                          <label> RG </label><span style="color: red">*</span>
                          <input type="text" value="<?php
if (isset($_SESSION["Valores_Fisica"])) {
    echo $_SESSION["Valores_Fisica"][0]["RG"];
}
?>"  class="form-control" id="RG" name="RG" disabled>
                        </div>
                        <div class="col-md-3">
                            <label> Ativo </label><span style="color: red">*</span>
                            <select class="form-control not-required" type="text" id="ATIVO_FISICO" name="ATIVO_FISICO" disabled>
                                <option value="Selecione" name="ATIVO_FISICO">
                                        Selecione
                                        </option>
                                        <option value="Sim" name="ATIVO_FISICO">
                                        Sim
                                        </option>
                                        <option value="Não" name="ATIVO_FISICO">
                                        Não
                                        </option>
                        </select>    
                        </div>
                    </div>
                  </div>
                </div>
                  
                  
                  <!-- /.card-body -->
               </div>

         <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title"><strong>Contato principal</strong></h3>
            </div> <!-- /.card-body -->
        
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <label> Telefone </label><span style="color: red">*</span>
                    <input type="text" value="<?php
            if (isset($_SESSION["Valores_Info"])) {
                echo $_SESSION["Valores_Info"][0]["TELEFONE_PRIN_1"];
            }
            ?>" class="form-control" id="TELEFONE" name="TELEFONE" required="" maxlenght="15" disabled>
                  </div>

                  <div class="col-md-3">
                      <label> Tipo </label><span style="color: red">*</span>
                      <select class="form-control not-required" type="text" id="TIPOTEL" name="TIPOTEL" required="" disabled>
                          <option value="Selecione" name="TIPOTEL">Selecione</option>
                          
                                  <option value="Residencial" name="TIPOTEL">Residencial</option>
                                  <option value="Comercial" name="TIPOTEL">
                                  Comercial
                                  </option>
                                  <option value="Celular" name="TIPOTEL">
                                  Celular
                                  </option>
                  </select>    
                  </div>

                  <div class="col-md-3">
                      <label> E-mail </label>
                      <input type="email" value="<?php
        if (isset($_SESSION["Valores_Info"])) {
            echo $_SESSION["Valores_Info"][0]["EMAIL_PRIN_1"];
        }
        ?>" class="form-control" id="EMAIL" name="EMAIL" maxlength="30" disabled>
                  </div>
                
                  <div class="col-md-3">
                      <label> Tipo </label>
                      <select class="form-control not-required" type="text" id="TIPO_MAIL_PRINCIPAL" name="TIPO_MAIL_PRINCIPAL" disabled>
                          <option value="Selecione" name="TIPO_MAIL_PRINCIPAL">
                                  Selecione
                                  </option>
                                  <option value="Pessoal" name="TIPO_MAIL_PRINCIPAL">
                                  Pessoal
                                  </option>
                                  <option value="Comercial" name="TIPO_MAIL_PRINCIPAL">
                                  Comercial
                                  </option>
                                  <option value="Outro" name="TIPO_MAIL_PRINCIPAL">
                                  Outro
                                  </option>
                  </select>    
                  </div>
  
                </div>
              </div>
              
              <!-- /.card-body -->
           </div>

           <div id="Card_Adcional" class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><strong>Contato adicional</strong></h3>
              </div> <!-- /.card-body -->
          
          		<div id="CON_AD_1">
          
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <label> Nome </label>
                      <input type="text" value="<?php
        if (isset($_SESSION["Valores_Info"])) {
             echo $_SESSION["Valores_Info"][0]["NOME_ADIC_1"];
        }
        ?>" class="form-control" id="NOMEAD" name="NOMEAD" maxlength="30" disabled>
                    </div>
  
                    <div class="col-md-3">
                        <label> Empresa </label>
                        <input type="text" value="<?php
        if (isset($_SESSION["Valores_Info"])) {
            echo $_SESSION["Valores_Info"][0]["EMPRESA_ADIC_1"];
        }
        ?>" class="form-control" id="EMPRESA" name="EMPRESA" maxlength="30" disabled>
                    </div>
                  
                    <div class="col-md-3">
                      <label> Cargo </label>
                      <input type="text" value="<?php
        if (isset($_SESSION["Valores_Info"])) {
            echo $_SESSION["Valores_Info"][0]["CARGO_ADIC_1"];
        }
        ?>" class="form-control" id="CARGOAD" name="CARGOAD" maxlength="25" disabled>
                  </div>

                  <div class="col-md-3">
                    <label> Telefone </label>
                    <input type="text" value="<?php
        if (isset($_SESSION["Valores_Info"])) {
            echo $_SESSION["Valores_Info"][0]["TELEFONE_ADIC_1"];
        }
        ?>" class="form-control" id="TELEFONEAD" name="TELEFONEAD" maxlength="15" disabled>
                </div>

                    <div class="col-md-3">
                        <label> Tipo </label>
                        <select class="form-control not-required" type="text" id="TIPOTE_TELAD" name="TIPOTE_TELAD" disabled>
                            <option value="Selecione" name="TIPOTE_TELAD">
                                    Selecione
                                    </option>
                                    <option value="Residencial" name="TIPOTE_TELAD">
                                    Residencial
                                    </option>
                                    <option value="Comercial" name="TIPOTE_TELAD">
                                    Comercial
                                    </option>
                                    <option value="Celular" name="TIPOTE_TELAD">
                                    Celular
                                    </option>
                    </select>    
                    </div>

                    <div class="col-md-3">
                      <label> E-mail </label>
                      <input type="email" value="<?php
    if (isset($_SESSION["Valores_Info"])) {
        echo $_SESSION["Valores_Info"][0]["EMAIL_ADIC_1"];
    }
    ?>" class="form-control" id="EMAILAD" name="EMAILAD" maxlength="30" disabled>
                  </div>

                  <div class="col-md-3">
                    <label> Tipo </label>
                    <select class="form-control not-required" type="text" id="TIPO_MAIL_AD" name="TIPO_MAIL_AD" disabled>
                        <option value="Selecione" name="TIPO_MAIL_AD">
                                Selecione
                                </option>
                                <option value="Pessoal" name="TIPO_MAIL_AD">
                                Pessoal
                                </option>
                                <option value="Comercial" name="TIPO_MAIL_AD">
                                Comercial
                                </option>
                                <option value="Outro" name="TIPO_MAIL_AD">
                                Outro
                                </option>
                </select>    
                </div>
    
                  </div>
                </div>
                
                <!-- /.card-body -->
             </div>
             
             </div>

             <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><strong>Dados de endereço</strong></h3>
              </div> <!-- /.card-body -->
          
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <label> CEP </label><span style="color: red">*</span>
                      <input type="text" value=" <?php
    if (isset($_SESSION["Valores_Info"])) {
        echo $_SESSION["Valores_Info"][0]["CEP"];
    }
    ?> " class="form-control" id="CEP" name="CEP" required="" maxlength="9" disabled>
                    </div>
  
                    <div class="col-md-3">
                        <label> Logradouro </label><span style="color: red">*</span>
                        <input type="text" value="<?php
    if (isset($_SESSION["Valores_Info"])) {
        echo $_SESSION["Valores_Info"][0]["LOGRADOURO"];
    }
    ?>" class="form-control" id="LOGRADOURO" name="LOGRADOURO" required="" maxlength="40" disabled>
                    </div>
                  
                    <div class="col-md-3">
                      <label> Número </label><span style="color: red">*</span>
                      <input type="text" value="<?php
    if (isset($_SESSION["Valores_Info"])) {
        echo $_SESSION["Valores_Info"][0]["NUMERO"];
    }
    ?>" class="form-control" id="NUMERO" name="NUMERO" required="" maxlength="5" disabled>
                  </div>

                  <div class="col-md-3">
                    <label> Complemento </label>
                    <input type="text" value="<?php
    if (isset($_SESSION["Valores_Info"])) {
        echo $_SESSION["Valores_Info"][0]["COMPLEMENTO"];
}
?>" class="form-control" id="COMPLEMENTO" name="COMPLEMENTO" maxlength="15" disabled>
                </div>

                <div class="col-md-3">
                  <label> Bairro </label><span style="color: red">*</span>
                  <input type="text" value="<?php
if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["BAIRRO"];
}
?>"  class="form-control" id="BAIRRO" name="BAIRRO" required="" maxlength="25" disabled>
                </div>

                <div class="col-md-3">
                  <label> Ponto de referência </label>
                  <input type="text" value="<?php
if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["PONTOREFERENCIA"];
}
?>" class="form-control" id="REFERENCIA" name="REFERENCIA" maxlength="40" disabled>
                </div>

                <div class="col-md-3">
                  <label> UF </label><span style="color: red">*</span>
                  <select class="form-control not-required" type="text" id="UF" name="UF" onchange="Habilita_Cidade()" required="" disabled>
                    <option value="" name="UF">
                      Selecione
                      </option>
                      
                      <?php
$Matriz = array();
$Matriz = $_SESSION['Siglas'];
foreach ($Matriz as $UF) {
    $UF_Value = substr($UF, 0, 2);
    echo "<option name='UF' value='" . $UF_Value . "'> " . $UF . " </option>";
}
?>
                     
              </select>    
              </div>

              <div class="col-md-3">
                <label> Cidade </label><span style="color: red">*</span>
                <select class="form-control not-required" type="text" id=SELECT_CIDADE name="SELECT_CIDADE" required="" disabled>
              <option value="" name="SELECT_CIDADE">
				       Selecione
				      </option>
            </select>    
            </div>

            <div class="col-md-3">
              <label> Condomínio </label><span style="color: red">*</span>  
              <select class="form-control not-required" type="text" id="CONDOMINIO" name="CONDOMINIO" disabled
              required="">
                  <option value="Selecione" name="CONDOMINIO">
                          Selecione
                          </option>
                          <option value="Sim" name="CONDOMINIO">
                          Sim
                          </option>
                          <option value="Não" name="CONDOMINIO">
                          Não
                          </option>
          </select>    
          </div>        
    
                  </div>
                </div>
                
                <!-- /.card-body -->
             </div>

      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <strong>Observação</strong>
                </h3>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Digite a observação" id="OBSERVACAO" name="OBSERVACAO" disabled
				style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; 
				border: 1px solid #dddddd; padding: 10px;" maxlength="150" ><?php
if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["OBSERVACAO"];
}
?></textarea>
                </div>
                <p class="text-sm mb-0">
                  Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentação e informação 
                    de licença.</a>
                </p>
              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->
      </section>
      
      <div class="row">
          <!-- this row will not appear when printing -->
          <div class="row no-print" style="margin-left: 20px; margin-bottom: 20px">
             <div class="col-12">
               <button class="btn btn-success float-right"><i class="fa fa-arrow-left"></i> Voltar
               </button>
             </div>
           </div>
         </div> 

    </form>

    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-beta.1
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../Content/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Content/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../Content/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../Content/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Content/dist/js/demo.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

<script>

  //Desaparece com a parte relacionada com pessoa juridica
function ChamaJuridica() {
  var x = document.getElementById("Juridica");
  var x2 = document.getElementById("Fisica");
  x2.style.display = "none";
  
  if (x.style.display === "block") {
  } else {
    x.style.display = "block";
  }

  /*Valida os campos*/
  document.getElementById("CNPJ").required = true;
  document.getElementById("RAZAO_SOCIAL").required = true;
  document.getElementById("NOME_FANTASIA").required = true;
  document.getElementById("IN_INS_ESTADUAL").required = true;
  document.getElementById("ATIVO_JURIDICO").required = true;
  document.getElementById("RECOLHIMENTO").required = true;
  document.getElementById("CPF").required = false;
  document.getElementById("CPF").value = "";
  document.getElementById("NOME").required = false;
  document.getElementById("NOME").value = "";
  document.getElementById("RG").required = false;
  document.getElementById("RG").value = "";
  document.getElementById("ATIVO_FISICO").required = false;
  document.getElementById("ATIVO_FISICO").selectedIndex = "0";
  
}

//Desaparece com a parte relacionada com pessoa fisica
function ChamaFisica() {
  var x = document.getElementById("Fisica");
  var x2 = document.getElementById("Juridica");
  x2.style.display = "none";

  if (x.style.display === "block") {
  } else {
    x.style.display = "block";
  }

  /*Valida os campos*/
  document.getElementById("CPF").required = true;
  document.getElementById("NOME").required = true;
  document.getElementById("RG").required = true;
  document.getElementById("ATIVO_FISICO").required = true;
  document.getElementById("CNPJ").required = false;
  document.getElementById("CNPJ").value = "";
  document.getElementById("RAZAO_SOCIAL").required = false;
  document.getElementById("RAZAO_SOCIAL").value = "";
  document.getElementById("NOME_FANTASIA").required = false;
  document.getElementById("NOME_FANTASIA").value = "";
  document.getElementById("IN_INS_ESTADUAL").required = false;
  document.getElementById("IN_INS_ESTADUAL").selectedIndex = "0";
  document.getElementById("IN_ESTADUAL").value = "";
  document.getElementById("SI_CNPJ").value = "";
  document.getElementById("IN_ESTADUAL").readOnly = true;
  document.getElementById("RECOLHIMENTO").required = false;
  document.getElementById("RECOLHIMENTO").selectedIndex = "0";
  document.getElementById("RECOLHIMENTO").required = false;
  document.getElementById("ATIVO_JURIDICO").required = false;
  document.getElementById("ATIVO_JURIDICO").selectedIndex = "0";
  document.getElementById("INS_MUNICIPAL").value = "";
}

//Habilita campo cidade e adiciona os elementos 
function Habilita_Cidade() {
  var UF = document.getElementById("UF");
  var UF_TEXTO = UF.options[UF.selectedIndex].text;
  var CIDADE = document.getElementById("SELECT_CIDADE");
  var SELECT_CIDADE = document.getElementById("SELECT_CIDADE");
  
  if(!UF_TEXTO.includes("Selecione")){

	  var ComecoCidade;
	  var ComecoUF;
	  ComecoUF = UF_TEXTO.substring(0,2);
    
    //Adiciona os elementos na parte de cidade
	  var obj = new Array();
	           <?php
    @session_start();
    $Matriz = array();
    $Matriz = $_SESSION['Cidade'];
    foreach ($Matriz as $Cidade) {
    ?>
		         obj.push(" <?php echo $Cidade; ?> ");
		         <?php
    } ?>
		         
		         /*Remove todos os options*/
		         CIDADE.length=1
		          
		         for(var i = 0; i< obj.length; i++){
		        	 
		        	ComecoCidade = obj[i].substring(1,3);
					
		           if(ComecoUF == ComecoCidade){

		        	  var cidade = obj[i].substring(3 + 1, obj[i].length - 1);
		        	   
		        	  SELECT_CIDADE = document.getElementById("SELECT_CIDADE");
		 		   	  SELECT_CIDADE.options[SELECT_CIDADE.options.length] = new Option(cidade, cidade);
		 		   	  
			          }
		         }

    document.getElementById('SELECT_CIDADE').disabled = false;      
    
  }else{
	  
    document.getElementById('SELECT_CIDADE').selectedIndex = "0";
    document.getElementById('SELECT_CIDADE').disabled = true;
  }}
	
</script>

<script>

    //Inicia os elementos abaixo ao iniciar o site 
    $(document).ready(function(){	

		var acao = "<?php
    if (!empty($_SESSION["Valores_Juridica"])) {
    echo 1;
    } else if (!empty($_SESSION["Valores_Fisica"])) {
    echo 2;
    }
    ?>";

		if(acao == 1 || acao == 2){ 

		/*Adiciona os elementos que os dois possuem*/
		document.getElementById("TIPOTEL").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["TIPO_TELEFONE_PRIN_1"];
    }
    ?>";
            
		document.getElementById("TIPO_MAIL_PRINCIPAL").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["TIPO_EMAIL_PRIN_1"];
    }
    ?>";
            
		document.getElementById("TIPOTE_TELAD").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["TIPO_ADIC_1"];
    }
    ?>";
            
		document.getElementById("TIPO_MAIL_AD").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["TIPO_EMAIL_ADIC_1"];
    }
    ?>";
            
		document.getElementById("UF").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["UF"];
    }
    ?>";

            Habilita_Cidade();
            
		document.getElementById("SELECT_CIDADE").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["CIDADE"];
    }
    ?>";

    document.getElementById('SELECT_CIDADE').disabled = true;

		document.getElementById("CONDOMINIO").value = "<?php
    if (isset($_SESSION["Valores_Info"])) {
    echo $_SESSION["Valores_Info"][0]["CONDOMINIO"];
    }
    ?>";
			
			/*Adiciona os elementos relacionados com cada tipo*/
			if(acao == 1){
			document.getElementById("Radio_Juridica").checked = true;
			document.getElementById("Radio_Fisica").disabled = true;

			document.getElementById("IN_INS_ESTADUAL").value = "<?php
    if (isset($_SESSION["Valores_Juridica"])) {
    echo $_SESSION["Valores_Juridica"][0]["IN_INS_ESTADUAL"];
    }
    ?>";

	            document.getElementById("RECOLHIMENTO").value = "<?php
    if (isset($_SESSION["Valores_Juridica"])) {
    echo $_SESSION["Valores_Juridica"][0]["RECOLHIMENTO"];
    }
    ?>";

	            document.getElementById("ATIVO_JURIDICO").value = "<?php
    if (isset($_SESSION["Valores_Juridica"])) {
    echo $_SESSION["Valores_Juridica"][0]["ATIVO_JURIDICA"];
    }
    ?>";
			
		}else if(acao == 2){
			document.getElementById("Juridica").style.display = "none";
			document.getElementById("Fisica").style.display = "block";  
			document.getElementById("Radio_Fisica").checked = true;
      document.getElementById("Radio_Juridica").disabled = true;
      
      ChamaFisica();

			document.getElementById("ATIVO_FISICO").value = "<?php
    if (isset($_SESSION["Valores_Fisica"])) {
    echo $_SESSION["Valores_Fisica"][0]["ATIVO_FISICA"];
    }
    ?>";
		}
		}else{
			document.getElementById("Radio_Juridica").checked = true;
		}

    
	});

</script>

</body>
</html>
