<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>@yield('title', 'CTFCA School Website')</title>
    <meta name="description" content="@yield('description', 'Christ The Foundation Christian Academy, Inc.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500..800&family=Public+Sans:wght@400;500;600;700&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="visually-hidden" href="#main">Skip to main content</a>

    <header class="site">
        <div class="wrap head">
            <a class="brand" href="{{ url('/') }}" aria-label="CTFCA home">
                <img src="{{ asset('images/ctfca-logo.png') }}" alt="CTFCA logo" width="52" height="52">
                <span class="brand-text">
                    <strong>Christ The Foundation Christian Academy, Inc.</strong>
                    <small>Marang Road, Ocampo Compound, Burgos, Rodriguez, Rizal</small>
                </span>
            </a>
            <button id="menu-btn" type="button" aria-expanded="false" aria-controls="mainnav">Menu</button>
        </div>
        <nav class="main" id="mainnav" aria-label="Main sections">
            <div class="wrap">
                <ul id="navlist">
                    @php
                        $sections = [
                            ['Home', '/'],
                            ['School Overview', '#'],
                            ['Notice', '#'],
                            ['Access', '#'],
                            ['School Life', '#'],
                            ['PTA', '#'],
                        ];
                    @endphp
                    @foreach ($sections as [$label, $href])
                        <li><a href="{{ $href }}" @if ($loop->first) aria-current="page" @endif data-sec="{{ \Illuminate\Support\Str::slug($label) }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>

    <main id="main" tabindex="-1">
        <div class="wrap">
            @hasSection('breadcrumbs')
                <nav class="crumbs" aria-label="Breadcrumb">@yield('breadcrumbs')</nav>
            @endif
            @yield('content')
        </div>
    </main>

    <footer class="site">
        <div class="wrap">
            <div>
                <strong>Christ The Foundation Christian Academy, Inc.</strong><br>
                <small>Marang Road, Ocampo Compound, Burgos, Rodriguez, Rizal</small>
            </div>
            <ul aria-label="Footer sections">
                @foreach ($sections as [$label, $href])
                    <li><a href="{{ $href }}">{{ $label }}</a></li>
                @endforeach
            </ul>
            <small>All Rights Reserved. Copyright &copy; {{ date('Y') }} Christ The Foundation Christian Academy, Inc.</small>
        </div>
    </footer>
</body>
</html>