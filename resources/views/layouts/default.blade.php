<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project </title>
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script>
        moment.locale("fr");
    </script>
</head>

<body>

    <div class="container">
        <header id="header" class="w3-theme-d4">
            <div class="logo">
                <section>
                    <a href="/" class="w3-padding-large w3-theme-d4" title="home">
                        <img src="https://cdn.pixabay.com/photo/2016/06/28/13/50/cat-1484725_960_720.png" alt="" srcset="" style="height: 25px;width:30px;">
                    </a>
                </section>
                <section class="w3-hide-small w3-hover-white">
                    <a href="/commandes" class="w3-padding-large w3-hover-white" title="Commandes">
                        <i class="fas fa-store"></i>
                    </a>
                </section>
                <section class="w3-hide-small w3-hover-white">
                    <a href="/ramassages" class="w3-padding-large" title="Ramassage">
                        <i class="fas fa-box-open"></i>
                    </a>
                </section>
            </div>
            <div class="profile w3-hover-white ">
                <a href="tryit.asp-filename=tryw3css_templates_social&stacked=h.html#" class="w3-padding-large" title="My Account">
                    Kawtar TAJANI
                    <img src="https://i.pinimg.com/736x/2b/e1/db/2be1dbf574ffef0d03a5a63059527a73.jpg" class="w3-circle" style="height:25px;width:25px" alt="Avatar">
                </a>
            </div>

        </header>
        <main id="main">
            @yield("main")
        </main>


    </div>
</body>

</html>
