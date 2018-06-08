<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tuut</title>
    <?php wp_head();?>
</head>

<body>
    <nav class="sticky-top navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Tuut</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Porfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!---------------  SLIDER  --------------->

    <section id="top" class="slider">
        <h2>Aqui vai o Slider! :D</h2>
    </section>

    <!---------------  ABOUT  --------------->
    <div class="container">
        <hr>
    </div>

    <section id="about" class="about">
        <div class="container">
            <h2 class="title">Sobre a <span class="text-uppercase">Tuut</span></h2>
            <div class="alert alert-dark">
                <p>A <span class="font-weight-bold text-uppercase">Tuut</span> conduz seu negócio com inteligência emocional, pensamento criativo e entusiasmo coletivo. Primado por uma comunicação integrada, nossa plataforma de atuação é múltipla e o nosso posicionamento e multidisciplinar. Aqui, a gente executa todo o projeto com estratégia, conceito, conteúdo e design. Raciocinamos em todas as mídias, viabilizando projetos para pequenas e grandes marcas, no Brasil e no exterior</p>
            </div>
        </div>
    </section>

    <!---------------  GALLERY  --------------->
    <div class="container">
        <hr>
    </div>

    <section class="gallery">
        <h2 class="title">Galeria <span class="text-uppercase">Tuut</span></h2>
        <div>
            <h2>Aqui vai a GALERIA :D!</h2>
        </div>
    </section>

    <!---------------  GALLERY  --------------->
    <div class="container">
        <hr>
    </div>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="title">Alguns de nossos projetos</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="portfolio__ul">
                        <div class="alert alert-dark" role="alert">Projeto 1</div>
                        <div class="alert alert-darkness" role="alert">Projeto 2</div>
                        <div class="alert alert-dark" role="alert">Projeto 3</div>
                        <div class="alert alert-darkness" role="alert">Projeto 4</div>
                        <div class="alert alert-dark" role="alert">Projeto 5</div>
                        <div class="alert alert-darkness" role="alert">Projeto 6</div>
                        <div class="alert alert-dark" role="alert">Projeto 7</div>
                    </ul>
                </div>
                <div class="portfolio__desc col-md-6">
                    <p>Nosso trabalho é feito em parceria com nossos clientes. Um trabalho a quatro mãos, em que nos envolvemos em todos os meandros do processo, propondo soluções práticas e acompanhando os resultados</p>
                    <div class="project">Projeto 1</div>
                </div>
            </div>
        </div>

    </section>

    <!---------------  GALLERY  --------------->
    <div class="container">
        <hr>
    </div>


    <section class="blog">
        <h2>Aqui vai os 2 posts mais recentes</h2>
    </section>

    <!---------------  FOOTER  --------------->

    <footer class="footer">
        <div class="container">
            <a class="navbar-brand">Tuut</a>
            <div class="footer__social">
                <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    
    <?php wp_footer()?>

    <!--<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/script.js"></script>-->
</body>

</html>