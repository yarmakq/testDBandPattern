@extends('home.index')

@section('tittle', 'Добавить заявку')

@section('content')

        <div class="box_transportations"> <!--Коробка в котором будут находиться заявки-->
            @foreach($transportations as $transportation)
                <a href="{{route('transportations.show', $transportation->id)}}"><div class="block_transportation">  <!--Заявки разбитые на секции-->
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
                </a>
            @endforeach
        </div>

@endsection
