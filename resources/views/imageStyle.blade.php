<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{asset('style/styleAlif.css')}}">
</head>
<body>
    <div class="p-7 m-8 bg-yellow-200 flex justify-center items-center flex-col">
        <h1 class="text-4xl font-bold pb-4">Images</h1>
        <img class="w-80 h-auto" src="{{asset('images/vue-wallpapper.jpg')}}" alt="images">
    </div>
</body>
</html>