<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project </title>
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

    <div class="container">
        <header id="header"> hhh</header>
        <main id="main">
            @yield("main")
        </main>
        <div id="sidebar">
            <nav class="w3-sidebar" style="width: 25%;">
                <div class="w3-bar-block">
                    <a href="/" class="w3-bar-item w3-button w3-hover-white">Home</a>
                    <a href="/commandes" class="w3-bar-item w3-button w3-hover-white">Commandes</a>
                    <a href="/ramassages" class="w3-bar-item w3-button w3-hover-white">Ramassages</a>
                </div>
            </nav>
        </div>
        <footer id="footer">footer</footer>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
