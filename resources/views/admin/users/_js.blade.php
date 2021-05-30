<script defer>
    // Start get data with datatable
    let table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        oLanguage: {
            sUrl: myDatatableLanguage
        },
        ajax: "{{ route('users') }}",
        columns: [
            { data: 'checkbox', name: 'checkbox', className: "text-center", orderable: false, searchable: false },
            { data: 'DT_RowIndex', name: 'DT_RowIndex', className: "text-center" },
            { data: 'username', name: 'username' },
            { data: 'controls', name: 'controls', className: "text-center", orderable: false, searchable: false },
        ],
        pageLength: 25,
        aLengthMenu: [
            [10, 25, 50, 100, 200, 1000],
            [10, 25, 50, 100, 200, 1000]
        ],
        initComplete: function () {
            $("#datatable_filter input").unbind().bind("input", function (e) {
                if (this.value.length >= 3 || e.keyCode === 13) {
                    $("#datatable").dataTable().api().search(this.value).draw();
                }
                if (this.value.length < 3) {
                    $("#datatable").dataTable().api().search("").draw();
                }
            });
        }
    });
    // End get data with datatable

    // Start Adding Data
    $(document).delegate('.add-btn', 'click', function(e) {
        e.preventDefault();
        const btn = $(this);
        const form = $(this).parent('div').parent('form');
        const action = form[0].action;
        let formData = new FormData();
        let otherData = $(form).serializeArray();
        $.each(otherData, function(key, input){
            formData.append(input.name, input.value);
        });
        btn.html('{{ trans('Adding..') }}');
        $.ajax({
            data: formData,
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            success: function(data) {
                table.ajax.reload(function() {
                    $('#reset-btn').click();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '{{ trans('Added Successfully') }}',
                        showConfirmButton: false,
                        timer: 1000
                    });
                    btn.html('<i class="fas fa-save"></i> {{ trans('Save') }}');
                    let row = $('#datatable tr').eq(1);
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("table").offset().top
                    }, 100);
                    row.addClass('flash');
                }, true);
            },
            error: function(error) {
                let errors = '';
                let ind = 1;
                $.each(error.responseJSON.errors, function(index, val) {
                    errors += ind + ': ' + val[0] + '<br>';
                    ind++;
                });
                Swal.fire({
                    icon: 'error',
                    title: '{{ trans('Error in adding') }}',
                    html: errors
                });
                btn.html('<i class="fas fa-save"></i> {{ trans('Save') }}');
            }
        });
    });
    // End Adding Data

    // Start Delete Data
    $(document).delegate('.delete', 'click', function(e) {
        e.preventDefault(e);
        const btn = $(this);
        const form = $(this).parent('form');
        const action = form[0].action;
        Swal.fire({
            title: '{{ trans('Are you sure?') }}',
            text: "{{ trans('You want to delete it') }}",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "{{ trans('Cancel') }}",
            confirmButtonText: '{{ trans('Yes, delete it') }}'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    data: form.serialize(),
                    url: action,
                    type: "POST",
                    success: function(data) {
                        table.ajax.reload(function() {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: '{{ trans('Deleted Successfully') }}',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }, true);
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: '{{ trans('Error in delete') }}'
                        });
                    }
                });
            }
        });
    });
    // End Delete Data

    // Start Delete Multiple Data
    $('#delete_multiple').click(function() {
        let selected = [];
        $("input[class=check]:checked").each(function() {
            selected.push($(this).val());
        });
        if (selected.length > 0) {
            Swal.fire({
                title: '{{ trans('Are you sure?') }}',
                text: "{{ trans('Do you want to delete selected') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "{{ trans('Cancel') }}",
                confirmButtonText: '{{ trans('Yes, delete it') }}'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        data: {
                            _token: '{{ csrf_token() }}',
                            selected: selected
                        },
                        url: '{{ route("delete.multiple.user") }}',
                        type: 'POST',
                        dataType: 'json',
                        success: function(data) {
                            table.ajax.reload(function() {
                                $(".checkall").prop('checked', false);
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    text: '{{ trans('The selected deleted successfully') }}',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }, true);
                        },
                        error: function(error) {
                            Swal.fire({
                                icon: 'error',
                                title: '{{ trans('Error in delete') }}'
                            });
                        }
                    });
                }
            });
        }
    });
    // End Delete Multiple Data

    // Start Clicked Edit Button
    $(document).delegate('.edit', 'click', function() {
        const Id = $(this).data('id');
        $.ajax({
            type: 'POST',
            url: '{{ route("get.user") }}',
            data: {
                _token: '{{ csrf_token() }}',
                id: Id
            },
            success: function (data) {
                $('#edit_id').val(data.id);
                $('#edit_username').val(data.username);

                $.each($('#edit_store_id > option'), function(index, val) {
                    if(val.value === data.store_id)
                        val.selected = true;
                });
                $('#edit_store_id').select2({width: "66.77777777%"});

                $.each($('#edit_role > option'), function(index, val) {
                    if(parseInt(val.value) === data.roles[0]['id'])
                        val.selected = true;
                });
                $('#edit_role').select2({width: "66.77777777%"});
            },
            error: function (error) {
                console.log(error.responseText);
            }
        });
        let action = '{{ route("update.user", ["user" => ":val"]) }}';
        $('#edit-user-form').attr("action", action.replace(':val', Id));
    });
    // End Clicked Edit Button

    // Start Submit Edit Form
    $(document).delegate('#edit-user-form', 'submit', function(e) {
        e.preventDefault(e);
        const form = $(this);
        const action = form[0].action;
        let formData = new FormData();
        let otherData = $(form).serializeArray();
        $.each(otherData, function(key, input){
            formData.append(input.name, input.value);
        });
        $.ajax({
            data: formData,
            url: action,
            type: "POST",
            processData: false,
            contentType: false,
            success: function(data) {
                $('#edit-modal').modal('toggle');
                table.ajax.reload(function() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: '{{ trans('Updated Successfully') }}',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }, true);
            },
            error: function(error) {
                let errors = '';
                $.each(error.responseJSON.errors, function(index, val) {
                    errors += val[0] + '<br>';
                });
                Swal.fire({
                    icon: 'error',
                    title: '{{ trans('Error in edit') }}'
                });
            }
        });
    });
    // End Submit Edit Form

    $(function () {
        $('#store_id').select2({width: "66.77777777%"});
        $('#role').select2({width: "66.77777777%"});
    });
</script>
