<?php
$post_id = get_the_ID();
?>
<section class="imp-three">
    <div class="imp-three__container main-container">
        <h2 class="imp-three__title section-title">
            <?php echo get_field('zagolovok_tretego_bloka', $post_id)?>
        </h2>
        <div class="imp-three__list">
            <?php
            if( have_rows('slajder_tretego_bloka',$post_id) ):
                while( have_rows('slajder_tretego_bloka',$post_id) ) : the_row();
                    $title = get_sub_field('zagolovok_elementa');
                    $desc = get_sub_field('opysanye_lementa');
                    ?>
                    <div class="imp-three__item">
                        <h3 class="imp-three__item-title"><?php echo $title;?></h3>
                        <p class="imp-three__item-desc"><?php echo $desc;?></p>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.imp-three__item').forEach((card, idx) => {
        let x = 50, y = 50;
        let targetX = 50, targetY = 50;
        let cursorX = 50, cursorY = 50;
        let hoverAmt = 0;
        const ease = 0.04;           // 🔥 медленнее догоняет цель (было 0.08)

        // Уникальные параметры траектории
        const seed = (idx + 1) * 137;
        const ax = 35 + (seed % 20);
        const ay = 35 + ((seed >> 2) % 20);
        const w1 = 0.001 + (seed % 5) * 0.0002; // 🔥 уменьшил частоты для медленности
        const w2 = 0.0009 + (seed % 7) * 0.0002;
        const phaseX = (seed % 360) * Math.PI / 180;
        const phaseY = ((seed * 3) % 360) * Math.PI / 180;

        const t0 = performance.now();

        function tick(now = performance.now()) {
            const t = now - t0;

            // Авто-траектория (Лиссажу)
            const autoX = 50 + ax * Math.sin(t * w1 + phaseX);
            const autoY = 50 + ay * Math.cos(t * w2 + phaseY);

            // Плавный переход к курсору
            const hoverEase = 0.06; // ещё плавнее
            const should = card.matches(':hover') ? 1 : 0;
            hoverAmt += (should - hoverAmt) * hoverEase;

            const mix = (a, b, k) => a * (1 - k) + b * k;
            targetX = mix(autoX, cursorX, hoverAmt);
            targetY = mix(autoY, cursorY, hoverAmt);

            // Плавно догоняем цель
            x += (targetX - x) * ease;
            y += (targetY - y) * ease;

            card.style.setProperty('--x', x.toFixed(2) + '%');
            card.style.setProperty('--y', y.toFixed(2) + '%');

            requestAnimationFrame(tick);
        }
        requestAnimationFrame(tick);

        card.addEventListener('mousemove', e => {
            const r = card.getBoundingClientRect();
            cursorX = ((e.clientX - r.left) / r.width) * 100;
            cursorY = ((e.clientY - r.top) / r.height) * 100;
        });
    });


</script>