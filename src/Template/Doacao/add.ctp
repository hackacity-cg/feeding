<section class="content-header">
  <h1>
    Doacao
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($doacao, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('doador_id', ['options' => $doador, 'empty' => true]);
            echo $this->Form->input('endereco');
            echo $this->Form->input('data_inicio');
            echo $this->Form->input('data_fim');
            echo $this->Form->input('tipo_doacao_id', ['options' => $doacaoTipo, 'empty' => true]);
            echo $this->Form->input('quantidade');
            echo $this->Form->input('doacao_status_id', ['options' => $doacaoStatus, 'empty' => true]);
            echo $this->Form->input('voluntario_id', ['options' => $voluntario, 'empty' => true]);
            echo $this->Form->input('data_saida');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

