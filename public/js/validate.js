function register() {
  var pass = $("#pass").val();
  var confpass = $("#confpass").val();
  var zip = $("#zip_code").val();
  if(pass != confpass) {
    alert("Passwords do not match.");
    return false;
  }
  if(isNaN(zip)) {
    alert("Invalid ZIP code. ZIP code must be a number.");
    return false;
  }
  return true;
}
