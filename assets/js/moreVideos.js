jQuery(function ($) {
    const btn = $('.load-videos');

    if (btn.length) {

        btn.on('click', function (e) {
            e.preventDefault();

            const data = {
                'action': 'more_videos',
                'query': videos_loadmore_params.posts,
                'page': videos_loadmore_params.current_page
            };

            $.ajax({
                method: 'POST',
                url: videos_loadmore_params.ajaxurl,
                data: data,
                beforeSend: function () {
                    btn.addClass('disabled');
                },
                complete: function () {
                    $(document).foundation();
                    btn.removeClass('disabled');
                },
                success: function (data) {
                    if (data) {
                        $('.videos-list').first().append(data);
                        videos_loadmore_params.current_page++;
                        showVideo();

                        if (videos_loadmore_params.current_page == videos_loadmore_params.max_page)
                            btn.remove();
                    } else {
                        btn.remove();
                    }
                }
            });
        });

        function showVideo() {
            $('a[data-video-id]', '.video-feature-mini').on('click', function (e) {
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
                        $(document).foundation();
                        $('.wait-video').removeClass('active');
                    },
                    success: function (data) {
                        if (data) {
                            const dataJson = JSON.parse(data);
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
                        }
                    }
                });
            });
        }

        showVideo();

    }
});