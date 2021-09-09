<!-- DataTales Example -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $titulo; ?></h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" height="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Linea</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos as $dato) { ?>

                        <tr>
                                <td><?php echo $dato['id']; ?> </td>
                                <td><?php echo $dato['Nombre_Linea']; ?> </td>
                                
                            </tr>  

                        <?php } ?>                           
                    </tbody>
                </table>
            </div>
        </div>
    </div>



