<div class="tab-pane fade show active" id="per_details_tab">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between">
                        <span>{{ trans('user.my_datas') }}</span>
                        @include('layouts.admin.components.buttons.update-profile')
                    </h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label>{{ trans('user.name') }}</label>
                            <input type="hidden" name="update_profile" value="1">
                            <input type="text" name="user[name]" value="{{ Auth::user()->name }}" class="form-control" placeholder="{{ trans('user.name') }}" minlength="3" maxlength="150">
                            <small class="invalid-feedback">
                                {!! $errors->first('user.name') !!}
                            </small>
                        </div>

                        <div class="col-md-4">
                            <label>{{ trans('user.birth_date') }}</label>
                            <input type="date" name="user[birth_date]" value="{{ Auth::user()->birth_date }}"
                                class="form-control">
                                <small class="invalid-feedback">
                                    {!! $errors->first('user.birth_date') !!}
                                </small>
                        </div>

                        <div class="col-md-4">
                            <label>{{ trans('user.phone') }}</label>
                            <input type="text" name="user[phone]"
                                value="{{ Auth::user()->phone ? Auth::user()->phone : 'Não Informado' }}"
                                class="form-control" placeholder="{{ trans('user.phone') }}" minlength="3" maxlength="150">
                                <small class="invalid-feedback">
                                    {!! $errors->first('user.phone') !!}
                                </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
