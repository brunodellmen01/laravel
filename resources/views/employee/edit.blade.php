@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <div class="btn-group float-right">
                        <a href="{{ route('companies.index') }}" type="button"
                            class="btn btn-outline-info">Voltar
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{ Form::model($company, array('route' => array('companies.update', $company->id), 'method' => 'PUT', 'class' => 'needs-validation')) }}
                                    @method('PATCH')
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Nome') }}:*
                                                    {{ Form::text('name', null, ['required', 'class' => 'form-control ' . ($errors->has('name') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Insira o nome', 'maxlength' => '150', 'minlength' => '3']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('name') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'E-mail') }}:
                                                    {{ Form::text('email', null, ['required', 'class' => 'form-control ' . ($errors->has('email') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Insira o e-mail', 'maxlength' => '150', 'minlength' => '3']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('email') !!}
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Site') }}:
                                                    {{ Form::text('site', null, ['required', 'class' => 'form-control ' . ($errors->has('site') ? ' is-invalid' : null), 'autocomplete' => 'off', 'placeholder' => 'Insira o site', 'maxlength' => '150', 'minlength' => '3']) }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('site') !!}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group float-right">
                                            @include('layouts.components.buttons.save')
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
