<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- @vite(['resources/js/app.js']) --}}
    <script type="module" src="{{asset('assets/app.js')}}"></script>
    <script type="module" src="{{asset('assets/app2.js')}}"></script>
    {{-- <script type="module" src="{{asset('assets/app.js')}}"></script> --}}
</head>

<body>

    <div id="app">
        <h1>@{{ message }}</h1>
        <h2>Hello World!</h2>
    </div>

</body>

</html>
