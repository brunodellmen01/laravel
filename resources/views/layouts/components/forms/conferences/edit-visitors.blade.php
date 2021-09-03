<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <a class="add-conference-visitor-table btn btn-outline-success float-right">{{ trans('buttons.to_add') }}</a>
                <br>
            </div>
        </div>
        <div class="col-md-12">
            <div id="response-delete-conference-visitor" hidden>
                <div class="alert alert-success text-center">
                    {{ trans('message.success') }}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table data-table table-stripped">
                    <thead>
                        <tr>
                            <th>{{ trans('conference.name') }}</th>
                            <th>{{ trans('conference.email') }}</th>
                            <th>{{ trans('conference.smartphone') }}</th>
                            <th class="text-right">{{ trans('buttons.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($visitors as $v)
                            <tr id="remove{{ $v->id }}">
                                <td class="text-nowrap">{{ $v->name }}</td>
                                <td class="text-nowrap">{{ $v->email }}</td>
                                <td class="text-nowrap">{{ $v->phone }}</td>
                                <td class="text-right">
                                    <button type="button" id="{{ $v->id }}" class="btn btn-outline-danger text-danger delete-conference-visitor-contact"> <i
                                        class="fa fa-trash mr-1"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-nowrap text-center">
                                    {{ trans('generic.not_found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-center" id="conference_visitors">
                    <thead>
                        <tr>
                            <th>{{ trans('conference.name') }}</th>
                            <th>{{ trans('conference.email') }}</th>
                            <th>{{ trans('conference.smartphone') }}</th>
                            <th class="float-right">{{ trans('buttons.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
