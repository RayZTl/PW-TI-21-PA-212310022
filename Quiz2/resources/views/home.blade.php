<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>
    <body>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                <tr>
            </thead>
    <tbody>
        @foreach($student as $s)
        <tr>
            <td>{{$s -> id}}</td>
            <td>{{$s -> npm}}</td>
            <td>{{$s -> nama}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </body>
</html>