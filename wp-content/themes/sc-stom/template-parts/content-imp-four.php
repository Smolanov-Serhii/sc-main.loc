<?php
$post_id = get_the_ID();
?>
<section class="video imp-four">
    <div class="video__container ">
        <div class="video__text">
            <div class="video__play" data-src="">
                <svg width="119" height="119" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <foreignObject x="-30" y="-30" width="179" height="179"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(15px);clip-path:url(#bgblur_0_1513_23_clip_path);height:100%;width:100%"></div></foreignObject><circle data-figma-bg-blur-radius="30" cx="59.5" cy="59.5" r="59" fill="#FBFBFB" fill-opacity="0.17" stroke="white"/>
                    <path d="M86 59.6733L46.25 85.3712L46.25 33.9755L86 59.6733Z" fill="white"/>
                    <defs>
                        <clipPath id="bgblur_0_1513_23_clip_path" transform="translate(30 30)"><circle cx="59.5" cy="59.5" r="59"/>
                        </clipPath></defs>
                </svg>
            </div>
        </div>
        <div class="video__video">
            <div class="video__preview" style="position: relative; width: 100%; height: 100%;">
                <img src="<?php echo get_field('kartynka_bloka_4', $post_id)?>" alt="Видео превью" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <video id="custom-video" width="100%" height="100%" style="display: none;" preload="metadata">
                <source src="<?php echo get_field('vydeo_fajl_bloka_4', $post_id)?>" type="video/mp4">
                Ваш браузер не поддерживает HTML5 видео.
            </video>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const playButton = document.querySelector('.video__play');
        const video = document.querySelector('#custom-video');
        const preview = document.querySelector('.video__preview');
        const videoText = document.querySelector('.video__text');

        // Клик по кнопке Play
        playButton.addEventListener('click', function () {
            video.style.display = 'block';
            video.play();

            preview.style.display = 'none';
            playButton.style.display = 'none';
            if (videoText) videoText.style.display = 'none';
        });

        // Клик по самому видео — переключение паузы
        video.addEventListener('click', function () {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });

        // На паузе или окончании — вернуть кнопку и текст
        video.addEventListener('pause', function () {
            playButton.style.display = 'block';
            if (videoText) videoText.style.display = 'flex';
        });

        video.addEventListener('ended', function () {
            playButton.style.display = 'block';
            if (videoText) videoText.style.display = 'flex';
        });

        video.addEventListener('play', function () {
            playButton.style.display = 'none';
            if (videoText) videoText.style.display = 'none';
        });
    });
</script>