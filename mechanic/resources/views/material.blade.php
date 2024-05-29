<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/part-material.css">
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
        @if ( Auth()->user()->name != "admin")
            <h1><i>Az anyagok módosításához Admin jogosultság szükséges</i></h1>

            @else
            <div class="container">
            <form>
            <h2>Anyag felvétele</h2>

                <div class="mb-3">
                    <label for="nev" class="form-label">Név</label>
                    <input type="text" class="form-control" id="nev">
                </div>

                <div class="mb-3">
                    <label for="mennyiseg" class="form-label">Mennyiség</label>
                    <input type="text" class="form-control" id="mennyiseg">
                </div>


                <button type="submit" class="btn btn-primary">Anyag felvétele</button>
            </form>
        </div>

        <div class="container">
        <form>
            <h2>Anyag törlése</h2>

                <div class="mb-3">
                    <label for="rendszam" class="form-label">Név</label>
                    <input type="text" class="form-control" id="nev">
                </div>

                <button type="submit" class="btn btn-primary">Anyag törlése</button>
            </form>

        </div>

        @endif
        
    </main>

</body>

</html>