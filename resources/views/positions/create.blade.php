@extends('home.index')

@section('tittle', 'Добавить должность')

@section('content')

    <div class="layout-main-content">
        <form action="{{ route('positions.store') }}" method="POST">
            @csrf

            <div class="info_client">
                <div class="info_transportation_client_title">
                    Должность:
                </div>

                <input name="position" class="add_info_button"type="text" value="">

            <div class="add_info_transportation">
                <div>
                    <input type="submit" name="form_add_transportation" class="add_info_transportation_button">
                </div>
            </div>
        </form>
    </div>
    </div>

@endsection
