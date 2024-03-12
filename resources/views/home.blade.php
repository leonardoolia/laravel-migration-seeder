<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{env('APP_NAME', 'Laravel Trains')}}</title>

</head>

<body>
    @extends('layouts.main')
    @section('main-content')
        @include('includes.main')
    @endsection
</body>

</html>