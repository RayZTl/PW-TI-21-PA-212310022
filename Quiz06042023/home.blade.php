<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <style>
        .table{
           margin:100px; 
        }
    </style>
</head>
<body>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NPM</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['students'] as $index2=>$result)
                    <tr>
                        <td>{{$index2+1}}</td>
                        <td>{{$result['npm']}}</td>
                        <td>{{$result['name']}}</td>
                        <td>{{$result['gender']}}</td>
                        <td>{{$result['alamat']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>