<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.email')) }}:
                {{ Form::email('contact[email]', null, ['class' => 'form-control ' . ($errors->has('contact.email') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.email'), 'maxlength' => '50', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.email') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.phone')) }}:
                {{ Form::text('contact[phone]', null, ['class' => 'form-control  ' .(session()->get('language') == 'pt-BR' ? ' phone' : ' phoneExt'). ($errors->has('contact.phone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.phone'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.phone') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.smartphone')) }}:
                {{ Form::text('contact[smartphone]', null, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' phone' : ' phoneExt'). ($errors->has('contact.smartphone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.smartphone'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.smartphone') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.zip_code')) }}:
                {{ Form::text('contact[zip_code]', null, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' cep' : ' zip'). ($errors->has('contact.zip_code') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.zip_code'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.zip_code') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.address')) }}:
                {{ Form::text('contact[address]', null, ['class' => 'form-control ' . ($errors->has('contact.address') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.address'), 'maxlength' => '50', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.address') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.number')) }}:
                {{ Form::number('contact[number]', null, ['class' => 'form-control ' . ($errors->has('contact.number') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.number')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.number') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.complement')) }}:
                {{ Form::text('contact[complement]', null, ['class' => 'form-control ' . ($errors->has('contact.complement') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.complement'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.complement') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.district')) }}:
                {{ Form::text('contact[district]', null, ['class' => 'form-control ' . ($errors->has('contact.district') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.district'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.district') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.countrie')) }}: <br>
                {{ Form::select('contact[countrie_id]', $countries, null, ['class' => 'form-control select ' . ($errors->has('contact.countrie_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('contact.countrie_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('people.history')) }}:
                {{ Form::textarea('contact[history]', null, ['class' => 'form-control ' . ($errors->has('contact.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.history'), 'rows' => '3', 'maxlength' => '150']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.history') !!}
                </small>
            </div>
        </div>
    </div>
</div>
