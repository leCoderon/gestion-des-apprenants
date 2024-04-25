<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
 <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 py-5">
        <main class="form-signin w-100 m-auto card p-3">
        <form method="post" action="index.php?action=login">
            <h1 class="h4 mb-3 fw-normal">Veuillez vous connecter s'il vous plaît </h1>

            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating ">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <br>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">© LeCoderon</p>
        </form>
    </main>
        </div>
        <div class="col-md-4"></div>
    </div>
 </div>
</body>

</html>