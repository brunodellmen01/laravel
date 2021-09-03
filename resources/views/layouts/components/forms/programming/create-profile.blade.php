<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.date')) }}:
                {{ Form::date('scales[date]', null, ['class' => 'form-control ' . ($errors->has('scales.date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.date'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scales.date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.hour')) }}:
                {{ Form::time('scales[hour]', null, ['class' => 'form-control ' . ($errors->has('scales.hour') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.hour'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scales.hour') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.event')) }}:
                {{ Form::text('scales[event]', null, ['class' => 'form-control ' . ($errors->has('scales.event') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.event'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scales.event') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.ministry')) }}:* <br>
                {{ Form::select('scales[ministry_id]', $ministry_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('scales.ministry_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('ministry_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.department')) }}:* <br>
                {{ Form::select('scales[department_id]', $department_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('scales.department_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('department_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('scale.local')) }}:
                {{ Form::text('scales[local]', null, ['class' => 'form-control ' . ($errors->has('scales.local') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.local'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scales.local') !!}
                </small>
            </div>
        </div>
    </div>
</div>
