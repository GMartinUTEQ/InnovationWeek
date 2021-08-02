
    function Validate() {
        var checked = 0;
        
        //Reference the Table.
        //var tblFruits = document.getElementById("tblFruits");
 
        //Reference all the CheckBoxes in Table.
        var chks = document.getElementsByTagName("INPUT");
 
        //Loop and count the number of checked CheckBoxes.
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                checked++;
            }
        }
        document.getElementById("puntosflot").textContent=checked;
        
        //alert(checked);
        var tot = document.getElementById("total");
        tot.value = checked;
        

        
        /*alert(checked + " CheckBoxe(s) are checked.");*/
        return true;
        
    };
