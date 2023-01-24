<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style=" background-color: #D9D9D9; color:#036F52;">
    <div class="container mt-5">
        <div class="row align-items-center">

            <div class="col-md-10 mx-auto col-lg-5">
                <form action="{{ route('login') }}" method="POST" class="p-4 p-md-5">
                    @csrf
                    <div class="form-floating mb-3">
                        <img src="https://qualis.hadrion.com.br/labcedro/qualis4/logotipo/64a433ed833c9803396beb0c8760e692_1583168447_LabCedro.png" alt="cedro_logo" width="300px">
                    </div>
                    <div class="form-floating mb-3">
                        <div class="form-floating mb-3">
                            <label style="font-size: 20px;">Usuário:</label>
                            <input type="text" name="email" class="form-control shadow p-3 @error('email') is-invalid @enderror" id="inputUser" placeholder="Email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ __($message) }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label style="font-size: 20px;">Senha:</label>
                            <input type="password" name="password" class="form-control shadow p-3 @error('password') is-invalid @enderror" id="inputPassword" placeholder="Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <p class=""><a href="{{ route('password.request') }}" target="_blank">
                                Problemas com acesso? contacte-nos
                            </a></p>
                        </div>
                        <div class="">
                            <div>
                                <input type="submit" value="Entrar" class="w-100 btn btn-lg btn-success" style="background-color: #036F52;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>
