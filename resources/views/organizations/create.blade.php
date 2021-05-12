<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/create/organizations/add_organization.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create/transportations/select_transportations.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            <form action="{{ route('organizations.store') }}" method="POST">
                @csrf

                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Наименование:
                        <br>
                    </div>

                    <input name="name" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Юр. адрес:
                    </div>
                    <br>
                    <input name="legal_address" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Почтовый адрес:
                    </div>

                    <input name="mailing_address" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        ИНН:
                    </div>

                    <input name="inn" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        КПП:
                    </div>

                    <input name="kpp" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        р/с:
                    </div>

                    <input name="checking_account" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        к/с:
                    </div>

                    <input name="correspondent_account" class="add_info_button"type="text" value="" required>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        АТИ:
                    </div>

                    <input name="number_ati" class="add_info_button"type="text" value="" required>
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
<script src="{{ asset('js/calculate.js') }}"></script>
</html>
