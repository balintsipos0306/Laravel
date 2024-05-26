<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
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
                    <label for="secondname" class="form-label">Felvétel időpontja</label>
                    <input type="datetime-local" class="form-control" id="exampleInputdate">
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Munkakör</option>
                    <option value="1">Karbantartás</option>
                    <option value="2">Javítás</option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputWork" class="form-label">Elvégzendő munka</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Munkafolyamat felvétele</button>
            </form>
        </div>

    </main>

</body>

</html>