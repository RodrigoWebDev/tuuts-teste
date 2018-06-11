<?php get_header();?>
<!---------------  SLIDER  --------------->

<section id="top" class="slider wow fadeIn">
    <?php echo do_shortcode('[metaslider id="8"]'); ?>
</section>

<!---------------  ABOUT  --------------->

<section id="about" class="about wow fadeInUp">
    <div class="container">
        <h2 class="title">Sobre a <span class="text-uppercase">Tuut</span></h2>
        <div class="alert alert-dark">
            <p>A <span class="font-weight-bold text-uppercase">Tuut</span> conduz seu negócio com inteligência emocional, pensamento criativo e entusiasmo coletivo. Primado por uma comunicação integrada, nossa plataforma de atuação é múltipla e o nosso posicionamento e multidisciplinar. Aqui, a gente executa todo o projeto com estratégia, conceito, conteúdo e design. Raciocinamos em todas as mídias, viabilizando projetos para pequenas e grandes marcas, no Brasil e no exterior</p>
        </div>
    </div>
</section>

<!---------------  GALLERY  --------------->

<section class="gallery wow fadeInUp">
    <div class="container">
        <h2 class="title">Galeria <span class="text-uppercase">Tuut</span></h2>
        <?php echo do_shortcode('[supsystic-gallery id=1]') ?>
    </div>
</section>

<!---------------  PORTFOLIO  --------------->

<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="title wow fadeInUp">Alguns de nossos projetos</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="portfolio__ul">
                    <div class="alert alert-dark wow fadeInUp" role="alert">Projeto 1</div>
                    <div class="alert alert-darkness wow fadeInUp" role="alert">Projeto 2</div>
                    <div class="alert alert-dark wow fadeInUp" role="alert">Projeto 3</div>
                    <div class="alert alert-darkness wow fadeInUp" role="alert">Projeto 4</div>
                    <div class="alert alert-dark wow fadeInUp" role="alert">Projeto 5</div>
                    <div class="alert alert-darkness wow fadeInUp" role="alert">Projeto 6</div>
                    <div class="alert alert-dark wow fadeInUp" role="alert">Projeto 7</div>
                </ul>
            </div>
            <div class="portfolio__desc col-md-6 wow fadeInUp">
                <p>Nosso trabalho é feito em parceria com nossos clientes. Um trabalho a quatro mãos, em que nos envolvemos em todos os meandros do processo, propondo soluções práticas e acompanhando os resultados</p>
                <div class="project">Projeto 1</div>
            </div>
        </div>
    </div>

</section>

<!---------------  BLOG  --------------->


<section class="blog wow fadeInUp">
    <div class="container">
       <h2 class="title">Blog da <span class="text-uppercase">Tuut</span></h2>
       <div class="row">
            <?php 

                $featured = new WP_Query("type=post&posts_per_page=1");

                if($featured -> have_posts()){
                    while($featured -> have_posts()){
                        $featured -> the_post();
                        get_template_part("featured","post");
                    }
                    wp_reset_postdata();
                }
        
                $posts = new WP_Query("type=post&posts_per_page=2&offset=1");

                if($posts -> have_posts()){
                    while($posts -> have_posts()){
                        $posts -> the_post();
                        get_template_part("post");
                    }
                    wp_reset_postdata();
                }
                
            ?>
        </div>
    </div>
</section>

<!---------------  FOOTER  --------------->
<?php get_footer();?>
