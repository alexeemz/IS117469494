/* Global $  */


//Display London and hide Others
function ShowLondon(){
    var London =document.getElementById('London')
    London.className="show"
    var Cambodia =document.getElementById('Cambodia')
    Cambodia.className="hide"
    var India =document.getElementById('India')
    India.className="hide"
}

//Display Cambodia and hide others
function ShowCambodia(){
    var Cambodia =document.getElementById('Cambodia')
    Cambodia.className="show"
    var India =document.getElementById('India')
    India.className="hide"
     var London =document.getElementById('London')
    London.className="hide"
}


//Display India and hide others
function ShowIndia(){
    var India =document.getElementById('India')
    India.className="show"
     var London =document.getElementById('London')
    London.className="hide"
    var Cambodia =document.getElementById('Cambodia')
    Cambodia.className="hide"
    
}