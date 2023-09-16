<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div>
            <div class="row ">
                <div class="mt-4">
                <a class="btn btn-success" href="{{route('account.create')}}">Create Account</a>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Branch Code</th>
                        <th scope="col">Country</th>
                        <th scope="col">Tin Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    @foreach ($datas as $data)
                        <tr>
                            <th scope="row">{{ $index++ }}</th>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->bank->name }}</td>
                            <td>{{ $data->branch->name }}</td>
                            <td>{{ $data->branch->code }}</td>
                            <td>{{ $data->country->name }}</td>
                            <td>{{ $data->tinNumber }}</td>
                            <td>

                                <a class="btn btn-success px-3 bg-green-700 "
                                    href="{{ route('account.edit', $data->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
</body>

</html>
