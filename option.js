const option_icon = document.querySelector('.option_icon'),
ul_option_toggle = document.querySelector('.ul_options'),
option_cross = document.querySelector('.option_cross');




function ul_option_toggle_fun(){
      ul_option_toggle.classList.toggle('ul_option_toggle')
}
option_icon.addEventListener('click',()=>{
    ul_option_toggle_fun()
})
option_cross.addEventListener('click',()=>{
    ul_option_toggle_fun()
})