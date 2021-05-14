@extends('home.index')

@section('tittle', 'Добавить кадры')

@section('content')

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

                    <select name="position_id" id="position_id" name="position_id">
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}"> {{ $position->position }} </option>
                        @endforeach

                    </select>
                </div>
                <div class="info_client">
                    <div class="info_transportation_client_title">
                        Организация:
                    </div>

                    <select class="organization_id" id="organization_id_from_worker" name="organization_id">
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

@endsection
