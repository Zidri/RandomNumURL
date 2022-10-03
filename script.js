
function genLink() {

    //get URL base
    var $URLbase = document.forms["URLForm"]["URLbase"].value;

    if ($URLbase != null && $URLbase != "") {
        //get random number
        var $rand = Math.floor(Math.random() * 1000000);

        //add number to base
        var $URL = $URLbase + $rand;

        //display link
        document.getElementById("URLdisplay").href = $URL;
        document.getElementById("URLdisplay").innerHTML = $URL;
    }
    else {
        $URLbase = "https://www.printables.com/model/";

        //get random number
        var $rand = Math.floor(Math.random() * 100000);

        //add number to base
        var $URL = $URLbase + $rand;

        //display link
        document.getElementById("URLdisplay").href = $URL;
        document.getElementById("URLdisplay").innerHTML = $URL;
    }

}