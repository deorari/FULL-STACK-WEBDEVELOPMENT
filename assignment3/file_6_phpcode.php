<!DOCTYPE html>
<html>
<body style="background-color: rgb(22, 236, 129); color: rgb(8, 8, 8); font-size:50px;">

<button style="margin-left: 40%;width: 250px;height:50px;font-size: 40px;" onclick="myFunction()">Click Here</button>
<p id="6"></p>
<script style="font-size: large;">
function myFunction() {
  var firstName = prompt("Please enter your first name");
  var lastName = prompt("Please enter your last name");
  if (firstName != null && lastName != null) {
    document.getElementById("6").innerHTML = "Welcome " + firstName + " " + lastName+ " to the World of Web.";
  }
}
</script>
</body>
</html>
