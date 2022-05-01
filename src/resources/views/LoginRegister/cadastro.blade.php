@extends('headers.header')

<body class="bg-dark" style="background-color: #f1f2f7!important;">
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-form">
                <form method="POST" action="{{ route('cadastro') }}">
                    {{ csrf_field() }}
                    <div class="has-warning form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" value="{{ old('nome') }}" required autofocus>
                        @error('nome') <small style="color: red;">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control @error('sobrenome') is-invalid @enderror" placeholder="Sobrenome" name="sobrenome" value="{{ old('sobrenome') }}"  required autofocus>
                        @error('sobrenome') <small style="color: red;">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Endereço de email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                        @error('email') <small style="color: red;">{{ $message }}</small> @enderror
                    </div>

                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">
                        @error('password') <small style="color: red;">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Cadastrar</button>

                    <div class="register-link m-t-15 text-center" style="margin-top: 10px;">
                        <p>Já tem acesso? <a href="{{ route('login') }}"> Clique aqui para entrar!</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>


