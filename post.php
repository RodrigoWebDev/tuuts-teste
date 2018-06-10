<div class="col-md-6">
    <article class="post">
        <a href="<?php the_permalink()?>">
            <?php the_post_thumbnail()?>
            <h2><?php the_title()?></h2>
        </a>
            <p><?php the_excerpt()?></p>
    </article>
</div>