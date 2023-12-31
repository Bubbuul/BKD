<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title"></title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


</head>

<body>
    <div id="page" class="site page-single">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="#"><span class="circle"></span>Hamburgo</a></div>
                    <a href="#" class="t-close flexcenter"><span class="ri-close-line"></span></a>
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
                            <ul class="flexitem main-links">
                                <li><a href="#">Futuros productos</a></li>
                                <li><a href="#">Deseados</a></li>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li><a href="../view/login.php">Iniciar sesión</a></li>
                                <li><a href="#">Mi cuenta</a></li>
                                <li><a href="#">Domicilios</a></li>
                                <li><a href="#">COP<span class="icon-small"><i
                                                class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">COP</a></li>
                                        <li><a href="#">USD</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Español <span class="icon-small"><i
                                                class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">Español</a></li>
                                        <li><a href="#">Ingles</a></li>

                                    </ul>
                                </li>
                            </ul>
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
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="../index.php">Inicio</a></li>
                                    <li><a href="../view/page-category.php">Tienda</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                        <!-- <div class="fly-item"><span class="item-number-fav">0</span></div> -->
                                    </a></li>
                                <li class="iscart"><a href="#">
                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <div class="fly-item"><span class="item-number-cart">0</span></div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total">$0</div>
                                        </div>

                                    </a>
                                    <div class="mini-cart" id="products-id">
                                        <div class="content">
                                            <div class="cart-head">
                                                <span class="num-products">0</span> Productos
                                            </div>
                                            <div class="cart-body">
                                                <ul class="products mini">





                                                </ul>
                                            </div>
                                            <div class="cart-footer">
                                                <div class="subtotal">
                                                    <p>Subtotal</p>
                                                </div>
                                                <div class="actions">
                                                    <a href="checkout.php" class="primary-button">Pagar</a>
                                                    <a href="cart.php" class="secondary-button">Ver Carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Main -->

            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="dpt-cat">
                                <div class="dpt-head">
                                    <div class="main-text">Categorías</div>
                                    <div class="mini-text mobile-hide">Total 8 categorías</div>
                                    <a href="#" class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        <i class="ri-close-line ri-xl"></i>
                                    </a>
                                </div>

                                <div class="dpt-menu">
                                    <ul class="second-links">
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-capsule-line"></i></div>
                                                Medicamentos
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alergias</a></h4>
                                                        <ul>
                                                            <li><a href="#">Corticoides Alergias</a></li>
                                                            <li><a href="#">Rinitis</a></li>
                                                            <li><a href="#">Reacciones Alergicas y Picazón</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Alivio del Dolor</h4>
                                                        <ul>
                                                            <li><a href="#">Antihemorroidales</a></li>
                                                            <li><a href="#">Antiinflamatorios</a></li>
                                                            <li><a href="#">Artiris y Artrosis</a></li>
                                                            <li><a href="#">Dolor Fuerte y Migraña</a></li>
                                                            <li><a href="#">Dolor y Fiebre</a></li>
                                                            <li><a href="#">Esclerosis Múltiple</a></li>
                                                            <li><a href="#">Relajante Muscular</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Botiquín y Primeros Auxilios</a></h4>
                                                        <ul>
                                                            <li><a href="#">Algodones</a></li>
                                                            <li><a href="#">Antísepticos y Desinfectantes</a></li>
                                                            <li><a href="#">Curitas, Gasas, Apósitos y Vendas</a></li>
                                                            <li><a href="#">Micropore-Esparadrapo</a></li>
                                                            <li><a href="#">Ortopédicos</a></li>
                                                            <li><a href="#">Tapabocas y Guantes</a></li>
                                                            <li><a href="#">Termómetro</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Corazón y Sistema Circulatorio</a></h4>
                                                        <ul>
                                                            <li><a href="#">Antianemicos</a></li>
                                                            <li><a href="#">Antiarritmicos y Antianginosos</a></li>
                                                            <li><a href="#">Anticoagulantes</a></li>
                                                            <li><a href="#">Antiplaquetarios</a></li>
                                                            <li><a href="#">Antivaricosos y Vasodilatadores</a></li>
                                                            <li><a href="#">Cuidado de la Tensión</a></li>
                                                            <li><a href="#">Diuréticos</a></li>
                                                            <li><a href="#">Inmunoestimulantes</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Gripa y Tos</a></h4>
                                                        <ul>
                                                            <li><a href="#">Dolor de Garganta</a></li>
                                                            <li><a href="#">Expectorantes</a></li>
                                                            <li><a href="#">Mucoliticos</a></li>
                                                            <li><a href="#">Antigripales</a></li>
                                                            <li><a href="#">Descongestionantes</a></li>
                                                            <li><a href="#">Pañuelos</a></li>
                                                            <li><a href="#">Alivio Tos y Antisépticos Bucales</a></li>
                                                            <li><a href="#">Vitaminas Prevención Resfrío</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-user-heart-line"></i></div>
                                                Dermocosméticos
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Protección Solar</a></h4>
                                                        <ul>
                                                            <li><a href="#">Facial</a></li>
                                                            <li><a href="#">Corporal</a></li>
                                                            <li><a href="#">Infantil</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Cuidado Facial</h4>
                                                        <ul>
                                                            <li><a href="#">Limpieza</a></li>
                                                            <li><a href="#">Hidratación</a></li>
                                                            <li><a href="#">Antiedad</a></li>
                                                            <li><a href="#">Contorno Ojos</a></li>
                                                            <li><a href="#">Especializados y Anti Imperfecciones</a>
                                                            </li>
                                                            <li><a href="#">Cuiadado de Labios</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado Coporal</a></h4>
                                                        <ul>
                                                            <li><a href="#">Hidratantes</a></li>
                                                            <li><a href="#">Limpieza</a></li>
                                                            <li><a href="#">Tratamientos</a></li>
                                                            <li><a href="#">Desodorantes</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado del Cabello</a></h4>
                                                        <ul>
                                                            <li><a href="#">Shampoo y Acondicionador</a></li>
                                                            <li><a href="#">Tratamiento capilar</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-user-star-line"></i></div>
                                                Cuidado Personal
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado de la Piel</a></h4>
                                                        <ul>
                                                            <li><a href="#">Cuidado Facial</a></li>
                                                            <li><a href="#">Crema Corporal</a></li>
                                                            <li><a href="#">Protección Solar</a></li>
                                                            <li><a href="#">Cuidado Corporal y SPA</a></li>
                                                            <li><a href="#">Cuidado Labios</a></li>
                                                            <li><a href="#">Mascarillas</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Cuidado del Cabello</h4>
                                                        <ul>
                                                            <li><a href="#">Shampoo y Acondicionador</a></li>
                                                            <li><a href="#">Cremas de Peinar, Geles y Ceras</a></li>
                                                            <li><a href="#">Tratamientos</a></li>
                                                            <li><a href="#">Tinturas</a></li>
                                                            <li><a href="#">Planchas</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Higiene Oral</a></h4>
                                                        <ul>
                                                            <li><a href="#">Crema Dental</a></li>
                                                            <li><a href="#">Enjuague Bucal</a></li>
                                                            <li><a href="#">Cepillos Dentales y Repuestos</a></li>
                                                            <li><a href="#">Sedas Dentales</a></li>
                                                            <li><a href="#">Fijador Prótesis Dental y Accesorios</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Higiene Personal</a></h4>
                                                        <ul>
                                                            <li><a href="#">Desodorantes</a></li>
                                                            <li><a href="#">Protección Pies</a></li>
                                                            <li><a href="#">Jabones</a></li>
                                                            <li><a href="#">Pañuelos</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Afeitada y Depilación</a></h4>
                                                        <ul>
                                                            <li><a href="#">Máquienas Desechables</a></li>
                                                            <li><a href="#">Crema de Afeitar</a></li>
                                                            <li><a href="#">Máquinas y Repuestos</a></li>
                                                            <li><a href="#">Depilación</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado Femenino</a></h4>
                                                        <ul>
                                                            <li><a href="#">Protección Femenina</a></li>
                                                            <li><a href="#">Higiene Íntima</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Incontinencia</a></h4>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-hearts-fill"></i></div>
                                                Bebé y Maternidad
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alimentación y Lactancia</a></h4>
                                                        <ul>
                                                            <li><a href="#">Fórmulas Infantiles</a></li>
                                                            <li><a href="#">Fórmulas para Necesidades Especiales</a>
                                                            </li>
                                                            <li><a href="#">Cereales, Coladas y Compotas</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Pañales y Toallitas Húmedas</a></h4>
                                                        <ul>
                                                            <li><a href="#">Pañales</a></li>
                                                            <li><a href="#">Toallitas Húmedas</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Hora del Baño</a></h4>
                                                        <ul>
                                                            <li><a href="#">Cuidado del Cabello</a></li>
                                                            <li><a href="#">Jabones</a></li>
                                                            <li><a href="#">Cremas y Aceites Corporales</a></li>
                                                            <li><a href="#">Artículos de Aseo (Talcos y Copitos)</a>
                                                            </li>
                                                            <li><a href="#">Colonias y Fragancias</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Mamá</a></h4>
                                                        <ul>
                                                            <li><a href="#">Lactancia y Suplementos Alimenticios</a>
                                                            </li>
                                                            <li><a href="#">Cuidado Pezones</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-leaf-line"></i></div>
                                                Bienestar y Nutrición
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Nutrición</a></h4>
                                                        <ul>
                                                            <li><a href="#">Adulto</a></li>
                                                            <li><a href="#">Niño</a></li>
                                                            <li><a href="#">Diabetes</a></li>
                                                            <li><a href="#">Especializada</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Vitaminas y Minerales</h4>
                                                        <ul>
                                                            <li><a href="#">Vitaminas</a></li>
                                                            <li><a href="#">Minerales</a></li>
                                                            <li><a href="#">Calcio y Huesos</a></li>
                                                            <li><a href="#">Belleza y Cuidado de la Piel</a></li>
                                                            <li><a href="#">Belleza Mujer</a></li>
                                                            <li><a href="#">Calcio y Osteoporosis</a></li>
                                                            <li><a href="#">Menopausia</a></li>
                                                            <li><a href="#">Vitaminas Prevención Refrío</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Suplemento Nutricional</a></h4>
                                                        <ul>
                                                            <li><a href="#">Colágenos</a></li>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Suplementos Dietarios</a></h4>
                                                        <ul>
                                                            <li><a href="#">Calcio Mujer</a></li>
                                                            <li><a href="#">Menopausia</a></li>
                                                            <li><a href="#">Antidiarreicos</a></li>
                                                            <li><a href="#">Artritis y Artrosis</a></li>
                                                            <li><a href="#">Belleza Mujer</a></li>
                                                            <li><a href="#">Colon Irritable</a></li>
                                                            <li><a href="#">Edulcorantes</a></li>
                                                            <li><a href="#">Laxantes</a></li>
                                                            <li><a href="#">Otros Suplementos</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Deporte</a></h4>
                                                        <ul>
                                                            <li><a href="#">Control de Peso</a></li>
                                                            <li><a href="#">Rehidratantes</a></li>
                                                            <li><a href="#">Suplemento Nutricional</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Alimentos Saludables</a></h4>
                                                        <ul>
                                                            <li><a href="#">Snacks Saludables</a></li>
                                                            <li><a href="#">Bebidas Funcionales</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-parent-line"></i></div>
                                                Salud Sexual
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alivio del Dolor</a></h4>
                                                        <ul>
                                                            <li><a href="#">Anestésicos Hombre</a></li>
                                                            <li><a href="#">Antiespasmódicos Hombre</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Anticoceptivos</a></h4>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado de Próstata</a></h4>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Disfunción Eréctil</a></h4>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Lubricantes e Higiene Mujer</a></h4>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Preservativos y Accesorios</a></h4>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Test de Diagnósticos</a></h4>
                                                        <ul>
                                                            <li><a href="#">Test Embarazo y Ovulación</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Tratamiento Testosterona</a></h4>
                                                        <ul>
                                                            <li><a href="#">Androgenoterapia</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-eye-close-line"></i></div>
                                                Belleza
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Cuidado Corporal</a></h4>
                                                        <ul>
                                                            <li><a href="#">Depilación</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Cuidado del Cabello</h4>
                                                        <ul>
                                                            <li><a href="#">Shampoo y Acondicionador</a></li>
                                                            <li><a href="#">Cremas de Peinar, Geles y Ceras</a></li>
                                                            <li><a href="#">Trataminetos</a></li>
                                                            <li><a href="#">Tinturas</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Maquillaje</a></h4>
                                                        <ul>
                                                            <li><a href="#">Ojos</a></li>
                                                            <li><a href="#">Rostro</a></li>
                                                            <li><a href="#">Uñas</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Acessorios</a></h4>
                                                        <ul>
                                                            <li><a href="#">Cabello</a></li>
                                                            <li><a href="#">Accesorios Manicure Pedicure</a></li>
                                                            <li><a href="#">Maquillaje</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Perfumes</a></h4>
                                                        <ul>
                                                            <li><a href="#">Packs (Estuchería)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-cup-line"></i></div>
                                                Alimentos y Bebidas
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alimentos Saludables</a></h4>
                                                        <ul>
                                                            <li><a href="#">Abarrotes</a></li>
                                                            <li><a href="#">Endulzantes</a></li>
                                                            <li><a href="#">Aguas y Té</a></li>
                                                            <li><a href="#">Snacks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Bebidas</h4>
                                                        <ul>
                                                            <li><a href="#">Aguas</a></li>
                                                            <li><a href="#">Gaseosas</a></li>
                                                            <li><a href="#">Jugos</a></li>
                                                            <li><a href="#">Té</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Snacks</a></h4>
                                                        <ul>
                                                            <li><a href="#">Snacks Salados</a></li>
                                                            <li><a href="#">Snacks Dulces</a></li>
                                                            <li><a href="#">Chocolates</a></li>
                                                            <li><a href="#">Chicles y Mentas</a></li>
                                                            <li><a href="#">Gomitas</a></li>
                                                            <li><a href="#">Helados</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Busca tus productos">
                                    <button type="submit">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header -->

        <main>

            <?php
                include("../php/conexion.php");
                
                $id = $_GET['index'];
                $queryM = "SELECT * FROM `productos` WHERE `id_prod`=  $id ";

                $resultado = mysqli_query($conex, $queryM);
                $datos = mysqli_fetch_assoc($resultado);

                $id_prod = $datos['id_prod'];
                $offertNow = $datos['offert_now'];
                $nombre_producto = $datos['nombre_producto'];
                $oferta_producto = $datos['oferta_producto'];
                $precio_producto = $datos['precio_producto']; 
                $producto_vendido = $datos['producto_vendido'];
                $producto_stock = $datos['producto_stock'];
                $producto_comentario = $datos['producto_comentario'];
                $producto_detalle = $datos['producto_detalle'];
                $img_producto_frente = base64_encode($datos['img_producto_frente']);
                $img_producto_reverso = base64_encode($datos['img_producto_reverso']);
                ?>


            <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="#"></a>Inicio</li>
                                <li><a href="#"></a>Ofertas</li>
                                <li><a href="#" id="nameplace"></a></li>
                            </ul>
                        </div>
                        <!-- breadcrumb -->
                        <div class="column">
                            <div class="products one">
                                <div class="flexwrap">
                                    <div class="row">
                                        <div class="item is_sticky">
                                            <div class="price">
                                                <span class="discount contentOffertAvailable" id="discount">0%<br>OFF</span>
                                            </div>
                                            <div class="big-image">
                                                <div class="big-image-wrapper swiper-wrapper">
                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox id="image_full" class="image_img_full"><img
                                                                src="" class="big_img" alt=""></a>
                                                    </div>

                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox id="image_full_back"
                                                            class="image_img_full"><img src="" class="big_img_back"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>

                                            <div thumbSlider="" class="small-image">
                                                <ul class="small-image-wrapper flexitem swiper-wrapper">
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="" class="big_img" alt="">
                                                    </li>

                                                    <li class="thumbnail-show swiper-slide ">
                                                        <img src="" class="big_img_back" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1 class="name-product" id="nameProduct"></h1>
                                            <div class="content">
                                                <div class="rating">
                                                    <div class="stars"></div>
                                                    <a href="#" class="mini-text" id="commentsCount"> comentarios</a>
                                                    <a href="" class="add-review mini-text">Añadir tu comentario</a>
                                                </div>
                                                <div class="stock-sku">
                                                    <span class="available">En Venta</span>

                                                </div>
                                                <div class="price">
                                                    <span class="current " id="priceCurrent"></span>
                                                    <span class="normal contentOffertAvailable" id="priceNormal"></span>
                                                </div>

                                                 <div class="stock mini-text contentOffertAvailable" data-stock="4000">
                                                    <div class="qty">
                                                        <span>Vendidos:<strong class="qty-sold"
                                                                id="productosVendidos">3459</strong></span>
                                                        <span>Stock:<strong class="qty-available"
                                                                id="productosStock">107</strong></span>
                                                    </div>
                                                    * <div class="bar">
                                                        <div class="available">

                                                        </div>
                                                    </div>
                                                </div>
                                                 <div  class="offer contentOffertAvailable">
                                                    <p>La oferta acaba en:</p>
                                                    <ul class="flexcenter">
                                                        <li>
                                                            <div id="dias">NA</div>
                                                        </li>
                                                        <li>
                                                            <div id="horas">NA</div>
                                                        </li>
                                                        <li>
                                                            <div id="minutos">NA</div>
                                                        </li>
                                                        <li>
                                                            <div id="segundos">NA</div><i>
                                                    </ul>
                                                </div>
                                                <div class="actions">
                                                    <div class="qty-control flexitem">

                                                        <button class="minus circle">-</button>
                                                        <input class="input_number" type="text" value="0">
                                                        <button class="plus circle">+</button>
                                                    </div>
                                                    <div class="button-cart" id="product-id"><button
                                                            class="primary-button">Añadir al Carrito</button></div>
                                                    <div class="wish-share">
                                                        <ul class="flexitem second-links">
                                                            <li><a href="#">
                                                                    <span class="icon-large"><i
                                                                            class="ri-heart-line"></i></span>
                                                                    <span>Lista de Deseos</span>
                                                                </a></li>
                                                            <li><a href="#">
                                                                    <span class="icon-large"><i
                                                                            class="ri-share-line"></i></span>
                                                                    <span>Compartir</span>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child">
                                                            <a href="#0" class="icon-small">Detalles</a>
                                                            <div class="content">
                                                                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing
                                                                    elit. Dicta excepturi cupiditate distinctio magni et
                                                                    veritatis eaque quam vel quaerat enim ipsum nihil,
                                                                    ducimus, provident recusandae consequuntur!
                                                                    Doloremque in dignissimos expedita!</p>
                                                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Dolorem veritatis soluta, aliquid sit
                                                                    recusandae atque omnis magni inventore illo totam
                                                                    quis, natus aliquam! Recusandae rerum laborum atque
                                                                    accusamus ipsam nisi.</p>
                                                            </div>
                                                        </li>

                                                        <li class="has-child">
                                                            <a href="#" class="icon-small">Comentarios<span
                                                                    class="mini-text"
                                                                    id="commentsCurrentBig"></span></a>
                                                            <div class="content">
                                                                <div class="reviews">
                                                                    <h4>Reseñas Clientes</h4>
                                                                    <div class="review-block">
                                                                        <div class="review-block-head">
                                                                            <div class="flexitem">
                                                                                <span class="rate-sum">4.9</span>
                                                                                <span id="commentsSpan"> </span>
                                                                            </div>
                                                                            <a href="#review-form"
                                                                                class="secondary-button">Escribir
                                                                                Comentario</a>
                                                                        </div>
                                                                        <div class="review-block-body">
                                                                            <ul class="reviewList">

                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                    <form method="post">
                                                                        <div id="review-form" class="review-form">
                                                                            <h4>Escribir Comentario</h4>
                                                                            <div class="rating">
                                                                                <p>¿Estas lo suficientemente satisfecho
                                                                                    (a)?</p>
                                                                                <div class="rate-this">
                                                                                    <input class="star_rating"
                                                                                        type="radio" name="rating"
                                                                                        id="star5" value="5">
                                                                                    <label for="star5"><i
                                                                                            class="ri-star-fill"></i></label>

                                                                                    <input class="star_rating"
                                                                                        type="radio" name="rating"
                                                                                        id="star4" value="4">
                                                                                    <label for="star4"><i
                                                                                            class="ri-star-fill"></i></label>

                                                                                    <input class="star_rating"
                                                                                        type="radio" name="rating"
                                                                                        id="star3" value="3">
                                                                                    <label for="star3"><i
                                                                                            class="ri-star-fill"></i></label>

                                                                                    <input class="star_rating"
                                                                                        type="radio" name="rating"
                                                                                        id="star2" value="2">
                                                                                    <label for="star2"><i
                                                                                            class="ri-star-fill"></i></label>

                                                                                    <input class="star_rating"
                                                                                        type="radio" name="rating"
                                                                                        id="star1" value="1">
                                                                                    <label for="star1"><i
                                                                                            class="ri-star-fill"></i></label>
                                                                                </div>
                                                                            </div>

                                                                            <p>
                                                                                <label>Nombre</label>
                                                                                <input class="nombre_comment"
                                                                                    type="text" name="nombre_comment">
                                                                            </p>
                                                                            <p>
                                                                                <label>Resumen</label>
                                                                                <input class="comment_preview"
                                                                                    type="text" name="comment_preview">
                                                                            </p>
                                                                            <p>
                                                                                <label>Comentario</label>
                                                                                <textarea class="comment" cols="30"
                                                                                    rows="10" name="comment"></textarea>
                                                                            </p>
                                                                            <!-- <p><a href="#" class="primary-button">Enviar Comentario</a></p> -->
                                                                            <button class="primary-button"
                                                                                name="comentarios">Enviar
                                                                                comentario</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    </main>

    <footer>
        <div class="newsletter">
            <div class="container">
                <div class="wrapper">
                    <div class="box">
                        <div class="content">
                            <h3>Ingresa a nuestras noticias.</h3>
                            <p>Ingresa tu correo electronico para recibir<strong> Ofertas especiales.</strong></p>
                        </div>
                        <form action="" class="search">
                            <span class="icon-large"><i class="ri-mail-line"></i></span>
                            <input type="mail" placeholder="Tu correo electronico" required>
                            <button type="submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- nesletter-->

        <div class="widgets">
            <div class="widgets">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexwrap">
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Ayuda & Contacto</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Tu cuenta</a></li>
                                        <li><a href="#">Tus Ordenes</a></li>
                                        <li><a href="#">Calificacion de Envios</a></li>
                                        <li><a href="#">Regresos</a></li>
                                        <li><a href="#">Asistencia</a></li>
                                        <li><a href="#">Ayuda</a></li>
                                        <li><a href="#">Contactanos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Categoria de Productos</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Medicamentos</a></li>
                                        <li><a href="#">Dermocosméticos</a></li>
                                        <li><a href="#">Cuidado Personal</a></li>
                                        <li><a href="#">Bebe y Maternidad</a></li>
                                        <li><a href="#">Bienestar y Nutrición</a></li>
                                        <li><a href="#">Salud Sexual</a></li>
                                        <li><a href="#">Belleza</a></li>
                                        <li><a href="#">Alimentos y Bebidas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Info Pagos</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Bussines Card</a></li>
                                        <li><a href="#">Shop Whit Points</a></li>
                                        <li><a href="#">Reload Your Balance</a></li>
                                        <li><a href="#">Paypal</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Sobre Nosotros</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Info Compañia</a></li>
                                        <li><a href="#">Noticias</a></li>
                                        <li><a href="/view/somos.php">Inventores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widgets -->

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

    <div class="menu-bottom desktop-hide">
        <div class="container">
            <div class="wrapper">
                <nav>
                    <ul class="flexitem">
                        <li>
                            <a href="#">
                                <i class="ri-bar-chart-line"></i>
                                <span>Mas Buscado</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-user-6-line"></i>
                                <span>Cuenta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ri-heart-line"></i>
                                <span>Lista de Deseados</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="t-search">
                                <i class="ri-search-line"></i>
                                <span>Buscar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="ri-shopping-cart-line"></i>
                                <span>Carrito</span>
                                <div class="fly-item">
                                    <span class="item-number-mincart">0</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- menu bottom -->

    <div class="search-bottom desktop-hide">
        <div class="container">
            <div class="wrapper">

                <form action="" class="search">
                    <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                    <span class="icon-large"><i class="ri-search-line"></i></span>
                    <input type="search" placeholder="Busca tus productos" required>
                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- search bottom -->

    <div class="overlay"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/renderCart.js"></script>
    <script src="../js/cantidad.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        //contador de promociones
        const countDate = new Date('october 20, 2023 00:00:00').getTime();

        function newYear() {
            const now = new Date().getTime();
            gap = countDate - now;

            const segundos = 1000;
            const minutos = segundos * 60;
            const horas = minutos * 60;
            const dias = horas * 24;

            const d = Math.floor(gap / (dias));
            const h = Math.floor((gap % (dias)) / (horas));
            const m = Math.floor((gap % (horas)) / (minutos));
            const s = Math.floor((gap % (minutos)) / (segundos));

            document.getElementById('dias').innerText = d;
            document.getElementById('horas').innerText = h;
            document.getElementById('minutos').innerText = m;
            document.getElementById('segundos').innerText = s;
        }

        setInterval(function () {
            newYear();
        }, 1000);
    </script>


    <script>

        let id_prod = <?= json_encode($id_prod) ?>;
        let offertNow = <?= json_encode($offertNow) ?>;
        let nombre_producto = <?= json_encode($nombre_producto) ?>;
        let oferta_producto = <?= json_encode($oferta_producto) ?>;
        let precio_producto = <?= json_encode($precio_producto) ?>;
        let producto_vendido = <?= json_encode($producto_vendido) ?>;
        let producto_stock = <?= json_encode($producto_stock) ?>;
        let producto_comentario = <?= json_encode($producto_comentario) ?>;
        let producto_detalle = <?= json_encode($producto_detalle) ?>;
        let img_producto_reverso = '<?= $img_producto_reverso ?>';
        let img_producto_frente = '<?= $img_producto_frente ?>';

    </script>
    <script src="../js/getProduct.js"></script>
    <?php
include("../php/comentarios.php");
?>

</body>

</html>