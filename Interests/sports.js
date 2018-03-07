/* Global $  */


//Display Ju-Jutsu paragraph and picture
//Hide Badminton paragraph and picture
function showJuJu() {
   document.getElementById('juju').style.display = "block";
   document.getElementById('badminton').style.display = "none";
}

//Display Badminton paragraph and picture
//Hide Ju-Jutsu paragraph and picture
function showBadminton() {
    document.getElementById('badminton').style.display = "block";
    document.getElementById('juju').style.display = "none";
}