<?php
/**
 * template-part qui permettra d'afficher
 * un article provenant d'un conteneur de classe blocflex
 * pour un article de categorie note-wp
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7, -5);
$duree = "90h";
?>
<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <h6><?= $titre_long ?></6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?= $duree?></p>
</article>