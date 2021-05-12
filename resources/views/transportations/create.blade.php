<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/create/transportations/add_transportation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/select_transportations.css') }}">
    <title>Добавить заявку</title>
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
        <form action="{{ route('transportations.store') }}" method="POST">
            @csrf
            <div class="block_info_transportation">
                <div class="inTransportation">
                    <div>
                        Номер заявки: <br> <input name="unic_id" class="add_info_button" type="text" value="" disabled>
                    </div>
                    <div>
                        Дата создания: <br> <input name="date_of_creation" class="add_info_button" id="datetime" type="datetime-local"  value="2021-05-07T08:30">
                    </div>
                    <div>
                        РПО: <br> <input name="track_number" class="add_info_button" id="RPO" type="text"  value="308023595308098">
                    </div>
                </div>

                <div class="block_info_transportation_all">
                    <div class="block_individual_info">
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Контрагент:
                            </div> <select class="js-example-basic-single" name="organization_id" id="">
                                @foreach($organizations as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="info_transportation_client">
                            <div class="info_client">
                                <div class="info_transportation_client_title">
                                    Номер договор-заявки:
                                </div>

                                <input name="num_contract_application" class="add_info_button" type="text" value="1">
                            </div>
                            <div class="info_client">
                                <div class="info_transportation_client_title">
                                    Дата заключения:
                                </div>
                                <input name="date_creation" class="add_info_button" id="date_transp" type="date"  value="2021-05-07">
                            </div>

                            <div class="info_client">
                                <div class="info_transportation_client_title">
                                    Менеджер:
                                </div>

                                <input name="name_manager" class="add_info_button" type="text" value="Оксана">
                            </div>

                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Автомобиль:
                            </div>

                            <select name="truck" id="">
                                @foreach($trucks as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Водитель:
                            </div>

                            <select name="drive" id="">
                                @foreach($workers as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Коментарий:
                            </div>

                            <textarea name="description" rows="7" cols="45"></textarea>
                        </div>
                    </div>
                    <div class="block_more_info">
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Откуда:
                            </div>

                            <input name="start_point" class="add_info_button" type="text" value="Ст.Оскол, ул. Котла 25">
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Куда:
                            </div>

                            <input name="end_point" class="add_info_button" type="text" value="с.Ворсино, РЦ-5 северный">
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Пройденый км:
                            </div>

                            <input name="interval" class="add_info_button" type="text" value="720" id="interval">
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Ставка с НДС руб.:
                            </div>

                            <input name="rate_nds" class="add_info_button" type="text" value="" id="rate_nds" >
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Ставка б/НДС руб.:
                            </div>

                            <input name="rate_no_nds" class="add_info_button" type="text" value=""  id="rate_no_nds" >
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Рентабельность:
                            </div>

                            <input name="cost_per_kilometer" class="add_info_button" type="text" value="" id="cost_per_kilometer" >
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Характер груза:
                            </div>

                            <input name="cargo_character" class="add_info_button" type="text" value="Мясо">
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Масса t:
                            </div>

                            <input name="cargo_weight" class="add_info_button" type="text" value="2">
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Объем m3:
                            </div>

                            <input name="cargo_volume" class="add_info_button" type="text" value="32">
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Дата отправки:
                            </div>

                            <input name="date_departure" class="add_info_button" id="start_date" type="date"  value="2021-05-06">
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Дата прибытия:
                            </div>

                            <input name="date_arrival" class="add_info_button" id="end_date" type="date"  value="2021-05-07">
                        </div>
                    </div>
                </div>
            </div>
            <div class="add_info_transportation">
                <div>
                    <input type="submit" name="form_add_transportation" class="add_info_transportation_button">
                </div>
                <div>
                    <input type="reset" class="add_info_transportation_button">
                </div>
            </div>
    </div>
    </form>
    </div>
</div>



{{--footer--}}
<div class="layout-footer">

</div>
</body>
<script src="{{ asset('js/calculate.js') }}"></script>
</html>
