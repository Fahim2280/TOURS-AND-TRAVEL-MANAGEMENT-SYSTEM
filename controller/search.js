// $(document).ready(function () {
//   $("#search").keyup(function () {
//     var text = $(this).val();
//     $.ajax({
//       type: "POST",
//       url: ".liveSearch?get=search_data",
//       dataType: "JSON",
//       data: {
//         text: text,
//       },
//       async: false,
//       success: function (text) {
//         if (text) {
//           $("#display").append(JSON.stringify(text));
//         } else {
//           $("#display").append("No results!");
//         }
//       },
//     });
//   });
// });

function showResult(str) {
  if (str.length == 0) {
    document.getElementById("livesearch").innerHTML = "";
    document.getElementById("livesearch").style.border = "0px";
    return;
  }
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("livesearch").innerHTML = this.responseText;
      document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
    }
  };
  xmlhttp.open("GET", "../controller/evenJson.php?SEARCH=" + str, true);
  xmlhttp.send();
}
