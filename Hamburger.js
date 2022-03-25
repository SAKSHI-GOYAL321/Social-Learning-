function show(){
    var sidenav= document.getElementById("Ham");
    var Ham = document.getElementById('top-ham');
    var sidemenu = document.getElementById('sidenav');
    console.log("check1");
    if(sidenav.style.display == 'block'){
        sidenav.style.display = "none";
        Ham.style.backgroundColor = "#4c6c94";
        // Ham.style.display = "";
        // sidenav.classList.remove("non-active");
        // sidenav.classList.add("active");
        // alert("if ");
    }
    else{
        // sidenav.classList.remove("non-active");
        // sidenav.classList.add("active");
        // sidenav.style.display = "none";
        // Ham.style.display = "block";
        sidenav.style.display = "block";
        sidenav.style.width = "256px"
        // Ham.style.display = "none";
        Ham.style.zIndex = "121";
        Ham.style.position = "relative";
        Ham.style.backgroundColor = "steelblue";
        // alert("else");
    }
    sidenav.classList.toggle("active");
    console.log("check3");
}
