function showSidebar(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = "flex";
    const profile = document.querySelector('.Profile');
    profile.style.display = "none";
    const profile2 = document.querySelector('.Profile2');
    profile2.style.display = "flex";
}

function disableSidebar(){
    sidebar = document.querySelector('.sidebar')
    sidebar.style.display = "none";
    const profile = document.querySelector('.Profile');
    profile.style.display = "flex";
    const profile2 = document.querySelector('.Profile2');
    profile2.style.display = "none";
}