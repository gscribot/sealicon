<?php get_header(); 
$textes_et_images = get_field('textes_et_images');
$experiences = get_field('experiences');
$navigation = get_field('navigation');
?>

<section class="texte_et_image inverse">
    <?php $texte_et_image = $textes_et_images[0]; ?>
    <div>
        <h3><?php echo $texte_et_image['sous-titre'] ?></h3>
        <h2><?php echo $texte_et_image['titre'] ?></h2>
        <div><?php echo $texte_et_image['texte'] ?></div>
    </div>
        <img src="<?php echo esc_url($texte_et_image['image']['url']) ?>" alt="<?php echo esc_url($texte_et_image['image']['alt']) ?>">
</section>

<section class="experiences">
    <?php foreach($experiences as $experience) : ?>
    <div class="experience">
        <h3><?php echo $experience['titre'] ?></h3>
        <div><?php echo $experience['texte'] ?></div>
    </div>
    <?php endforeach; ?>
</section>


<section class="texte_et_image">
    <?php $texte_et_image = $textes_et_images[1]; ?>
    <div>
        <h3><?php echo $texte_et_image['sous-titre'] ?></h3>
        <h2><?php echo $texte_et_image['titre'] ?></h2>
        <div><?php echo $texte_et_image['texte'] ?></div>
    </div>
    <img src="<?php echo esc_url($texte_et_image['image']['url']) ?>" alt="<?php echo esc_url($texte_et_image['image']['alt']) ?>">
</section>

<section class="navigation">
    <div>
        <svg width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 8L1 8.00001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 15L0.999999 8L8 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <a href="<?php echo $navigation['lien_avant']['url'] ?>"><?php echo $navigation['lien_avant']['title'] ?></a>
    </div>
</section>

<?php get_footer(); ?>