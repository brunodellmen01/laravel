<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class='form-group'>
                {{ Form::label('label', trans('people.people_type')) }}:* <br>
                <input type="hidden" value="{{$peoples->people_type_id}}" name="profile[people_type_id]">
                {{ Form::select('profile[people_type_id_disable]', $people_types, $peoples->people_type_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('profile.people_type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select'), 'disabled', 'readonly']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.people_type_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.name')) }}:*
                {{ Form::text('profile[name]', $peoples->name, ['required', 'class' => 'form-control ' . ($errors->has('profile.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('people.sex')) }}:* <br>
                {{ Form::select('profile[sex_id]', $sexs, $peoples->sex_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('profile.sex_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.sex_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.birth_date')) }}:
                {{ Form::date('profile[birth_date]', $peoples->birth_date, ['class' => 'form-control ' . ($errors->has('profile.birth_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.birth_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.birth_date') !!}
                </small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.natural_ness')) }}:
                {{ Form::text('profile[natural_ness]', $peoples->natural_ness, ['class' => 'form-control ' . ($errors->has('profile.natural_ness') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.natural_ness'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.natural_ness') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.marital_status')) }}: <br>
                {{ Form::select('profile[marital_status_id]', $marital_status, $peoples->marital_status_id, ['class' => 'form-control select ' . ($errors->has('profile.marital_status_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.marital_status_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.nationality')) }}: <br>
                {{ Form::select('profile[countrie_id]', $countries, $peoples->countrie_id, ['class' => 'form-control select ' . ($errors->has('profile.countrie_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.countrie_id') !!}
                </small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.identity')) }}:
                {{ Form::text('profile[identity]', $peoples->identity, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' identity' : ''). ($errors->has('profile.identity') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.identity'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.identity') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.document')) }} ({{ (session()->get('language') == 'pt-BR' ? ' CPF' : 'SSN') }}):
                {{ Form::text('profile[document]', $peoples->document, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' cpf' : 'ssn'). ($errors->has('profile.document') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.document'), 'maxlength' => '20', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.document') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.education')) }}: <br>
                {{ Form::select('profile[education_id]', $educations, $peoples->education_id, ['class' => 'form-control select ' . ($errors->has('profile.education_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.education_id') !!}
                </small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.profession')) }}:
                {{ Form::text('profile[profession]', $peoples->profession, ['class' => 'form-control ' . ($errors->has('profile.profession') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.profession'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.profession') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.auxiliary_code')) }}:
                {{ Form::text('profile[auxiliary_code]', $peoples->auxiliary_code, ['class' => 'form-control ' . ($errors->has('profile.auxiliary_code') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.auxiliary_code'), 'maxlength' => '30', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.auxiliary_code') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.blood_type')) }}: <br>
                {{ Form::select('profile[blood_type_id]', $blood_types, $peoples->blood_type_id, ['class' => 'form-control select ' . ($errors->has('profile.blood_type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.blood_type_id') !!}
                </small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('people.history')) }}:
                {{ Form::textarea('profile[history]', $peoples->history, ['class' => 'form-control ' . ($errors->has('profile.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.history'), 'rows' => '3', 'maxlength' => '150']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.history') !!}
                </small>
            </div>
        </div>
    </div>
</div>
