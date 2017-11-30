<?php $tyros_options = tyros_get_options(); ?>

<?php if ( $tyros_options['tyros_slide1_image'] || $tyros_options['tyros_slide2_image'] || $tyros_options['tyros_slide3_image'] ) : ?>

    <div id="parent-slider-wrap" class="sc-slider-wrapper">

        <div class="fluid_container">

            <div class="camera_wrap" id="tyros_slider_wrap">

                <?php for ( $ctr = 1; $ctr < apply_filters( 'tyros_capacity', 1 ); $ctr++ ) : ?>

                    <?php if ( $tyros_options['tyros_slide' . $ctr . '_image'] ) : ?>

                        <div data-thumb="<?php echo esc_attr( $tyros_options['tyros_slide' . $ctr . '_image'] ); ?>" data-src="<?php echo esc_attr( $tyros_options['tyros_slide' . $ctr . '_image'] ); ?>">

                            <div class="camera_caption fadeFromBottom">

                                <?php if ( isset( $tyros_options['tyros_slide' . $ctr . '_text'] ) && $tyros_options['tyros_slide' . $ctr . '_text'] != '' ) : ?>

                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span class="primary-caption animated fadeInLeft">
                                                        <?php echo esc_html( $tyros_options['tyros_slide' . $ctr . '_text'] ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php endif; ?>
                                
                                <?php if ( isset( $tyros_options['tyros_slide' . $ctr . '_text2'] ) && $tyros_options['tyros_slide' . $ctr . '_text2'] != '' ) : ?>

                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span class="secondary-caption fadeInUp animated">
                                                        <?php echo esc_html( $tyros_options['tyros_slide' . $ctr . '_text2'] ); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endif; ?>

                <?php endfor; ?>

            </div><!-- #camera_wrap_1 -->

        </div>

    </div>

<?php endif;
