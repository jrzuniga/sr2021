<!DOCTYPE html>
<html lang="en">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> <?php echo $titulo . '  ' . $proveedor['Nombre'] ; ?></h4>
                        <div>
                            <p>
                            <a href="<?php echo base_url().'/distribuidoras/productos/'.$proveedor['id'].'/1'
                                                ; ?>" 
                            class="btn btn-primary">
                            <img src="<?php echo base_url(); ?>/img/Bebidas.jpg" width="100" height="70" >
                            </a>
                            <a href="<?php echo base_url().'/distribuidoras/productos/'.$proveedor['id'].'/2'
                            ; ?>" 
                            class="btn btn-primary">
                            <img src="<?php echo base_url(); ?>/img/Cerveza.png" width="100" height="70" >
                            </a>
                            <a href="<?php echo base_url().'/distribuidoras/productos/'.$proveedor['id'].'/3'
                            ; ?>" 
                            class="btn btn-primary">

                            <img src="<?php echo base_url(); ?>/img/Vinos.jpg" width="100" height="70" >
                            </a>
                            <a href="<?php echo base_url().'/distribuidoras/productos/'.$proveedor['id'].'/4'
                            ; ?>" 
                            class="btn btn-primary">
                            <img src="<?php echo base_url(); ?>/img/Licores.png" width="100" height="70" >
                            </a>
                            

                            <a href="<?php echo base_url(); ?>/distribuidoras" class="btn btn-primary">Volver</a>
                            </p>

                        </div>      
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Costo</th>
                                            <th>Stock</th>
                                            <th>Fecha Compra</th>
                                            <th>Detalle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($datos as $dato) { ?>

                                        <tr>
                                            
                                                <td><?php echo $dato['id']; ?> </td>
                                                <td><?php echo $dato['Descripcion']; ?> </td>
                                                <td><?php echo $dato['Costo']; ?> </td>
                                                <td><?php echo $dato['stock']; ?> </td>
                                                <td><?php echo date('d-m-Y',strtotime($dato['Fecha_compra']) ); ?> </td>
                                                <td><a href="<?php echo base_url().'/distribuidoras/detalleproducto/'.$dato['id']  ; ?>" >
                                                    <i class="fas fa-arrow-alt-circle-up"></i> </a>  
                                                
                                              </td>
                                                
                                            </tr>  

                                        <?php } ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                                       
            
</html>
