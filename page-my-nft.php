<?php get_header(); 
$moodboard = get_field('moodboard');
$section_de_presentation = get_field('section_de_presentation');
$citation = get_field('citation');
$navigation = get_field('navigation');
?>

<section class="moodboard">
    <h2><?php echo $moodboard['titre'] ?></h2>
    <ul>
        <?php 
        $raw = 0;
        $coll = 0;
        foreach($moodboard['liste_dimages'] as $image) : 
        ?>
            <?php if(($raw % 2 == 0 && $coll % 3 == 0) || ($raw % 2 == 1 && $coll % 4 == 0)) {
                echo '<div class="row">';
            }
            $coll ++;
            ?>
            <li>
                <img src="<?php echo esc_url($image['image']['url']) ?>" alt="<?php echo esc_url($image['image']['alt']) ?>">
            </li>
            <?php if(($raw % 2 == 0 && $coll == 3) || ($raw % 2 == 1 && $coll == 4)) {
                $coll = 0;
                $raw ++;
                echo '</div>';
            }        
            ?>
        <?php endforeach; ?>
    </ul>
</section>


<section class="section_de_presentation">
    <h2><?php echo $section_de_presentation['titre'] ?></h2>
    <?php foreach($section_de_presentation['liste_des_presentations'] as $presentation) : ?>
        <div class="presentation">
            <div class="container">
                <h4><?php echo $presentation['sous-titre'] ?></h4>
                <h3><?php echo $presentation['titre'] ?></h3>
                <div><?php echo $presentation['texte'] ?></div>
            </div>
            <img src="<?php echo esc_url($presentation['image']['url']) ?>" alt="<?php echo esc_url($presentation['image']['alt']) ?>">
        </div>
    <?php endforeach; ?>
</section>


<section class="citation">
    <h2><?php echo $citation['titre']; ?></h2>
    <div class="container">
        <?php 
            $nft = $citation['nft'][0];
            $image = get_the_post_thumbnail_url($nft->ID);
        ?>
        <img class="nft" src="<?php echo esc_url($image) ?>">
        <div class="texte">
            <div class="citation">
                <?php echo $citation['citation']; ?>
            </div>
            <span class="tagline"><img src="<?php echo get_field('logo', 'options')['url'] ?>" alt="<?php echo get_field('logo', 'options')['url'] ?>"> - <?php echo get_field('tagline', 'options'); ?></span>
        </div>
    </div>
</section>



<section class="navigation">
    <div>
        <svg width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 8L1 8.00001" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 15L0.999999 8L8 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <a href="<?php echo $navigation['lien_avant']['url'] ?>"><?php echo $navigation['lien_avant']['title'] ?></a>
    </div>
    <div>
    <a href="<?php echo $navigation['lien_apres']['url'] ?>"><?php echo $navigation['lien_apres']['title'] ?></a>
        <svg width="31" height="17" viewBox="0 0 31 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 8.5L30 8.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M23 1.5L30 8.5L23 15.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
</section>


<?php get_footer(); ?>