!function() {
    var n;
    jQuery&&jQuery.fn&&jQuery.fn.select2&&jQuery.fn.select2.amd&&(n=jQuery.fn.select2.amd),
    n.define("select2/i18n/ar", [], function() {
        return {
            errorLoading:function() {
                return"لا يمكن تحميل النتائج"
            }
            , inputTooLong:function(n) {
                return"الرجاء حذف "+(n.input.length-n.maximum)+" عناصر"
            }
            , inputTooShort:function(n) {
                return"الرجاء إضافة "+(n.minimum-n.input.length)+" عناصر"
            }
            , loadingMore:function() {
                return"جاري تحميل نتائج إضافية..."
            }
            , maximumSelected:function(n) {
                return"تستطيع إختيار "+n.maximum+" بنود فقط"
            }
            , noResults:function() {
                return"لم يتم العثور على أي نتائج"
            }
            , searching:function() {
                return"جاري البحث…"
            }
            , removeAllItems:function() {
                return"قم بإزالة كل العناصر"
            }
        }
    }
    ),
    n.define,
    n.require
}
();
