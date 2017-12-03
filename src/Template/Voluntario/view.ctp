<section class="content-header">
  <h1>
    <?php echo __('Voluntario'); ?>
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
                                                                                                                <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($voluntario->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cnpj') ?></dt>
                                        <dd>
                                            <?= h($voluntario->cnpj) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Telefone') ?></dt>
                                        <dd>
                                            <?= h($voluntario->telefone) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Endereco') ?></dt>
                                        <dd>
                                            <?= h($voluntario->endereco) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                        <dd>
                                            <?= h($voluntario->numero) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Situacao Cadastro') ?></dt>
                                <dd>
                                    <?= $voluntario->has('situacao_cadastro') ? $voluntario->situacao_cadastro->id : '' ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Doacao']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($voluntario->doacao)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Doador Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Endereco
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Inicio
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Fim
                                    </th>
                                        
                                                                    
                                    <th>
                                    Tipo Doacao Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantidade
                                    </th>
                                        
                                                                    
                                    <th>
                                    Doacao Status Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Voluntario Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Data Saida
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($voluntario->doacao as $doacao): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($doacao->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->doador_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->endereco) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->data_inicio) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->data_fim) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->tipo_doacao_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->quantidade) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->doacao_status_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->voluntario_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($doacao->data_saida) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Doacao', 'action' => 'view', $doacao->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Doacao', 'action' => 'edit', $doacao->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doacao', 'action' => 'delete', $doacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doacao->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($voluntario->users)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Username
                                    </th>
                                        
                                                                    
                                    <th>
                                    Password
                                    </th>
                                        
                                                                    
                                    <th>
                                    Voluntario Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Doador Id
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Situacao Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($voluntario->users as $users): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($users->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->username) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->password) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->voluntario_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->doador_id) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($users->situacao_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
