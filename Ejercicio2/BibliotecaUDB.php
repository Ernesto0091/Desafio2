<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Biblioteca UDB</title>
</head>
<body>
    <br>
    <header class="head">
        <h1>Biblioteca Universidad Don Bosco</h1>
    </header><br><br>
    <form action="Libro.php" method="POST" class="frm">
        <div class="container">
            <div class="row justify-content-start">
            <div class="col-5">
                <label for="exampleFormControlInput1" class="form-label">Autor del libro:</label>
                <input name="Autor" type="text" class="form-control" id="Autor" placeholder="Autor" pattern="[a-zA-Z]{1,100}" maxlength="100"> 
            </div>
            <div class="col-5">
                <label for="exampleFormControlInput1" class="form-label">Titulo del libro:</label>
                <input name="Titulo" type="text" class="form-control" id="Titulo" placeholder="Titulo" pattern="[a-zA-Z]{1,100}" maxlength="100">
            </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">Número de edición:</label>
                <input name="Nedicion" type="number" class="form-control" id="Nedicion" placeholder="1,2,3...">
               </div>
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">Lugar de publicación</label>
                <input name="LugarP" type="text" class="form-control" id="LugarP" placeholder="Lugar de publucación" pattern="[a-zA-Z]{1,100}" maxlength="100">
               </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">Editorial:</label>
                <input name="Editorial" type="text" class="form-control" id="Editorial" placeholder="Editorial" pattern="[a-zA-Z]{1,100}" maxlength="100">
               </div>
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">Año de Edición</label>
                <input name="Aedicion" type="date" class="form-control" id="Aedicion" >
               </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">Número de páginas:</label>
                <input name="Npaginas" type="number" class="form-control" id="Npaginas" placeholder="N° paginas" pattern="[0-9]">
               </div>
               <div class="col-5">
               <label for="exampleFormControlInput1" class="form-label">ISMB</label>
                <input name="isbn"  class="form-control" id="isbn" placeholder="Código ISBM">
               </div>
            </div>
        </div>
        <label for="exampleFormControlInput1" class="form-label">Notas</label>
        <input name="notas" type="text" class="form-control" id="notas" placeholder="Texto"> <br>
        <input type="submit" value="ENVIAR DATOS" name="enviar" class="btn btn-primary">
       
    </form>
    <?php
        function __autoload($Libro)
        {
            include_once("class/".$Libro.".class.php");

            $Autor = new Libro;
            $Titulo = new Libro;
            $NumeroEdicio = new Libro;
            $LugarPublicacion = new Libro;
            $Editorial = new Libro;
            $AñoEdicion = new Libro;
            $NumeroPaginas = new Libro;
            $Notas = new Libro;
            $ISBN = new Libro;

        }
    ?>
</body>
</html>