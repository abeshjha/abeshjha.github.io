
function submit_form(){  
alert("Login successfully");  
}  

function create(){  
    location.href="https://ica.edu.np/Dems/API/project_api.php?email=abc&password=dd" 
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
