<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('provider.type')) }}:* <br>
                {{ Form::select('profile[type_id]', $type_id, $providers->type_id, ['class' => 'form-control select ' . ($errors->has('contact.type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.type_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('provider.name')) }}:*
                {{ Form::text('profile[name]', $providers->name, ['class' => 'form-control ' . ($errors->has('profile.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('provider.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('provider.description')) }}:
                {{ Form::text('profile[description]', $providers->description, ['class' => 'form-control ' . ($errors->has('description') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('provider.description'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.description') !!}
                </small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('provider.type_document')) }}:* <br>
                {{ Form::select('profile[type_document_id]', $type_document_id, $providers->type_document_id, ['class' => 'form-control select ' . ($errors->has('contact.type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.type_document') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('provider.document')) }}:*
                {{ Form::text('profile[document]', $providers->document, ['class' => 'form-control ' . ($errors->has('profile.document') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('provider.document'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.document') !!}
                </small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('provider.representative')) }}:*
                {{ Form::text('profile[representative]', $providers->representative, ['class' => 'form-control ' . ($errors->has('profile.representative') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('provider.representative'), 'maxlength' => '30']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.representative') !!}
                </small>
            </div>
        </div>

    </div>
</div>
