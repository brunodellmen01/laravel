<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('meeting.team') ? ' has-error' : null }}">
                {{ Form::label('label', trans('meeting.team')) }}: <br>
                {!! Form::select('team[people_id][]', $people_id, old('team[people_id][]'),['class' => 'select-multiple form-control', 'multiple' => 'multiple'] ) !!}
                <input type="hidden" name="team[type_id]" value="4">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group float-right">
                @include('layouts.admin.components.buttons.save')
            </div>
        </div>
    </div>
</div>
