<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('network.name')) }}:*
                {{ Form::text('name', $networks->name, ['class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('network.name'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('name') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('network.coordinator_id')) }}:* <br>
                {{ Form::select('coordinator_id', $coordinator_id, $networks->coordinator_id, ['required', 'class' => 'form-control select ' . ($errors->has('coordinator_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('coordinator_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('network.email')) }}:
                {{ Form::email('email', $networks->email, ['class' => 'form-control ' . ($errors->has('network.email') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('network.email'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('email') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('network.phone')) }}:
                {{ Form::text('phone', $networks->phone, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' phone' : 'phoneExt'). ($errors->has('phone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('network.phone'), 'maxlength' => '18', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('phone') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('network.smartphone')) }}:
                {{ Form::text('smartphone]', $networks->smartphone, ['class' => 'form-control ' .(session()->get('language') == 'pt-BR' ? ' phone' : 'phoneExt'). ($errors->has('smartphone') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('network.smartphone'), 'maxlength' => '18', 'minlength' => '3']) }}
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
