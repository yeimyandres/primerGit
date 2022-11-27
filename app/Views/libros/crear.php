<?=$cabecera?>
    Formulario de crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del libro</h5>
            <p class="card-text">

                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>

            </p>
        </div>
    </div>


<?=$pie?>