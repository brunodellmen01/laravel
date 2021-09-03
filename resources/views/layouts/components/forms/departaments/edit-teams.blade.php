<div class="col-md-12">
    <div
        class="form-group {{ $errors->has('departament.people_id') ? ' has-error' : null }}">
        {{ Form::label('label', trans('departament.team')) }}: <br>
        {!! Form::select('team[people_id][]', $people_id,
        old('team[people_id][]'),['class' =>
        'select-multiple form-control', 'multiple' =>
        'multiple'] ) !!}
    </div>
</div>
<div class="col-md-12">
    <hr>
</div>
<div class="col-md-12">
    <div id="response-delete-departament-team" hidden>
        <div class="alert alert-success text-center">
            {{ trans('message.success') }}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table data-table" id="departament_teams">
            <thead>
                <tr>
                    <th>{{ trans('departament.member') }}</th>
                    <th>{{ trans('buttons.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($departament_teams as $dt)
                <tr id="removeDT{{$dt->id}}">
                        <td class="text-nowrap">
                            {{ $dt->people->name }}
                        </td>
                        <td>
                            <button type="button" id="{{ $dt->id }}" class="btn btn-outline-danger text-danger delete-departament-team float-right"> <i class="fa fa-trash mr-1"></i> </button>
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
<div class="col-md-12">
    <div class="form-group float-right">
        <br>
        @include('layouts.admin.components.buttons.save')
    </div>
</div>
