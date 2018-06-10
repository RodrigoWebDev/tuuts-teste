<div class="col-md-12">
    <article class="post">
        <a href="<?php the_permalink()?>">
            <div class="post-thumb">
                <?php the_post_thumbnail()?>
            </div>
            <h2><?php the_title()?></h2>
        </a>
        <p>Por <a href="<?php the_permalink();?>"><?php the_author();?></a> no dia <?php echo get_the_date();?></p>
        <p><?php the_tags("<span>Tags:</span> ", ", ");?></p>
        <p><?php the_excerpt()?></p>
        
    </article>
</div>
   