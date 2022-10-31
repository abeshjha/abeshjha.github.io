
function submit_form(){  
alert("Login successfully");  
}  

function create(){  
    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
  
}  

//<!-- Sending value to Android -->
function showAndroidToast(toast) {
    AndroidInterface.showToast(toast);
}

// <!-- Getting value from Android -->
function showVersion(msg) {
    var myVar = AndroidInterface.getAndroidVersion();
    document.getElementById("version").innerHTML = msg + " You are running API Version " + myVar;
}
