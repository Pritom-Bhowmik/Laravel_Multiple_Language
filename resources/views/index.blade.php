<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Localization</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-success-subtle">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="{{ url('/') }}">@lang('message.Localization')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">@lang('message.Home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('message.Service')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('message.Pricing')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">@lang('message.Contact')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="localization" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('message.Languages')
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="localization">
                            <li><a class="dropdown-item" href="locale/en">@lang('message.English')</a></li>
                            <li><a class="dropdown-item" href="locale/fr">@lang('message.French')</a></li>
                            <li><a class="dropdown-item" href="locale/de">@lang('message.Germany')</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>