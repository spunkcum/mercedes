<!doctype html>
<html lang="en" style="">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69011597-11"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-69011597-11');
  </script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css"/>

  <title>Tilmelding - Lancering af den ny Sprinter!</title>
</head>
<body style="background-color: #ecebe9">
  <div class="container">
    <div class="row pt-3 pb-3">
      <div class="col-sm-8 offset-sm-2">
        <div class="row">
          <div class="col">
            <img src="images/nytlogo.png" class="img-fluid" style="max-height: 64px"/>
          </div>
        </div>
      </div>
    </div>

    <div class="row backgroundRow">
      <div class="col">
        <img src="images/background.png" class="img-fluid">
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <div class="row">
          <div class="col">
            <img src="images/craalogo.png" class="img-fluid craalogo">
          </div>
        </div>
        <div class="row mainContent">
          <div class="col">
            <h1>VIP-invitation.</h1>
            <p>Vær med, når vi lancerer den ny Sprinter. For første gang i Danmark. Vi byder dig velkommen i vores VIP-loungeområde på Classic Race Aarhus 2018.</p>
            <p>Enten lørdag d. 26. maj eller søndag d. 27. maj.</p>
            <p>Du tilmelder dig via formularen her på siden. Med din tilmelding får du en dagsbillet til både Classic Race Aarhus og Mercedes-Benz VIP-lounge.</p>

            
            <!-- <img src="images/dashboard.png" class="img-fluid dashboardImage"> -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/268623836" width="640" height="360" frameborder="0" allowfullscreen>
              </iframe>
            </div>
            

            <h2 class="mt-3">Kom til Danmarkspremiere på den ny Sprinter.</h2>
            <p>Velkommen i vores VIP-loungeområde på Classic Race Aarhus 2018. Her får du en ekstraordinær mulighed for at opleve den ny Sprinter.</p>

            <h3>Besøg vores VIP-lounge.</h3>
            <p>I vores loungeområde byder vi på morgenkaffe, forfriskninger og frokost samt afternoon cocktails.</p>

            <h3>Se race fra vores VIP-tribune.</h3>
            <p>Vores VIP-lounge er placeret centralt i løbsområdet. Herfra har du eksklusiv adgang til vores egen tribune med direkte udsyn til opløbssiden.</p>

            <h3>Ta' børnene med.</h3>
            <p>Har du børn med, så har vi også sørget for et hyggeligt aktivitetsområde, hvor de kan lege dagen igennem. </p>

            <h3>Få det, som du vil ha’ det.</h3>
            <p>Sammensæt din dag, som du vil, og du bestemmer selv, om du vil være med lørdag (26/5) eller søndag (27/5).</p>

            <h3>Fri parkering til de hurtige.</h3>
            <p class="pb-2">Til de første 250 tilmeldte vil det være muligt at reserve en parkeringsplads, hvorfra vi tilbyder shuttle bus til hovedindgangen.</p>

            <h1 class="pt-5">Tilmeld dig her.</h1>

            <p class="mb-0">Tilmeldingen til lancering af den ny Sprinter er nu lukket.</p>
            <p class="pb-3">Skulle du have spørgsmål kan du rette henvendelse til <a href="mailto:craa@mercedes-benz-sprinter.dk">craa@mercedes-benz-sprinter.dk</a></p>

            <p><a href="betingelser.pdf" target="_blank">Læs en uddybning af betingelserne for tilmelding her.</a></p>
            <p><a href="https://mercedes-benz-sprinter.dk/craa" target="_blank">Læs mere om arrangementet her.</a></p>

          </div>
        </div>

        <div class="row pt-4">
          <div class="col pt-5 text-center">
            <img src="images/logobund.png"/>
            <p class="pt-3">Eventen starter om:</p>
            <p><span id="counter">00;00;00;00</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
  var countDownDate = new Date("May 26, 2018 07:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  /*document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";*/
  var dayString;
  var hourString;
  var minuteString;
  var secondString;

  if(days < 10){
    dayString = "0" + days;
  } else {
    dayString = days;
  }
  if(hours < 10){
    hourString = "0" + hours;
  } else {
    hourString = hours;
  }
  if(minutes < 10){
    minuteString = "0" + minutes;
  } else {
    minuteString = minutes;
  }
  if(seconds < 10){
    secondString = "0" + seconds;
  } else {
    secondString = seconds;
  }


  document.getElementById("counter").innerHTML = dayString + ";" + hourString + ";" + minuteString + ";" + secondString;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("counter").innerHTML = "00;00;00;00";
  }
}, 1000);
</script>
</body>
</html>