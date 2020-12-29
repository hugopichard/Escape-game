/////////test Code////////////////

function test_code() {
  let r = window.prompt("Code secret?");
      if (r == 2658) {
          document.location.href="https://www.youtube.com/watch?v=_JW5gh-VbvI&ab_channel=lioneljeff63";
      }
      else {
          alert("Faux");
      }
}



/////////defis1////////////////


function changeimg() {
	    document.getElementById('imgdef1').src = "assets/angryracoon.jpg";
      document.getElementById('restart').style.display = "block";
}

function windefi1() {
      document.getElementById('chiffre1').style.display = "block";
}



/////////defis2////////////////

function getValue() {
      var input = document.getElementById("in").value;
      if (input == "Quel est le numéro 2?") {
        document.getElementById('chiffre2').style.display = "block";
      }
      else {
        alert("Ce n'est pas la bonne question");
      }
}
