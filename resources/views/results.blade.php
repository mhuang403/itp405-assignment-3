<!DOCTYPE html>
<head>
    <title>DVD Search Results</title>

    <style>
        th, td {
            padding: 10px;
            border: 1px solid black;
        }

    </style>
</head>

<body>
<h1>DVD Search <i>{{ $search }}</i></h1>

<table>
    <th>Title</th>
    <th>Rating</th>
    <th>Genre</th>
    @foreach($dvds as $dvd)
        <tr>
            <td>{{ $dvd->title }}</td>
            <td>{{ $dvd->rating_name }}</td>
            <td>{{ $dvd->genre_name }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>