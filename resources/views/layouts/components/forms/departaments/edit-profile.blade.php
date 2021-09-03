<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.name')) }}:*
                {{ Form::text('profile[name]', $departaments->name, ['required', 'class' => 'form-control ' . ($errors->has('profile.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('departament.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.responsible_pastor')) }}: <br>
                {{ Form::select('profile[responsible_pastor]', $people_id, $departaments->responsible_pastor, ['class' => 'form-control select ' . ($errors->has('profile.responsible_pastor') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.responsible_pastor') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.coordinator_one')) }}: <br>
                {{ Form::select('profile[coordinator_one]', $people_id, $departaments->coordinator_one, ['class' => 'form-control select ' . ($errors->has('profile.coordinator_one') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.coordinator_one') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.coordinator_two')) }}: <br>
                {{ Form::select('profile[coordinator_two]', $people_id, $departaments->coordinator_two, ['class' => 'form-control select ' . ($errors->has('profile.coordinator_two') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.coordinator_two') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.supervisor_one')) }}: <br>
                {{ Form::select('profile[supervisor_one]', $people_id, $departaments->supervisor_one, ['class' => 'form-control select ' . ($errors->has('profile.supervisor_one') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.supervisor_one') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('departament.supervisor_two')) }}: <br>
                {{ Form::select('profile[supervisor_two]', $people_id, $departaments->supervisor_two, ['class' => 'form-control select ' . ($errors->has('profile.supervisor_two') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.supervisor_two') !!}
                </small>
            </div>
        </div>
    </div>
</div>
