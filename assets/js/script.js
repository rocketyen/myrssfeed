 function doAction() {
    var max = 3;
    var z = 0;
    var checkboxes = document.getElementsByClassName("case");
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes.item(i).checked == true) {
            z++
            if (z > max) {
                checkboxes.item(i).checked = false;
            }
        }
    }
    if(z < max){
        window.alert('Nombre de choix insufissant');
    } 
 }    