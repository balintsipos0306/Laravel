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

            <h2>Munkafolyamat felvétele</h2>

            <form id="login">
                <div class="mb-3">
                    <label for="felvevoneve" class="form-label">Munkafelvevő neve</label>
                    <input type="text" class="form-control" id="felvevoNev">
                </div>

                <label for="munkakor" class="form-label">Munkakör</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">Karbantartás</option>
                    <option value="2">Javítás</option>
                </select>

                <div class="mb-3">
                    <label for="idopont" class="form-label">Felvétel időpontja</label>
                    <input type="datetime-local" class="form-control" id="Date">
                </div>

                <h3>Gépjármű adatok</h3>

                <div class="mb-3">
                    <label for="rendszam" class="form-label">Rendszám</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <div class="mb-3">
                    <label for="gyartmany" class="form-label">Gyártmány</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <div class="mb-3">
                    <label for="tipus" class="form-label">Típus</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <div class="mb-3">
                    <label for="tulNev" class="form-label">Tulajdonos neve</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <div class="mb-3">
                    <label for="tulCim" class="form-label">Tulajdonos címe</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <div class="mb-3">
                    <label for="szereloID" class="form-label">Szerelő azonosító</label>
                    <input type="text" class="form-control" id="exampleInputdate">
                </div>

                <label for="anyag" class="form-label">Anyag típusa</label>
                @php
                    $materials = DB::table('anyags')->select('nev')->get();
                @endphp

                <select class="form-select" aria-label="Default select example">
                    @foreach ($materials as $index => $anyag)
                        <option value="{{ $index }}">{{ $anyag->nev }}</option>
                    @endforeach
                </select>

                <label for="alkatresz" class="form-label">Alkatrész</label>
                @php
                    $materials = DB::table('alkatreszs')->select('nev')->get();
                @endphp

                <select class="form-select" aria-label="Default select example">
                    @foreach ($materials as $index => $anyag)
                        <option value="{{ $index }}">{{ $anyag->nev }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Munkafolyamat felvétele</button>
            </form>
        </div>

    </main>

</body>

</html>