<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.people')) }}:* <br>
                {{ Form::select('people_id', $people_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('people_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('people_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.process')) }}:<br>
                <label>
                    <input type="radio" name="process" value="1">
                    {{trans('generic.yes')}}
                </label>
                <label>
                    <input type="radio" name="process" value="0">
                    {{trans('generic.no')}}
                </label>
                <small class="invalid-feedback">
                    {!! $errors->first('people_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.cell')) }}:* <br>
                {{ Form::select('cell_id', $cell_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('cell_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.consolidator')) }}: <br>
                {{ Form::select('consolidator_id', $people_id, null, ['class' => 'form-control select ' . ($errors->has('consolidator_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('consolidator_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.conversion_date')) }}:
                {{ Form::date('conversion_date', null, ['class' => 'form-control ' . ($errors->has('conversion_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.conversion_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('conversion_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.first_steps_1_date')) }}:
                {{ Form::date('first_steps_1_date', null, ['class' => 'form-control ' . ($errors->has('first_steps_1_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.first_steps_1_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('first_steps_1_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.meeting_date')) }}:
                {{ Form::date('meeting_date', null, ['class' => 'form-control ' . ($errors->has('meeting_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.meeting_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('meeting_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.first_steps_2_date')) }}:
                {{ Form::date('first_steps_2_date', null, ['class' => 'form-control ' . ($errors->has('first_steps_2_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.first_steps_2_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('first_steps_2_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.spiritual_mapping_date')) }}:
                {{ Form::date('spiritual_mapping_date', null, ['class' => 'form-control ' . ($errors->has('spiritual_mapping_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.spiritual_mapping_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('spiritual_mapping_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.baptism_date')) }}:
                {{ Form::date('baptism_date', null, ['class' => 'form-control ' . ($errors->has('baptism_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.baptism_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('baptism_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            Escola de dons
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_gifts_date')) }}:
                {{ Form::date('school_gifts_date', null, ['class' => 'form-control ' . ($errors->has('school_gifts_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.school_gifts_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_gifts_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_gifts')) }}: <br>
                {{ Form::select('school_gifts_id', $people_id, null, ['class' => 'form-control select ' . ($errors->has('school_gifts_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_gifts_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_gifts_result')) }}:
                {{ Form::text('school_gifts_result', null, ['class' => 'form-control ' . ($errors->has('school_gifts_result') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.school_gifts_result'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_gifts_result') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <hr>
            <b>
                Escola de dons
            </b>
            <hr>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.ministerial_school_date')) }}:
                {{ Form::date('ministerial_school_date', null, ['class' => 'form-control ' . ($errors->has('ministerial_school_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.ministerial_school_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('ministerial_school_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.ministerial_school')) }}: <br>
                {{ Form::select('ministerial_school_id', $people_id, null, ['class' => 'form-control select ' . ($errors->has('ministerial_school_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('ministerial_school_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.ministerial_school_result')) }}:
                {{ Form::text('ministerial_school_result', null, ['class' => 'form-control ' . ($errors->has('ministerial_school_result') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.ministerial_school_result'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('ministerial_school_result') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <hr>
            <b>
                Escola ministerial
            </b>
            <hr>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_leader_date')) }}:
                {{ Form::date('school_leader_date', null, ['class' => 'form-control ' . ($errors->has('school_leader_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.school_leader_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_leader_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_leader')) }}: <br>
                {{ Form::select('school_leader_id', $people_id, null, ['class' => 'form-control select ' . ($errors->has('school_leader_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_leader_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('consolidations.school_leader_result')) }}:
                {{ Form::text('school_leader_result', null, ['class' => 'form-control ' . ($errors->has('school_leader_result') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('consolidations.school_leader_result'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('school_leader_result') !!}
                </small>
            </div>
        </div>

    </div>
</div>
