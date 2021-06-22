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
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="titular">Escriba el titular de la noticia </label>
                    <input type="text" class="form-control" id="titular" name="titular" >
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="resumen">Escriba un pequeño párrafo que resuma la noticia</label>
                    <input type="text" class="form-control" id="resumen" name="resumen" >
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="url">Pegue el link donde se encuentra la noticia</label>
                    <input type="text" class="form-control" id="url" name="url" >
                </div>
            </div>
        </div>
        <br>

        <div class="card" >
            <div class="card-body">
                <div class="form-group">
                    <label>Escoja el tipo de actor que es la fuente de la noticia </label>
                </div>
               <div class="form-group">
                   <div class="form-check">
                       <?php $contador = 0; ?>
                       <?php foreach ($actor as $key => $element): ?>
                            <?php if($contador == 0): ?>
                               <div class="form-check">
                                   <label class="form-check-label" for="radio1">
                                       <input type="radio" class="form-check-input" id="radio<?php echo $element['idactor']; ?>" name="actor_nombre" value="<?php echo $element['idactor']; ?>" checked>
                                       <?php echo $element['actor_nombre']; ?>
                                   </label>
                               </div>
                                <?php $contador++; ?>
                            <?php else: ?>
                               <div class="form-check">
                                   <label class="form-check-label" for="radio2">
                                       <input type="radio" class="form-check-input" id="radio<?php echo $element['idactor']; ?>" name="actor_nombre" value="<?php echo $element['idactor']; ?>">
                                       <?php echo $element['actor_nombre']; ?>
                                   </label>
                               </div>
                            <?php endif ?>

                       <?php endforeach; ?>
                   </div>
               </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre_tipo" >Escoge el tema al que está referido la nota:</label>
                    <select class="form-control" id="tema" name="tema">
                        <option value=" ">Seleccione Tema</option>
                        <?php foreach ( $tema as $key => $element): ?>
                            <option value="<?php echo $element['idtema']; ?>" >
                                <?php echo $element['nombre_tema']; ?>
                            </option>
                        <?php endforeach; ?>

                    </select>

                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-header">


            </div>
            <div class="card-body">
                <select class="form-control" id="subtema" name="subtema">
                    <option value=""> Seleccione Subtema</option>
                </select>

            </div>
        </div>






        <!-- Control Submit -->
        <div class="card">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </div>

        </div>
        <!-- Fin Control Submit -->




        <?php echo form_close(); ?>



    </div>
</div>
