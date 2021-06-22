<div id="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>REFORMAS ELECTORALES</h3>
            </div>
        </div>
        <br>


        <?php echo  form_open('reformaElectoral/capturarDatos');?>

        <!-- Fecha de la noticia -->
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="fecha">Introduzca la fecha de publicación/difusión de la noticia:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" >
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre_tipo" >Tipo de medio</label>
                    <select class="form-control" id="tipo-medio" name="tipo-medio">
                        <option value=" ">Seleccione Tipo de Medio</option>
                        <?php foreach ( $tipo_medio as $key => $element): ?>
                        <option value="<?php echo $element['tipo_id']; ?>" >
                            <?php echo $element['tipo_nombre']; ?>
                        </option>
                        <?php endforeach; ?>

                    </select>

                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Escoja el medio al cual hizo el seguimiento</label>
                    <select class="form-control" id="medio" name="medio">
                        <option value="" >Seleccione Medio</option>

                    </select>
                </div>


            </div>
        </div>




        <!-- Control Submit -->
        <div class="card">
            <div class="card-footer">
                <input id="url_base" name="url_base" type="hidden" value="<?php echo site_url(); ?>">
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </div>

        </div>
        <!-- Fin Control Submit -->




        <?php echo form_close(); ?>



    </div>
</div>
