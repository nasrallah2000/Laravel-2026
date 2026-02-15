<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}" dir="{{ app()->getlocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">{{ __('custom.fr') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('forms.form1') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('forms.form1') }}">{{ __('custom.fr1') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('forms.form2') ? 'active' : '' }}"
                                href="{{ route('forms.form2') }}">{{ __('custom.fr2') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('forms.form3') ? 'active' : '' }}"
                                href="{{ route('forms.form3') }}">{{  __('custom.fr3') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('forms.form4') ? 'active' : '' }}"
                                href="{{ route('forms.form4') }}">{{  __('custom.fr4')  }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        {{ $slot }}
    </main>


    <footer class="bg-light py-4">
        <p class="text-center m-0">All copyright reserved to Abo Omar <i class="far fa-copyright"></i> {{ date('Y') }}
        </p>
    </footer>
</body>

</html>
