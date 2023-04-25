<?php get_header(); 
$navigation = get_field('navigation');
?>


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