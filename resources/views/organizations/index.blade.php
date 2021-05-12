<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/index/organizations/view_organization.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/organizations/add_organization.css') }}">
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
        <div class="box-organization-tittle">
            <div class="box-organizations-name">
                Контрагент
            </div>
            <div class="box-organizations-inn">
                ИНН
            </div>
            <div class="box-organizations-kpp">
                КПП
            </div>
            <div class="box-organizations-number_ati">
                АТИ
            </div>
            <div class="box-organizations-checking_account">
                Р/С
            </div>
            <div class="box-organizations-correspondent_account">
                К/С
            </div>
            <div class="box-organizations-addres">
                Адрес:
            </div>

        </div>
        @foreach($organizations as $organization)
            <div class="box-organizations-info">

                    <div class="box-organizations-name"> {{ $organization->name }} </div>
                    <div class="box-organizations-inn"> {{ $organization->inn }}  </div>
                    <div class="box-organizations-kpp"> {{ $organization->kpp }}</div>
                    <div class="box-organizations-number_ati"> {{ $organization->number_ati }} </div>
                    <div class="box-organizations-checking_account"> {{ $organization->checking_account }} </div>
                    <div class="box-organizations-correspondent_account"> {{ $organization->correspondent_account }} </div>
                    <div class="box-organizations-address">
                        {{ $organization->legal_address }}
                        <br>
                        {{ $organization->mailing_address }}
                    </div>

            </div>
        @endforeach
    </div>
</div>


{{--footer--}}
<div class="layout-footer">

</div>
</body>
</html>
