<div id="content-wrapper">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>REFORMAS ELECTORALES</h3>
            </div>
        </div>
        <br>


        <?php echo  form_open();?>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Introduzca la fecha de publicación/difusión de la noticia:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" >
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Pagina de Red Social
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Canal de Televisión
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                    <label class="form-check-label" for="exampleRadios3">
                        Emisora radial
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        Prensa Escrita
                    </label>
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-header">
                Escoja el medio al cual hizo el seguimiento
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Red UNITEL
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Red UNO
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                    <label class="form-check-label" for="exampleRadios3">
                        Red ATB
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        Red TVB
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        La Razón
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        Pagina Siete
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        Panamericana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        Fides
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" >
                    <label class="form-check-label" for="exampleRadios4">
                        ERBOL
                    </label>
                </div>
            </div>
        </div>
        <br>

        <div class="card">
            <div class="card-header bg-info text-white ">
                <h4>Subtemas - Presentación de estatutos de organizaciones políticas</h4>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Sobre qué versa la noticia
            </div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Estatutos de organizaciones políticas – Ley 1096
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Otra
                    </label>
                </div>
            </div>
        </div>
        <br>

        <div class="card-body">
            <div class="form-group">
                <label for="otrasb1">Especifique otra: </label>
                <input type="text" class="form-control" id="otrasb1" name="otrasb1" >
            </div>

        </div>

        <div class="card-body">
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </div>


        <?php echo form_close(); ?>



    </div>
</div>
