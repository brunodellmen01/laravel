<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.coordinator')) }}: <br>
                {{ Form::select('cell[coordinator_id]', $people_id, $cells->coordinator_id, ['class' => 'form-control select ' . ($errors->has('cell.coordinator_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.coordinator_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.supervisor')) }}: <br>
                {{ Form::select('cell[supervisor_id]', $people_id, $cells->supervisor_id, ['class' => 'form-control select ' . ($errors->has('cell.supervisor_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.supervisor_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.host')) }}: <br>
                {{ Form::select('cell[host_id]', $people_id, $cells->host_id, ['class' => 'form-control select ' . ($errors->has('cell.host_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.host_id') !!}
                </small>
            </div>
        </div>
    </div>
</div>
