/* Toggle between adding and removing the "responsive" class */
function navigation(){
    var x = document.getElementByID("NavBar");
    if (x.className === "navigation"){
        x.className += "responsive";
    } else {
        x.className = "navigation";
    }
}