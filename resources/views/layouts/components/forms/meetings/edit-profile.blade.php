<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('meeting.title')) }}:*
                {{ Form::text('meeting[title]', $meetings->title, ['required', 'class' => 'form-control ' . ($errors->has('meeting.title') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('meeting.title'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.title') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('meeting.date_initial')) }}:*
                {{ Form::date('meeting[date_initial]', $meetings->date_initial, ['required', 'class' => 'form-control ' . ($errors->has('meeting.date_initial') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('meeting.date_initial')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.date_initial') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('meeting.date_final')) }}:*
                {{ Form::date('meeting[date_final]', $meetings->date_final, ['required', 'class' => 'form-control ' . ($errors->has('meeting.date_final') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('meeting.date_final')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.date_final') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('meeting.type_meeting_id')) }}:* <br>
                {{ Form::select('meeting[type_meeting_id]', $type_meeting_id, $meetings->type_meeting_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('meeting.type_meeting_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.type_meeting_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-8">
            <div class='form-group'>
                {{ Form::label('label', trans('meeting.supervisor_id')) }}:* <br>
                {{ Form::select('meeting[supervisor_id]', $supervisor_id, $meetings->supervisor_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('meeting.supervisor_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.supervisor_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('meeting.description')) }}:
                {{ Form::text('meeting[description]', $meetings->description, ['class' => 'form-control ' . ($errors->has('meeting.description') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('meeting.description'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting.description') !!}
                </small>
            </div>
        </div>


    </div>
</div>
