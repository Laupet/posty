<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Blades</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div>

        <ul class="flex border-b">
            <li class="-mb-px mr-1">
              <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="#">Active</a>
            </li>
            <li class="mr-1">
              <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Tab</a>
            </li>
            <li class="mr-1">
              <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Tab</a>
            </li>
            <li class="mr-1">
              <a class="bg-white inline-block py-2 px-4 text-gray-400 font-semibold" href="#">Tab</a>
            </li>
          </ul>


    </div>

    @yield('content')






</body>
</html>
