require('./bootstrap')
require('./adminlte.min')
require('./datatable/dataTables.bootstrap4.min')
require('./datatable/dataTables.buttons.min')
require('./datatable/buttons.html5.min')
require('./datatable/buttons.flash.min')
require('./datatable/buttons.print.min')
require('./datatable/pdfmake.min')
require('./datatable/vfs_fonts')
require('./select2.full.min')
require('./all.min')
require('./jquery-print')

import * as moment from 'moment';
window.moment = moment;

import jsZip from './datatable/jszip.min';
window.JSZip = jsZip;

// Reset Form
$(document).delegate('#reset-btn', 'click', function() {
    $(this).closest('form').find(".permissions").prop('checked', false);
    $(this).closest('form').find("input, textarea").not('input[name=_token]').not('input[type=checkbox]').not('input[type=radio]').removeClass('is-valid').val('');
});

// Check all
$('.checkall').click(function() {
    if ($(this).is(':checked')) {
        $('.check').prop('checked', true);
    } else {
        $('.check').prop('checked', false);
    }
});
