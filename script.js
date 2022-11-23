
//<!-- Sending value to Android -->
function showAndroidToast(id,pass) {
    AndroidInterface.showToast(id,pass);
}
function showDirect() {
    var id = document.getElementById("username").value;
    var pass = document.getElementById("pass").value;

    window.location.href = "https://ica.edu.np/Dems/API/project_api.php?email="+ id + "&password="+pass; 
}
// <!-- Getting value from Android -->
function showVersion(msg) {
    var myVar = AndroidInterface.getAndroidVersion();
    document.getElementById("version").innerHTML = msg + " You are running API Version " + myVar;
}
