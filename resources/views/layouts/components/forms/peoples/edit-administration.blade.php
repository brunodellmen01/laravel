<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('label', trans('people.church')) }}:* <br>
                {{ Form::select('administration[church_id]', $churchs, isset($admins) ? $admins->church_id : '', ['required', 'class' => 'form-control select ' . ($errors->has('administration.church_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.church_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.convention')) }}:
                {{ Form::text('administration[convention]', isset($admins) ? $admins->convention : '', ['class' => 'form-control ' . ($errors->has('administration.convention') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.convention'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.convention') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.entry_date')) }}:
                {{ Form::date('administration[entry_date]', isset($admins) ? $admins->entry_date : '', ['class' => 'form-control ' . ($errors->has('administration.entry_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.entry_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.entry_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.reason_for_entry')) }}: <br>
                {{ Form::select('administration[reason_for_entry_id]', $reason_for_entry, isset($admins) ? $admins->reason_for_entry_id : '', ['class' => 'form-control select ' . ($errors->has('administration.reason_for_entry_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.reason_for_entry') !!}
                </small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.church_origin')) }}:
                {{ Form::text('administration[church_origin]', isset($admins) ? $admins->church_origin : '', ['class' => 'form-control ' . ($errors->has('administration.church_origin') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.church_origin')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.church_origin') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.departure_date')) }}:
                {{ Form::date('administration[departure_date]', isset($admins) ? $admins->departure_date : '', ['class' => 'form-control ' . ($errors->has('administration.departure_date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.departure_date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.departure_date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.reason_for_leaving')) }}: <br>
                {{ Form::select('administration[reason_for_leaving_id]', $reason_for_leaving_id, isset($admins) ? $admins->reason_for_leaving_id : '', ['class' => 'form-control select2 ' . ($errors->has('administration.reason_for_leaving_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.reason_for_leaving_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('people.church_destination')) }}:
                {{ Form::text('administration[church_destination]', isset($admins) ? $admins->church_destination : '', ['class' => 'form-control ' . ($errors->has('administration.church_destination') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.church_destination'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.church_destination') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('people.file')) }}: <br>
                {{ Form::file('administration[file]', ['class' => 'form-control ' . ($errors->has('administration.file') ? ' is-invalid' : null), 'accept' => 'application/pdf']) }}
                <small>Somente Arquivo .PDF e com no máximo 10 MB</small>
                <small class="invalid-feedback">
                    {!! $errors->first('administration.file') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('people.file')) }}: <br>
                <div class="alert alert-info">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fa fa-file-pdf mr-1">
                                <a data-toggle="modal"
                                    data-target="#viewFile">{{ isset($admins) ? $admins->file : '' }}</a>
                            </i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('people.history')) }}:
                {{ Form::textarea('administration[history]', isset($admins) ? $admins->history : '', ['class' => 'form-control ' . ($errors->has('administration.history') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('people.history'), 'rows' => '3', 'maxlength' => '150']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('administration.history') !!}
                </small>
            </div>
        </div>
    </div>
</div>
@if (isset($admins))
@include('layouts.admin.components.modais.peoples.view-file')
@endif
