<div class="col-md-12">
    <div
        class="form-group {{ $errors->has('departament.people_id') ? ' has-error' : null }}">
        {{ Form::label('label', trans('departament.team')) }}: <br>
        {!! Form::select('team[people_id][]', $people_id,
        old('team[people_id][]'),['class' =>
        'select-multiple form-control', 'multiple' =>
        'multiple'] ) !!}
    </div>
</div>
<div class="col-md-12">
    <div class="form-group float-right">
        @include('layouts.admin.components.buttons.save')
    </div>
</div>
