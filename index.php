<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi-Json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="left-nav">
                            <a class="navbar-brand" href="#">primary</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="right-nav">
                            <div class="collapse navbar-collapse" id="navbarID">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div v-for="task in tasks" class="col-4 my-4">
                        <div class="card text-center p-5 bg-dark text-light">
                            <img :src="task.poster" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ task.author }}</h5>
                                <h6 class="card-subtitle mb-2  ">{{ task.title }}</h6>
                                <p class="card-text">{{ task.year }}</p>
                                <p class="card-text">{{ task.genre }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <script src="./assets/js/app.js"></script>
    </div>
</body>

</html>