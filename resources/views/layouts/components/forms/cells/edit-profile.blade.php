<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.name')) }}:*
                {{ Form::text('cell[name]', $cells->name, ['required', 'class' => 'form-control ' . ($errors->has('cell.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('cell.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('cell.network')) }}:* <br>
                {{ Form::select('cell[network_id]', $network_id, $cells->network_id, ['required', 'class' => 'form-control select custom-select' . ($errors->has('cell.network_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.network_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('cell.sector')) }}: <br>
                {{ Form::select('cell[sector_id]', $sector_id, $cells->sector_id, ['class' => 'form-control select custom-select' . ($errors->has('cell.sector_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.sector_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.local')) }}:* <br>
                {{ Form::select('cell[locale_id]', $locale_id, $cells->locale_id, ['required', 'class' => 'form-control select ' . ($errors->has('cell.locale_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.locale_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.frequency')) }}:* <br>
                {{ Form::select('cell[frequency_id]', $frequency_id, $cells->frequency_id, ['required', 'class' => 'form-control select ' . ($errors->has('cell.frequency_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.frequency_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.week')) }}:* <br>
                {{ Form::select('cell[week_id]', $week_id, $cells->week_id, ['required', 'class' => 'form-control select ' . ($errors->has('cell.week_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.week_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.coordinator')) }}:* <br>
                {{ Form::select('cell[coordinator_id]', $people_id, $cells->coordinator_id, ['required', 'class' => 'form-control select ' . ($errors->has('cell.coordinator_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.coordinator_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.supervisor')) }}:* <br>
                {{ Form::select('cell[supervisor_id]', $people_id, $cells->supervisor_id, ['required', 'class' => 'form-control select ' . ($errors->has('cell.supervisor_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.supervisor_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.leader')) }}:* <br>
                {{ Form::select('cell[leader_1]', $people_id, $cells->leader_1, ['required', 'class' => 'form-control select ' . ($errors->has('cell.leader_1') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.leader_1') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.hour')) }}:* <br>
                {{ Form::time('cell[hour]', $cells->hour, ['class' => 'form-control ' . ($errors->has('cell.hour') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('cell.hour'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.hour') !!}
                </small>
            </div>
        </div>
    </div>
</div>
