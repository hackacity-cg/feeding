<form action="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'login')); ?>" method="post">
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Login" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <!-- <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Codigo - Empresa" name="codigo_empresa">
        <span class="glyphicon glyphicon-hand-left form-control-feedback"></span>
    </div> -->
    <div class="row">

        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
    </div>
</form>
