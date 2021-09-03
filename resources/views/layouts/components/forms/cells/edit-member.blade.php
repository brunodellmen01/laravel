<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div
                class="form-group {{ $errors->has('meeting.member') ? ' has-error' : null }}">
                {{ Form::label('label', trans('member.member')) }}: <br>
                {!! Form::select('member[people_id][]', $people_id,
                old('member[people_id][]'),['class' =>
                'select-multiple form-control', 'multiple' =>
                'multiple'] ) !!}
            </div>
        </div>
        <div class="col-md-12">
            <div id="response-delete-member-cell" hidden>
                <div class="alert alert-success text-center">
                    {{ trans('message.success') }}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table data-table" id="members">
                    <thead>
                        <tr>
                            <th>{{ trans('team.name') }}</th>
                            <th class="text-right">{{ trans('buttons.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $m)
                        <tr id="removeCellMember{{$m->id}}">
                                <td class="text-nowrap">
                                    {{ $m->people->name }}
                                </td>
                                <td class="text-right">
                                    <button type="button" id="{{ $m->id }}" people="{{$m->people_id}}" cell_id="{{$m->cell_id}}" class="btn btn-outline-danger text-danger delete-cell-member"> <i class="fa fa-trash mr-1"></i> </button>
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
                @include('layouts.admin.components.buttons.save')
            </div>
        </div>
    </div>
</div>
