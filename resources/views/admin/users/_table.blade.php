<div class="card card-success">
    <div class="card-header">
        <h1 class="card-title">{{ trans('Users List') }}</h1>
    </div>
    <div class="card-body dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-danger float-right mb-2" type="button" id="delete_multiple">{{ trans('Delete Selected') }}</button>
            </div>
            <div class="col-12" style="overflow-x: scroll">
                <table class="table table-bordered table-hover dataTable dtr-inline" id="datatable">
                    <thead>
                    <tr>
                        <th class="cw-5">
                            <input type='checkbox' class='checkall'>
                        </th>
                        <th class="cw-5">{{ trans('Sl') }}</th>
                        <th class="cw-10">{{ trans('Username') }}</th>
                        <th class="cw-5">{{ trans('Controls') }}</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                    <tr>
                        <th class="cw-5">
                            <input type='checkbox' class='checkall'>
                        </th>
                        <th class="cw-5">{{ trans('Sl') }}</th>
                        <th class="cw-10">{{ trans('Username') }}</th>
                        <th class="cw-5">{{ trans('Controls') }}</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
