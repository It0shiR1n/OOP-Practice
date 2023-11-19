function loadForm() {
    document.getElementById("sizeSelected").style.display = "block";
        
    document.getElementById("weightSelected").style.display = "none";
    document.getElementById("HxWxLSelected").style.display = "none";


}

function selectedForm() {
    let selectOption = document.getElementById("productType");
    
    if (selectOption.selectedIndex == 0) {
        document.getElementById("sizeSelected").style.display = "block";
        
        document.getElementById("weightSelected").style.display = "none";
        document.getElementById("HxWxLSelected").style.display = "none";

    }else if (selectOption.selectedIndex == 1) {
        document.getElementById("weightSelected").style.display = "block";

        document.getElementById("sizeSelected").style.display = "none";
        document.getElementById("HxWxLSelected").style.display = "none";

    }else if (selectOption.selectedIndex == 2) {
        document.getElementById("HxWxLSelected").style.display = "block";

        document.getElementById("weightSelected").style.display = "none";
        document.getElementById("sizeSelected").style.display = "none";

    }

}