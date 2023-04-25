<?php get_header(); 
$section_1 = get_field('section_1');
$menu_de_cartes = get_field('menu_de_cartes');
?>

<section class="section_1">
<div>
  <h1><?php echo $section_1["titre"] ?></h1>
  <div><?php echo $section_1["texte"] ?></div>
  <a class="button" href="<?php echo esc_url($section_1["bouton"]['url']) ?>"><?php echo $section_1["bouton"]["title"] ?></a>
</div>
<img src="<?php echo esc_url($section_1['image']['url']) ?>" alt="<?php echo esc_url($section_1["image"]['alt']) ?>">
</section>

<section class="menu_de_carte">
  <h2><?php echo $menu_de_cartes["titre"] ?></h2>
  <ul>
    <?php 
    $compteur = 0;
    foreach($menu_de_cartes["liste_des_cartes"] as $carte) : 
      $compteur ++;
      //récupère l'id de la page de l'url de la carte
      $id = url_to_postid($carte["carte"]);
      //récupère l'image de la page
      $image = get_the_post_thumbnail_url($id);
      //récupère le titre de la page
      $titre = get_the_title($id);
      $titre = '0' . $compteur . '. ' . $titre;
      ?>
      <li>
        <img src="<?php echo $image ?>">
          <a href="<?php echo esc_url($carte["carte"]) ?>">
            <h4><?php echo $titre ?></h4>
          </a>
      </li>
    <?php endforeach; ?>
    </ul>
</section>

<?php get_footer(); ?>