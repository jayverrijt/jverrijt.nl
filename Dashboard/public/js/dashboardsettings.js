function toSettings() {
    var fetch = document.getElementsByClassName("contDashBuildInfo");
    var fetch2 = document.getElementsByClassName("contDashBuildSettings");
    var settingsIcon = document.getElementById("settingsIcon");
    var backIcon = document.getElementById("backIcon");
    for(var i = 0; i < fetch.length; i++)
    {
        fetch[i].classList.add('hidden');
        fetch[i].classList.remove('show');
    }
    for (var ii = 0; ii < fetch2.length; ii++) {
        fetch2[ii].classList.add('show');
        fetch2[ii].classList.remove('hidden');
    }
    settingsIcon.classList.add('hidden');
    settingsIcon.classList.remove('show');
    backIcon.classList.add('show');
    backIcon.classList.remove('hidden');
}
function goBack() {
    var fetch = document.getElementsByClassName("contDashBuildInfo");
    var fetch2 = document.getElementsByClassName("contDashBuildSettings");
    var settingsIcon = document.getElementById("settingsIcon");
    var backIcon = document.getElementById("backIcon");
    for(var i = 0; i < fetch.length; i++)
    {
        fetch[i].classList.add('show');
        fetch[i].classList.remove('hidden');
    }
    for (var ii = 0; ii < fetch2.length; ii++) {
        fetch2[ii].classList.add('hidden');
        fetch2[ii].classList.remove('show');
    }
    settingsIcon.classList.add('show');
    settingsIcon.classList.remove('hidden');
    backIcon.classList.add('hidden');
    backIcon.classList.remove('show');
}
