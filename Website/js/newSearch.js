
var TRange = null;

function findString(str) {
  if (str == "news") {
    location.replace("news.html");
}
  if (str == "News") {
    location.replace("news.html");
}
  if (str == "NEWS") {
    location.replace("news.html");
}
  if (str == "home") {
    location.replace("week 11 js assignment.html");
}
if (str == "Home") {
    location.replace("week 11 js assignment.html");
}
if (str == "HOME") {
    location.replace("week 11 js assignment.html");
}
if (str == "contact") {
    location.replace("contact.php");
}
if (str == "Contact") {
    location.replace("contact.php");
}
if (str == "CONTACT") {
    location.replace("contact.php");
}
if (str == "about") {
    location.replace("about.html");
}
if (str == "About") {
    location.replace("about.html");
}
if (str == "ABOUT") {
    location.replace("about.html");
}

    if (window.find) {
            strFound = self.find(str)
        if (!strFound) {
            strFound = self.find(str, 0, 1)
            while (self.find(str, 0, 1)) continue
        }
    }
    if (!strFound) alert("String '" + str + "' not found!")
        return;
};

document.getElementById('f1').onsubmit = function() {
    findString(this.t1.value);
    return false;
};

