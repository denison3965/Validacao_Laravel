<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    <style>
        label {
            margin-top: 20px;
        }

    </style>
</head>

<body>

    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2 mt-3">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro Cliente
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="/clientes" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" id="nome" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome"
                                    
                                    placeholder="Nome do cliente">
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('nome')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade"
                                    placeholder="Idade do cliente">
                                @if ($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('idade')}}
                                    </div>
                                @endif   
                            </div>


                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text" id="endereco" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco"
                                    placeholder="Endereco do cliente">
                                @if ($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('endereco')}}
                                    </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email"
                                    placeholder="E-mail do cliente">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Salvar</button>
                            <a href="{{ url('/')}}"><div class="btn btn-danger btn-sm mt-3">Cancelar</div></a>

                        </form>
                    </div>
                    @if ($errors->any())
                    <div class="card-footer">

                        @foreach ($errors->all() as $erros)
                            <div class="alert alert-danger">
                                {{$erros}}
                            </div>
                        @endforeach

                    </div>
                    @endif
                </div>

            </div>
        </div>
    </main>





    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</body>

</html>
