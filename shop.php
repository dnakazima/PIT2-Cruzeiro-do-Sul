<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/dario.js"></script>
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>

<body>


    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <!--<ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul> -->
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <!-- <ul>
                                    <li>USD <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>EUR</li>
                                            <li>USD</li>
                                        </ul>
                                    </li>
                                    <li>ENG <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>Spanish</li>
                                            <li>ENG</li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
                                </ul>-->
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <!--
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about.html">Sobre</a></li>
                            <li><a href="./shop.php">Compras</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="">Cadastra-se</a>
                                <ul class="dropdown">
                                    <li><a href="pesquisar_usuario.html">Pesquisar usuario/login</a></li>
                                    <li><a href="userLogin.html">Cadastrar/Login</a></li>
                                    <li><a href="tela_login.php">Fazer login</a></li>
                                    <li><a href="gerenciar.php">Gerenciar</a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contato</a></li>
                            <li><a href="logout.php">Logout/Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>


                            <!-------------------------------------------------------------------->
                            <div align="center">
                                DÚZIA DE CUPCAKES <br> <strong>R$ 32,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd1">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('DÚZIA DE CUPCAKES', document.getElementById('qtd1').value, '32.00', 1)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->



                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-2.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>

                            <!-------------------------------------------------------------------->
                            <div align="center">
                                BISCOITOS E CREME <br> <strong>R$ 30,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd2">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('BISCOITOS E CREME', document.getElementById('qtd2').value, '30.00', 2)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-3.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                MINI DÚZIA SEM GLÚTEN <br> <strong>R$ 31,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd3">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('MINI DÚZIA SEM GLÚTEN', document.getElementById('qtd3').value, '30.00', 3)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-4.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                MASSA DE BISCOITO <br> <strong>R$ 31,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd4">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('MASSA DE BISCOITO', document.getElementById('qtd4').value, '31.00', 4)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-5.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                CARAMELO SALGADO DE BAUNILHA <br> <strong>R$ 5,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd5">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CARAMELO SALGADO DE BAUNILHA', document.getElementById('qtd5').value, '5.00', 5)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-6.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                CHOCOLATE ALEMÃO <br> <strong>R$ 14,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd6">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('CHOCOLATE ALEMÃO', document.getElementById('qtd6').value, '14.00', 6)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-7.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                DOCE DE LEITE <br> <strong>R$ 32,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd7">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('DOCE DE LEITE', document.getElementById('qtd7').value, '32.00', 7)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-8.jpg">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"></a></h6>
                            <!-------------------------------------------------------------------->
                            <div align="center">
                                ESPECIAL DO MISSISSIPI<br> <strong>R$ 32,00</strong><br>
                                qtd: <input type="number" value="0" min="1" max="10" id="qtd8">
                                <button type="button" id="adicionar1" id="produto1" onclick="AddCarrinho('ESPECIAL DO MISSISSIPI', document.getElementById('qtd8').value, '32.00', 8)"> Comprar </button>
                            </div>
                            <!-------------------------------------------------------------------->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p align="center">
            <a href="carrinho.html" style="color:#8ebdb6; font-size:x-large; border: 5px solid gray;padding:5px; " onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#0000FF'"> Ver Carrinho de compras </a>
        </p>



    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Horários</h6>
                        <ul>
                            <li>Segunda - Sexta: 08:00 – 08:30 </li>
                            <li>Sábado: 10:00 – 16:30 </li>
                            <li>Domingo: 10:00 – 16:30 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo_dario.png" alt=""></a>
                        </div>
                        <p>A gratidão de quem recebe um benefício é bem menor que o prazer daquele de quem o faz.
                            Machado de Assis

                            Disponível em: <https: //dicionariocriativo.com.br/citacoes/agradecimento/citacoes/gratid%C3%A3o>. Acesso em:
                                03/09/2023.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>SE INSCREVER</h6>
                        <p>Receba as últimas atualizações e ofertas.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This
                            template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="copyright__widget">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>