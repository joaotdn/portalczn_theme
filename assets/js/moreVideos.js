jQuery(function ($) {
    const btn = $('.load-videos');
    const videos = $('a[data-video-id]', '.video-feature-mini');

    if (btn.length) {
        const data = {
            'action': 'more_videos',
            'query': videos_loadmore_params.posts,
            'page': videos_loadmore_params.current_page
        };

        btn.click(function (e) {
            e.preventDefault();

            $.ajax({
                url: videos_loadmore_params.ajaxurl,
                data: data,
                type: 'POST',
                beforeSend: function () {
                    btn.addClass('disabled');
                },
                complete: function() {
                    btn.removeClass('disabled');
                },
                success: function (data) {
                    if (data) {
                        $('.videos-list').first().append(data);
                        videos_loadmore_params.current_page++;
                        $(document).foundation();

                        if (videos_loadmore_params.current_page == videos_loadmore_params.max_page)
                            btn.remove();
                    } else {
                        btn.remove();
                    }
                }
            });
        });

        videos.click(function (e) {
            e.preventDefault();
            const post_id = $(this).data('video-id');
            const data = {
                'action': 'show_video',
                post_id
            };

            $.ajax({
                url: videos_loadmore_params.ajaxurl,
                data,
                type: 'POST',
                beforeSend: function () {
                    $('.wait-video').addClass('active');
                },
                complete: function () {
                    $('.wait-video').removeClass('active');
                },
                success: function (data) {
                    if (data) {
                        const dataJson = JSON.parse(data);
                        setTimeout(function () {
                            $('iframe', '#video-iframe').attr('src', dataJson.videoUrl);

                            $('small', '.video-tag').text(dataJson.tag);

                            $('h2', '.video-player-header')
                                .find('a')
                                .text(dataJson.title)
                                .attr('title', dataJson.title)
                                .attr('href', dataJson.link);

                            $('p', '.video-excerpt').text(dataJson.excerpt);
                            $('.video-post').attr('href', dataJson.link);
                            $('.open-share', '#video-player').data('postid', dataJson.post_id);

                        }, 500);
                    } else {
                        alert('Lamentamos, mas não foi possível encontrar este vídeo.');
                    }
                }
            });
        });
    }
});