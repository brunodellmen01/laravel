<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.status_id')) }}:* <br>
                {{ Form::select('status_id', $status_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('status_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('status_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.date_start')) }}:*
                {{ Form::date('date_start', null, ['required', 'class' => 'form-control ' . ($errors->has('date_start') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.date_start')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date_start') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.date_end')) }}:*
                {{ Form::date('date_end', null, ['required', 'class' => 'form-control ' . ($errors->has('date_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.date_end')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date_end') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('studies.title')) }}:*
                {{ Form::text('title', null, ['required', 'class' => 'form-control ' . ($errors->has('title') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.title'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('title') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('studies.sub_title')) }}:*
                {{ Form::text('sub_title', null, ['required', 'class' => 'form-control ' . ($errors->has('sub_title') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.sub_title'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('sub_title') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.categorie')) }}:
                {{ Form::text('categorie', null, ['class' => 'form-control ' . ($errors->has('categorie') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.categorie'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('categorie') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.author')) }}:
                {{ Form::text('author', null, ['class' => 'form-control ' . ($errors->has('author') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.author'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('author') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.text_biblical')) }}:
                {{ Form::text('text_biblical', null, ['class' => 'form-control ' . ($errors->has('text_biblical') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.text_biblical'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('text_biblical') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('studies.content')) }}:*
                {{ Form::textarea('content', null, ['required', 'class' => 'ckeditor form-control ' . ($errors->has('content') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.content'), 'minlength' => '3', 'cols' => '15']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('content') !!}
                </small>
            </div>
        </div>
    </div>
</div>
