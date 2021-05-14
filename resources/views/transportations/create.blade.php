@extends('home.index')

@section('tittle', 'Добавить заявку')

@section('content')
    <div class="layout-main-content">
        <form action="{{ route('transportations.store') }}" method="POST">
            @csrf
            <div class="block_info_transportation">

                <div class="block_info_transportation_all">
                    <div class="block_individual_info">
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Контрагент:
                            </div>

                            <select class="organization_id" id="organization_id" name="organization_id" >
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

                                <input name="num_contract_application" class="add_info_button" type="text" value="" required>
                            </div>
                            <div class="info_client">
                                <div class="info_transportation_client_title">
                                    Дата заключения:
                                </div>
                                <input name="date_creation" class="add_info_button"  type="date"  value="2021-05-07">
                            </div>

                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Автомобиль:
                            </div>

                            <select name="truck_id" id="truck_id">
                                @foreach($trucks as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Водитель:
                            </div>

                            <select name="driver_id" id="driver_id">
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

                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Трек-номер:
                            </div>

                            <input name="track_number" class="add_info_button" id="RPO" type="text"  value="" >
                        </div>
                    </div>
                    <div class="block_more_info">
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Откуда:
                            </div>

                            <input name="start_point" class="add_info_button" type="text" value="" required>
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Куда:
                            </div>

                            <input name="end_point" class="add_info_button" type="text" value="" required>
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Пройденый км:
                            </div>

                            <input name="interval" class="add_info_button" type="text" value="" id="interval" required>
                        </div>
                        <div class="info_client">
                            <div class="info_transportation_client_title">
                                Ставка с НДС руб.:
                            </div>

                            <input name="rate_nds" class="add_info_button" type="text" value="" id="rate_nds" required>
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
            </div>
    </form>
    </div>
</div>


@endsection
