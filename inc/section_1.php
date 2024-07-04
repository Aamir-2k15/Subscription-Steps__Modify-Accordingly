<section class="join_us">
    <div class="inner_section">
        <div class="container for_cards">
            <div class="row">

                <?php

                // Setup your custom query
                $args = array(
                    'post_type'         => 'product',
                    'post_status'       => 'publish',
                    'posts_per_page'    => -1,
                    'orderby'           => 'ID',
                    'order'             => 'ASC',
                    'meta_key'          => '_ywsbs_subscription',
                    'meta_value'        => 'yes'
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="col-md-6 for-pading">
                        <div class="card">
                            <div class="card-header">
                                <p class="roadside">Roadside Rescue</p>
                                <h5><?php the_title(); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>$<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?><span>/per month</span></h5>
                                    <div class="button_with_arro">
                                        <?php if (@$atts['step'] != 2) {
                                            $link = '?add-to-cart=' . get_the_ID();
                                        } else {
                                            $link = '/step-3';
                                        } ?>
                                        <a href="<?php echo $link; ?>" class="btn">Get Started<img src="<?php echo DEX_PATH ?>images/Arrow.svg" class="rounded float-right" alt="..." /></a>
                                    </div>
                                </div>
                                <img src="<?php echo DEX_PATH ?>images/Line 183.png" class="img-line" alt="" />
                                <div class="card-text">
                                    <?php the_content(); ?>
                                </div>
                                <div class="button_with_arro_orng">
                                    <?php if (@$atts['step'] != 2) : ?> <a href="/step-2#compare" class="btn">Find out more<img src="<?php echo DEX_PATH ?>images/Arrow orng.svg" class="rounded float-right" alt="..." /></a><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); // Remember to reset 
                ?>
            </div>
        </div>
    </div>
</section>