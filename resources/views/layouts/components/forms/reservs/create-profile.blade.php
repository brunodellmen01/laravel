<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.status')) }}:* <br>
                {{ Form::select('reserv[status_id]', $status_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('reserv.status_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.status_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.people')) }}:* <br>
                {{ Form::select('reserv[people_id]', $people_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('reserv.people_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.people_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.date_start')) }}:*
                {{ Form::date('reserv[date_start]', null, ['class' => 'form-control ' . ($errors->has('reserv.date_start') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.date_start')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.date_start') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.date_end')) }}:*
                {{ Form::date('reserv[date_end]', null, ['class' => 'form-control ' . ($errors->has('reserv.date_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.date_end')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.date_end') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.hour_start')) }}:*
                {{ Form::time('reserv[hour_start]', null, ['class' => 'form-control ' . ($errors->has('reserv.hour_start') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.hour_start'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.hour_start') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.hour_end')) }}:*
                {{ Form::time('reserv[hour_end]', null, ['class' => 'form-control ' . ($errors->has('reserv.hour_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.hour_end'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.hour_end') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.description')) }}:
                {{ Form::text('reserv[description]', null, ['class' => 'form-control ' . ($errors->has('reserv.description') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('reserv.description'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.description') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('reserv.ministre')) }}: <br>
                {{ Form::select('reserv[ministre_id]', $ministre_id, null, ['class' => 'form-control select ' . ($errors->has('reserv.ministre_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('reserv.ministre_id') !!}
                </small>
            </div>
        </div>
    </div>
</div>
