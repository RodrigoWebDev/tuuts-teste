<?php get_header("blog");?>
<!---------------  SLIDER  --------------->

<section id="top" class="slider wow fadeIn">
    <?php echo do_shortcode('[metaslider id="8"]'); ?>
</section>


<div class="container">
    <div class="row">
       
       <!---------------  SIDEBAR  --------------->
        <div class="col-md-4 order-2 order-md-1 wow fadeInUp">
            <aside class="sidebar">
                <?php get_search_form();?>
                <?php get_sidebar();?>
            </aside>
        </div>
        
        <!---------------  BLOG  --------------->
        <div class="col-md-8 order-1 order-md-2 wow fadeInUp">
            <section class="blog" style="background:none;color:inherit;padding:0">
               <div class="row">
                    <?php 
                        if(have_posts()){
                            while(have_posts()){
                                the_post();
                                get_template_part("post");
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>

<!---------------  FOOTER  --------------->
<?php get_footer("blog");?>
