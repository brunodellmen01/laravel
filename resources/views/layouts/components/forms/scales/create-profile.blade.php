<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.date')) }}:*
                {{ Form::date('date', null, ['class' => 'form-control ' . ($errors->has('date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.date'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.hour')) }}:*
                {{ Form::time('hour', null, ['class' => 'form-control ' . ($errors->has('hour') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.hour'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('hour') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('scale.event')) }}:*
                {{ Form::text('event', null, ['class' => 'form-control ' . ($errors->has('event') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.event'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('event') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.ministry')) }}:* <br>
                {{ Form::select('ministry_id', $ministry_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('ministry_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('ministry_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.department')) }}:<br>
                {{ Form::select('department_id', $department_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('department_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('department_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('scale.local')) }}:*
                {{ Form::text('local', null, ['class' => 'form-control ' . ($errors->has('local') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.local'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('local') !!}
                </small>
            </div>
        </div>
    </div>
</div>
