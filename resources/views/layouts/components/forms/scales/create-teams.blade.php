<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.assignment')) }}:
                {{ Form::text('scale_teams[assignment]', null, ['class' => 'form-control ' . ($errors->has('scale_teams.assignment') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('scale.assignment'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('scale_teams.assignment') !!}
                </small>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('scale.people')) }}: <br>
                {{ Form::select('scale_teams[people_id]', $people_id, null, ['class' => 'form-control select ' . ($errors->has('scale_teams.people_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('people_id') !!}
                </small>
            </div>
        </div>
    </div>
</div>
