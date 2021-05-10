<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button><a href="/">Back</a></button>

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

</body>
</html>
