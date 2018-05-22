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

  <title>
  	Quiz
  </title>
</head>
<body style="background-color: #ecebe9">
  <div class="container">
    <div class="row pt-3 pb-3">
      <div class="col-sm-8 offset-sm-2">
        <div class="row">
          <div class="col" style="padding-left: 30px;">
            <img src="images/nytlogo.png" class="img-fluid" style="max-height: 64px"/>
          </div>
        </div>
      </div>
    </div>

    <div class="row backgroundRow">
      <div class="col">
      	<div class="col-sm-8 offset-sm-2" style="padding-left: 20px;">
      		<h1>
            Den ny Sprinter Quiz
          </h1>
        </div>
        
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
          	<h1>
          		Den ny Sprinter Quiz
          	</h1>
            <div id="wufoo-p55mssd0ot1dp1">
              Fill out my <a href="https://dypaang.wufoo.com/forms/p55mssd0ot1dp1">form</a>.
            </div>
            
            <script type="text/javascript">
              var p55mssd0ot1dp1;(function(d, t) {
               var s = d.createElement(t), options = {
                'userName':'dypaang',
                'formHash':'p55mssd0ot1dp1',
                'autoResize':true,
                'height':'2940',
                'async':true,
                'host':'wufoo.eu',
                'header':'hide',
                'ssl':true
              };
              
              s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
              
              s.onload = s.onreadystatechange = function() {
                var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                try { p55mssd0ot1dp1 = new WufooForm();p55mssd0ot1dp1.initialize(options);p55mssd0ot1dp1.display(); } catch (e) {}
              };
              
              var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');
          </script>
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