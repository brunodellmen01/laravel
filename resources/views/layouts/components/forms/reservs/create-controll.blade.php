<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.history')) }}:
                {{ Form::textarea('reserv[history]', null, ['class' => 'form-control ' . ($errors->has('reserv.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.history'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.history') !!}
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
