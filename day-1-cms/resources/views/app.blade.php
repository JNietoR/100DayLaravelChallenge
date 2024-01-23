<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="p´3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
                    @foreach ($pages as $page)
                    <li>
                        <a href="{{ route('post', $page->slug)}}"
                            class="
                                nav-link px-2
                                {{
                                    request->is($page->slug) == $page->slug
                                    ? 'text-secondary'
                                    : 'text-white'
                                }}"
                        >{{ $page->title}}</a>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('blog')}}" class="btn btn-warning text-end">Blog</a>
            </div>
        </div>
    </header>
    @yield('content')
</body>

</html>
