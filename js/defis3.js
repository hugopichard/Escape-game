var RandomNumber = Math.floor(Math.random() * 10) + 1;
alert(RandomNumber);


function testnb() {
  var input = document.getElementById("nb").value;
  if (input == RandomNumber) {
    document.getElementById('chiffre3').style.display = "block";
  } else {
    alert("Faux");
  }
}
