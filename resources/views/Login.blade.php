@extends('theme')

@section('content')

<div class="container">

<div class="row">
<div class="col col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</h2>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img height = '400px'src="data:image/png;base64,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" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>





<div class="col col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
</div>
</div>

@endsection


