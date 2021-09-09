<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $titulo; ?></h6>
            <a href="<?php echo base_url(); ?>/lineasproductos/nuevo" class="btn btn-info">Agregar</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width:15px">Código</th>
                            <th style="width:2000px">Linea</th>
                            <th style="width:15px">Editar</th>
                            <th style="width:15px">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos as $dato) { ?>

                        <tr>
                                <td style="width:15px"><?php echo $dato['id']; ?> </td>
                                <td style="width:2000px"><?php echo $dato['NombreLinea']; ?> </td>
                                <td style="width:15px">
                                  <a href="<?php echo base_url(); ?>/lineasproductos/editar/<?php echo $dato['id']; ?>" 
                                  class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> </a> 
                                </td>
                                <td style="width:15px">
                                  <a href="<?php echo base_url(); ?>/lineasproductos/eliminar/<?php echo $dato['id']; ?>" 
                                  class="btn btn-danger"><i class="fas fa-trash"> </i> </a> 
                                </td>   
                            </tr>  

                        <?php } ?>                           
                    </tbody>
                </table>
            </div>
        </div>
    </div>



