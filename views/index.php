<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header border-0 bg-white">
                <h1 class="text-primary text-center display-4 fw-bold text-uppercase">Login<i class="fa-solid fa-right-to-bracket ms-1"></i></h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-auto">
                            <label for="username" class="form-label small text-secondary col-form-label pe-0">Username</label>
                            
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="password" class="form-label small text-secondary">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <button class="btn btn-danger w-100" type="submit">Login</button>
                        </div>
                    </div>
                </form>
                

            </div>
            
        </div>

    </div>
    
</body>
</html>