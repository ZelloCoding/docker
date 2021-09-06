<?php
/**
 * Block template file: template-parts/blocks/who-choose.php
 *
 * Who Choose Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'who-choose-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-who-choose fc_block';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}

$count = count(get_field('icon_blocks'));
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div class="heading">
        <h3><?php the_field( 'heading' ); ?></h3>
        <p class="description"><?php the_field( 'text' ); ?></p>
    </div>

    <?php if ( have_rows( 'icon_blocks' ) ) : $i = 1; ?>
        <div class="container">
            <div class="row">
                <?php while ( have_rows( 'icon_blocks' ) ) : the_row(); ?>

                    <div class="col-md-4 item-wrapper">
                        <div class="item">
                            <h5><?php the_sub_field( 'heading' ); ?></h5>
                            <div class="description">
                                <p><?php the_sub_field( 'description' ); ?></p>
                                <?php $image = get_sub_field('icon'); ?>
                                <div class="icon">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if($i % 3 == 0 && $i != $count) : ?>
                        </div>
                        </div>
                        <div class="container">
                        <div class="row">
                    <?php endif; ?>

                <?php $i++; endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

</section>