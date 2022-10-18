function showContents(activeTab, contentsId) {
    var tabs = document.querySelectorAll('.btn');
    var contents = document.querySelectorAll('.contents');
    var i = 0;
    while(i < tabs.length) {
        tabs[i].classList.remove('show');
        contents[i].classList.remove('show');
        i++;
    }
    activeTab.classList.add('show');
    document.getElementById(contentsId).classList.add('show');
}