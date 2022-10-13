<!DOCTYPE html>
<html>
<html lang="da">

<head>
    <link rel="icon" href="hacker.gif" sizes="32x32" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="Stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-image" style="background-image: url('http://www.biokon.dk/foto/foto-skovsholm/skovsholm04.JPG'); height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="AdminLogedInSite.php">Alexanders portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" data-toggle="dropdown" aria-controls="navbarSupportedContent" aria-haspopup="true" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="AdminLogedInManageProjects.php">Manage Projects</a></li>
                <li><a class="dropdown-item" href="#">Projekt 1</a></li>
                <li><a class="dropdown-item" href="#">Projekt 2</a></li>
                <li><a class="dropdown-item" href="#">Projekt 3</a></li>
            </ul>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="AdminLogedInSite.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AdminLogedInAboutMe.php">Omkring mig</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Projekter
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="AdminLogedInManageProjects.php">Manage Projects</a></li>
                        <li><a class="dropdown-item" href="#">Projekt 1</a></li>
                        <li><a class="dropdown-item" href="#">Projekt 2</a></li>
                        <li><a class="dropdown-item" href="#">Projekt 3</a></li>
                    </ul>
                </li>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary"  href="index.php">
                    Log Out
                </button>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            </form>
        </div>
    </nav>
    <div class="container p-5 my-5 bg-dark text-white">
        <h1>Velkommen</h1>

        <div class="clearfix">
            <div class="w-auto p-auto">
                <img src="Mig.png" class="col-md-5 float-md-end mb-4 ms-md-4 img-fluid" alt="...">
            </div>
            <h1 class="DenGodeUdvikler">
                Mit navn er Alexander
            </h1>
            <p>
                Jeg læser lige nu som Datatekniker med speciale i programmering, eller med andre ord, jeg læser til at være programmør.
                Jeg er en lidenskabelig backend udvikler der har fokus på højt kvalitet og stor interesse for software.
                Som ny i branchen søger jeg udfordringer i alle retninger. Som datatekniker er det vigtigste for mig at
                det jeg laver stemmer overens med det kunderne ønsker.

            <p>
                Jeg specialisere mig i data, det vil sige jeg laver software som er med til at håndtere data i en eller anden grad. Alt fra store til små virksomheder har
                brug for nogen som har styr på hvordan man bedst håndtere store mængder af data og hvordan man bedst muligt arbejder med det.
            </p>
            </p>
            <p>
                Hvis du vil vide mere er du mere end velkommen til at læse mere omkring mig og min fortid samt skrive til mig.
            </p>
            <div class=container>
                <a href="About me.html" class="btn btn-light">Om mig</a>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/alexander.jensbythomsen/" role="button"><i class="fa fa-facebook-f"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/alexander-thomsen-a31640232/" role="button"><i class="fa fa-linkedin"></i>
                </a>

                <!-- Azure DevOps -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://dev.azure.com/AlexanderThomsen"><i class="fa fa-windows"></i>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/AlexanderThomsen" role="button"><i class="fa fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
    </footer>

    <!-- <div class="container p-5 my-5 bg-dark text-white">
    <h1>Dette er en test</h1>
</div> -->
</html>