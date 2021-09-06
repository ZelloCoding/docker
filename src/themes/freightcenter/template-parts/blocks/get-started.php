<?php
/**
 * Block template file: template-parts/blocks/get-started.php
 *
 * Get Started Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'get-started-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-get-started fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <h3><?php the_field( 'heading' ); ?></h3>
    <p class="description"><?php the_field( 'text' ); ?></p>
    <a href="<?php the_field( 'button_link' ); ?>" class="btn-round primary" style="background-color: <?php the_field( 'button_background' ); ?>;"><?php the_field( 'button_text' ); ?></a>
</section>