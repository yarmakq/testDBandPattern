<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/create/organizations/add_organization.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Добавить заявку</title>
</head>
<body>

<button><a href="/">Back</a></button>

<form action="{{ route('organizations.store') }}" method="POST">
    @csrf

    <div class="info_client">
        <div class="info_transportation_client_title">
            Наименование:
        </div>

        <input name="name" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            Юр. адрес:
        </div>

        <input name="legal_address" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            Почтовый адрес:
        </div>

        <input name="mailing_address" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            ИНН:
        </div>

        <input name="inn" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            КПП:
        </div>

        <input name="kpp" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            р/с:
        </div>

        <input name="checking_account" class="add_info_button"type="text" value="">
    </div>
    <div class="info_client">
        <div class="info_transportation_client_title">
            к/с:
        </div>

        <input name="correspondent_account" class="add_info_button"type="text" value="">
    </div>
    <div class="add_info_transportation">
        <div>
            <input type="submit" name="form_add_transportation" class="add_info_transportation_button">
        </div>
    </div>
</form>
</body>
<script src="{{ asset('js/calculate.js') }}"></script>
</html>
