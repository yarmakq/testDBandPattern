<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/add_transportation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/select_transportations.css') }}">
    <title>Document</title>
</head>
<body>

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

    <div class="box_transportations"> <!--Коробка в котором будут находиться заявки-->
        <div class="box_transportations_title">
            <div class="box_transportations_title_id">
                №
            </div>
            <div class="box_transportations_title_org">
                Наименование
            </div>
            <div class="box_transportations_title_path">
                Маршрут
            </div>
            <div class="box_transportations_title_price">
                Ставка с НДС
            </div>
            <div class="box_transportations_title_state">
                Ставка с НДС
            </div>
            <div class="box_transportations_title_payment">
                Оплата
            </div>
        </div>
        @foreach($transportations as $transportation)
            <div class="block_transportation">  <!--Заявки разбитые на секции-->
                <div class="box_transportations_title_id">
                    {{ $transportation->id }}
                </div>
                <div class="box_transportations_title_org">
                    {{ optional($transportation->organization)->name }}
                </div>
                <div class="box_transportations_title_path">
                    {{ $transportation->start_point }} -  {{$transportation->end_point}}
                </div>
                <div class="box_transportations_title_price">
                    {{ $transportation->rate_nds }} руб.
                </div>
                <div class="box_transportations_title_state">
                    Доставлено
                </div>
                <div class="box_transportations_title_payment">
            @if($transportation->payment_id = null or $transportation->payment_id = 0)
                Не оплачено
            @else
                Оплачено
            @endif
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
