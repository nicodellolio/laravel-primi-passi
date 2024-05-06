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
            <h1 class="text-primary fw-bolder">Enjoy our gallery</h1>
        </div>
        <div class="container">
            <div class="row my-5">
                
                @for ($i = 0; $i < 12; $i++)
                <div class="col-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/300" alt="">
                    </div>
                    
                </div>
                @endfor 
            </div>
            
            
            <a class="p-2 text-success fs-5 fw-bold my-5" href="/..">Back to the home page</a>
        </div>
    </div>
</body>

</html>