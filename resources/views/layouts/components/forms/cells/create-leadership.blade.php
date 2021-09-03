<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('cell.leader')) }} 1:* <br>
                {{ Form::select('cell[leader_1]', $people_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('cell.leader_1') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.leader_1') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('cell.leader')) }} 2: <br>
                {{ Form::select('cell[leader_2]', $people_id, null, ['class' => 'form-control select ' . ($errors->has('cell.leader_2') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.leader_2') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.vice_leader')) }} 1: <br>
                {{ Form::select('cell[vice_leader_1]', $people_id, null, ['class' => 'form-control select ' . ($errors->has('cell.vice_leader_1') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.vice_leader_1') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.vice_leader')) }} 2: <br>
                {{ Form::select('cell[vice_leader_2]', $people_id, null, ['class' => 'form-control select ' . ($errors->has('cell.vice_leader_2') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.vice_leader_2') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('cell.vice_leader')) }} 3: <br>
                {{ Form::select('cell[vice_leader_3]', $people_id, null, ['class' => 'form-control select ' . ($errors->has('cell.vice_leader_3') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('cell.vice_leader_3') !!}
                </small>
            </div>
        </div>
    </div>
</div>
