<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form.css">
    <title>Szerelők</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/deleteuser.js"></script>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Szerelőműhely</a>
                @extends("main")
                @section("sidebar")
                @parent
                @endsection
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <h2>Dolgozók Listája</h2>
            <table class="table">
                <tr>
                    <td>Azonosító</td>
                    <td>Név</td>
                    <td>Jogosultság</td>
                    <td></td>
                </tr>
                @php
                    $users = DB::table('users')->select('*')->get()
                @endphp
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    
                    @if ( Auth()->user()->name != "admin")
                        <td><button disabled class="btn btn-primary">A törléshez admin jogosultság szükséges</button>
                    @else
                        <td><button class="btn btn-primary" onclick="deleteUser()">Törlés</button></td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>

    </main>

</body>

</html>