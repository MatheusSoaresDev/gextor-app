@extends('headers.header')

<body class="bg-dark" style="background-color: #f1f2f7!important;">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Endereço de email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" placeholder="Senha" name="password" required autocomplete="current-password">
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="checkbox">
                            <label><input type="checkbox"> Lembrar</label>
                            <label class="pull-right"><a href="#">Esqueceu sua senha?</a></label>
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>

                        <div class="register-link m-t-15 text-center" style="margin-top: 10px;">
                            <p>Ainda não tem cadastro? <a href="{{ route('cadastro') }}"> Cadastre-se aqui!</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


