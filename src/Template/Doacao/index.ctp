<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Lista Doação
        <?php if ($tipo_usuario == 'doador'): ?>
            <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class' => 'btn btn-success btn-xs']) ?></div>
        <?php endif; ?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= __('Lista de') ?> Doações</h3>
                    <div class="box-tools">
                        <form action="<?php echo $this->Url->build(); ?>" method="POST">
                            <div class="input-group input-group-sm" style="width: 180px;">
                                <input type="text" name="search" class="form-control"
                                       placeholder="<?= __('Fill in to start search') ?>">
                                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('doador_id') ?></th>
                            <th><?= $this->Paginator->sort('endereco') ?></th>
                            <th><?= $this->Paginator->sort('data_inicio') ?></th>
                            <th><?= $this->Paginator->sort('data_fim') ?></th>
                            <th><?= $this->Paginator->sort('tipo_doacao_id') ?></th>
                            <th><?= $this->Paginator->sort('status_doacao_id') ?></th>
                            <th><?= $this->Paginator->sort('quantidade') ?></th>
                            <th><?= $this->Paginator->sort('voluntario') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($doacao as $doacao): ?>
                            <tr>
                                <input type="hidden" id="doacao_id" value="<?php echo $doacao->id ?>">
                                <td><?= $doacao->has('doador') ? $doacao->doador->nome : '' ?></td>
                                <td><?= h($doacao->endereco) ?></td>
                                <td><?= date_format($doacao->data_inicio, 'd/m/Y H:i') ?></td>
                                <td><?= date_format($doacao->data_fim, 'd/m/Y H:i') ?></td>
                                <td><?= $doacao->has('doacao_tipo') ? $doacao->doacao_tipo->nome : '' ?></td>
                                <td><?= $doacao->has('doacao_status') ? $doacao->doacao_status->nome : '' ?></td>
                                <td><?= h($doacao->quantidade) ?></td>
                                <td><?= $doacao->has('voluntario') ? $doacao->voluntario->nome : '' ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?php if ($tipo_usuario == 'doador' && !empty($doacao->voluntario_id) && $doacao->doacao_status_id == 2): ?>
                                        <?= $this->Html->link(__('Entregue'), [], ['class' => 'btn btn-info btn-xs', 'id' => 'entregue_btn']) ?>
                                    <?php endif; ?>

                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $doacao->id], ['class' => 'btn btn-warning btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $doacao->id], ['confirm' => __('Confirm to delete this entry?'), 'class' => 'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?php echo $this->Paginator->numbers(); ?>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
