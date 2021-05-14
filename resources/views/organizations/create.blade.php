@extends('home.index')

@section('tittle', 'Добавить организацию')

@section('content')

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

@endsection
