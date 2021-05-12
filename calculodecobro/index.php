<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
    <div class="col">
    <div class="jumbotron">
    <h1 class="display-4">Fotografias</h1>
    <div class="jumbotron">
    <h1 class="display-4">imprecion digital </h1>
    <form action="">
    <div id="seccionResultado">
            <div class="row">
                <div class="col-sm-3">
                    <label for="">Cantidad de fotos </label>
                            </div>  
                            <br>
                            <div class="col-sm-3">
                            <input type="text" id="cantidadfotos" class="form-control"></div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3"></div>
                            </form>
                        <!--  inicia comboBox -->
                        <div class="row mt-5">
                        
                        <div class="col-sm-6"> <label for="">Tipo de foto</label></div>
                        <div class="col-sm-6"><form action="">
                            <label for="">Color</label>
                            <select name="tipoFigura" id="tipocolor" class="form-control">
                                <option value="negro">Blanco</option>
                                <option value="blaanco">Negro</option>
                                <option value="color">Color</option>
                            </select>
                        </div>
                        <div class="col-sm-3"></div>
                        <!--  Inicia Medidas-->
                        <div class="row mt-5">
                        <label for="">Medidas</label>
                        <div class="col"></div>
                        <div class="col">
                        <input type="radio" id="radiosi" name="">
                        <label><h6>3x4</h6></label>
                        <br>
                        <input type="radio" id="radiosi" name="">
                        <label><h6>4x6</h6></label>
                        </div>
                        <div class="col">
                        <input type="radio" id="radiosi" name="">
                        <label><h6>5x7</h6></label>
                        <br>
                        <input type="radio" id="radiosi" name="">
                        <label><h6>6x8</h6></label>
                        </div>
                        </div>
                        
                        </div>
                        
                        </div>
                        <button class="btn btn-info" id="btnCalcular" onclick="calcular()">Aceptar</button>
                        
                        </div>
                        <div class="alert alert-success text-center" role="alert">
                            <div id="calcularResultado"></div>
                        </div>
                        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<Script>
$(document).ready(function(){
    



});

</Script>