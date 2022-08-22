function eventDataValdate() {
  var SERIAL = document.getElementById("SERIAL");
  var Name = document.getElementById("Name");
  var H_M_day = document.getElementById("H_M_day");
  var Description = document.getElementById("Description");
  var Place_Name = document.getElementById("Place_Name");
  var Price = document.getElementById("Price");
  var Food = document.getElementById("Food");
  var Image = document.getElementById("Image");

  if (
    SERIAL.value.trim() == "" ||
    Name.value.trim() == "" ||
    H_M_day.value.trim() == "" ||
    Description.value.trim() == "" ||
    Place_Name.value.trim() == "" ||
    Price.value.trim() == "" ||
    Food.value.trim() == "" ||
    Image.value.trim() == ""
  ) {
    alert("No blank allowed");
    return false;
  } else {
    alert("Submitted");
    this;
    return true;
  }
}

function slideShowValdate() {
  var SERIAL = document.getElementById("SERIAL");
  var Name = document.getElementById("Name");
  var Image = document.getElementById("Image");

  if (
    SERIAL.value.trim() == "" ||
    Name.value.trim() == "" ||
    Image.value.trim() == ""
  ) {
    alert("No blank allowed");
    return false;
  } else {
    alert("Submitted");
    this;
    return true;
  }
  
}

function foodDataValdate() {
    var SERIAL = document.getElementById("SERIAL");
    var breakfast = document.getElementById("breakfast");
    var launch = document.getElementById("launch");
    var dinner = document.getElementById("dinner");
    var snacks = document.getElementById("snacks"); 

    if (
      SERIAL.value.trim() == "" ||
      breakfast.value.trim() == "" ||
      launch.value.trim() == "" ||
      dinner.value.trim() == "" ||
      snacks.value.trim() == ""
    ) {
      alert("No blank allowed");
      return false;
    } else {
      alert("Submitted");
      this;
      return true;
    }


}


function deletedValdate() {
  var serail = document.getElementById("SERIAL");

  if (serail.value.trim() == "") {
    alert("No blank allowed");
    return false;
  } else {
    alert("Submitted");
    return true;
  }
}
