<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safat Alnur Portfolio</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Bootstrap 5.2.3 navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                <?php wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'         => 'nav',
                        'container_class'   => 'primary-nav',
                        'menu_class'        => 'nav-menu',
                        'menu_id'           => 'main-menu',
                        'link_before'       => '<span class="menu-icon"></span>',
                        'link_after'        => ''
                    ));
                ?>
            </div>
            </div>
        </div>
    </nav>
    <p>This is the heading section<i class="fa-solid fa-user"></i></p>
