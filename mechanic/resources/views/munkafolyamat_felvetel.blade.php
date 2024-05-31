<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Szerelők</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

            <h2>Munkalap felvétele</h2>

            <form id="login" action="/munkafolyamat" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="munkakor" class="form-label">Munkakör</label>
                    <select class="form-select" aria-label="Default select example" id="munkakor" name="munkakor">
                        <option value="Karbantartas" id="munkakor" name="munkakor">Karbantartás</option>
                        <option value="Javitas" id="munkakor" name="munkakor">Javítás</option>
                    </select>
                </div>

                <h3>Gépjármű adatok</h3>

                <div class="mb-3">
                    <label for="rendszam" class="form-label">Rendszám</label>
                    <input type="text" class="form-control" id="rendszam" name="rendszam">
                </div>

                <div class="mb-3">
                    <label for="gyartmany" class="form-label">Gyártmány</label>
                    <input type="text" class="form-control" id="gyartmany" name="gyartmany">
                </div>

                <div class="mb-3">
                    <label for="gyartas_eve" class="form-label">Gyártás éve</label>
                    <input type="number" class="form-control" id="gyartas_eve" name="gyartas_eve">
                </div>

                <div class="mb-3">
                    <label for="tulajdonos_nev" class="form-label">Tulajdonos neve</label>
                    <input type="text" class="form-control" id="tulajdonos_nev" name="tulajdonos_nev">
                </div>

                <div class="mb-3">
                    <label for="tulajdonos_cim" class="form-label">Tulajdonos címe</label>
                    <input type="text" class="form-control" id="tulajdonos_cim" name="tulajdonos_cim">
                </div>

                <div class="mb-3">
                    <label for="szerelo" class="form-label">Szerelő neve</label>
                    <input type="text" class="form-control" value="{{Auth()->user()->name}}" id="szerelo" name="szerelo">
                </div>

                <div class="mb-3">
                    <label for="anyag_id" class="form-label">Anyag típusa</label>
                    @php
                    $materials = DB::table('anyags')->select('*')->get();
                    @endphp
                    <select class="form-select" aria-label="Default select example" id="anyag_id" name="anyag_id">
                        @foreach ($materials as $index => $anyag)
                        <option value="{{ $anyag->id }}" id="anyag_id" name="anyag_id">{{ $anyag->nev }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="anyag_mennyiseg" class="form-label">Anyagmennyiség</label>
                    <input type="text" class="form-control" id="anyag_mennyiseg" name="anyag_mennyiseg">
                </div>

                <div class="mb-">
                    <label for="alkatresz_id" class="form-label">Alkatrész</label>
                    @php
                    $materials = DB::table('alkatreszs')->select('*')->get();
                    @endphp
                    <select class="form-select" aria-label="Default select example" id="alkatresz_id" name="alkatresz_id">
                        @foreach ($materials as $index => $anyag)
                        <option value="{{ $anyag->id }}" id="alkatresz_id" name="alkatresz_id">{{ $anyag->nev }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alkatresz_mennyiseg" class="form-label">Alkatrész mennyiség</label>
                    <input type="text" class="form-control" id="alkatresz_mennyiseg" name="alkatresz_mennyiseg">
                </div>

                <div class="mb-3">
                    <Label for="munkafolyamat_id">Munkafolyamat</Label>
                    @php
                    $folyamat = DB::table('munkafolyamats')->select('*')->get();
                    @endphp
                    <select class="form-select" aria-label="Default select example" name="munkafolyamat_id" id="munkafolyamat_id">
                        @foreach ($folyamat as $index => $anyag)
                        <option value="{{ $anyag->id }}">{{ $anyag->nev }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Munkafolyamat felvétele</button>
            </form>
        </div>

        @if ($errors->any()) <div>
            <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
        </div> @endif @if (session('success')) <div> {{ session('success') }} </div> @endif

    </main>

</body>

</html>