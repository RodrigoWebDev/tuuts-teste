<?php get_header("blog");?>
<!---------------  SLIDER  --------------->

<section id="top" class="slider">
    <?php echo do_shortcode('[metaslider id="8"]'); ?>
</section>


<div class="container">
    <div class="row">
       
       <!---------------  SIDEBAR  --------------->
        <div class="col-md-4 order-2 order-md-1">
            <aside class="sidebar">
                <?php get_search_form();?>
                <?php get_sidebar();?>
            </aside>
        </div>
        
        <!---------------  BLOG  --------------->
        <div class="col-md-8 order-1 order-md-2">
            <section class="blog" style="background:none;color:inherit;padding:0">
                <h2>Erro 404</h2>
                <p>Post ou página não encontrada</p>
            </section>
        </div>
    </div>
</div>

<!---------------  FOOTER  --------------->
<?php get_footer("blog");?>
