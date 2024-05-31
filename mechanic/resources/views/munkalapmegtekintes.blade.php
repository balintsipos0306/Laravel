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
        <div class="container" id="munkalap">
            <h2>Munkalap Megtekintése</h2>
            <table class="table">
                <tr id="header">
                    <td>Munkafelvevő Neve</td>
                    <td>Felvétel időpontja</td>
                    <td>Rendszám</td>
                    <td>Gyártmány</td>
                    <td>Gyártás éve</td>
                    <td>Tulajdonos neve</td>
                    <td>Tulajdonos címe</td>
                    <td>Alkatrész név</td>
                    <td>Alkatrész mennyiség</td>
                    <td>Anyag név</td>
                    <td>Anyag mennyiség</td>
                </tr>
                @php
                    $munkalaps = DB::table('munkalaps')->select('*')->get()
                @endphp
                @foreach ($munkalaps as $munkalap)

                @php
                    $anyagnev = $munkalap -> anyag_id;
                    $alkatresz = $munkalap -> alkatresz_id;
                    $anyag = DB::table('anyags')->select('*')->where('id',$anyagnev)->first();
                    $alkatresz = DB::table('alkatreszs')->select('*')->where('id',$anyagnev)->first();
                @endphp

                <tr>
                    <td>{{$munkalap->id}}</td>
                    <td>{{$munkalap->rendszam}}</td>
                    <td>{{$munkalap->gyartmany}}</td>
                    <td>{{$munkalap->gyartas_eve}}</td>
                    <td>{{$munkalap->tulajdonos_nev}}</td>
                    <td>{{$munkalap->tulajdonos_cim}}</td>
                    <td>{{$alkatresz->nev}}</td>
                    <td>{{$munkalap->alkatresz_mennyiseg}}</td>
                    <td>{{$anyag->nev}}</td>
                    <td>{{$munkalap->anyag_mennyiseg}}</td>


                    @if ( Auth()->user()->name != "admin")
                        <td><button disabled class="btn btn-primary">A lezáráshoz admin jogosultság szükséges</button>
                    @else
                        <td><button class="btn btn-primary" onclick="deleteUser()">Lezárás</button></td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>

    </main>

</body>

</html>
