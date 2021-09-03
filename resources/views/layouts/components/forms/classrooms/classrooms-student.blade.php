<div class="col-md-12">
    <div class="row">
        {{-- <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>{{ trans('church.name') }}</th>
                        <th>{{ trans('church.church_type') }}</th>
                        <th>{{ trans('church.legal_representative') }}</th>
                        <th class="text-right">{{ trans('buttons.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($churches as $c)
                        <tr>
                            <td class="text-nowrap">{{ $c->name }}</td>
                            <td class="text-nowrap">{{ $c->churchType->name }}</td>
                            <td class="text-nowrap">{{ $c->legal_representative }}</td>
                            <td class="text-right">
                                <a href="{{ route('churches.edit', $c->uuid) }}"
                                    class="table-action-btn btn btn-sm bg-success-light">
                                    <i class="far fa-edit mr-1"></i>
                                </a>

                                <a data-toggle="modal" data-target="#deleteChurch{{ $c->uuid }}"
                                    class="table-action-btn btn btn-sm bg-danger-light">
                                    <i class="fa fa-trash mr-1"></i>
                                </a>
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
        </div> --}}
    </div>
    <div class="col-md-12">
        <div class="form-group float-right">
            @include('layouts.admin.components.buttons.save')
        </div>
    </div>

</div>
