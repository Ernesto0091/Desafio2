<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css.css">
    <title>Idiomas UDB</title>
</head>
<body>
    <?php
        $idiomas = array(
            "Ingles" =>  array(
                "Básico" => 25,
                "Intermedio" => 15,
                "Avanzado" => 10
            ),
            "Francés" => array(
                "Básico" => 10,
                "Intermedio" => 5,
                "Avanzado" => 2
            ),
            "Mandarin" => array(
                "Básico" => 8,
                "Intermedio" => 4,
                "Avanzado" => 1
            ),
            "Ruso" => array(
                "Básico" => 12,
                "Intermedio" => 8,
                "Avanzado" => 4
            ),
            "Portugues" => array(
                "Básico" => 30,
                "Intermedio" => 15,
                "Avanzado" => 10
            ),
            "Japones" => array(
                "Básico" => 90,
                "Intermedio" => 25,
                "Avanzado" => 67
            )
        )
    ?>

    <br><br>
    <header class="head">
        <h1>Escuela de idiomas UDB</h1>
    </header><br>
    <div class="line"> </div>
    <div class="udb"><img src="img/udb.jpg" class="rounded mx-auto d-block" alt="..." height="250px"></div>
    <h3 style="text-align: center;"> Selecciona el idioma</h3>
    <form action="" method="POST" id="con">
    <select name="idiomas[]" id="idiomas" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected value="0">Selecciona un idioma</option>
        <option  value="Ingles">Ingles</option>
        <option value="Frances">Francés</option>
        <option value="Mandarin">Mandarin</option>
        <option value="Ruso">Ruso</option>
        <option value="Portugues">Portugues</option>
        <option value="Japones">Japones</option>
    </select>
    <input class="btn btn-primary" id="btn" type="submit" value="Ver Información" name="enviar" >
    </form>
    <br><br>
    <?php
        if(isset($_POST['enviar']))
        {
            
            if(isset($_POST['idiomas'])){
                foreach($_POST["idiomas"] as $idioma){
                if($idioma == "Ingles")
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Ingles")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
                if($idioma=="Frances")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Francés")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
                if($idioma=="Mandarin")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Mandarin")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
                if($idioma=="Ruso")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Ruso")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
                if($idioma=="Portugues")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Portugues")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
                if($idioma=="Japones")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Japones")
                        {
                            echo "<div class=\"tabla\">";
                            echo "<table class='table ";
                            echo "<thead>";
                            echo " <tr class='bg-secondary'>";
                            echo " <th scope='col' colspan='2' class='text-center'>". $materia."</th>";
                            echo " </tr>";
                            echo " <tr >";
                            echo " <th scope='col'>Nivel</th>";
                            echo " <th scope='col'>Alumnos</th>";
                            echo " </tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            foreach ($idioma as $Nivel => $Cantidad) {
                                echo " <tr>";
                                echo " <td>$Nivel</td>";
                                echo " <td> ".$Cantidad."</td>";
                                echo " </tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";

                        }
                    }
                }
            }
           
                
        }
        else
        {
            echo "error";
        }
                
    ?>
    
</body>
</html>