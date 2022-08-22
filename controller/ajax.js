function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("demo").innerHTML = this.responseText;
  };
  xhttp.open("GET", "./view/viewGallery.php");
  xhttp.send();
}

function loadDoc2() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("about").innerHTML = this.responseText;
  };
  xhttp.open("GET", "./view/about.php");
  xhttp.send();
}
