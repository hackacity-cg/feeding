<section class="content-header">
    <h1>
        Usuário
        <small><?= __('Cadastrar Usuário') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false]) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Formulário') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($user, array('role' => 'form')) ?>
                <div class="box-body">
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('username'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('password'); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('voluntario_id', ['options' => $voluntario, 'empty' => true]); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('doador_id', ['options' => $doador, 'empty' => true]); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php echo $this->Form->input('situacao_id', ['options' => $situacaoCadastro, 'empty' => true]); ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pull-right">
                        <?= $this->Form->button(__('Salvar')) ?>
                    </div>
                </div>
            </div>
            <div class="box-footer">

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</section>

