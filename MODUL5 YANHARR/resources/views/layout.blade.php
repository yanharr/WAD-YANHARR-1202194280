<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | EAD Public Health Center</title>
    <link rel="icon" href="{{ asset('img/logo-ead.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ (request()->is("/")) ? 'active fw-bold' : '' }}" href="{{ route('home.index') }}">HOME</a>
                    <a class="nav-link {{ (request()->is("vaccine*")) ? 'active fw-bold' : '' }}" href="{{ route('vaccine.index') }}">VACCINE</a>
                    <a class="nav-link {{ (request()->is("patient*")) ? 'active fw-bold' : '' }}" href="{{ route('patient.index') }}">PATIENT</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('main-content')

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Kesan : Capek :)</p>
                <p>Pesan : Ya, Capek</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <footer class="sticky-footer fixed-bottom bg-white py-1">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-muted">
                <span><a href="" class="text-muted text-decoration-none" data-bs-toggle="modal" data-bs-target="#modal">Made with with <img src="{{ asset('img/hati.gif') }}" alt=""> [Yanharr Alfirazi] - [1202194280]</a></span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>