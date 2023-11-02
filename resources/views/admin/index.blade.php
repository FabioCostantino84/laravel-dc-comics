<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elenco Comics</title>
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
