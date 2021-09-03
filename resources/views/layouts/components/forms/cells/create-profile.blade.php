<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.name')) }}:*
                {{ Form::text('cell[name]', null, ['required', 'class' => 'form-control ' . ($errors->has('cell.name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('cell.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('cell.network')) }}:* <br>
                {{ Form::select('cell[network_id]', $network_id, null, ['required', 'class' => 'form-control select custom-select' . ($errors->has('cell.network_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.network_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class='form-group'>
                {{ Form::label('label', trans('cell.sector')) }}: <br>
                {{ Form::select('cell[sector_id]', $sector_id, null, ['class' => 'form-control select custom-select' . ($errors->has('cell.sector_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.sector_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.local')) }}:* <br>
                {{ Form::select('cell[locale_id]', $locale_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('cell.locale_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.locale_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.frequency')) }}:* <br>
                {{ Form::select('cell[frequency_id]', $frequency_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('cell.frequency_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.frequency_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.week')) }}:* <br>
                {{ Form::select('cell[week_id]', $week_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('cell.week_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.week_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('cell.hour')) }}:* <br>
                {{ Form::time('cell[hour]', null, ['class' => 'form-control ' . ($errors->has('cell.hour') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('cell.hour'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.hour') !!}
                </small>
            </div>
        </div>
    </div>
</div>
