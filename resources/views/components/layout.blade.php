<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Clone</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .background {
                background-color: #15202B;
            }

            .test {
                max-width: 350px;
                min-width: 290px;
            }

        </style>
    </head>

    <body class="background m-auto xl:w-[1265px]">

        <div class="flex">
            <div class="pl-8">
                <x-header />   
            </div>

            <div class="border border-gray-700">
                {{$slot}}
            </div>
    
            <div class="hidden lg:block">
                <x-sidebar />
            </div>
        </div>

    </body>
</html>