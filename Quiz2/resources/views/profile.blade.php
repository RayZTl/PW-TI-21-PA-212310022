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
                    <th>Alamat</th>
                    <th>Kontak</th>
                <tr>
            </thead>
    <tbody>
        @foreach($biodata as $b)
        <tr>
            <td>{{$b -> id}}</td>
            <td>{{$b -> npm}}</td>
            <td>{{$b -> nama}}</td>
            <td>{{$b -> alamat}}</td>
            <td>{{$b -> kontak}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </body>
</html>