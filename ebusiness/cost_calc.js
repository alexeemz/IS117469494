/* global $ */


function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
    argSubTotal = 100;
    
    }
    else if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
    
    }
    else if(document.getElementById('aws').checked){
        argSubTotal = 300;
    
    }
    else {
   argSubTotal = 400;
    }
    
    var hidden;
    
    calcTotal(argSubTotal);
    
}
    
    function calcTotal(parmSubTotal){
        
      var SubTotal, discount, discountedTotal, vat, total;
      SubTotal = parmSubTotal;
      discount = SubTotal * 0.05;
      discountedTotal = SubTotal - discount;
      vat = discountedTotal * 0.10;
      total = discountedTotal + vat;
      
      display(SubTotal, discount, vat, total);
    }    
    
function display(parm1, parm2, parm3, parm4){
    document.getElementById("SubTotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
    document.getElementById('btnProceed').style.display="block";
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}
