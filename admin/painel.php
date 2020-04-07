<?php
    ob_start();
    session_start();
    require('../_app/Config.php');
    require_once "../_app/Models/Login.class.php";

    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
        $login = new Login();//classe 
        $logged = $login->logged($_SESSION['id']); 
    }else{
        header("Location: index.php?exe=restrict");
    }
    $getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <link rel="shortcut icon" href="https://www.acessohost.com.br/favicon/favicon.png"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <div class="container-fluid parallax2">
            <div class="container">
                <?php include "inc/header.html"?>    
            </div>
        </div>
        
        <div class="wrapper">
            <?php include "inc/menu.php";?>

            <div class="container-fluid">
                <nav class="navbar">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fa fa-align-justify"></i>
                            <span>Menu</span>
                        </button>  
                    </div>
                </nav>

                <!-- QUERY STRING -->
                <div class="main">
                    <?php
                        if (!empty($getexe)){
                            $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . strip_tags(trim($getexe) . '.php');
                        }else{
                            $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'dashboard.php';
                        }
                        //Se o arquivo existir
                        if (file_exists($includepatch)){
                            require_once($includepatch);
                        }else{
                            echo "<div class='col-md-12 col-sm-12 alert alert-danger'>";
                                echo "<i class='glyphicon glyphicon-alert'></i> <b>Ocorreu uma falha:</b> Erro ao incluir o Controller / {$getexe}.php. <b>Informe o Suporte</b>!";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-black">
            <div class="row">
                <?php include "inc/footer.html"?>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.10.1.custom.min1.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        
        <script type="text/javascript">
            $(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
    </body>
</html>
<?php
ob_end_flush();