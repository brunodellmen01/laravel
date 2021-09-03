<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <a class="add-leader-table btn btn-outline-success float-right">{{ trans('buttons.to_add') }}</a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-stripped" id="leader_departament">
                    <thead>
                        <tr>
                            <th>{{ trans('departament.function') }}</th>
                            <th>{{ trans('departament.member') }}</th>
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
<div class="col-md-12">
    <hr>
</div>
<div class="col-md-12">
    <div id="response-delete-departament-leader" hidden>
        <div class="alert alert-success text-center">
            {{ trans('message.success') }}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table data-table" id="departament_leaders">
            <thead>
                <tr>
                    <th>{{ trans('departament.function') }}</th>
                    <th>{{ trans('departament.member') }}</th>
                    <th>{{ trans('buttons.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($departament_leaders as $dl)
                <tr id="removeDL{{$dl->id}}">
                        <td class="text-nowrap">
                            {{ $dl->occupation->name }}
                        </td>
                        <td class="text-nowrap">
                            {{ $dl->people->name }}
                        </td>
                        <td>
                            <button type="button" id="{{ $dl->id }}" class="btn btn-outline-danger text-danger delete-departament-leader"> <i class="fa fa-trash mr-1"></i> </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            {{ trans('generic.not_found') }}
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
