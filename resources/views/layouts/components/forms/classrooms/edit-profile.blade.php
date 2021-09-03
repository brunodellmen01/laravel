<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.date')) }}:*
                {{ Form::date('date', $classrooms->date, ['class' => 'form-control ' . ($errors->has('date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('classrooms.date'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.lesson')) }}:*
                {{ Form::text('lesson', $classrooms->lesson, ['class' => 'form-control ' . ($errors->has('lesson') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('classrooms.lesson'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('lesson') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.course')) }}:* <br>
                {{ Form::select('course_id', $course_id, $classrooms->course_id, ['required', 'class' => 'form-control select ' . ($errors->has('course_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('course_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.classe')) }}:<br>
                {{ Form::select('classe_id', $classe_id, $classrooms->classe_id, ['required', 'class' => 'form-control select ' . ($errors->has('classe_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('classe_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.teacher')) }}:*<br>
                {{ Form::select('teacher_id', $teacher_id, $classrooms->teacher_id, ['required', 'class' => 'form-control select ' . ($errors->has('teacher_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('teacher_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.assistent')) }}:<br>
                {{ Form::select('assistent_id', $teacher_id, $classrooms->assistent_id, ['class' => 'form-control select ' . ($errors->has('assistent_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('assistent_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('classrooms.history')) }}:
                {{ Form::textarea('history', $classrooms->history, ['class' => 'form-control ' . ($errors->has('history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('classrooms.history'), 'maxlength' => '150', 'minlength' => '3']) }}
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
