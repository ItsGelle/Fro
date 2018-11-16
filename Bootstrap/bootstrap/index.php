<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bootstrap</title>

</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nieuws</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>NOS</h1>
    <p>NOS nieuws</p>
</div>
<div class="container mt-3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Max.jpg" alt="face" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/Girl.jpg" alt="samsung" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="img/Piet.jpg" alt="sociaal" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</div>

<br>
<h1 style="text-align: center">Bootstrap</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img src="img/Max.jpg" alt="sociaal" width="350" height="200">
            <h3>'Ooit gaat Verstappen dit rechtzetten met Ocon'</h3>
            <p>
                Max Verstappen was na de Grand Prix van Brazilië het belangrijkste gespreksonderwerp op social media. Niet door zijn tweede plaats achter de fortuinlijke winnaar Lewis Hamilton, maar met name door zijn actie na afloop van de race.
                De Nederlander van Red Bull, die aan kop ging in de race, was woedend op Esteban Ocon, die hem met een vreemde manoeuvre van de baan tikte. Het incident kostte hem de zege. Verstappen ging na afloop verhaal halen, duwde de Fransman een paar keer en werd bestraft met een taakstraf. Dat zal hoogstwaarschijnlijk een spreekbeurt of lezing zijn op een symposium.
                "Ooit gaat Verstappen dit rechtzetten in een race", voorspelt verslaggever Louis Dekker, die voor de NOS al jaren de Formule 1 volgt.
                Ocon staat als talent onder contract bij Mercedes en de verwachting is dat hij daar over twee jaar gaat racen. "Op het moment dat ze elkaar straks tegenkomen in een gevecht waar het echt om gaat, gaat dit een rol spelen", aldus Dekker.
            </p>

        </div>
        <div class="col-sm-4">
            <img src="img/Girl.jpg" alt="sociaal" width="350" height="200">
            <h3>Vlaamse film 'Girl' wordt voor Netflix in de VS gecensureerd</h3>
            <p>De Vlaamse film Girl wordt gecensureerd voor Amerikaanse kijkers. Als de film daar vanaf januari te zien is op Netflix, zijn vrijwel alle naaktscènes verdwenen.
                Girl vertelt het verhaal van de 15-jarige Lara, die droomt van een carrière als ballerina. Het grootste gevecht voert ze daarbij met haar lichaam, omdat ze is geboren als jongen.</p>

        </div>
        <div class="col-sm-4">
            <img src="img/Piet.jpg" alt="sociaal" width="350" height="200">
            <h3>Tegenstanders Zwarte Piet blokkeren tijdelijk toegang Mediapark Hilversum</h3>
            <p>Tegenstanders van Zwarte Piet hebben actiegevoerd bij de ingang van het Media Park in Hilversum. Ze vinden dat het Sinterklaasjournaal van de NTR te veel vasthoudt aan het traditionele uiterlijk van Zwarte Piet.
                Enkele tientallen betogers blokkeerden vanochtend enige tijd de loopbrug die van het station Hilversum Media Park naar het Mediapark loopt. Ook de uitgang vanaf het perron was geblokkeerd. De brug wordt door veel omroepmedewerkers gebruikt. Ze konden alleen via een omweg naar hun werkplek.
                Politieagenten grepen rond 09.00 uur in en zorgden ervoor dat er een doorgang mogelijk was. De actie was korte tijd later afgelopen.</p>
        </div>
    </div>
</div>

<footer>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <a href="http://validator.w3.org/check?uri=referer" target="_blank">
            <img src="http://blog.boyet.com/blog/files/media/image/valid-html5-blue.png" alt="Valide HTML5"></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
            <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="Valide CSS">
        </a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>