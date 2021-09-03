<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('meeting.team') ? ' has-error' : null }}">
                {{ Form::label('label', trans('meeting.team')) }}: <br>
                {!! Form::select('team[people_id][]', $people_id, old('team[people_id][]'),['class' => 'select-multiple form-control', 'multiple' => 'multiple'] ) !!}
                <input type="hidden" name="team[type_id]" value="4">
            </div>
        </div>
        <div class="col-md-12">
            <div id="response-delete-teams" hidden>
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
                        @forelse ($teams as $t)
                        <tr id="removeTeam{{$t->id}}">
                                <td class="text-nowrap">
                                    {{ $t->people->name }}
                                </td>
                                <td class="text-right">
                                    <button type="button" id="{{ $t->id }}" people="{{$t->people_id}}" meeting_id="{{$t->meeting_id}}" class="btn btn-outline-danger text-danger delete-team"> <i class="fa fa-trash mr-1"></i> </button>
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
    </div>
</div>
