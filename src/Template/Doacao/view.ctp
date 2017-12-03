<section class="content-header">
  <h1>
    <?php echo __('Doacao'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                        <dt><?= __('Doador') ?></dt>
                                <dd>
                                    <?= $doacao->has('doador') ? $doacao->doador->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Endereco') ?></dt>
                                        <dd>
                                            <?= h($doacao->endereco) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Doacao Tipo') ?></dt>
                                <dd>
                                    <?= $doacao->has('doacao_tipo') ? $doacao->doacao_tipo->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Quantidade') ?></dt>
                                        <dd>
                                            <?= h($doacao->quantidade) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Doacao Status') ?></dt>
                                <dd>
                                    <?= $doacao->has('doacao_status') ? $doacao->doacao_status->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Voluntario') ?></dt>
                                <dd>
                                    <?= $doacao->has('voluntario') ? $doacao->voluntario->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Data Inicio') ?></dt>
                                <dd>
                                    <?= h($doacao->data_inicio) ?>
                                </dd>
                                                                                                                    <dt><?= __('Data Fim') ?></dt>
                                <dd>
                                    <?= h($doacao->data_fim) ?>
                                </dd>
                                                                                                                    <dt><?= __('Data Saida') ?></dt>
                                <dd>
                                    <?= h($doacao->data_saida) ?>
                                </dd>
                                                                                                                                                                                                            
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
