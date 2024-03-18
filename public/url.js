//dropdown in profile section
let dropDownContainer= document.querySelector('.profile');
let dropDownContent=document.querySelector('.profilecontent');
dropDownContainer.addEventListener('click',() => {
  dropDownContent.classList.toggle('hidden');
});

//allowing full width maincontainer
let mainContainer = document.querySelector('.maincontainer');
let allowFullWidth = document.querySelector('.allow-full-width');
let sidebar = document.querySelector('.sidebar');

allowFullWidth.addEventListener('click', () => {
    mainContainer.classList.toggle('full-width');
    if (mainContainer.classList.contains('full-width')) {
        mainContainer.style.width = "100%";
        sidebar.style.display = "none";
    } else {
        mainContainer.style.width = "";
        sidebar.style.display = "";
    }
});

