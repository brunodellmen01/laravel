@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <div class="btn-group float-right">
                        <a href="{{ route('companies.index') }}" type="button" class="btn btn-outline-info">Voltar
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{ Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'PUT', 'class' => 'needs-validation', 'enctype' => 'multipart/form-data']) }}
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('label', 'Logo') }}:
                                                    {{ Form::file('logotipo') }}
                                                    <small class="invalid-feedback">
                                                        {!! $errors->first('logotipo') !!}
                                                    </small>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <hr>
                                                    @if ($company->logotipo == '' || $company->logotipo == 'semlogo.png')
                                                        <img loading="lazy" class="img-responsive img-thumbnail"
                                                            src="{{ asset('armazenamento/aplicativo/camera.png') }}"
                                                            width="120px">
                                                    @else
                                                        <img class="img-responsive img-thumbnail"
                                                            src="{{ asset('armazenamento/aplicativo/' . $company->logotipo) }}"
                                                            width="100" height="100">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <hr>
                                                    @if ($company->logotipo == '' || $company->logotipo == 'semlogo.png')
                                                        <p>Esta empresa não possui foto.</p>
                                                        @else
                                                        <h4 class="text-center">Dados da Imagem</h4>
                                                        <p>
                                                          <b>Nome:</b> {{$company->logotipo}}
                                                        </p>
                                                        <p>
                                                          <b>Formato:</b> {{ pathinfo($company->logotipo, PATHINFO_EXTENSION)}}
                                                        </p>
                                                        <p>
                                                          <b>Cadastrado em:</b> {{ date( 'd/m/Y' , strtotime($company->created_at))}} as {{ date( 'H:m:s' , strtotime($company->created_at))}}
                                                        </p>
                                                        @endif
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
