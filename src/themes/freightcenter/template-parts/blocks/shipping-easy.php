<?php
/**
 * Block template file: template-parts/blocks/shipping-easy.php
 *
 * Shipping Easy Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'shipping-easy-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-shipping-easy fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-side">
                    <h3><?php the_field( 'heading' ); ?></h3>
                    <p class="fc_description"><?php the_field( 'description' ); ?></p>
                    <a href="<?php the_field( 'button_link' ); ?>" class="btn-round secondary" style="background-color: <?php the_field( 'button_collor' ); ?>;"><?php the_field( 'button_text' ); ?></a>
                </div>
            </div>
            <?php if ( have_rows( 'icon_blocks' ) ) : ?>
                <div class="col-md-6">
                    <div class="right-side">
                        <div class="row">
                            <?php while ( have_rows( 'icon_blocks' ) ) : the_row(); ?>
                                <div class="col-md-6 fc_item-wrapper">
                                    <div class="fc_item">
                                        <?php $image = get_sub_field('icon'); ?>
                                        <div class="icon">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                        </div>
                                        <div class="fc_description">
                                            <h5><?php the_sub_field( 'heading' ); ?></h5>
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>