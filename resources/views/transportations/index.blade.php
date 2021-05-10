<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/transp_style.css">
    <title>Document</title>
</head>
<body>
<button><a href="/">Back</a></button>

<div>
    <div>Остаток денежных средств</div>
    <div>Должно быть: {{$rate_nds}}</div>
    <div>Приход: {{$rate_nds}}</div>
    <div>Расходы: {{$rate_nds}}</div>
    <div>Остаток: {{$rate_nds}}</div>
</div>

<div class="box_transportations"> <!--Коробка в котором будут находиться заявки-->
    @foreach($transportations as $transportation)
        <div class="block_transportation">  <!--Заявки разбитые на секции-->
            <div class="id_transportation">
                {{$transportation->id}}
            </div>
            <div class="id_organization">
                {{ optional($transportation->organization)->name_organization }}
            </div>
            <div class="path">
                Маршрут:  {{$transportation->start_point}} -  {{$transportation->end_point}}
            </div>
            <div class="price">
                Ставка: {{$transportation->rate_nds}}
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
