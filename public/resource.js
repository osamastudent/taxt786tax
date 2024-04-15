


// toggle

// var togg = document.getElementById("togg");
// var header = document.getElementsByClassName("header")[0];
// var navItems = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

// var isMenuVisible = false; // Track the state of the menu visibility

// togg.addEventListener("click", function () {
//     if (isMenuVisible) {
//         // If the menu is visible, remove the marginTop and reset the state
//         header.style.marginTop = "0";
//         isMenuVisible = false;
//     } else {
//         // If the menu is not visible, calculate marginTop and set the state
//         for (var i = 0; i < navItems.length; i++) {
//             navItems[i].style.cssText = "background-color: white; float: left;";
//         }
//         var marginTopValue = 100 + navItems.length * 40; // Adjust this value as needed
//         header.style.marginTop = marginTopValue + "px";
//         isMenuVisible = true;
//     }
// });

var togg = document.getElementById("togg");
var header = document.getElementsByClassName("header")[0];
var navItems = document.getElementsByClassName("navbar-nav")[0].getElementsByTagName("li");

var isMenuVisible = false; // Track the state of the menu visibility

function toggleMenu() {
    if (isMenuVisible) {
        header.style.marginTop = "0";
        isMenuVisible = false;
    } else {
        for (var i = 0; i < navItems.length; i++) {
            navItems[i].style.cssText = "background-color: white; float: left;";
        }
        var marginTopValue = 100 + navItems.length * 40;
        header.style.marginTop = marginTopValue + "px";
        isMenuVisible = true;
    }
}

togg.addEventListener("click", toggleMenu);

function resetMarginOnResize() {
    if (!isMenuVisible) {
        return; // Do nothing if the menu is not visible
    }

    // Check if the window width is equal to the screen width (maximized)
    if (window.innerWidth === screen.width) {
        header.style.marginTop = "0"; // Remove margin-top when maximized
    } else {
        var marginTopValue = 100 + navItems.length * 40;
        header.style.marginTop = marginTopValue + "px";
    }
}

// Listen for window resize events and call the resetMarginOnResize function
window.addEventListener("resize", resetMarginOnResize);






var resourcesid = document.getElementById("resourcesid");
var alertid = document.getElementById("alertid");
var hr2 = document.getElementById("hr2");
var salestaxid = document.getElementById("salestaxid");
var usaservicesid=document.getElementById("usaservicesid");
var taxttoolsid=document.getElementById("taxttoolsid");
var taxttoolsalert = document.getElementById("taxttoolsalert");
var businessid=document.getElementById("businessid");
var hr3 = document.getElementById("hr3");
resourcesid.addEventListener("mouseenter", function() {
    if (alertid.style.display = "none" && hr2.style.display === "none") {
        alertid.style.display = "block";
        hr2.style.display = "block";
        taxttoolsalert.style.display="none";
        hr3.style.display="none";
    }
});


alertid.addEventListener("mouseleave", function() {
    if (alertid.style.display = "block") {
        alertid.style.display = "none";
    }
});

alertid.addEventListener("mouseleave", function() {
    if (hr2.style.display = "block") {
        hr2.style.display = "none";
    }
});


alertid.addEventListener("mouseenter", function() {
    if (hr2.style.display = "none") {
        hr2.style.display = "block";
    }
   
});



resourcesid.addEventListener("mouseleave", function() {
    if(alertid.style.display = "block"){
     hr2.style.display = "none"; // Hide hr2 on mouseleave
     alertid.style.display = "block";
    }
 });
 
 salestaxid.addEventListener("mouseenter", function() {
    if(alertid.style.display = "block"){
        alertid.style.display = "none";
    }
 });

 usaservicesid.addEventListener("mouseenter", function() {
    if(alertid.style.display = "block"){
        alertid.style.display = "none";
    }
});
    businessid.addEventListener("mouseenter", function() {
        if(alertid.style.display = "block"){
            alertid.style.display = "none";
            hr2.style.display = "none";
        }
 });