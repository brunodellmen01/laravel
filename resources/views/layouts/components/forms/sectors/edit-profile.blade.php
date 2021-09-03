<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('sector.name')) }}:*
                {{ Form::text('name', $sectors->name, ['class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('sector.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('sector.supervisor_id')) }}:* <br>
                {{ Form::select('supervisor_id', $supervisor_id, $sectors->supervisor_id, ['required', 'class' => 'form-control select ' . ($errors->has('supervisor_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('supervisor_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('sector.email')) }}:
                {{ Form::email('email', $sectors->email, ['class' => 'form-control ' . ($errors->has('sector.email') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('sector.email'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('email') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('sector.phone')) }}:
                {{ Form::text('phone', $sectors->phone, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' phone' : 'phoneExt'). ($errors->has('phone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('sector.phone'), 'maxlength' => '18', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('phone') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('sector.smartphone')) }}:
                {{ Form::text('smartphone]', $sectors->smartphone, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' phone' : 'phoneExt'). ($errors->has('smartphone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('sector.smartphone'), 'maxlength' => '18', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('smartphone') !!}
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
