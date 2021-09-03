<div class="col-md-12">
    <div
        class="form-group {{ $errors->has('reserv.environment_id') ? ' has-error' : null }}">
        {{ Form::label('label', trans('reserv.environment_id')) }}: <br>
        {!! Form::select('reservs_environments[environment_id][]', $environment_id,
        old('reservs_environments[environment_id][]'),['class' =>
        'select-multiple form-control', 'multiple' =>
        'multiple'] ) !!}
    </div>
</div>
<div class="col-md-12">
    <hr>
</div>
<div class="col-md-12">
    <div id="response-delete-environment-reserv" hidden>
        <div class="alert alert-success text-center">
            {{ trans('message.success') }}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table data-table" id="delete_environments">
            <thead>
                <tr>
                    <th>{{ trans('reserv.good') }}</th>
                    <th>{{ trans('buttons.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($environments as $en)
                <tr id="removeEnvironment{{$en->id}}">
                        <td class="text-nowrap">
                            {{ $en->environment->name }}
                        </td>
                        <td>
                            <button type="button" id="{{ $en->id }}" class="btn btn-outline-danger text-danger delete-environment-reserv float-right"> <i class="fa fa-trash mr-1"></i> </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">
                            {{ trans('generic.not_found') }}
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
