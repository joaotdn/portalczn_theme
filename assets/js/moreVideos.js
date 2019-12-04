jQuery(function ($) {
    const btn = $('.load-videos');

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
                success: function (data) {
                    if (data) {
                        $('.videos-list').first().append(data);
                        videos_loadmore_params.current_page++;

                        if (videos_loadmore_params.current_page == videos_loadmore_params.max_page)
                            btn.remove();
                    } else {
                        btn.remove();
                    }
                }
            });
        });
    }
});