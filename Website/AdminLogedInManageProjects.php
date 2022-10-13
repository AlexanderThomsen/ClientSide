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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand" href="AdminLogedInSite.php">Alexanders portfolio</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="AdminLogedInSite.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AdminLogedInAboutMe.php">Omkring mig</a>
                </li>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" href="index.php">
                    Log Out
                </button>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            </form>
        </div>
    </nav>
    <div class="row align-items-center">
        <div class="col">
            <div class="container-fluid">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Navn på projektet</label>
                        <input type="text" class="form-control" id="Navn" name="Navn">
                    </div>
                    <div class="col-md-6">
                        <label for="Beskrivelse" class="form-label">Beskrivelse</label>
                        <input type="text" class="form-control" id="Beskrivelse" name="Beskrivelse">
                    </div>
                    <div class="col-12">
                        <label for="Link" class="form-label">Link til Github</label>
                        <input type="text" class="form-control" id="Link" name="Link"placeholder="link">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Tilføj</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Fjern projekt</label>
                        <select id="inputState" class="form-select">
                            <option selected>Vælg projekt...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-12">   
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Fjern</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <button type="btn" class="btn btn-primary" name="button" onclick="AddToList()">
        Submit
    </button>

</body>

<script type="text/javascript">
    const card = {
        Beskrivelse: document.getElementById('Beskrivelse'),
        Navn: document.getElementById('Navn'),
        Link: document.getElementById('Link')
    };

    var k = "The respective values are :";

    function AddToList() {
      
        for (var i = 0; i < input.length; i++) {
        var a = input[i];
        k = k + "array[" + i + "].value= "
                + a.value + " ";
      }

        document.getElementById("par").innerHTML = k;
        document.getElementById("po").innerHTML = "Output";
    }
    <p id="par"></p>
</script>