<!DOCTYPE html>
<html lang="en">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> <?php echo $titulo . ' ' . $item['id']  .'  '. $item['Descripcion'] ; ?></h4>
                        
                         <div>
                            <p>
                            <img src="<?php echo base_url(); ?>/img/<?php echo $item['imagen'] ; ?> "  width="100" height="70" >
                            <a href="<?php echo base_url(); ?>/distribuidoras/" class="btn btn-primary">Volver</a>
                            </p>
                            

                        </div>      
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Distribuidor</th>
                                            <th>Nombre</th>
                                            <th>Costo</th>
                                            <th>Fecha Compra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($datos as $dato) { ?>

                                        <tr>
                                                <td><?php echo $dato['Distribuidor']; ?> </td>
                                                <td><?php echo $dato['Nombre']; ?> </td>
                                                <td><?php echo $dato['Costo']; ?> </td>
                                                <td><?php echo date('d-m-Y',strtotime($dato['Fecha_compra']) ); ?> </td>
                                                
                                            </tr>  

                                        <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
</html>
