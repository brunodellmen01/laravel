<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('provider.history')) }}:
                {{ Form::textarea('profile[history]', $providers->history, ['class' => 'form-control ' . ($errors->has('history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('provider.history'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('provider.history') !!}
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
