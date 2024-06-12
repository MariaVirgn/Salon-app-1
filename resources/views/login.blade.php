<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    html,
    body {
        background-color: #aeaeae85;
        height: 100%;
        margin: 0;
    }

    .container-flex {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card {
        box-shadow: 2px 2px 5px 0.2px rgba(0, 0, 0, 0.5);
        width: 100%;
        max-width: 600px;
    }
</style>

<body>
    <div class="container-flex">
        <div class="card text-center">
            <div class="card-header">
                <h3 class="card-title">LOGIN</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg mx-auto" id="username" aria-describedby="emailHelp" placeholder="Username" style="max-width: 300px;">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control form-control-lg mx-auto" id="password" placeholder="Password" style="max-width: 300px;">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><a href="/menu">LOGIN</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
