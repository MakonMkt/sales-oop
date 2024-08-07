<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CDN Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container mt-5">
        <div class="card border-0 mx-auto w-50">
            <div class="card-header">
                <h1 class="text-danger text-center display-4 fw-bold"><i class="fa-solid fa-user-plus me-1"></i>Registration</h1>
            </div>            
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label small text-secondary">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label small text-secondary">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="username" class="form-label small text-secondary">Username</label>
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
                            <button class="btn btn-danger w-100" type="submit">Register</button>
                        </div>
                    </div>
                </form>
                

            </div>
        </div>
    </div>
    
</body>
</html>