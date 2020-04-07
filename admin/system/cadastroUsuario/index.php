<div class="col-md-12 col-sm-12 mb-20">
    <div class="alert alert-primary hr">
        <p class="text-center"><b><i class="fa fa-user"></i> CADASTRO DE NOVO USUÁRIO</b></p>
    </div>
    <?php
        $get = filter_input(INPUT_GET, 'condition', FILTER_DEFAULT);
        if($get){
            if($get=="created"){
                echo "<div class='alert alert-success'>";
                    echo "<p><b><i class='fa fa-check'></i> Usuário cadastrado com sucesso!!</b></p>";
                echo "</div>";     
            }elseif($get=="data"){
                echo "<div class='alert alert-danger'>";
                    echo "<p><b><i class='fa fa-check'></i> Preencha todos os campos!!</b></p>";
                echo "</div>";     
            } 
        }
    ?>
    <form action="painel.php?exe=cadastroUsuario/create" method="post">
        <div class="form-group">
            <label class="control-label">Nome</label>
            <input type="text" class="form-control" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label class="control-label">SobreNome</label>
            <input type="text" class="form-control" name="lastname" placeholder="Digite o seu SobreNome">
        </div>
        <div class="form-group">
            <label class="control-label">Usuário</label>
            <input type="text" class="form-control" name="username" placeholder="Digite um usuário">
        </div>
        <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Digite uma senha forte">
        </div>
        <button type="submit" class="btn btn-primary" name="sendPost">Cadastrar</button>
    </form>
</div>