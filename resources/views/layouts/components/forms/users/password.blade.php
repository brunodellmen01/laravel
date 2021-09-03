<div class="tab-pane fade show" id="newpassword_tab">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between">
                        <span>{{ trans('user.password') }}</span>
                        {{ Form::model($user, ['route' => ['profile.update.password'], 'method' => 'POST', 'class' => 'needs-validation']) }}
                        @include('layouts.admin.components.buttons.update-password')
                    </h5>
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>{{ trans('user.password') }}</label>
                            <input type="hidden" name="update_profile" value="2">
                            <input type="password" name="user[password]" class="form-control"
                                placeholder="{{ trans('user.password') }}" minlength="3" maxlength="150">
                            <small class="invalid-feedback">
                                {!! $errors->first('user.password') !!}
                            </small>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
