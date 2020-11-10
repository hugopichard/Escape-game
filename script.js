function test_code() {
  let r = window.prompt("Code secret?");
      if (r == 2658) {
          document.location.href="https://www.youtube.com/watch?v=_JW5gh-VbvI&ab_channel=lioneljeff63";
      }
      else {
          alert("Faux");
      }
}


function changeimg() {
	    document.getElementById('imgdef1').src = "assets/angryracoon.jpg";
      document.getElementById('restart').style.display = "block";
}

function windefi1(){
  document.getElementById('chiffre1').style.display = "block";
}
