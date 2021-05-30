!(function () {
    var e;
    jQuery && jQuery.fn && jQuery.fn.select2 && jQuery.fn.select2.amd && (e = jQuery.fn.select2.amd),
        e.define("select2/i18n/en", [], function () {
            return {
                errorLoading: function () {
                    return "The results could not be loaded.";
                },
                inputTooLong: function (e) {
                    var n = e.input.length - e.maximum,
                        r = "Please delete " + n + " character";
                    return 1 != n && (r += "s"), r;
                },
                inputTooShort: function (e) {
                    return "Please enter " + (e.minimum - e.input.length) + " or more characters";
                },
                loadingMore: function () {
                    return "Loading more results…";
                },
                maximumSelected: function (e) {
                    var n = "You can only select " + e.maximum + " item";
                    return 1 != e.maximum && (n += "s"), n;
                },
                noResults: function () {
                    return "No results found";
                },
                searching: function () {
                    return "Searching…";
                },
                removeAllItems: function () {
                    return "Remove all items";
                },
                removeItem: function () {
                    return "Remove item";
                },
            };
        }),
        e.define,
        e.require;
})();