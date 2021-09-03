<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div
                class="form-group {{ $errors->has('meeting.encounters') ? ' has-error' : null }}">
                {{ Form::label('label', trans('encounters.encounters')) }}: <br>
                {!! Form::select('encounters[people_id][]', $people_id,
                old('encounters[people_id][]'),['class' =>
                'select-multiple form-control', 'multiple' =>
                'multiple'] ) !!}
                <input type="hidden" name="encounters[type_id]" value="3">
            </div>
        </div>
    </div>
</div>
