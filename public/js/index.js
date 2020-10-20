// Shopping Button Card Navigasi
var Sidebar = document.getElementById("BagCart");

function OpenSidebar() {
    Sidebar.classList.add("showBagCart");
}
function CloseSidebar() {
    if (Sidebar.classList.contains("showBagCart")) {
        Sidebar.classList.remove("showBagCart");
    }
}

// END 
