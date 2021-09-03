<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('scale.month')) }}: <br>
                {{ Form::select('scale_controls[month_id]', $month_id, $scales->month_id, ['class' => 'form-control select ' . ($errors->has('scale_controls.month_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('month_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('scale.history')) }}:
                {{ Form::textarea('scale_controls[history]', $scales->history, ['class' => 'form-control ' . ($errors->has('scale_controls.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.history'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scale_controls.history') !!}
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
