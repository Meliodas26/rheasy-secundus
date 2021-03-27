<?php /*Template Name: Productos - Tienda */ ?>
<?php 
    get_header();
    $content  = get_the_content();
    //$content = str_replace(']]>', ']]&gt;', $content);
    $content = explode('</p>',$content);
?>
<?php get_template_part("nav-main"); ?>
<section class = "section-general">
    <div>
        <div class="left">
            <h1><?php wp_title(''); ?></h1>
            <?php print_r ($content[0]); ?>
        </div>
        <div class="right">
            <button>Ingresar</button>
        </div>
    </div>
</section>
<section class = "section-products">
    <button id="buy">Ir al carrito</button>
</section>
<?php get_footer(); ?>