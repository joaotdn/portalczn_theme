jQuery(function ($) {
    $.ajaxSetup({
        url: ajax_params.ajaxurl,
        method: 'POST',
    });

    function loadVideos() {
        $('.load-videos').on('click', function (e) {
            e.preventDefault();

            const data = {
                'action': 'more_videos',
                'query': ajax_params.posts,
                'page': ajax_params.current_page
            };

            $.ajax({
                data: data,
                beforeSend: function () {
                    $('.load-videos').addClass('disabled');
                },
                complete: function () {
                    $(document).foundation();
                    $('.load-videos').removeClass('disabled');
                },
                success: function (data) {
                    if (data) {
                        $('.videos-list').first().append(data);
                        ajax_params.current_page++;
                        showVideo();

                        if (ajax_params.current_page == ajax_params.max_page)
                            $('.load-videos').remove();
                    } else {
                        $('.load-videos').remove();
                    }
                }
            });
        });
    }

    function showVideo() {
        $('a[data-video-id]', '.video-feature-mini').on('click', function (e) {
            e.preventDefault();
            const post_id = $(this).data('video-id');
            const data = {
                'action': 'show_video',
                post_id
            };

            $.ajax({
                data: data,
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

    function searchVideos() {
        $(document).on('keyup', $('#search-videos'), function (el) {
            const data = {
                'action': 'search_videos',
                'query': ajax_params.posts,
                'search': $(el.target).val()
            };

            if ($(el.target).val().length >= 5) {
                setTimeout(function () {
                    $.ajax({
                        data: data,
                        beforeSend: function () {
                            $('.videos-list').html('');
                            $('.wait-search').removeClass('hide');
                        },
                        complete: function () {
                            $(document).foundation();
                            $('.wait-search').addClass('hide');
                        },
                        success: function (data) {
                            if (data) {
                                $('.videos-list').html(data);
                                showVideo();
                            }
                        }
                    })
                }, 500);
            }
        });
    }

    function searchAll() {
        $('.open-search').click(function () {
            $('#search-container').foundation('open');
        });

        $('#search-container').on('open.zf.reveal', function () {
            setTimeout(function () {
                $('#search-field').focus();
            }, 500);
        });

        $('.close-button', '.open-search').click(function () {
            $('#search-container').foundation('close');
        });

        $(document).on('keyup', $('#search-field'), function (el) {
            if ($(el.target).length >= 5) {
                setTimeout(function () {
                    $.ajax({
                        data: {
                            'action': 'search_all',
                            'query': ajax_params.posts,
                            'search': $(el.target).val()
                        },
                        beforeSend: function () {
                            $('.wait-search').removeClass('hide');
                            $('#list-results').html('');
                        },
                        complete: function () {
                            $(document).foundation();
                            $('.wait-search').addClass('hide');
                        },
                        success: function (data) {

                        }
                    });
                }, 600);
            }
        });
    }

    searchAll();
    loadVideos();
    showVideo();
    searchVideos();
});