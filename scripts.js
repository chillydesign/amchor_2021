
(function ($, root, undefined) {

    $(function () {


        $('.close-search-form').on('click', function (e) {
            $('searchform-wrap').addClass('closed').removeClass('opened');
            setTimeout(() => {
                $('searchform-wrap').removeClass('closed');
            }, 500);
        })

    });

})(jQuery, this);
