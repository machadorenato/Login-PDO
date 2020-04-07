<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
         <link rel="shortcut icon" href="https://www.acessohost.com.br/favicon/favicon.png" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <title>::PAINEL DE CONTROLE::</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Font Awesome JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 
    <body class="gradient_blue">
        <div class="container" style="padding-top:20px;">
            <div class="col-md-6 col-sm-6">
                <img class="img img-fluid" src="images/logomarca.png"  alt="Acessohost" title="Acessohost"/>
            </div>    
        </div>
        <div class="container d-flex justify-content-center" style="padding-top:60px;">
            <div class="col-md-6 col-sm-6 bg-light rounded shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-end">
                        <a href=""><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        <a href=""><i id="social-tw" class="fa fa-twitter fa-3x social"></i></a>
                        <a href=""><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                        <a href=""><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-sm-12">
                        <?php
                            $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
                            if($get){
                            if($get == 'logoff'){
                                echo "<div class='alert alert-success'> <p class='text-black'><i class='fa fa-info-circle'></i> Obrigado, você se deslogou, volte sempre ao Sistema</p></div>";
                            }elseif($get == 'restrict'){
                                echo "<div class='alert alert-danger'> <p class='text-black'><i class='fa fa-info-circle'></i> Por favor faça login para acessar o Sistema</p></div>";   
                            }elseif($get == 'desloged'){
                                echo "<div class='alert alert-warning'> <p class='text-black'><i class='fa fa-info-circle'></i> Você não esta logado, faça login para acessar o Sistema</p></div>";     
                            }
                        ?>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <form action="logar.php" class="form-horizontal" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ;?>" placeholder="Informe seu login de acesso">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Informe sua senha">
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <p class="text-center"><i class="fa fa-life-bouy"></i> <a href="" title="Recuperar minha senha">Recuperar minha senha</a></p>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Acessar o Sistema" class="btn btn-primary btn-lg btn-block">
                    </div>
                </form>                     
            </div>
        </div>
    </body>
</html>