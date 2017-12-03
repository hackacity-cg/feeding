<section class="content-header">
    <h1>
        Comida
        <small><?= __('Cadastrar Doação') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
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
                <?= $this->Form->create($doacao, array('role' => 'form')) ?>
                <div class="box-body">
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('data_inicio', ['class' => 'form-control datetimepicker', 'type' => 'text']);
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('data_fim', ['class' => 'form-control datetimepicker', 'type' => 'text']);
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('tipo_doacao_id', ['label' => 'Tipo de Doação', 'options' => $doacaoTipo, 'empty' => 'Selecione']);
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('quantidade');
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('endereco', ['label' => 'Endereço']);
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php
                        echo $this->Form->input('descricao', ['label' => 'Descrição', 'type' => 'textarea', 'placeholder' => 'Arroz, Feijão, Mandioca, Carne...', 'maxlenght' => '100']);
                        ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pull-right">
                        <?= $this->Form->button(__('Salvar')) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
