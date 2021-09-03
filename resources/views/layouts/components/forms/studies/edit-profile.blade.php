<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.status_id')) }}:* <br>
                {{ Form::select('status_id', $status_id, $studies->status_id, ['required', 'class' => 'form-control select ' . ($errors->has('status_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('status_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.date_start')) }}:*
                {{ Form::date('date_start', $studies->date_start, ['required', 'class' => 'form-control ' . ($errors->has('date_start') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.date_start')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date_start') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.date_end')) }}:*
                {{ Form::date('date_end', $studies->date_end, ['required', 'class' => 'form-control ' . ($errors->has('date_end') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.date_end')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('date_end') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('studies.title')) }}:*
                {{ Form::text('title', $studies->title, ['required', 'class' => 'form-control ' . ($errors->has('title') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.title'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('title') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('label', trans('studies.sub_title')) }}:*
                {{ Form::text('sub_title', $studies->sub_title, ['required', 'class' => 'form-control ' . ($errors->has('sub_title') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.sub_title'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('sub_title') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.categorie')) }}:
                {{ Form::text('categorie', $studies->categorie, ['class' => 'form-control ' . ($errors->has('categorie') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.categorie'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('categorie') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.author')) }}:
                {{ Form::text('author', $studies->author, ['class' => 'form-control ' . ($errors->has('author') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.author'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('author') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('studies.text_biblical')) }}:
                {{ Form::text('text_biblical', $studies->text_biblical, ['class' => 'form-control ' . ($errors->has('text_biblical') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.text_biblical'), 'maxlength' => '150', 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('text_biblical') !!}
                </small>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('label', trans('studies.content')) }}:*
                {{ Form::textarea('content', $studies->content, ['class' => 'ckeditor form-control ' . ($errors->has('content') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('studies.content'), 'minlength' => '3']) }}
                <small class="invalid-feedback">
                    {!! $errors->first('content') !!}
                </small>
            </div>
        </div>
    </div>
</div>
