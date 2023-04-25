<?php get_header(); 
$textes_avec_listes = get_field('textes_avec_listes');
$section_de_presentation = get_field('section_de_presentation');
$nfts = get_field('nfts');
$navigation = get_field('navigation');
?>

<section class="textes_avec_listes">
        <?php 
            foreach($textes_avec_listes as $texte_avec_liste) :
            $bloc = $texte_avec_liste['bloc'];
        ?>
        <div class="texte_avec_liste">
            <div class="container">
                <h3><?php echo $bloc['sous-titre'] ?></h2>
                <h2><?php echo $bloc['titre'] ?></h2>
                <?php echo $bloc['texte'] ?>
            </div>
            <ul>
                <?php foreach($bloc['liste'] as $item) : ?>
                    <li>
                    <div class="svg">
                        <svg class='icon' width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="#5699FF"/>
                            <g clip-path="url(#clip0_10_1021)">
                            <path d="M20.9999 28.1699L17.5299 24.6999C17.1399 24.3099 16.5099 24.3099 16.1199 24.6999C15.7299 25.0899 15.7299 25.7199 16.1199 26.1099L20.2999 30.2899C20.6899 30.6799 21.3199 30.6799 21.7099 30.2899L32.2899 19.7099C32.6799 19.3199 32.6799 18.6899 32.2899 18.2999C31.8999 17.9099 31.2699 17.9099 30.8799 18.2999L20.9999 28.1699Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_10_1021">
                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div>
                        <h4> <?php echo $item['titre'] ?></h4>
                        <div> <?php echo $item['texte'] ?></div>
                    </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endforeach; ?>
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

<section class="nfts">
    <h2><?php echo $nfts['titre']; ?></h2>
    <div class="container">
        <?php 
            $the_query = new WP_Query( array(
                'post_type' => 'nft',
                'posts_per_page' => -1,
            ) );
            $nfts = $the_query->posts;
            foreach($nfts as $nft) : ?>
                <div class="nft">
                    <div class="image"><img src="<?php echo get_the_post_thumbnail_url($nft->ID); ?>" alt=""></div>
                    <h3><img src="<?php echo get_field('logo', 'options')['url'] ?>" alt="<?php echo get_field('logo', 'options')['url'] ?>"> <?php echo $nft->post_title; ?></h3>
                </div>
        <?php endforeach; ?>
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