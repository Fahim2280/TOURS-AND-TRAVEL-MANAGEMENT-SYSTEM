let Name = document.getElementById("Name").value;
let H_M_day = document.getElementById("H_M_day").value;
let Description = document.getElementById("Description").value;
let Place_Name = document.getElementById("Place_Name").value;
let Food = document.getElementById("Food").value;
let Price = document.getElementById("Price").value;
let file = document.getElementById("file").value;
let SERIAL = document.getElementById("SERIAL").value;

function eventvalidated() {
  if (
    Name != "" ||
    H_M_day != "" ||
    Description != "" ||
    Place_Name != "" ||
    Food != "" ||
    Price != "" ||
    file != "" ||
    SERIAL != ""
  ) {
    return true;
  } else {
    alert(" cannot be blank");
    return false;
  }
}
