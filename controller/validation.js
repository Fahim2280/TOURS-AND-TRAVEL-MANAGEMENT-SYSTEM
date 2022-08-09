let Name = document.getElementById("Name").value;
let H_M_day = document.getElementById("H_M_day").value;
let Description = document.getElementById("Description").value;
let Place_Name = document.getElementById("Place_Name").value;
let Food = document.getElementById("Food").value;
let Price = document.getElementById("Price").value;
let file = document.getElementById("file").value;
let SERIAL = document.getElementById("SERIAL").value;

function validate() {
  if (Name != "" ) {
    return true;
  } else {
    alert(" Name cannot be blank");
    return false;
  }

  if (H_M_day != "") {
    return true;
  } else {
    alert(" How many day cannot be blank");
  }

  if (Description != "") {
    return true;
  } else {
    alert(" Description cannot be blank");
  }

  if (Place_Name != "") {
    return true;
  } else {
    alert(" Place Name cannot be blank");
  }

  if (Food != "") {
    return true;
  } else {
    alert(" Food cannot be blank");
  }

  if (Price != "") {
    return true;
  } else {
    alert(" Price cannot be blank");
  }
  if (file != "") {
    return true;
  } else {
    alert(" file cannot be blank");
  }
  if (SERIAL != "") {
    return true;
  } else {
    alert(" SERIAL cannot be blank");
  }
}
