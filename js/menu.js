// Behavior of menu

var myMenu  = document.querySelector("#menuLight");
var menuItems = document.querySelector(".mobile");

// Open menu
    menuItems.addEventListener("click",menuOpen,false);

    function menuOpen() {	
		myMenu.style.left = "0px";
    }

// Close menu
    myMenu.addEventListener("click",menuClose,false);

    function menuClose() {	
        myMenu.style.left = "-5000px";
    }


