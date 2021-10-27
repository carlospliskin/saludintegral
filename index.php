<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../PHPposgresql/main.css"> 
    <title>conectar php con postgresql </title>
</head>
<body>
    
    <?php
        include_once ("conexion.php");
        CConexion::ConexionBD();
    ?>

<div class="content">

<h1 class="logo">Datos <span> Salud Integral </span></h1>

<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h3>Datos del Paciente</h3>
        <form action="">
            <p>
                <label>Nombre(s)</label>
                <input type="text" name="fullname">
            </p>
            <p>
                <label>Apellidos</label>
                <input type="email" name="email">
            </p>
            <p>
                <label>Numero de telefono </label>
                <input type="tel" name="phone">
            </p>
            <p>
            <label for="opciones">Sexo</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Masculino</option>
                    <option value="Vende">Femenino</option>
                </select>
            </p>
            <p>
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" id="fecha">
            </p>
            <p class="block">
               <label>Observaciones</label> 
                <textarea name="message" rows="3"></textarea>
            </p>

            <p class="block">
                <button>
                    Send
                </button>
            </p>
        </form>
    </div>
    <div class="contact-info">
        <h4>Más informacion</h4>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> Direccion empresa </li>
            <li><i class="fas fa-phone"></i> (52) 55-12-34-56-78</li>
            <li><i class="fas fa-envelope-open-text"></i> contact@saludintegral.com</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
        <p>Company.com</p>
    </div>
</div>

</div>
    

    
</body>
</html>