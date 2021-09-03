<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('conference.date')) }}:*
                {{ Form::date('conference[date]', null, ['class' => 'form-control ' . ($errors->has('conference.date') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('conference.date')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('conference.date') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('conference.cell')) }}:* <br>
                {{ Form::select('conference[cell_id]', $cell_id, null, ['required', 'class' => 'form-control select ' . ($errors->has('conference.cell_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('conference.cell_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {{ Form::label('label', trans('conference.total_offert')) }}: ({{trans('finance.currence_coin')}})
                {{ Form::text('conference[total_offert]', null, ['class' => 'mask-money form-control ' . ($errors->has('conference.total_offert') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => trans('conference.total_offert')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('conference.total_offert') !!}
                </small>
            </div>
        </div>

    </div>
</div>
