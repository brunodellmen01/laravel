<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::select('categorie_id', $categorie_id, null, ['class' => 'form-control select ' . ($errors->has('categorie_id') ? ' is-invalid' : null), 'placeholder' => trans('generic.select')]) }}
                <small class="invalid-feedback">
                    {!! $errors->first('categorie_id') !!}
                </small>
            </div>
        </div>
        <div class="col-md-6">
            <input type="date" name="date_start" value="{{ date('Y-m-d') }}" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="date" name="date_and" value="{{ date('Y-m-d', strtotime('+1 months')) }}"
                class="form-control">
        </div>
    </div>
</div>
