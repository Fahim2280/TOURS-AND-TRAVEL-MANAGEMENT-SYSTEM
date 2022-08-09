$(document).ready(function () {
  $("#search").keyup(function () {
    var text = $(this).val();
    $.ajax({
      type: "POST",
      url: ".liveSearch?get=search_data",
      dataType: "JSON",
      data: {
        text: text,
      },
      async: false,
      success: function (text) {
        if (text) {
          $("#display").append(JSON.stringify(text));
        } else {
          $("#display").append("No results!");
        }
      },
    });
  });
});
