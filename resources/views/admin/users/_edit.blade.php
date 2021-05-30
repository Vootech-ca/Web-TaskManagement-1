<div class="modal fade" id="edit-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 1000px !important">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('Edit User') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="edit-user-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit_id">
                    {{--Start Username Field--}}
                    <div class="form-group row">
                        <label for="edit_username" class="col-md-2 col-form-label text-right pr-4">{{ trans('Username') }}</label>
                        <input class="form-control col-md-8" id="edit_username" placeholder="{{ trans('Username') }}" required="required" autocomplete="off" name="username" type="text">
                        @error('username')
                        <span class="error invalid-feedback col-md-10 offset-md-2" style="display: block; font-size: 15px;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{--End Username Field--}}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('Save changes') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
