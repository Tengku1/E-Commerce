var Sidebar = document.getElementById("BagCart");
function CloseSidebar() {
    Sidebar.classList.add("hideBagCart")
}
function OpenSidebar() {
    if(Sidebar.classList.contains("hideBagCart"))  {
        Sidebar.classList.remove("hideBagCart")
    } 
}