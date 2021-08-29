<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="description" content="">
    <link href="{{ asset('resources/css/admin.css') }}" rel="stylesheet">
    <title>Administração</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>.login-clean {
            background: #f1f7fc;
            padding: 80px 0;
        }

        .login-clean form {
            max-width: 320px;
            width: 90%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            color: #505e6c;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .login-clean .illustration {
            text-align: center;
            padding: 0 0 20px;
            font-size: 100px;
            color: rgb(244, 71, 107);
        }

        .login-clean form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 8px;
            height: 42px;
        }

        .login-clean form .btn-primary {
            background: #f4476b;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none !important;
        }

        .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
            background: #eb3b60;
        }

        .login-clean form .btn-primary:active {
            transform: translateY(1px);
        }

        .login-clean form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
        }

        .login-clean form .forgot:hover, .login-clean form .forgot:active {
            opacity: 1;
            text-decoration: none;
        }

    </style>
</head>
<body>

@include('components.nav')

@if(!(Illuminate\Support\Facades\Auth::guest()))
    <form class="form-horizontal" style="margin-top: 100px;">
        <fieldset>
            <!-- Form Name -->
            <legend style="margin-left: 500px ">Inserir carros</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">Marca</label>
                <div class="col-md-4">
                    <input id="product_id" name="product_id" placeholder="Marca" class="form-control input-md"
                           required="" type="text">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Modelo</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" placeholder="Modelo" class="form-control input-md"
                           required="" type="text">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Ano</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_name_fr" placeholder="Ano registo"
                           class="form-control input-md" required="" type="text">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">Combustivel</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_name_fr" placeholder="Combustivel"
                           class="form-control input-md" required="" type="text">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="available_quantity">Quilometros</label>
                <div class="col-md-4">
                    <input id="available_quantity" name="available_quantity" placeholder="Quilometros"
                           class="form-control input-md" required="" type="text">
                </div>
            </div>


        </fieldset>
    </form>
@else

    <h1 style="color: red;margin-top: 100px;text-align: center">Nao tem autorização para ver esta pagina.<br>Deve
        Efetuar Login!!!</h1>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div>
            <a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>

@endif
@include('components.footer')
</body>
