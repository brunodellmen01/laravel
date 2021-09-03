@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Funcionários</h1>
            <a href="{{ route('employees.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Novo</a>
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
                                <th>Empresa</th>
                                <th>Criado em</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Empresa</th>
                                <th>Criado em</th>
                                <th>Ação</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse ($employees as $e)
                                        <tr>
                                            <td class="text-nowrap">{{ $e->name }} {{ $e->lastname }}</td>
                                            <td class="text-nowrap">{{ $e->email }}</td>
                                            <td class="text-nowrap">{{ $e->company->name }}</td>
                                            <td class="text-nowrap">{{ formatDatetimeToView($e->created_at) }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('employees.edit', $e->id) }}"
                                                    class="table-action-btn btn btn-sm bg-success-light">
                                                    <i class="far fa-edit mr-1"></i>
                                                </a>

                                                <a data-toggle="modal" data-target="#deleteEmployees{{ $e->id }}"
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
    @forelse ($employees as $e)
        @include('layouts.components.modais.employees.delete-employees')
    @empty

    @endforelse
@endsection
