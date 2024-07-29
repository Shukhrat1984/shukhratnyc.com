//alert("Hello world");

//----------------------------------You-tube blogs section starting-----------------------------------
const player = new Plyr('#player', {
    invertTime: false,
});

$(function() {
    // Включение трека по клику
    $('.change-youtube').click(function(){
        $('.change-youtube').removeClass('active');
        $(this).addClass('active');
        let youtubeurl = $(this).attr('data-youtube');
        player.source = {
            type: 'video',
            sources: [
                {
                    src: youtubeurl,
                    provider: 'youtube'
                }
            ]
        };

        // Прокрутка контейнера основного видео в видимую область
        document.querySelector('.youtube-container').scrollIntoView({ behavior: 'smooth' });

        // если нужно запускать видео сразу по клику, раскоментируйте строчки ниже
        /*
            window.setTimeout(function() {
            player.play();
            }, 1000);
        */
    });

    // Переключение видео на следующее по окончанию
    player.on('ended', event => {
        let nextyoutube = $('.change-youtube.active').next(".change-youtube");
        let urlnextyoutube = nextyoutube.attr('data-youtube');
        if (!urlnextyoutube) {
            player.stop();
        } else {
            $('.change-youtube').removeClass('active');
            nextyoutube.addClass('active');
            player.source = {
                type: 'video',
                sources: [
                    {
                        src: urlnextyoutube,
                        provider: 'youtube'
                    }
                ]
            };
            // если нужно запускать следующее видео, раскоментируйте строчки ниже
            /*
                window.setTimeout(function() {
                player.play();
                }, 1000);
            */
        }
    });
});


//---------------------------------You-tube blogs section ending---------------------------------------