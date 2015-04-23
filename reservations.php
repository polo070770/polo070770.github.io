<?php
include 'scripts/php/Session.php';

if (!isset($_SESSION ['login_user'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bed & Breakfast</title>

    <meta name="description"
          content="
              Alquila alojamientos de anfitriones en diferentes países.
              Disfruta como si estés en tu propia casa, vayas donde vayas.
              ">

    <meta name="keywords"
          content="
              Alquiler, Apartamentos, Vacaciones, Casas, Habitaciones
              ">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <meta charset="utf-8"/>

    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<div class="container">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="reservations.php">Reservations</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="title">Your reservation's</div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div id="reservations-nav">
                <ul>
                    <li>Reservas de propiedades</li>
                    <li>Reservas de habitaciones</li>
                </ul>
            </div>
        </div>

        <div class="col-9">
            <div id="reservations-table">

            </div>
        </div>
    </div>

    <div class="push"></div>
</div>

<div class="footer">
    <p>© University of Barcelona.</p>
</div>
</body>
</html>