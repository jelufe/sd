@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Coordenador</div>
                    <div class="panel-body">

                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <input name="nivel" type="hidden" class="form-control" id="nivel" value="2" />

                            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                <label for="nome" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('qualificacao') ? ' has-error' : '' }}">
                                <label for="qualificacao" class="col-md-4 control-label">Qualificação</label>

                                <div class="col-md-6">
                                    <input id="qualificacao" type="text" class="form-control" name="qualificacao" value="{{ old('qualificacao') }}" required autofocus>

                                    @if ($errors->has('qualificacao'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('qualificacao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                                <label for="cpf" class="col-md-4 control-label">Cpf</label>

                                <div class="col-md-6">
                                    <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required autofocus>

                                    @if ($errors->has('cpf'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                <label for="endereco" class="col-md-4 control-label">Endereço</label>

                                <div class="col-md-6">
                                    <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required autofocus>

                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                                <label for="sexo" class="col-md-4 control-label">Sexo</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="sexo" id="sexo" required>
                                        <option class="form-control" name="Masculino" id="masculino" value="masculino">Masculino</option>
                                        <option class="form-control" name="Feminino" id="feminino" value="feminino">Feminino</option>
                                    </select>

                                    @if ($errors->has('sexo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirme a Senha</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
