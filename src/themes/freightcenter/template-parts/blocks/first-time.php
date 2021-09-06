<?php
/**
 * Block template file: template-parts/blocks/first-time.php
 *
 * First Time Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'first-time-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-first-time fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="container-fluid">
        <div class="row">
            <?php while ( have_rows( 'blocks' ) ) : the_row(); ?>
                <div class="col-md-6" style="background-color: <?php the_sub_field('background_color'); ?>; color: <?php the_sub_field('color'); ?>;">
                    <div class="item">
                        <div>
                            <h3><?php the_sub_field('heading'); ?></h3>
                            <div class="description"><?php the_sub_field('content'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>