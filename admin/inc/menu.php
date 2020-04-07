<div class="row">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h5 class="text-center"><i class="fa fa-align-justify"></i> Painel de Controle</h5>
            <ul class="list-group">
                <li class="text-center"><i class="fa fa-user"></i> Olá <b><?= $_SESSION['firstname']. ' '.$_SESSION['lastname'] ;?></b></li>
                <li class="text-center">Seja bem vindo!</li>
            </ul>
        </div>

        <ul class="list-group">
            <li class="active">
                <a href="painel.php"><i class="fa fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="#createSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-fw fa-wrench"></i> Cadastro Geral <span class="caret"></span></a>
                <ul class="collapse list-group" id="createSubmenu">
                    <li>
                        <a href="painel.php?exe=cadastroUsuario/index"><i class="fa fa-chevron-down"></i> Cadastro de Usuário(s)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chevron-down"></i> Cadastro de Foto(s)</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chevron-down"></i> Cadastro de Banner(s)</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#searchSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-search"></i> Pesquisas <span class="caret"></span></a> 
                <ul class="collapse list-group" id="searchSubmenu">
                    <li>
                        <a href="#"><i class="fa fa-chevron-down"></i> Page 1</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chevron-down"></i> Page 2</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-chevron-down"></i> Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-folder-open"></i> Dados do Site</a>
            </li>
            <li>
                <a href="painel.php?exe=dadosEmpresa/index"><i class="fa fa-user"></i> Perfil</a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </li>
        </ul>
    </nav>     
</div>