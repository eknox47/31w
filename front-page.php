<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main">
    <code>front-page.php</code>
    <section class="blocflex">
        <?php 
            if (have_posts()) :
                while(have_posts()) : the_post(); ?>
                <?php if(in_category("galerie")){
                    get_template_part("template-parts/categorie", "galerie");   
                } else {
                    get_template_part("template-parts/categorie", "note-wp");
                }
                endwhile;
            endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>