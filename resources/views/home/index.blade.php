<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{asset('/css/index/organizations/view_organization.css')}}">
    <link rel="stylesheet" href="{{asset('css/index/transportations/transp_style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/create/organizations/add_organization.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/select_transportations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/add_transportation.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        @yield('tittle')
    </title>
</head>
<body>
    {{--header--}}
    <div class="layout-header">
        <div class="layout-header-title">ATLANTIKA DEMO</div>
    </div>

    {{--main--}}

    {{--nav--}}
    <div class="layout-main">
        <div class="layout-main-nav">
            <div class="layout-main-nav-title">
                Заявки
            </div>
            <a href="{{ route('transportations.index') }}">
                <button>
                    Показать перевозки
                </button>
            </a>
            <br>
            <a href="{{ route('transportations.create') }}">
                <button>
                    Добавить перевозку
                 </button>
            </a>
            <br>
            <br>
            <div class="layout-main-nav-title">
                Организации
            </div>
            <a href="{{ route('organizations.index') }}">
                <button>
                    Показать контрагентов
                </button>
                </a>
                <br>
            <a href="{{ route('organizations.create') }}">
                <button>
                    Добавить контрагента
                </button>
            </a>
            <br>
            <br>
            <div class="layout-main-nav-title">
                Транспорт
            </div>
            <a href="{{ route('trucks.index') }}">
                <button>
                    Показать транспорт
                </button>
            </a>
            <br>
            <a href="{{ route('trucks.create') }}">
                <button>
                    Добавить транспорт
                </button>
            </a>
                <br>
            <br>
            <div class="layout-main-nav-title">
                Кадры
            </div>
            <a href="{{ route('workers.index') }}">
                <button>
                    Показать кадры
                </button>
            </a>
                <br>
            <a href="{{ route('workers.create') }}">
                <button>
                    Добавить кадры
                </button>
            </a>
                <br>
            <div class="layout-main-nav-title">
                Должности
            </div>
            <a href="{{ route('positions.index') }}">
                <button>
                    Показать должности
                </button>
            </a>
                <br>
            <a href="{{ route('positions.create') }}">
                <button>
                    Добавить должность
                </button>
            </a>
                <br>
        </div>

        @yield('content')
    </div>

    {{--footer--}}
    <div class="layout-footer">

    </div>

</body>
sc
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/calculate.js') }}"></script>
</html>
