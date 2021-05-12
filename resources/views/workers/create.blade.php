<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('/css/create/organizations/add_organization.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/create/transportations/select_transportations.css') }}">

        <title>Document</title>
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
        </div>

        <div class="layout-main-content">
            <form action="{{ route('workers.store') }}" method="POST">
                @csrf

                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Имя:
                    </div>

                    <input name="name" class="add_info_button"type="text" value="">
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Телефон:
                    </div>

                    <input name="phone" class="add_info_button"type="text" value="">
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Email:
                    </div>

                    <input name="email" class="add_info_button"type="email" value="">
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Должность:
                    </div>

                    <select name="position_id" id="">
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}"> {{ $position->position }} </option>
                        @endforeach

                    </select>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Организация:
                    </div>

                    <select name="organization_id" id="">
                        @foreach($organizations as $organization)
                            <option value="{{ $organization->id }}"> {{ $organization->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="add_info_transportation">
                    <div>
                        <input type="submit" name="form_add_transportation" class="add_info_transportation_button">
                    </div>
                </div>
            </form>
        </div>
    </div>

        {{--footer--}}
        <div class="layout-footer">

        </div>
    </body>
</html>
