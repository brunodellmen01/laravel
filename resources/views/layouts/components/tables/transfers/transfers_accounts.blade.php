<div class="btn-group float-right">
    <a data-toggle="modal" data-target="#NewTransfersAccount"
        class="btn btn-outline-info">
        {{ trans('buttons.new') }}
    </a>
</div>
<table class="table data-table table-stripped">
    <thead>
        <tr>
            <th>{{ trans('finance.date') }}</th>
            <th>{{ trans('finance.accounts_finance_origin') }}</th>
            <th>{{ trans('finance.accounts_finance_destinator') }}</th>
            <th>{{ trans('finance.price') }}</th>
            <th class="text-right">{{ trans('buttons.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($transfers_accounts as $ta)
            <tr>
                <td class="text-nowrap">{{ $ta->date ? formatDateToView($ta->date) : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $ta->accounts_finance_origin_id ? $ta->accountOrigin->name : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $ta->accounts_finance_destinator_id ? $ta->accountDestinator->name : trans('generic.not_information') }}</td>
                <td class="text-nowrap">{{ $ta->price ? trans('finance.currence_coin') . ': ' . format_currency($ta->price) : '' }}</td>
                <td class="text-right">
                    <a data-toggle="modal" data-target="#EditTransfersAccount{{ $ta->uuid }}"
                        class="table-action-btn btn btn-sm bg-success-light">
                        <i class="far fa-edit mr-1"></i>
                    </a>

                    <a data-toggle="modal" data-target="#deleteTransfersAccounts{{ $ta->uuid }}"
                        class="table-action-btn btn btn-sm bg-danger-light">
                        <i class="fa fa-trash mr-1"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-nowrap text-center">
                    {{ trans('generic.not_found') }}
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@forelse ($transfers_accounts as $ta)
    @include('layouts.admin.components.modais.transfers.delete-transfers')
    @include('layouts.admin.components.modais.transfers.edit-transfers')
@empty

@endforelse
