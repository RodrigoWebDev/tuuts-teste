    <?php get_header("blog");?>
    <!---------------  SLIDER  --------------->

    <section id="top" class="hero">
        <?php the_post_thumbnail() ?>
        <h1><?php the_title();?></h1>
    </section>

    <article class="single-post">
        <div class="container">
           <div class="row">
              <?php 
                while(have_posts()){
                    the_post();
                ?>
               <div class="col-md-4">
                   <p class="text-center text-md-left">Por <a href="<?php the_permalink();?>"><?php the_author();?></a></p>
               </div>
               <div class="col-md-4">
                    <p class="text-center">No dia <?php echo get_the_date();?></p>
               </div>
               <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                   <p><span><?php the_category();?></span>  <span class="ml-2"><?php the_tags("<span>Tags:</span> ", ", ");?></span></p>
               </div>
                
           </div>
           <hr>
            <p><?php the_content();?></p>
            <hr>
            <?php 
                if(comments_open() || get_comments_number()){
                        comments_template();
                    }
                } 
            ?>
        </div>
    </article>
    <!---------------  FOOTER  --------------->
    <?php get_footer("blog");?>

    
