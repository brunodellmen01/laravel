<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <a class="add-goods-table btn btn-outline-success float-right">{{ trans('buttons.to_add') }}</a>
                <br>
            </div>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-stripped" id="goods">
                    <thead>
                        <tr>
                            <th>{{ trans('reserv.good') }}</th>
                            <th>{{ trans('reserv.qtd') }}</th>
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
    <div id="response-delete-good-reserv" hidden>
        <div class="alert alert-success text-center">
            {{ trans('message.success') }}
        </div>
    </div>
    <div class="table-responsive">
        <table class="table data-table" id="delete_goods">
            <thead>
                <tr>
                    <th>{{ trans('reserv.good') }}</th>
                    <th>{{ trans('reserv.qtd') }}</th>
                    <th>{{ trans('buttons.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($goods as $gd)
                <tr id="removeGood{{$gd->id}}">
                        <td class="text-nowrap">
                            {{ $gd->good->name }}
                        </td>
                        <td class="text-nowrap">
                            {{ $gd->qtd }}
                        </td>
                        <td>
                            <button type="button" id="{{ $gd->id }}" class="btn btn-outline-danger text-danger delete-good-reserv float-right"> <i class="fa fa-trash mr-1"></i> </button>
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
