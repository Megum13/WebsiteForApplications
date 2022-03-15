window.onload = function() {
    function UpdateScreen() {
        if (document.body.clientWidth < 900) {
            document.getElementById("main_style").href = "styleMobile.css";
        } else {
            document.getElementById("main_style").href = "style.css";
        }
    }
    UpdateScreen();
    window.onresize = UpdateScreen;
}