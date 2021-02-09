<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">

                <table class="tabla">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user -> id }}</td>
                            <td>{{ $user -> name }}</td>
                            <td>{{ $user -> email }}</td>
                            <td>
                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Desea eliminar...?')">
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </body>
</html>
