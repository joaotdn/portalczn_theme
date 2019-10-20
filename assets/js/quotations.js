(function ($) {
    $(document).ready(function () {
        const url = "https://api.hgbrasil.com/finance/quotations?format=json-cors&key=73d8886b";
        const block = $('.stack-component').eq(0);

        if (block.length) {
            $.get(url, function (data) {
                if (data) {
                    const {results : {currencies}} = data;
                    let variation;

                    for (let prop in currencies) {
                        if (currencies.hasOwnProperty(prop) && currencies[prop].name !== undefined) {
                            // currencies[prop].variation > 0
                            //     ? variation = `<strong class="green"><i class="fas fa-long-arrow-alt-up"></i> ${currencies[prop].variation}%</strong>`
                            //     : variation = `<strong class="red"><i class="fas fa-long-arrow-alt-down"></i> ${currencies[prop].variation}%</strong>`;
                            $('ul', block).append(`<li><strong class="text-uppercase">${currencies[prop].name}</strong><span> R$ ${currencies[prop].buy}</span></li>`);
                        }
                    }
                } else {
                    block.addClass('hide');
                }
            });
        }
    });
})(jQuery);