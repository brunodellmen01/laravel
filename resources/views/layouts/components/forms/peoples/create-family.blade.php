<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.spose_name')) }}:
                {{ Form::text('family[spose_name]', null, ['class' => 'form-control ' . ($errors->has('family.spose_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.spose_name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('family.spose_name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.spose_birth_date')) }}:
                {{ Form::date('family[spose_birth_date]', null, ['class' => 'form-control ' . ($errors->has('family.spose_birth_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.spose_birth_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('family.spose_birth_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.marriage_date')) }}:
                {{ Form::date('family[marriage_date]', null, ['class' => 'form-control ' . ($errors->has('family.marriage_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.marriage_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('family.marriage_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.fater_name')) }}:
                {{ Form::text('family[fater_name]', null, ['class' => 'form-control ' . ($errors->has('family.fater_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.fater_name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('family.fater_name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.moter_name')) }}:
                {{ Form::text('family[moter_name]', null, ['class' => 'form-control ' . ($errors->has('family.moter_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.moter_name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('family.moter_name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <br>
                <a class="add-contact-table btn btn-outline-success btn-block">{{trans('buttons.to_add')}}</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-center" id="family_childs">
                    <thead>
                        <tr>
                            <th>{{ trans('people.name') }}</th>
                            <th>{{ trans('people.email') }}</th>
                            <th>{{ trans('people.birth_date') }}</th>
                            <th>{{ trans('people.smartphone') }}</th>
                            <th>{{ trans('buttons.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
