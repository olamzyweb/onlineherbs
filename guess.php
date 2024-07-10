<!-- <!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">

    <title>Number guessing game</title>

    <style>
      html {
        font-family: sans-serif;
      }

      body {
        width: 50%;
        max-width: 800px;
        min-width: 480px;
        margin: 0 auto;
      }
      
      .form input[type="number"] {
        width: 200px;
      }

      .lastResult {
        color: white;
        padding: 3px;
      }
    </style>
  </head>

  <body>
    <h1>Number guessing game</h1>

    <p>We have selected a random number between 1 and 100. See if you can guess it in 10 turns or fewer. We'll tell you if your guess was too high or too low.</p>

    <div class="form">
      <label for="guessField">Enter a guess: </label>
      <input type="number" min="1" max="100" required id="guessField" class="guessField">
      <input type="submit" value="Submit guess" class="guessSubmit">
    </div>

    <div class="resultParas">
      <p class="guesses"></p>
      <p class="lastResult"></p>
      <p class="lowOrHi"></p>
    </div>

    <script>
      let randomNumber = Math.floor(Math.random() * 100) + 1;
      const guesses = document.querySelector('.guesses');
   const lastresult = document.querySelector('.lastResult');
      const lowOrHi = document.querySelector('.lowOrHi');
      const guessSubmit = document.querySelector('.guessSubmit');
      const guessField = document.querySelector('.guessField');
      let guessCount = 1;
      let resetButton;

      function checkGuess() {
        const userGuess = Number(guessField.value);
        if (guessCount === 1) {
          guesses.textContent = 'Previous guesses: ';
        }

        guesses.textContent += userGuess + ' ';

        if (userGuess === randomNumber) {
          lastResult.textContent = 'Congratulations! You got it right!';
          lastResult.style.backgroundColor = 'green';
          lowOrHi.textContent = '';
          setGameOver();
        } else if (guessCount === 10) {
          lastResult.textContent = '!!!GAME OVER!!!';
          lowOrHi.textContent = '';
          setGameOver();
        } else {
          lastResult.textContent = 'Wrong!';
          lastResult.style.backgroundColor = 'red';
          if(userGuess < randomNumber) {
            lowOrHi.textContent = 'Last guess was too low!' ;
          } else if(userGuess > randomNumber) {
            lowOrHi.textContent = 'Last guess was too high!';
          }
        }

        guessCount++;
        guessField.value = '';
        guessField.focus();
      }

      guessSubmit.addEventListener('click', checkGuess);

      function setGameOver() {
        guessField.disabled = true;
        guessSubmit.disabled = true;
        resetButton = document.createElement('button');
        resetButton.textContent = 'Start new game';
        document.body.appendChild(resetButton);
        resetButton.addEventListener('click', resetGame);
      }

    if (resetButton){
        resetButton.parentNode.removeChild(resetButton);
    }

      function resetGame() {
        guessCount = 1;
        const resetParas = document.querySelectorAll('.resultParas p');
        for (const resetPara of resetParas) {
          resetPara.textContent = '';
        }

        resetButton.parentNode.removeChild(resetButton);
        guessField.disabled = false;
        guessSubmit.disabled = false;
        guessField.value = '';
        guessField.focus();
        lastResult.style.backgroundColor = 'white';
        randomNumber = Math.floor(Math.random() * 100) + 1;
      }
    </script>
  </body>
</html> -->





<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<!-- <style type="text/css">
.bid{width: 100%;height: 600px;display: flex;justify-content: center;flex-direction: column;align-items: center;}
#tb{background:;width: 50%;display: flex;align-items: center;flex-direction: column;background-color:#232323;}
.divtime{width:50%;height: 100px;background-color: #232323;display: flex;justify-content: center;align-items: center;font-family: sans-serif;color: #999;font-weight: bold;font-size:20px;}
#tb  div{background-color:orange;display: flex;background-color: #232323;width: 100%;justify-content: center;box-shadow: 0px 0px 1px #999}
#tb span{height: 50px;display: flex;align-items: center;font-family: sans-serif;color: #999;font-weight: bold}
#tb .home{width:30%;background-color:grey;display: flex;justify-content: flex-end;}
#tb .away{width:30%;background-color: blue;}
#tb .hs{width: 8%;display: flex;justify-content: center;}
#tb .as{width: 6%;display: flex;justify-content: center;}
#tb .vs{width: 8%;display: flex;justify-content: center;}
</style> -->
<body>
<!-- <div id="hide1" style="display:none;"></div>
<div id="hide2" style="display:none;"></div>
<div class="bid">

<div class="divtime"><span id="time">0</span></div>
<div id="tb">
</div>
<div>
<button onclick="start_match()">Start Match</button>
</div>
</div>

<script type="text/javascript">
var x=0;
var home={club1:'Stade Rennes',club2:'Dynamo Kyiv',club3:'Man Utd',club4:'Liverpool',club5:'Bayern',club6:'Man City',club7:'Inter Milan',club8:'Atletico Madrid',club9:'Krasnodar',club10:'PSG'};
var away={club1:'Chelsea',club2:'Barcelona',club3:'Isthanbul',club4:'Atalanta',club5:'Salzburg',club6:'Olympiakos',club7:'Real Madrid',club8:'Lokomotiv',club9:'Sevila',club10:'Leipzig'};
var l="";
var m;
for(m in home){
l+="<div><span class='home'>"+home[m]+"</span><span class='hs' onchange='hgoal()'>0</span><span class='vs'>v</span><span class='as'>0</span><span class='away'>"+away[m]+"</span></div>";
}
document.getElementById('tb').innerHTML=l;
var cr1="";
var cr2="";
for(c=1;c<11;c++){
cr1+="<div id='sh"+c+"'></div>";
cr2+="<div id='sa"+c+"'></div>";
}
document.getElementById('hide1').innerHTML=cr1;
document.getElementById('hide2').innerHTML=cr2;
function xi(){
x++;
var en;
if(x>94){document.getElementById('time').innerHTML="Full Time!"}
else if (x==100) {x=100}
else{
document.getElementById('time').innerHTML=x;
en=Math.random()*180;
}
var hh1=document.getElementById('sh1');
var hh2=document.getElementById('sh2');
var hh3=document.getElementById('sh3');
var hh4=document.getElementById('sh4');
var hh5=document.getElementById('sh5');
var hh6=document.getElementById('sh6');
var hh7=document.getElementById('sh7');
var hh8=document.getElementById('sh8');
var hh9=document.getElementById('sh9');
var hh10=document.getElementById('sh10');
var aa1=document.getElementById('sa1');
var aa2=document.getElementById('sa2');
var aa3=document.getElementById('sa3');
var aa4=document.getElementById('sa4');
var aa5=document.getElementById('sa5');
var aa6=document.getElementById('sa6');
var aa7=document.getElementById('sa7');
var aa8=document.getElementById('sa8');
var aa9=document.getElementById('sa9');
var aa10=document.getElementById('sa10');
var goals1=document.getElementsByClassName('hs');
var goals2=document.getElementsByClassName('as');
if (en>10 && en<12) {
hh1.innerHTML+=1;
}
if (en>15 && en<18) {
aa1.innerHTML+=1;
}
if (en>20 && en<21.5) {
hh2.innerHTML+=1;
}
if (en>25 && en<29) {
aa2.innerHTML+=1;
}
if (en>30 && en<33) {
hh3.innerHTML+=1;
}
if (en>35 && en<36) {
aa3.innerHTML+=1;
}
if (en>40 && en<42.5) {
hh4.innerHTML+=1;
}
if (en>45 && en<47.5) {
aa4.innerHTML+=1;
}
if (en>50 && en<54) {
hh5.innerHTML+=1;
}
if (en>55 && en<57) {
aa5.innerHTML+=1;
}
if (en>60 && en<63) {
hh6.innerHTML+=1;
}
if (en>65 && en<66) {
aa6.innerHTML+=1;
}
if (en>70 && en<72.5) {
hh7.innerHTML+=1;
}
if (en>76 && en<78.5) {
aa7.innerHTML+=1;
}
if (en>80 && en<83) {
hh8.innerHTML+=1;
}
if (en>85 && en<86) {
aa8.innerHTML+=1;
}
if (en>90 && en<91.5) {
hh9.innerHTML+=1;
}
if (en>95 && en<98) {
aa9.innerHTML+=1;
}
if (en>100 && en<103) {
hh10.innerHTML+=1;
}
if (en>105 && en<107) {
aa10.innerHTML+=1;
}
goals1[0].innerHTML=hh1.innerHTML.length;
goals1[1].innerHTML=hh2.innerHTML.length;
goals1[2].innerHTML=hh3.innerHTML.length;
goals1[3].innerHTML=hh4.innerHTML.length;
goals1[4].innerHTML=hh5.innerHTML.length;
goals1[5].innerHTML=hh6.innerHTML.length;
goals1[6].innerHTML=hh7.innerHTML.length;
goals1[7].innerHTML=hh8.innerHTML.length;
goals1[8].innerHTML=hh9.innerHTML.length;
goals1[9].innerHTML=hh10.innerHTML.length;
goals2[0].innerHTML=aa1.innerHTML.length;
goals2[1].innerHTML=aa2.innerHTML.length;
goals2[2].innerHTML=aa3.innerHTML.length;
goals2[3].innerHTML=aa4.innerHTML.length;
goals2[4].innerHTML=aa5.innerHTML.length;
goals2[5].innerHTML=aa6.innerHTML.length;
goals2[6].innerHTML=aa7.innerHTML.length;
goals2[7].innerHTML=aa8.innerHTML.length;
goals2[8].innerHTML=aa9.innerHTML.length;
goals2[9].innerHTML=aa10.innerHTML.length;
if (x>94) {document.getElementById('time').innerHTML="Full Time!";}
else{
document.getElementById('time').innerHTML=x;
}
}
function start_match(){
setInterval(xi, 1000);
}
</script> -->




<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>








</body>
 </html> 