!(function () {
    var e;
    jQuery && jQuery.fn && jQuery.fn.select2 && jQuery.fn.select2.amd && (e = jQuery.fn.select2.amd),
        e.define("select2/i18n/ar", [], function () {
            return {
                errorLoading: function () {
                    return "هەڵەیەک روویدا ناتوانی زانیاریەکان باربکرێن";
                },
                inputTooLong: function (e) {
                    var n = e.input.length - e.maximum,
                        r = "تکایە " + n + " پیتە ڕەشبکەوە";
                    return 1 != n && (r += "s"), r;
                },
                inputTooShort: function (e) {
                    return "تکایە لە " + (e.minimum - e.input.length) + " پیت زیاتر بنووسە";
                },
                loadingMore: function () {
                    return "بارکردنی زانیاری زیاتر";
                },
                maximumSelected: function (e) {
                    var n = "تەنها دەتوانی " + e.maximum + " زانیاری دیاری بکەی";
                    return 1 != e.maximum && (n += "s"), n;
                },
                noResults: function () {
                    return "هیچ زانیاریەک نەدۆزراوە";
                },
                searching: function () {
                    return "لە گەڕاندایە";
                },
                removeAllItems: function () {
                    return "هەموو زانیاریەکان بسڕەوە";
                },
                removeItem: function () {
                    return "زانیاریەک بسڕەوە";
                },
            };
        }),
        e.define,
        e.require;
})();
