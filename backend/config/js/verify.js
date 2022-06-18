let verify = prompt("input acces code");
if (verify == "gung nanda") {
  let pin = prompt("insert pin");
  if (pin == 111213) {
    alert("welcome " + verify);
  } else {
    alert("anda melakukan akses ilegal");
    document.location.href = "../";
  }
} else {
  alert("anda melakukan akses ilegal");
  document.location.href = "../";
}
