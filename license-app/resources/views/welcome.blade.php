<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>License App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  @livewireStyles
</head>
  <body>

    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="d-flex justify-content-center align-items-center w-100">
            <h1 class="text-primary fw-bold">Teams License</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center w-100">
            @livewire('license')
        </div>
    </div>
   
    
  @livewireScripts
</body>
</html>