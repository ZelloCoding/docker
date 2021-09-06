<?php
/**
 * Block template file: template-parts/blocks/shipping-solutions.php
 *
 * Shipping Solutions Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'shipping-solutions-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-shipping-solutions fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="heading">
        <h3><?php the_field( 'heading' ); ?></h3>
        <p class="description"><?php the_field( 'text' ); ?></p>
    </div>
    <?php if ( have_rows( 'posts_grid' ) ) : ?>
        <div class="container">
            <div class="row">
                <?php while ( have_rows( 'posts_grid' ) ) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="item">
                            <figure>
                                <?php $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" style="width:100%">
                                <figcaption>
                                    <h4><?php the_sub_field( 'heading' ); ?></h4>
                                    <div class="description-wrapper">
                                        <div class="description"><?php the_sub_field( 'description' ); ?></div>
                                        <a href="<?php the_sub_field( 'button_link' ); ?>" class="btn-round primary" style="background-color: <?php the_sub_field( 'button_background' ); ?>;"><?php the_sub_field( 'button_text' ); ?></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>