<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

    <style>
        .background {
            background-color: #15202B;
        }

    </style>
</head>
<body class="flex background w-2/3 m-auto">
    <div class="w-64">
        <x-header />   

    </div>

    <div class="border border-gray-700">
        {{$slot}}

    </div>

    <x-sidebar />
</body>
</html>