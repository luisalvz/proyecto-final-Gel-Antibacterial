<?php
session_start();
if(isset($_SESSION['usuario']))
{
    $usuarioSesion=$_SESSION['usuario'];
    $tipoSesion=$_SESSION['tipo'];
    $nombreSesion=$_SESSION['nombreUsuario'];    
}
else
{
    $usuarioSesion='';
    $tipoSesion='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>    
    <title>GelAntibacteria.com</title>
</head>
<body background="img/fondo2.jpg">
<header>
<table width ="220%" border="0">
        <tr> <!--encabezado-->
            <td colspan="2">
            <img src="img/nosotros.jpg">
            </td>
        </tr>
        </table>
</header>
        <ul>
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">INICIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nosotros.php">NOSOTROS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="galeria.php">GALERIA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contactanos.php">CONTACTANOS</a>
  </li>
</ul>
</nav>
                <?php
                    if($tipoSesion==1)
                    {
                        ?> <li>
                            <a href="Inventarios/inventario.php">Inventario</a>
                        </li>
                        <?php
                    }
                ?>
            <li>
            <?php
            if($usuarioSesion<>'')
            {
                ?>
                <p><?php echo $nombreSesion."(". $usuarioSesion.")" ?></p>
                <a href="Usuarios/cerrarsesion.php">Cerrar sesion</a>
                <?php
            }
            else
            {
              ?>
                <a href="Usuarios/cerrarsesion.php">Iniciar sesion</a> 
                <?php
            }
        ?>
            </li>
        </ul>
    </nav>
    <table  width="100%" border="3">
        <tr>
            <td>
                Alejandro Pelayes Ocaña
            </td>
            <td>
                9614104657
            </td>
            <td>
                A191252@UNACH.MX
            </td>
        </tr>
        
        <tr>
            <td>
            Luis Enrique Perez Alvarez
            </td>
            <td>
            9613693089
            </td>
            <td>
                A191253@UNACH.MX
            </td>
        </tr>
        <tr>
            <td>
            Miguel Ángel López Santiz
            </td>
            <td>
            9613438692
            </td>
            <td>
            A191251@UNACH.MX
            </td>
        </tr>
        <tr>
            <td>
            Gustavo Alexis Vila Galdámez 
            </td>
            <td>
            9611157060
            </td>
            <td>
            A191256@UNACH.MX
            </td>
        </tr>
        <tr>
            <td>
            Kevin Benjamín Gutiérrez Perez  
            </td>
            <td>
            9611157060
            </td>
            <td>
            A181249@UNACH.MX
            </td>
        </tr>
    </table>
<footer>
        <center><p>Boulevar Belisario Dominguez, Kilometro 1081, Sin Numero, Teran Tuxtla Gutierrez, Chiapas.</p>
        <p>&copy; 2020 Drechos reservados</p></center>
    </footer>
</body>
</html>