
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Anée de création</th>
                <th>Nom de bd affilié</th>
                <th>Dessinateur</th>
                <th>Modifier</th>
                <th>Supp</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($charactors as $character)

        <tr>
            <td>{{ $character->id</td>
            <td>{{ $character->name</td>
            <td>{{ $character->year_creation</td>
            <td>{{ $character->designer</td>
            <td>{{ $affiliate_name</td>
            <td>
            <a href="/update/{{ $chacacter->id }}" class="btn btn-primary">modifier</a>
            </td>
            <td>
                        <form action="/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $character->id }}">
                            <input class="btn btn-danger" type="submit" value="update">
                        </form>
                    </td>
                </tr>
        </tr>

    </div>
</body>
</html>