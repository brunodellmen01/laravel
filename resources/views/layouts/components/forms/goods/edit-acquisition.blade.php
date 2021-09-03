<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('good.date')) }}:
                {{ Form::date('acquisition[date]', $goods_acquisitions->date, ['class' => 'form-control ' . ($errors->has('acquisition.date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('acquisition.date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('good.provider')) }}:
                {{ Form::text('acquisition[provider]', $goods_acquisitions->provider, ['class' => 'form-control ' . ($errors->has('acquisition.provider') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('acquisition.provider'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.provider') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class='form-group'>
                {{ Form::label('label', trans('good.form')) }}:* <br>
                {{ Form::select('acquisition[form_id]', $form_id, $goods_acquisitions->form_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('acquisition.form_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.form_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.nfe')) }}:
                {{ Form::text('acquisition[nfe]', $goods_acquisitions->nfe, ['class' => 'form-control ' . ($errors->has('acquisition.nfe') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('acquisition.nfe'), 'maxlength' => '44', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.nfe') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.price')) }}:
                {{ Form::text('acquisition[price]', $goods_acquisitions->price, ['class' => 'form-control mask-money' . ($errors->has('acquisition.price') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('acquisition.price')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.price') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.updated_value')) }}:
                {{ Form::text('acquisition[updated_value]', $goods_acquisitions->updated_value, ['class' => 'form-control mask-money' . ($errors->has('acquisition.updated_value') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('acquisition.updated_value')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('acquisition.updated_value') !!}
                </small>
            </div>
        </div>
    </div>
</div>
