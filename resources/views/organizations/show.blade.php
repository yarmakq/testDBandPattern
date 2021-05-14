@extends('home.index')

@section('tittle', 'Организация')

@section('content')

@foreach($organizations as $organization)

    <div> Контрагент: {{ $organization->name_organization }} </div>
    <div> ИНН/КПП: {{ $organization->inn }}/{{ $organization->kpp }} </div>
    <div> Юр. адрес{{ $organization->legal_address }} </div>
    <div> Почт. адрес{{ $organization->mailing_address }} </div>
    <div> Менеджер: {{ $organization->manager }} </div>
    <div> Email: {{ $organization->email_manager }} </div>
    <div> ATI: {{ $organization->number_ati }} </div>
    <div> р/с: {{ $organization->checking_account }} </div>
    <div> к\с: {{ $organization->correspondent_account }} </div>

@endforeach

@endsection
