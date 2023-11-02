<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Elenco Comics</h1>

    <table>
        <tr>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data di Vendita</th>
            <th>Tipo</th>
            <th>Artisti</th>
            <th>Scrittori</th>
        </tr>

        <?php foreach ($comics as $comic): ?>
        <tr>
            <td><?= $comic->title ?></td>
            <td><?= $comic->description ?></td>
            <td><?= $comic->price ?></td>
            <td><?= $comic->series ?></td>
            <td><?= $comic->sale_date ?></td>
            <td><?= $comic->type ?></td>
            <td><?= $comic->artists ?></td>
            <td><?= $comic->writers ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>