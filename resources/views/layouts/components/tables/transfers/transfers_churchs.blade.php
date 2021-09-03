<div class="btn-group float-right">
    <a data-toggle="modal" data-target="#NewTransfersChurches"
        class="btn btn-outline-info">
        {{ trans('buttons.new') }}
    </a>
</div>
<table class="table data-table table-stripped">
    <thead>
        <tr>
            <th>{{ trans('finance.date') }}</th>
            <th>{{ trans('finance.churche_origin') }}</th>
            <th>{{ trans('finance.churche_destinator') }}</th>
            <th>{{ trans('finance.price') }}</th>
            <th class="text-right">{{ trans('buttons.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($transfers_churchs as $tc)
            <tr>
                <td class="text-nowrap">{{ $tc->date ? formatDateToView($tc->date) : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $tc->churche_origin_id ? $tc->churcheOrigin->name : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $tc->churche_destinator_id ? $tc->churcheDestinator->name : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $tc->price ? trans('finance.currence_coin') . ': ' . format_currency($tc->price) : '' }}</td>
                <td class="text-right">
                    <a data-toggle="modal" data-target="#EditTransfersChurches{{ $tc->uuid }}"
                        class="table-action-btn btn btn-sm bg-success-light">
                        <i class="far fa-edit mr-1"></i>
                    </a>

                    <a data-toggle="modal" data-target="#deleteTransfersChurch{{ $tc->uuid }}"
                        class="table-action-btn btn btn-sm bg-danger-light">
                        <i class="fa fa-trash mr-1"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-nowrap text-center">
                    {{ trans('generic.not_found') }}</td>
            </tr>
        @endforelse
    </tbody>
</table>

@forelse ($transfers_churchs as $ta)
    @include('layouts.admin.components.modais.transfers.delete-transfers')
    @include('layouts.admin.components.modais.transfers.edit-transfers')
@empty
@endforelse
