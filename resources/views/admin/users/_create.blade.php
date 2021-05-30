{{--Start Add User Section --}}
<div class="card card-outline card-primary {{ session()->has('error') ? '' : 'collapsed-card' }}">
    <div class="card-header">
        <h3 class="card-title mb-0">{{ trans('Add New User') }}</h3>
        <button type="button" class="btn btn-tool btn-add-new" data-card-widget="collapse">
            <i class="fas fa-{{ session()->has('error') ? 'minus' : 'plus' }}"></i>
        </button>
    </div>
    <div class="card-body">
        {{--Start Add From--}}
        <form id="add-user-form" method="POST" action="{{ route('store.user') }}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            {{--Start Name Field--}}
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-right pr-4">{{ trans('Name') }}</label>
                <input class="form-control col-md-8" id="name" placeholder="{{ trans('Name') }}" required="required" autocomplete="off" name="name" type="text">
            </div>
            {{--End Name Field--}}

            {{--Start Weight Field--}}
            <div class="form-group row">
                <label for="weight" class="col-md-2 col-form-label text-right pr-4">{{ trans('Weight') }}</label>
                <input class="form-control col-md-8" id="weight" placeholder="{{ trans('Weight') }}" required="required" autocomplete="off" name="weight" type="text">
            </div>
            {{--End Weight Field--}}

            {{--Start Height Field--}}
            <div class="form-group row">
                <label for="height" class="col-md-2 col-form-label text-right pr-4">{{ trans('Height') }}</label>
                <input class="form-control col-md-8" id="height" placeholder="{{ trans('Height') }}" required="required" autocomplete="off" name="height" type="text">
            </div>
            {{--End Height Field--}}

            {{--Start Birthdate Field--}}
            <div class="form-group row">
                <label for="birthdate" class="col-md-2 col-form-label text-right pr-4">{{ trans('Birthdate') }}</label>
                <input class="form-control col-md-8" id="birthdate" placeholder="{{ trans('Birthdate') }}" required="required" autocomplete="off" name="birthdate" type="text">
            </div>
            {{--End Birthdate Field--}}

            {{--Start Gender Field--}}
            <div class="form-group row">
                <label for="Gender" class="col-md-2 col-form-label text-right pr-4">{{ trans('Gender') }}</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            {{--End Gender Field--}}

            {{--Start Username Field--}}
            <div class="form-group row">
                <label for="username" class="col-md-2 col-form-label text-right pr-4">{{ trans('Username') }}</label>
                <input class="form-control col-md-8" id="username" placeholder="{{ trans('Username') }}" required="required" autocomplete="off" name="username" type="text">
            </div>
            {{--End Username Field--}}

            {{--Start Password Field--}}
            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label text-right pr-4">{{ trans('Password') }}</label>
                <input class="form-control col-md-8" id="password" placeholder="{{ trans('Password') }}" required="required" autocomplete="off" name="password" type="password">
            </div>
            {{--End Password Field--}}

            {{--Start User Type Field--}}
            <div class="form-group row">
                <label for="user_type" class="col-md-2 col-form-label text-right pr-4">{{ trans('User Type') }}</label>
                <select class="form-control col-sm-8" id="user_type" name="user_type" required>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
            </div>
            {{--End User Type Field--}}

            {{--Start Submit Field--}}
            <div class="form-group row">
                <label class="col-md-2 col-form-label"> </label>
                <button class="btn btn-outline-primary btn-lg col-md-3 add-btn" type="submit"><i class="fas fa-save"></i> {{ trans('Save') }}</button>
                <label class="col-md-2 col-form-label"> </label>
                <button id="reset-btn" class="btn btn-outline-danger btn-lg col-md-3" type="button"><i class="fas fa-sync"></i> {{ trans('Reset') }}</button>
            </div>
            {{--End Submit Field--}}
        </form>
        {{--End Add From--}}
    </div>
</div>
{{--End Add User Section--}}
