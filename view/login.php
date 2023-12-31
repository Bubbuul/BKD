<?php
session_start();
include("../php/registro.php");
include("../php/login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburgo D.C</title>
    <link rel="stylesheet" href="../css/index.css">
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
</head>
<body>
    
</body>
</html>
</head>
<body>
    <div id="page" class="site page-home">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="../index.php"><span class="circle"></span>Hamburgo</a></div>
                    <a href="../index.php" class="t-close flexcenter"><span class="ri-close-line"></span></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        
        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="../index.php"><span class="circle"></span>Hamburgo D.C</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Main -->

            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- Login -->
        <section class="form-register">
            <div class="container-log" id="container-log">
                <div class="form-container sign-up-container">
                    <form class="registro" method="post">
                        <h1>Crear Cuenta</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="ri-google-fill"></i></a>
                            <a href="#" class="social"><i class="ri-chrome-fill"></i></a>
                            <a href="#" class="social"><i class="ri-apple-fill"></i></a>
                        </div>
                        <span>Usa tu Gmail para crear una cuenta</span>
                        <input class="campo" type="text" name="nombres" placeholder="Nombre completo" />
                        <input class="campo" type="email" name="correo" placeholder="Email" />
                        <input class="campo" type="password" name="contrasena"placeholder="Contraseña" />
                        <select class="select" name="tip_doc" id="tip_doc">
                            <option value="0">Seleccione su tipo de documento</option>

                            <?php
                            include("../php/conexion.php");

                            $tipDocument = "SELECT * FROM `tip_documento`";

                            $resultado = mysqli_query($conex,$tipDocument);
                            while($valores = mysqli_fetch_array($resultado)){
                            echo '<option value ="' .$valores['id_doc']. '">' .$valores['descripcion']. '</option>';
                            }
                            ?>
                        </select>
                        <input class="campo" type="text" name="num_doc" placeholder="Numero de documento" />
                        <button class="registro" name="registro">Crear Cuenta</button>
                    </form>
                </div>
                <div class="form-container sign-in-container">
                    <form class="login" method="post" action="">
                        <h1>Ingresar</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="ri-google-fill"></i></a>
                            <a href="#" class="social"><i class="ri-chrome-fill"></i></i></a>
                            <a href="#" class="social"><i class="ri-apple-fill"></i></a>
                        </div>
                        <span>Usa tus cuentas</span>
                        <input class="campo" type="text" placeholder="Email" name="nom" />
                        <input class="campo" type="password" placeholder="Contraseña" name="contrasena" />
                        <a class="registro" href="#">Olvidaste tu contraseña?</a>
                        <button class="inicio_sesion" name="inicio_sesion">Iniciar Sesion</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay-log">
                        <div class="overlay-panel overlay-left">
                            <h1>Bienvenido de Nuevo!</h1>
                            <p>Para quedarte conectado con nosotros por favor inicia con tu informacion personal.</p>
                            <button class="ghost" id="signIn">Iniciar Sesion</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hola, Amigo!</h1>
                            <p>Ingresa tus datos personales y comienza tu experiencia con nosotros.</p>
                            <button class="ghost" id="signUp">Crear Cuenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>            
            <div class="footer-info">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexcol">
                            <div class="logo">
                                <a href="#"><span class="circle"></span>Hamburgo</a>
                            </div>
                            <div class="socials">
                                <ul class="flexitem">
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                                    <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="mini-text">Copyright 2023 © .Store. All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

        <!-- menu bottom -->

        <div class="search-bottom desktop-hide">
            <div class="container">
                <div class="wrapper">
                    
                    <form action="" class="search">
                        <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                        <span class="icon-large"><i class="ri-search-line"></i></span>
                        <input type="search" placeholder="Your email address" required>
                        <button type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- search bottom -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/login.js"></script>
</body>
</html> 