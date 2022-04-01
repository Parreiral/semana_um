<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="cointainer">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Account</h4>
            <hr>
                <table>
                    <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td><a href="logout">Logout</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <!--Inicio da tabela crud-->
    <div class="container" pt-5>
        <h2>Cars <a  class="btn btn-info" href="cars-new">New Car</a></h2>          
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Lugares</th>
                    <th>Potência</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $Car)
                <tr>
                    <td>{{$Car->id}}</td>
                    <td>{{$Car->Marca}}</td>
                    <td>{{$Car->Modelo}}</td>
                    <td>{{$Car->lugares}}</td>
                    <td>{{$Car->potencia}}</td>
                    <td>
                        <a href="/cars-edit/{{$Car->id}}" class="btn btn-sm btn-info" >Edit</a>
                        <a href="/cars-delete/{{$Car->id}}" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
