<?php
$post_id = get_the_ID();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
	
	<!-- Google Tag Manager Дима + Stas-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JZXV5NJ');</script>
<!-- End Google Tag Manager Дима + Stas-->
	
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) Дима + Stas-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JZXV5NJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) Дима + Stas-->
	
<?php wp_body_open(); ?>
<div class="video-modal" style="display: none;">
    <div class="video-modal__container">
        <div class="video-modal__close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="4.57538" y="3" width="24" height="3" rx="1.5" transform="rotate(45 4.57538 3)"
                      fill="#B0C1ED"></rect>
                <rect x="2.4541" y="19.9705" width="24" height="3" rx="1.5" transform="rotate(-45 2.4541 19.9705)"
                      fill="#B0C1ED"></rect>
            </svg>
        </div>
        <video preload="true" autoplay loop height="auto" width="100%">
            <source src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<header class="header">
    <div class="header__container main-container">
        <a href="<?php echo get_home_url(); ?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri() . '/img/header/logo.svg'; ?>" alt="Subareva Clinic">
        </a>
        <div class="header__wrapper">
            <nav class="header__nav">
                <div class="header__nav-close">
                    <svg width="50" height="49" viewBox="0 0 50 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.015625" width="49" height="49" fill="white"/>
                        <path d="M47 1.75586L1.76231 46.9935" stroke="black" stroke-width="3" stroke-linecap="round"/>
                        <path d="M46.9961 46.9932L1.75841 1.75547" stroke="black" stroke-width="3"
                              stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="menu-verhnee-menyu-container">
                    <ul id="primary-menu" class="menu">
                        <?php
                            if ($post_id == 2){
                                ?>
                                    <li id="menu-item-11"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a
                                                href="<?php echo get_field('ssylka_stomatologiya', $post_id)?>"><?php echo get_field('tekst_stomatologiya', $post_id)?></a></li>
                                    <li id="menu-item-12"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a
                                                href="<?php echo get_field('ssylka_kosmetologiya', $post_id)?>"><?php echo get_field('tekst_kosmetologiya', $post_id)?></a></li>
                                <?php
                            } else if ($post_id == 103){
                                if( have_rows('punkt_menyu',$post_id) ):
                                    while( have_rows('punkt_menyu',$post_id) ) : the_row();
                                        $link = get_sub_field('punkt_menyu');
                                        $href = get_sub_field('sslka_menyu');
                                        ?>
                                        <li class="menu-item imp-menu">
                                            <a href="<?php echo $href ?>"><?php echo $link?></a>
                                        </li>
                                    <?php
                                    endwhile;
                                endif;
                            }
                        ?>

                    </ul>
                </div>
            </nav>
            <!--                js-messenger-->
            <div class="header__button button button-white js-zapis">
                <span><?php echo get_field('tekst_tmnoj_knopky', 103)?></span>
            </div>
            <a href="tel:+380987006700" class="header__button button button-blue ">
                    <span>
                        <?php
                        if (wp_is_mobile()) {
                            echo get_field('nadpis_na_knopke_pozvonit', $post_id);
                        } else {
                            echo '+38 098 700 6 700';
                        }
                        ?>
                    </span>
            </a>
            <div class="header__language">
                <?php
                qtranxf_generateLanguageSelectCode('short');
                ?>
            </div>
        </div>
        <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>


<?php
//$post_id = get_the_ID();
//?>
<!--<!doctype html>-->
<!--<html --><?php //language_attributes(); ?><!-->-->
<!--<head>-->
<!--	<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">-->
<!--	--><?php //wp_head(); ?>
<!--</head>-->
<!---->
<!--<body --><?php //body_class(); ?><!-->-->
<?php //wp_body_open(); ?>
<!--	<header class="header">-->
<!--        <div class="header__container main-container">-->
<!--            <div class="header__logo">-->
<!--                <img src="-->
<?php //echo get_template_directory_uri() . '/img/header/logo.svg' ;?><!--" alt="Subareva Clinic">-->
<!--            </div>-->
<!--            <div class="header__wrapper">-->
<!--                <nav class="header__nav">-->
<!--                    <div class="header__nav-close">-->
<!--                        <svg width="50" height="49" viewBox="0 0 50 49" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <rect x="0.015625" width="49" height="49" fill="white"/>-->
<!--                            <path d="M47 1.75586L1.76231 46.9935" stroke="black" stroke-width="3" stroke-linecap="round"/>-->
<!--                            <path d="M46.9961 46.9932L1.75841 1.75547" stroke="black" stroke-width="3" stroke-linecap="round"/>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    --><?php
//                    wp_nav_menu(
//                        array(
//                            'theme_location' => 'main-menu',
//                            'menu_id'        => 'primary-menu',
//                        )
//                    );
//                    ?>
<!--                </nav>-->
<!--                <a href="tel:+380987006700" class="header__button">-->
<!--                    <span>-->
<!--                        --><?php
//                        if ( wp_is_mobile() ) {
//                            echo get_field('nadpis_na_knopke_pozvonit', $post_id);
//                        } else {
//                            echo '+38 098 700 6 700';
//                        }
//                        ?>
<!--                    </span>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="header__burger">-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--            </div>-->
<!--            <div class="header__language">-->
<!--                --><?php
//                qtranxf_generateLanguageSelectCode('short');
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--	</header>-->
