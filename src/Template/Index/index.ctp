<div class="content-wrapper">
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
                <?php for($i=0;$i<10;$i++):?>
                    <div class="col-md-4">
                        <div class="box box-default box-feeding">
                            <div class="box-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultricies velit id purus feugiat ultrices. Donec eget scelerisque elit, et consectetur lorem. Sed suscipit, eros id elementum venenatis, ante dolor dictum ex, mattis elementum erat mauris.</p>
                                <p><i class="glyphicon glyphicon-map-marker"></i> Rua uricuri, 375, Vila Olinda</p>
                                <p><i class="glyphicon glyphicon-phone"></i> (67) 98147-6244</p>
                            </div>
                            <div class="box-footer with-border">
                                <div class="box-title">
                                    <div class="container-time-retirada">
                                        <div class="input-group input-group">
                                            <input type="text" class="form-control timepicker input-hora-retirada" placeholder="Hora retirada.." aria-label="Hora retirada...">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-info btn-flat btnReservar">Reservar <i class="glyphicon glyphicon-ok"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </section>
    </div>
</div>