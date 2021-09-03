<div class="col-md-12">
    <div
        class="form-group {{ $errors->has('reserv.environment_id') ? ' has-error' : null }}">
        {{ Form::label('label', trans('reserv.environment_id')) }}: <br>
        {!! Form::select('reservs_environments[environment_id][]', $environment_id,
        old('reservs_environments[environment_id][]'),['class' =>
        'select-multiple form-control', 'multiple' =>
        'multiple'] ) !!}
    </div>
</div>
