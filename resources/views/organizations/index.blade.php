<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/index/organizations/view_organization.css')}}">
    <title>Document</title>
</head>
<body>
<button><a href="/">Back</a></button>
    <div class="box_organizations">
        <table>
            <th>Контрагент: </th>
            <th>ИНН/КПП: </th>
            <th>  ATI </th>
            <th>  р\с: </th>
            <th>  :к\с: </th>
            <th>  Юридический адрес: </th>
            <th>  Почтовый адрес: </th>
        @foreach($organizations as $organization)

                <tr><td>{{ $organization->name }}</td>
                    <td>{{ $organization->inn }} / {{ $organization->kpp }}</td>
                    <td>{{ $organization->number_ati }}</td>
                    <td>{{ $organization->checking_account }}</td>
                    <td>{{ $organization->correspondent_account }}</td>
                    <td>{{ $organization->legal_address }}</td>
                    <td>{{ $organization->mailing_address }}</td>
                </tr>

        @endforeach
        </tr>
        </table>
    </div>
</body>
</html>
