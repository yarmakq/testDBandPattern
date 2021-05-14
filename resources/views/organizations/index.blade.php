@extends('home.index')

@section('tittle', 'Показать организации')

@section('content')
    <div class="layout-main-content">
        <div class="box-organization-tittle">
            <div class="box-organizations-name">
                Контрагент
            </div>
            <div class="box-organizations-inn">
                ИНН
            </div>
            <div class="box-organizations-kpp">
                КПП
            </div>
            <div class="box-organizations-number_ati">
                АТИ
            </div>
            <div class="box-organizations-checking_account">
                Р/С
            </div>
            <div class="box-organizations-correspondent_account">
                К/С
            </div>
            <div class="box-organizations-addres">
                Адрес:
            </div>

        </div>
        @foreach($organizations as $organization)
            <div class="box-organizations-info">

                    <div class="box-organizations-name"> {{ $organization->name }} </div>
                    <div class="box-organizations-inn"> {{ $organization->inn }}  </div>
                    <div class="box-organizations-kpp"> {{ $organization->kpp }}</div>
                    <div class="box-organizations-number_ati"> {{ $organization->number_ati }} </div>
                    <div class="box-organizations-checking_account"> {{ $organization->checking_account }} </div>
                    <div class="box-organizations-correspondent_account"> {{ $organization->correspondent_account }} </div>
                    <div class="box-organizations-address">
                        {{ $organization->legal_address }}
                        <br>
                        {{ $organization->mailing_address }}
                    </div>

            </div>
        @endforeach
    </div>
</div>

@endsection
