(function ($) {
    "use strict";
    var options = cmlmOptions ? cmlmOptions : {};
    var masonryOptions = {
        itemSelector: '.cmlm-category-box:not(.cmlm-hidden)'
    };

    function CMLM(config) {
        this.cmlm = config.cmlm;
        this.options = config.options;
        this.masonryOptions = config.masonryOptions;
        this.init();
    }

    CMLM.prototype.init = function () {
        var _this = this;
        setTimeout(function () {
            _this.masonry();
        }, 50);
        $(window).on('resize', debounce(function () {
            _this.masonry();
        }, 500));
    };

    CMLM.prototype.masonry = function () {
        var _this = this;
        var columnWidth = Math.floor(($(_this.cmlm).width() - 1) / _this.options.columnsCount);
        for (var i = 0; i < _this.options.columnsCount && columnWidth < 200; i++)
        {
            columnWidth = Math.floor(($(_this.cmlm).width() - 1) / (_this.options.columnsCount - i));
        }
        $(_this.cmlm).find('.cmlm-category-box').width(columnWidth - 20);
        $(_this.cmlm).find('.cmlm-content').masonry($.extend({}, _this.masonryOptions, {columnWidth: columnWidth}));
    };

    $(function () {

        $('.cmlm').each(function () {
            var _this = this;

            // remove empty categories
            $(_this).find('.cmlm-category').each(function () {
                if (!$(this).find('a').length) {
                    $(_this).find('.cmlm-filter li[data-id="{id}"]'.replace('{id}', $(this).data('id'))).remove();
                    $(this).remove();
                }
            });

            // run plugin
            new CMLM({
                cmlm: _this,
                options: options,
                masonryOptions: masonryOptions
            });
        });
    });

    //https://davidwalsh.name/javascript-debounce-function
    function debounce(func, wait, immediate) {
        var timeout;
        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate)
                    func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow)
                func.apply(context, args);
        };
    }

})(jQuery);