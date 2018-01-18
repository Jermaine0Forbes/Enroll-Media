<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>
        <div id="footer-widget" class="row py-4 ">

                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-md-4 p-4  widget"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-md-4 p-4  widget"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="col-12 col-md-4 p-4 widget"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>

        </div>

<?php }
