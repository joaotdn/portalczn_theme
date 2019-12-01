(function ($) {
    const btn = $('.load-posts');

    if (btn.length) {
        btn.on('click', function (e) {
            e.preventDefault();
            const offset = $('.news-cat-item').length;
            const category = $(this).data('cat-id');

            $.ajax({
                url: getData.ajaxDir,
                type: 'GET',
                dataType: 'html',
                data: {
                    action: 'more_news',
                    offset,
                    category
                },
                beforeSend: function () {
                    btn.addClass('disabled');
                },
                complete: function () {
                    btn.removeClass('disabled');
                },
                success: function (data) {
                    if (data) {
                        $('nav', '.last-news-cat').append(data);
                    } else {
                        btn.remove();
                    }
                }
            });
        });
    }
})(jQuery);