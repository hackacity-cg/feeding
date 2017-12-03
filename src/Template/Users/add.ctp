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
                        <?php echo $this->Form->input('perfil_usuario', ['label' => 'Perfil', 'id' => 'perfil_usuario', 'options' => ['doador' => 'Doador', 'voluntario' => 'Voluntario'], 'empty' => 'Selecione']); ?>
                    </div>

                    <div class="form_usuario hidden">
                        <div class="form_doador hidden">
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('doador_nome', ['label' => 'Nome']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('doador_cpf', ['label' => 'CPF', 'class' => 'cpf form-control']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('doador_cnpj', ['label' => 'CNPJ', 'class' => 'cnpj form-control']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('doador_telefone', ['label' => 'Telefone', 'class' => 'phone_with_ddd form-control']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('doador_endereco', ['label' => 'Endereço']); ?>
                            </div>
                        </div>
                        <div class="form_voluntario hidden">
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('voluntario_nome', ['label' => 'Nome']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('voluntario_cnpj', ['label' => 'CNPJ', 'class' => 'cnpj form-control']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('voluntario_telefone', ['label' => 'Telefone', 'class' => 'phone_with_ddd form-control']); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $this->Form->input('voluntario_endereco', ['label' => 'Endereço']); ?>
                            </div>
                            <div class="col-lg-6 hidden">
                                <?php echo $this->Form->input('voluntario_numero', ['label' => 'Número']); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('username', ['label' => 'Usuário']); ?>
                        </div>
                        <div class="col-lg-6">
                            <?php echo $this->Form->input('password', ['label' => 'Senha']); ?>
                        </div>
                        <div class="clearfix"></div>

                        <div class="pull-right">
                            <?= $this->Form->button(__('Salvar')) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</section>

