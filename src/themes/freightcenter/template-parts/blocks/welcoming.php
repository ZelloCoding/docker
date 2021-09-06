<?php
/**
 * Block template file: template-parts/blocks/welcoming.php
 *
 * Welcoming Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$post_type = get_post_type();
// Create id attribute allowing for custom "anchor" value.
$id = 'welcoming-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-welcoming fc_block';
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
            <div class="col-12">
                <h1>FreightCenter <span>is Shipping Handled.</span></h1>
                <div class="block-welcoming-subtitle">
                    An easier, better way to ship.
                </div>
            </div>
        </div>
    </div>
    <div class="container block-welcoming-form">
        <form action="">
            <div class="row">
                <div class="col-md-4" id="fg_date_pickup">
                    <div class="welcoming-form-group">
                        <label for="">Loading date
                            <input id="date_pickup" name="date_pickup" type="date" class="form-control"
                                   required=""></label>
                        <div class="invalid-feedback">Please enter a valid pickup date.
                        </div>
                        <div class="welcoming-form-group-separator"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="welcoming-form-group">
                        <label for="">Origin
                            <input id="zip_origin" name="zip_origin" class="form-control ui-autocomplete-input"
                                   placeholder="Origin zip code" autocomplete="off" required=""></label>
                        <div class="invalid-feedback">Please enter a valid origin postal code.
                        </div>
                        <div class="welcoming-form-group-arrow"></div>
                    </div>
                </div>
                <div class="col-md-4" id="fg_zip_destination">
                    <div class="welcoming-form-group">
                        <label for="">Destination
                            <input id="zip_destination" name="zip_destination"
                                   class="form-control ui-autocomplete-input"
                                   placeholder="Destination zip code" autocomplete="off" required=""></label>
                        <div id="zip_destination_error" class="invalid-feedback">Please enter a valid destination postal
                            code.
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">
                <img src="<?php echo get_template_directory_uri() . '/src/img/icon-search.png' ?>" alt="">
            </button>
        </form>
    </div>

    <div class="container block-welcoming-slider">

        <div class="cascade-slider_container" id="cascade-slider">
            <div class="cascade-slider_slides">
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/animals')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/arch')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/nature')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/people')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/tech')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
                <div class="cascade-slider_item" style="background-image: url('https://placeimg.com/329/280/sepia')">
                    <div class="overlay"></div>
                    <div class="slide-heading">
                        <span>FreightCenter for</span>
                        <h3>Business Shipping.</h3>
                    </div>
                    <div class="slide-description">
                        Spicy jalapeno bacon ipsum dolor amet elit tempor landjaeger, aliquip proident est et aute
                        irure. Pork loin voluptate quis in bacon, dolore id cillum tail eiusmod officia porchetta
                        landjaeger veniam in. Reprehenderit dolore bacon bresaola pariatur sed eiusmod, buffalo fugiat
                        quis pork chop sausage chuck.
                    </div>
                </div>
            </div>

            <!--<ol class="cascade-slider_nav">
                <li class="cascade-slider_dot cur"></li>
                <li class="cascade-slider_dot"></li>
                <li class="cascade-slider_dot"></li>
                <li class="cascade-slider_dot"></li>
                <li class="cascade-slider_dot"></li>
                <li class="cascade-slider_dot"></li>
            </ol>-->

            <div class="cascade-slider_arrows">
                <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev"></span>
                <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next"></span>
            </div>
        </div>

    </div>


</section>