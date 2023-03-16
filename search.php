<?php
    //Ceci est notre modele.
?>
<?php

/*
    modele search.php affiche les resultats de recherche.
 */
get_header(); ?>
<main class="site__main">
    <code>search.php</code>
    <section class="main__recherche">
    <?php 
        if (have_posts()) :
            while(have_posts()) : the_post();
                //the_title("<h1>", "</h1>");
                //the_permalink(); ?>

            <article>
                <h4><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></h4>
                
                <?= wp_trim_words(get_the_excerpt(), 50);?>
            </article>
            <hr>
            <?php endwhile;
        endif;
        if (!have_posts()) :
            echo "Aucun résultat";
        endif;
    ?>
    </section>
</main>
<?php get_footer(); ?>