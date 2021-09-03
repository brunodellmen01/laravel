<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.auxiliary_code')) }}:
                {{ Form::text('church[auxiliary_code]', $church->auxiliary_code, ['class' => 'form-control ' . ($errors->has('church.auxiliary_code') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.auxiliary_code'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.auxiliary_code') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.church_type_id')) }}:* <br>
                {{ Form::select('church[church_type_id]', $church_type_id, $church->church_type_id, ['required', 'class' => 'form-control select ' . ($errors->has('church.church_type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.church_type_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.name')) }}:*
                {{ Form::text('church[name]', $church->name, ['class' => 'form-control ' . ($errors->has('church_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.church_name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.company_name')) }}:
                {{ Form::text('church[company_name]', $church->company_name, ['class' => 'form-control ' . ($errors->has('company_name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.company_name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.company_name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.cnpj')) }}:
                {{ Form::text('church[cnpj]', $church->cnpj, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' cnpj' : 'ssn'). ($errors->has('cnpj') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.cnpj'), 'maxlength' => '18', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.cnpj') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.legal_representative')) }}:
                {{ Form::text('church[legal_representative]', $church->legal_representative, ['class' => 'form-control ' . ($errors->has('legal_representative') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.legal_representative'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.legal_representative') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.cpf')) }}:
                {{ Form::text('church[cpf]', $church->cpf, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' cpf' : 'ssn'). ($errors->has('cpf') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.cpf'), 'maxlength' => '15', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.cpf') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('church.site')) }}:
                {{ Form::url('church[site]', $church->site, ['class' => 'form-control ' . ($errors->has('site') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('church.site'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('church.site') !!}
                </small>
            </div>
        </div>
    </div>
</div>
