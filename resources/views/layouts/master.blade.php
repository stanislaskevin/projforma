<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{config('app.name', 'ProjFomat')}}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

<body>
<!-- Navigation Principal-->
@include('partials.menu')
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                @include('partials.messages')
                @yield('content')
            </div>
            <div class="col-4 border-left" >
                <!-- Search form -->
                    <form class="active-pink-3 active-pink-4 mt-4" method="get" action="{{ route('search') }}">
                        <input name="search" type="search" placeholder="Rechercher">
                    </form>
            </div>
        </div>
    </div>
    <hr>
    <!-- Footer -->
    <footer>
        <!-- Navigation Second-->
        @include('partials.menu')
    </footer>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>