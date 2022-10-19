function SwitchToMobile () {
    if (
        navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/iPhone/i)
    ) { window.location.href = "mobile.html";} else 
    { console.log("Agent is not an Phone!");}
}

SwitchToMobile();