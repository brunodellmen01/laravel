<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div
                class="form-group {{ $errors->has('meeting.encounters') ? ' has-error' : null }}">
                {{ Form::label('label', trans('encounters.encounters')) }}: <br>
                {!! Form::select('encounters[people_id][]', $people_id,
                old('encounters[people_id][]'),['class' =>
                'select-multiple form-control', 'multiple' =>
                'multiple'] ) !!}
                <input type="hidden" name="encounters[type_id]" value="3">
            </div>
        </div>
        <div class="col-md-12">
            <div id="response-delete-encounters" hidden>
                <div class="alert alert-success text-center">
                    {{ trans('message.success') }}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table data-table" id="teams">
                    <thead>
                        <tr>
                            <th>{{ trans('team.name') }}</th>
                            <th class="text-right">{{ trans('buttons.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($encounters as $e)
                        <tr id="removeEncounter{{$e->id}}">
                                <td class="text-nowrap">
                                    {{ $e->people->name }}
                                </td>
                                <td class="text-right">
                                    <button type="button" id="{{ $e->id }}" people="{{$e->people_id}}" meeting_id="{{$e->meeting_id}}" class="btn btn-outline-danger text-danger delete-encounter"> <i class="fa fa-trash mr-1"></i> </button>
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
    </div>
</div>
