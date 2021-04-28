const currentLocation = location.href;
const menuItem = document.querySelectorAll('a'); // get all a tags
const menuLength = menuItem.length; // length of total a tags

// loop through links
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "nav-link active";
    }
    // if on admin stats - highlight stats link
    if (currentLocation === "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/secure/admin_stats.php") {
        menuItem[3].className = "nav-link active";
    }
    // if on home page - do not highlight logo
    if (currentLocation === "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/index.php") {
        menuItem[0].className = "navbar-brand mybrand display-1";
    }
}