<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about laravel</title>
</head>

<body>
    <div>
        <div class="title text-center mt-5">
            <h1 class="text-primary fw-bolder">Why don't you ring Us?</h1>
        </div>

        <ul class="fs-4 p-5 list-unstyled">
            @foreach ($contacts as $contact)

            <li class="mt-1">
                {{ $contact }}
            </li>

            @endforeach
        </ul>
    </div>


    <a class="p-5 text-success fs-5 fw-bold" href="/..">Back to the home page</a>
</body>

</html>