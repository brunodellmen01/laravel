<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.code')) }}:
                {{ Form::text('profile[code]', $goods->code, ['class' => 'form-control ' . ($errors->has('profile.code') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('profile.code'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.code') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class='form-group'>
                {{ Form::label('label', trans('good.type')) }}:* <br>
                {{ Form::select('profile[type_id]', $type_id, $goods->type_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('profile.type_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.type_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class='form-group'>
                {{ Form::label('label', trans('good.categorie')) }}:<br>
                {{ Form::select('profile[categorie_id]', $categorie_id, $goods->categorie_id, ['class' => 'form-control select custom-select' . ($errors->has('profile.categorie_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.categorie_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.total')) }}:*
                {{ Form::number('profile[total]', $goods->total, ['required', 'class' => 'form-control ' . ($errors->has('profile.total') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('good.total')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.total') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('good.name')) }}:*
                {{ Form::text('profile[name]', $goods->name, ['required', 'class' => 'form-control ' . ($errors->has('profile.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('good.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('good.description')) }}:
                {{ Form::text('profile[description]', $goods->description, ['class' => 'form-control ' . ($errors->has('profile.description') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('good.description'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.description') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('good.condition')) }}:* <br>
                {{ Form::select('profile[condition_id]', $condition_id, $goods->condition_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('profile.condition_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.condition_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('good.localization')) }}:
                {{ Form::text('profile[localization]', $goods->localization, ['class' => 'form-control ' . ($errors->has('profile.localization') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('good.localization'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.localization') !!}
                </small>
            </div>
        </div>
    </div>
</div>
