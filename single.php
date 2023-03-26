<?php
    //Ceci est notre modele.
?>
<?php get_header(); ?>
<main class="site__main">
    <?php 

        if (have_posts()) :            
            while(have_posts()) : the_post();?>
                <section>
                <?php the_title("<h1>", "</h1>");
                the_content();
                if (in_category('cours')) : ?>
                    <p>Enseignant: <?php the_field("enseignant"); ?></p>
                    <p>Domaine: <?php the_field("domaine"); ?></p>
                    <p>Nombre maximal d'étudiants: <?php the_field("nombre_detudiant_maximum");?></p> 
                    <p>Site du college: <?php the_field("site_college"); ?></p>
                <?php endif;?>
                </section>
            <?php endwhile;            
        endif;
    ?>
</main>
<?php get_footer(); ?>