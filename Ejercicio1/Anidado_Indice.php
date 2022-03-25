<?php
    $idiomas = array ('Ingles','Frances','Mandarin','Ruso','Portugues','Japones');
    $CantidadAlumnos['Básico'] = array(25,10,8,12,30,90);

    $CantidadAlumnos['Intermedio'] = array(15,5,4,8,15,25);
    
    $CantidadAlumnos['Avanzado'] = array(10,2,1,4,10,67);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css.css">
    <title>Indice/Anidado</title>
</head>
<body>
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
                    for($i=0;$i<1;$i++)
                    {
                        echo "<div class=\"tabla\">";
                        echo "<table class='table ";
                        echo "<thead>";
                        echo " <tr class='bg-secondary'>";
                        echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i]."</th>";
                        echo " </tr>";
                        echo " <tr >";
                        echo " <th scope='col'>Nivel</th>";
                        echo " <th scope='col'>Alumnos</th>";
                        echo " </tr>";
                        echo "</thead>";
                        echo "<tbody>";
                            echo " <tr>";
                            echo " <td>Basico</td>";
                            echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                            echo " </tr>";
                            echo " <tr>";
                            echo " <td>Intermedio</td>";
                            echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                            echo " </tr>";
                            echo " <tr>";
                            echo " <td>Avanzado</td>";
                            echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                            echo " </tr>";
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                    }
                }
                if($idioma=="Frances")
                {
                    foreach ($idiomas as $materia => $idioma) {
                        if($materia == "Francés")
                        {
                            for($i=0;$i<0;$i++)
                            {
                                echo "<div class=\"tabla\">";
                                echo "<table class='table ";
                                echo "<thead>";
                                echo " <tr class='bg-secondary'>";
                                echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i=1]."</th>";
                                echo " </tr>";
                                echo " <tr >";
                                echo " <th scope='col'>Nivel</th>";
                                echo " <th scope='col'>Alumnos</th>";
                                echo " </tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo " <tr>";
                                    echo " <td>Basico</td>";
                                    echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Intermedio</td>";
                                    echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Avanzado</td>";
                                    echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                                    echo " </tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                            }

                        }
                    }
                }
                if($idioma=="Mandarin")
                {
                    
                       
                            for($i=0;$i<3;$i++)
                            {
                                echo "<div class=\"tabla\">";
                                echo "<table class='table ";
                                echo "<thead>";
                                echo " <tr class='bg-secondary'>";
                                echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i=2]."</th>";
                                echo " </tr>";
                                echo " <tr >";
                                echo " <th scope='col'>Nivel</th>";
                                echo " <th scope='col'>Alumnos</th>";
                                echo " </tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo " <tr>";
                                    echo " <td>Basico</td>";
                                    echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Intermedio</td>";
                                    echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Avanzado</td>";
                                    echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                                    echo " </tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                            }

                        
                    
                }
                if($idioma=="Ruso")
                {
                    
                            for($i=0;$i<1;$i++)
                            {
                                echo "<div class=\"tabla\">";
                                echo "<table class='table ";
                                echo "<thead>";
                                echo " <tr class='bg-secondary'>";
                                echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i=3]."</th>";
                                echo " </tr>";
                                echo " <tr >";
                                echo " <th scope='col'>Nivel</th>";
                                echo " <th scope='col'>Alumnos</th>";
                                echo " </tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo " <tr>";
                                    echo " <td>Basico</td>";
                                    echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Intermedio</td>";
                                    echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Avanzado</td>";
                                    echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                                    echo " </tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                            }

                        
                }
                if($idioma=="Portugues")
                {
                
                            for($i=0;$i<1;$i++)
                            {
                                echo "<div class=\"tabla\">";
                                echo "<table class='table ";
                                echo "<thead>";
                                echo " <tr class='bg-secondary'>";
                                echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i=4]."</th>";
                                echo " </tr>";
                                echo " <tr >";
                                echo " <th scope='col'>Nivel</th>";
                                echo " <th scope='col'>Alumnos</th>";
                                echo " </tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo " <tr>";
                                    echo " <td>Basico</td>";
                                    echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Intermedio</td>";
                                    echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Avanzado</td>";
                                    echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                                    echo " </tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                            }

                    
                }
                if($idioma=="Japones")
                {
                
                            for($i=0;$i<1;$i++)
                            {
                                echo "<div class=\"tabla\">";
                                echo "<table class='table ";
                                echo "<thead>";
                                echo " <tr class='bg-secondary'>";
                                echo " <th scope='col' colspan='2' class='text-center'>". $idiomas[$i=5]."</th>";
                                echo " </tr>";
                                echo " <tr >";
                                echo " <th scope='col'>Nivel</th>";
                                echo " <th scope='col'>Alumnos</th>";
                                echo " </tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo " <tr>";
                                    echo " <td>Basico</td>";
                                    echo " <td> ".$CantidadAlumnos['Básico'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Intermedio</td>";
                                    echo " <td> ".$CantidadAlumnos['Intermedio'][$i]."</td>";
                                    echo " </tr>";
                                    echo " <tr>";
                                    echo " <td>Avanzado</td>";
                                    echo " <td> ".$CantidadAlumnos['Avanzado'][$i]."</td>";
                                    echo " </tr>";
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
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