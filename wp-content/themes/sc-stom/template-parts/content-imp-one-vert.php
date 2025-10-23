<?php
$post_id = get_the_ID();
?>
<section class="imp-one-vert">
    <div class="imp-one-vert__container main-container">
        <div class="imp-one-vert__left">
            <h1 class="imp-one-vert__title section-title">
                <?php echo get_field('zagolovok_bloka_banner', $post_id)?>
            </h1>
            <div class="imp-one-vert__subtitle section-subtitle">
                <?php echo get_field('podzagolovok_bloka_banner', $post_id)?>
            </div>
            <div class="imp-one-vert__btns">
                <div class="imp-one-vert__btn button button-blue js-messenger">
                    <span><?php echo get_field('tekst_tmnoj_knopky', $post_id)?></span>
                </div>
                <div class="imp-one-vert__btn button button-white js-zapis">
                    <span><?php echo get_field('tekst_svetloj_knopky', $post_id)?></span>
                </div>
            </div>
        </div>
        <div class="imp-one-vert__sliders">
            <?php
            $slides = get_field('slajder_bannera', $post_id);
            $slides = is_array($slides) ? $slides : [];
            $images = [];
            foreach ($slides as $row) {
                $img = $row['yzobrazhenye_slajdera'] ?? '';
                if (is_array($img) && isset($img['url'])) {
                    $img = $img['url'];
                }
                if ($img) {
                    $images[] = $img;
                }
            }
            $half = (int)ceil(count($images) / 2);
            $col1 = array_slice($images, 0, $half);
            $col2 = array_slice($images, $half);
            function render_slider_column($col) {
                ?>
                <div class="imp-one-vert__slider swiper-container">
                    <div class="imp-one-vert__wrapper swiper-wrapper">
                        <?php foreach ($col as $url): ?>
                            <div class="imp-one-vert__slider-item swiper-slide">
                                <img src="<?php echo esc_url($url); ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($col as $url): ?>
                            <div class="imp-one-vert__slider-item swiper-slide">
                                <img src="<?php echo esc_url($url); ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php
            }
            if (!empty($col1)) { render_slider_column($col1); }
            if (!empty($col2)) { render_slider_column($col2); }
            ?>
        </div>

    </div>
</section>
<script>

</script>