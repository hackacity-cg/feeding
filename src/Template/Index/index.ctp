<div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Top Navigation
            <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Layout</a></li>
            <li class="active">Top Navigation</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php foreach($doacoes as $doacao): ?>
                <div class="col-md-4">
                    <div class="box box-default box-feeding">

                        <div class="box-body">
                            <div class="hora-disponivel"><?= $this->Time->format($doacao->data_fim, 'HH:mm') ?></div>
                            <p class="descricao-feeding"><?= $doacao->descricao ?></p>
                            <p><i class="glyphicon glyphicon-map-marker"></i> <?= $doacao->endereco ?></p>
                            <p><i class="glyphicon glyphicon-phone"></i> <?= $doacao->doador->telefone ?></p>
                        </div>
                        <div class="box-footer with-border box-footer-feeding">
                            <div class="box-title">
                                <div class="container-time-retirada">
                                    <div class="input-group input-group">
                                        <input type="text" class="form-control timepicker input-hora-retirada" placeholder="Qual horário?" aria-label="Hora retirada...">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat btnReservar">Reservar <i class="glyphicon glyphicon-ok"></i></button>
                                        </span>

                                        <input type="hidden" class="doacao-id" value="<?=$doacao->id?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>