            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> <?php echo $titulo; ?></h4>

                        <form method="POST" action="<?php echo base_url(); ?>/lineasproductos/insertar" 
                        autocomplete="off">
                            <div class="form_group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <label>Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text"
                                        autofocus required
                                        placeholder="Nombre de la línea"/>
                                    </div>
                                    
                                </div> 
                            </div>

                            <a href="<?php echo base_url(); ?>/lineasproductos" class="btn btn-primary">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                         

                        </form>
                    </div>
                </main>
