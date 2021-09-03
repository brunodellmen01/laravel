<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.reading_suggestions')) }}:
                {{ Form::textarea('reading_suggestions', $studies->reading_suggestions, ['class' => 'form-control ' . ($errors->has('reading_suggestions') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.reading_suggestions'), 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reading_suggestions') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.guidelines')) }}:
                {{ Form::textarea('guidelines', $studies->guidelines, ['class' => 'form-control ' . ($errors->has('guidelines') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.guidelines'), 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('guidelines') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.alerts')) }}:
                {{ Form::textarea('alerts', $studies->alerts, ['class' => 'form-control ' . ($errors->has('alerts') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.alerts'), 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('alerts') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group float-right">
                @include('layouts.admin.components.buttons.save')
            </div>
        </div>
    </div>
</div>
