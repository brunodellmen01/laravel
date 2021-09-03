<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.history')) }}:* <br>
                {{ Form::textarea('history', null, ['required', 'class' => 'form-control ' . ($errors->has('history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.history'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('history') !!}
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
