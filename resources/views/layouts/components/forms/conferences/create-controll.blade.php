<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('conference.history')) }}:
                {{ Form::textarea('controll[history]', null, ['class' => 'form-control ' . ($errors->has('history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('conference.history'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('controll.history') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('conference.church')) }}: <br>
                {{ Form::select('controll[church_id]', $church_id, null, ['class' => 'form-control select ' . ($errors->has('church_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('controll.church_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('conference.church_filial')) }}: <br>
                {{ Form::select('controll[church_filial_id]', $church_id, null, ['class' => 'form-control select ' . ($errors->has('church_filial_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('controll.church_filial_id') !!}
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
