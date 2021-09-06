<?php
/**
 * Block template file: template-parts/blocks/shipping-header.php
 *
 * Shipping Header Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'shipping-header-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-shipping-header fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>" style="background-image: url('<?php the_field( 'image' ); ?>')">
    <div class="overlay"></div>
    <div class="container">
        <h1><?php the_field( 'heading' ); ?></h1>
        <div class="fc-subtitle"><?php the_field( 'description' ); ?></div>
    </div>
</section>