<?php
/**
 * Block template file: template-parts/blocks/our-technology.php
 *
 * Our Technology Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'who-choose-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-our-technology fc_block';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>
<style>

    <?php echo "df"; ?>

</style>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-wrapper">
                    <img src="<?php the_field( 'image' ); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-wrapper">
                    <div>
                        <h2><?php the_field( 'heading' ); ?></h2>
                        <p class="description"><?php the_field( 'text' ); ?></p>
                        <a href="<?php the_field( 'button_link' ); ?>" class="btn-round primary" style="background-color:<?php the_field( 'background' ); ?>;"><?php the_field( 'button_text' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>