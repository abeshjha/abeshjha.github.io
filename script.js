
function submit_form(){  
alert("Login successfully");  
}  

function create(id,pass){  
    location.href="https://ica.edu.np/Dems/API/project_api.php?email="+ id + "&password="+pass
}  

//<!-- Sending value to Android -->
function showAndroidToast(id,pass) {
    AndroidInterface.showToast(id,pass);
}

// <!-- Getting value from Android -->
function showVersion(msg) {
    var myVar = AndroidInterface.getAndroidVersion();
    document.getElementById("version").innerHTML = msg + " You are running API Version " + myVar;
}
