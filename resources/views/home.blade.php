<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>

<body>
    <div>
        <header class="links bg-primary">
            <ul class="d-flex justify-content-between px-5 py-3 text-uppercase fs-1 list-unstyled fw-bold">

                <li>
                    <a class="text-decoration-none text-light" href="{{ route('about') }}">about us</a>
                </li>

                <li>
                    <a class="text-decoration-none text-light" href="{{ route('contacts') }}">contacts</a>
                </li>

                <li>
                    <a class="text-decoration-none text-light" href="{{ route('gallery') }}">gallery</a>
                </li>
            </ul>
        </header>
        <main class="mt-5 text-center">
            <h1 class="d-inline text-success bg-white p-4 ">
                Feel free to navigate among our pages! - 👆🏼
            </h1>
        </main>
    </div>
</body>

</html>