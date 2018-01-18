<div class="row justify-content-center">

    <nav class="navbar navbar-expand-xl  p-0 p-b-3">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'       => 'div',
        'container_id'    => '',
        'container_class' => 'collapse navbar-collapse justify-content-end',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav',
        'depth'           => 3,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ));
        ?>

    </nav>
</div>
