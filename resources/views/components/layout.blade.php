<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Clone icon</title>
        <link rel = "icon" href = 
"https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" 
        type = "image/x-icon">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .background {
                background-color: #15202B;
            }
            .hover-background {
                background-color: #2d3741;
            }

            .test {
                max-width: 350px;
                min-width: 290px;
            }
            .test-font {
                font-family: 'Segoe UI';
            }

        </style>
    </head>

    <body class="background m-auto xl:w-[1265px] test-font">

        <div class="flex">
            <div>
                <x-header />   
            </div>

            <div>
                {{$slot}}
            </div>
    
            <div class="hidden lg:block">
                <x-sidebar />
            </div>
        </div>

    </body>
</html>