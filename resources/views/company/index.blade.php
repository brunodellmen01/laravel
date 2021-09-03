@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Empresas</h1>
            <a href="{{ route('companies.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Novo</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Listagem</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Site</th>
                                <th>Criado em</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Site</th>
                                <th>Criado em</th>
                                <th>Ação</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($companies as $c)
                                        <tr>
                                            <td class="text-nowrap">{{ $c->name }}</td>
                                            <td class="text-nowrap">{{ $c->email }}</td>
                                            <td class="text-nowrap">{{ $c->site }}</td>
                                            <td class="text-nowrap">{{ formatDatetimeToView($c->created_at) }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('companies.edit', $c->id) }}"
                                                    class="table-action-btn btn btn-sm bg-success-light">
                                                    <i class="far fa-edit mr-1"></i>
                                                </a>

                                                <a data-toggle="modal" data-target="#deleteCompanies{{ $c->id }}"
                                                    class="table-action-btn btn btn-sm bg-danger-light">
                                                    <i class="fa fa-trash mr-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-nowrap text-center">
                                                Sem registro! :)</td>
                                        </tr>
                                    @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    @forelse ($companies as $c)
        @include('layouts.components.modais.companies.delete-companies')
    @empty

    @endforelse
@endsection
