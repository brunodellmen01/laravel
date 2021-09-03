<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class='form-group'>
                {{ Form::label('label', trans('good.status')) }}:* <br>
                {{ Form::select('control[status_id]', $status_id, null, ['required', 'class' => 'form-control select custom-select' . ($errors->has('control.status_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('control.status_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class='form-group'>
                {{ Form::label('label', trans('good.situation')) }}:* <br>
                {{ Form::select('control[situation_id]', $situation_id, null, ['required', 'class' => 'form-control select custom-select' . ($errors->has('control.situation_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('control.situation_id') !!}
                </small>
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.reserv')) }}: <br>
                <label>
                    <input type="radio" name="control[reserv]" value="1"> {{trans('generic.yes')}}
                </label>
                 <label>
                    <input type="radio" name="control[reserv]" value="0" checked> {{trans('generic.no')}}
                </label>
                <small class="invalid-feedback">
                    {!! $errors->first('control.reserv') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('good.free')) }}: <br>
                <label>
                    <input type="radio" name="control[free]" value="1"> {{trans('generic.yes')}}
                </label>
                 <label>
                    <input type="radio" name="control[free]" value="0" checked> {{trans('generic.no')}}
                </label>
                <small class="invalid-feedback">
                    {!! $errors->first('control.free') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('good.history')) }}:
                {{ Form::textarea('control[history]', null, ['class' => 'form-control ' . ($errors->has('control.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('good.history')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('control.history') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group float-right">
                <br>
                @include('layouts.admin.components.buttons.save')
            </div>
        </div>
    </div>
</div>
