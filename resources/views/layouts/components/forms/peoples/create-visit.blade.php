<div class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('people.first_visit')) }}:
                {{ Form::date('profile[first_visit]', null, ['class' => 'form-control ' . ($errors->has('profile.first_visit') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.first_visit')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.first_visit') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('people.church_frequency')) }}:
                {{ Form::text('profile[church_frequency]', null, ['class' => 'form-control ' . ($errors->has('profile.church_frequency') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.church_frequency')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.church_frequency') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('people.qtd_visit')) }}:
                {{ Form::number('profile[qtd_visit]', null, ['class' => 'form-control ' . ($errors->has('profile.qtd_visit') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.qtd_visit')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('profile.qtd_visit') !!}
                </small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('label', trans('people.text_info_ministre')) }}:
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="profile[baptized]" value="1"> {{trans('people.baptized')}}
                    </label>
                    <label>
                        <input type="checkbox" name="profile[converted]" value="1"> {{trans('people.converted')}}
                    </label>
                </div>
                <small class="invalid-feedback">
                    {!! $errors->first('profile.baptized') !!}
                </small>
                <small class="invalid-feedback">
                    {!! $errors->first('profile.converted') !!}
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
