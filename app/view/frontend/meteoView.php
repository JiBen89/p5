<?php $title = "Meteo API"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 my-3">
            <form>
                <input type="text" class="form-control" id="inputCity">
                <button type="submit" class="btn btn-info btn-block">Rechercher</button>
            </form>
        </div>
        <div class="col-12 col-sm-6 my-3">
            <div class="box-container">
                <div id="city" class="box"></div>
                <div id="temp" class="box"></div>
                <div id="humidity" class="box"></div>
                <div id="wind" class="box"></div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 my-3">
</div>
<script language="JAVASCRIPT" src="app/JS/meteo.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>