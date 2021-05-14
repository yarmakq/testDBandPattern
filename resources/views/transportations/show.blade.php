@extends('home.index')

@section('tittle', 'Заявка')

@section('content')

    <div class="layout-main-content">
        <iv class="block-info-0">
            <div class="text-center">
                <div class="block-info-1-aboutTransportation-head">
                    Заявка №{{ $item->id }} от {{ $item->created_at }}
                </div>
            </div>
        </iv>
        <div class="block-info-1">
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Договор-заявка № {{ $item->num_contract_application }}
                </div>

{{--                <input type="text" name="name" value="{{ $item->num_contract_application }}">--}}
            </div>

            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Контрагент: {{ $organization->name }}
                </div>

{{--                <input type="text" name="name" value="{{ $organization->name }}">--}}
            </div>
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Маршрут: {{ $item->start_point }} - {{ $item->end_point }}
                </div>

{{--                <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
            </div>
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Ставка с ндс: {{ $item->rate_nds }} руб. | Без ндс {{ $item->rate_no_nds }} руб.
                </div>

{{--                <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
            </div>
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Дистанция: {{ $item->interval }} км | Расход: {{ ($item->interval*23)/100 }} л.
                </div>

{{--                <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
            </div>
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Рентабельность: {{ $item->cost_per_kilometer }} руб/км.
                </div>

{{--                <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
            </div>
             <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Водитель: {{ $driver->name }}
                </div>

             {{--     <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
             </div>
            <div class="block-info-1-aboutTransportation">
                <div class="block-info-1-aboutTransportation-head">
                    Транспорт: {{ $truck->name }}
                </div>

            {{-- <input type="text" name="name" value="{{ $item->start_point }} - {{ $item->end_point }}">--}}
             </div>

        </div>
    </div>
@endsection

<style>
    .block-info-1{

    }
    .block-info-1-aboutTransportation{
        margin: 5px 5px 5px 5px;
    }
</style>

