let buttons = document.getElementsByClassName('nav-button');

console.log(buttons);

for(let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("mouseover", () => {
        buttons[i].style.color = 'red';
    })

    buttons[i].addEventListener("mouseout", () => {
        buttons[i].style.color = 'black';
    })

}



