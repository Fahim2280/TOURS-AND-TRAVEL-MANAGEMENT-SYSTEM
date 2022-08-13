function showFoodData(str) {
  if (str == "") {
    document.getElementById("View").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("View").innerHTML = this.responseText;
  };
    xhttp.open("GET", "eventDataView.php?V=" + str);
    xhttp.send();
}
