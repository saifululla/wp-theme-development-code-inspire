<h2><?php the_title();?></h2>
    <?php the_post_thumbnail();?>
    <?php the_content();?>
    <?php wp_link_pages( $args ); ?>
    <div class="comments">
        <?php comments_template();?>
    </div>