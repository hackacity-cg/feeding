<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Doacao
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Doacao</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
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
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('doador_id') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('data_inicio') ?></th>
                <th><?= $this->Paginator->sort('data_fim') ?></th>
                <th><?= $this->Paginator->sort('tipo_doacao_id') ?></th>
                <th><?= $this->Paginator->sort('quantidade') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($doacao as $doacao): ?>
              <tr>
                <td><?= $this->Number->format($doacao->id) ?></td>
                <td><?= $doacao->has('doador') ? $this->Html->link($doacao->doador->id, ['controller' => 'Doador', 'action' => 'view', $doacao->doador->id]) : '' ?></td>
                <td><?= h($doacao->endereco) ?></td>
                <td><?= h($doacao->data_inicio) ?></td>
                <td><?= h($doacao->data_fim) ?></td>
                <td><?= $doacao->has('doacao_tipo') ? $this->Html->link($doacao->doacao_tipo->id, ['controller' => 'DoacaoTipo', 'action' => 'view', $doacao->doacao_tipo->id]) : '' ?></td>
                <td><?= h($doacao->quantidade) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $doacao->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doacao->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doacao->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
