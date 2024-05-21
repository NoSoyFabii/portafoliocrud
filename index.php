<?php
include('connection.php');

$con =connection();

$sql="SELECT * FROM users";

$query =mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css rel=stylesheet
        crossorigin=anonymous
        integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
        referrerpolicy=no-referrer>
    <link rel=stylesheet href=CSS/stylehtml.css >
    <link rel="stylesheet" href="CSS/style.css">
    <title>MI PORTAFOLIO-FABIOLA</title>
</head>

<body>
    <style>
        #loader {
            background: #000 url(img/loader.gif) no-repeat center;
            background-size: 15%;
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 10000
        }
    </style>
    <div id=loader></div>
    <script>window.addEventListener('load', function () {
            let x = document.getElementById('loader');
            x.style.display = 'none';
        })</script>
    <header><a href=# class=logo>MI <span>PORTAFOLIO</span>.</a>
        <div class="bx bx-menu" id=menu-icon></div>
        <ul class=navbar>
            <li><a href=#home>Menú</a>
            <li><a href=#about>Acerca de mí</a>
            <li><a href=#services>Proyectos</a>
            <li><a href=#contact>Contáctame</a></li>
        </ul>
    </header>
    <section class=home id=home>
        <div class=social><a href=https://github.com/NoSoyFabii><i class="bx bxl-github"></i></a> <a href=https://www.instagram.com/fabiolaaaa.gg><i
                    class="bx bxl-instagram"></i></a> <a href=https://www.facebook.com/fabiola.andrea.1253?locale=es_LA><i
                    class="bx bxl-facebook"></i></a></div>
        <div  align="center"><img alt="Imagen de Fabiola" src=img/fabiola.png  width="350" height="350"  alt=" " ></div>
        <div class=home-text><span>Hola, soy</span>
            <br>
            <br>
            <h1>Fabiola Andrea</h1>
            <br>
    
            <h2><b>Estudiante de Ing de Sistemas e Informática</b></h2>

            <br>
            <p>Soy estudiante de tercer año en la carrera de Ingeniería de Sistemas en la UNAM , Moquegua.</p>
            
        </div>
    </section>
    <section class=about id=about>
        <div class=heading>
            <h2>Acerca de mí</h2><span>Introducción</span>
        </div>
        <div class=about-container>
            <div class=about-img><img alt="Imagen de fabiola" src=img/yo.jpg></div>
            <div class=about-text>
                <p>Soy una estudiante de tercer año de la carrera de Ingeniería de Sistemas e Informatica, me considero una persona aplicada y responsable. Soy muy apasionada con la tecnología . Tengo una actitud positiva y me gustan los retos. Me gusta mucho aprender cosas nuevas para que así puedan ayudarme a mejorar.
                <br>
                <br>
                    <div class=information>
                    <div class=info-box><i class="bx bx-laptop"></i> <span>Fabiolaap</span></div>
                    <div class=info-box><i class="bx bxs-phone"></i> <span>+51 957 771 548</span></div>
                    <div class=info-box><i class="bx bxs-envelope"></i> <span><a
                                href=fabiolaancco386@gmail.com>fabiolaancco386@gmail.com</a></span></div>
                </div><a href=https://github.com/NoSoyFabii class=btn>GITHUB</a>
            </div>
        </div>
    
    <section class=services id=services>
        <div class=heading>
            <h2>Proyectos</h2><span>En este apartado se podrán observar mis proyectos realizados</span>
        </div>
        <div class=services-content>
            <div class=services-box><i class="bx bx-code-alt"></i>
                <h3>Mi Portafolio</h3><a href=https://nosoyfabii.github.io/miportafolio/> Clcik Aquí</a>
            </div>
            <div class=services-box><i class="bx bx-server"></i>
                <h3>Archivos</h3><a href=#>Click Aquí</a>
            </div>
            <div class=services-box><i class="bx bx-bookmark-heart"></i>
                <h3>Diseño</h3><a href='#'>Click Aquí</a>
            </div>
            <div class=services-box><i class="bx bxl-android"></i>
                <h3>Aplicaciones Web</h3><a href=#>Click Aquí</a>
            </div>
        </div>
    </section>
    <section class=contact id=contact>
        <div class=heading>
            <h2>CONTACTO</h2><span>Aquí te dejo toda la información</span>
        </div>
        <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1> REGISTRA TUS DATOS</h1>

            <input type="text" required name="name" placeholder="Nombre">
            <input type="text" required name="lastname" placeholder="Apellido">
            <input type="text" required name="direccion" placeholder="Direccion">
            <input type="text" required name="celular" placeholder="Celular">
            <input type="text" required name="email" placeholder="Email">

            <input type="submit" value="Enviar">
        </form>
    </div>

    <div class="users-table">
        <h2> Usuarios Registrados </h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['lastname'] ?> </th>
                    <th> <?= $row['direccion'] ?> </th>
                    <th> <?= $row['celular'] ?> </th>
                    <th> <?= $row['email'] ?> </th>

                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit" >Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete"> Eliminar</a></th>
                </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
    </section>
    <div class=footer>
        <h2>Mis Redes Sociales</h2>
        <div class=footer-social><a href=https://www.facebook.com/fabiola.andrea.1253?locale=es_LA><i class="bx bxl-facebook"></i></a> <a href=https://x.com/fab__gg><i
                    class="bx bxl-twitter"></i></a> <a href=https://www.instagram.com/fabiolaaaa.gg><i class="bx bxl-instagram"></i></a> <a href=https://www.youtube.com/channel/UCTqI4o8_i9n9EQrQ0vtw4dg><i
                    class="bx bxl-youtube"></i></a></div>
    </div>
    <div class=copyright>©Fabiola Andrea. CopyRight  .</div>
    <script src=./js/script.js></script>