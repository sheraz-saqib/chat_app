const open_eye_icon = document.querySelectorAll(".open_eye_icon"),
signin_form = document.querySelector('.signin_form'),
  show_error_container = document.querySelector('.show_error'),
  error_cross = document.querySelector('.error_cross'),
  error_box = document.querySelector('.error'),
  sigup_form = document.querySelector('.sigup_form');


function showAndHidePass(input) {
  input.type == "password" ? (input.type = "text") : (input.type = "password");
}
open_eye_icon.forEach((crr) => {
  let crrInput = crr.parentNode.childNodes[0];
  let parent_div = crr.parentElement;
  let close_eye = parent_div.querySelector(".close_eye_icon");
  crr.addEventListener("click", () => {
    showAndHidePass(crrInput);
    close_eye.classList.toggle("active");
    crr.classList.toggle("active");
  });
  close_eye.addEventListener("click", () => {
    showAndHidePass(crrInput);
    close_eye.classList.toggle("active");
    crr.classList.toggle("active");
  });
});

error_cross.addEventListener('click',()=>{
  error_box.remove()
})



signin_form.addEventListener('submit',e=>{
  e.preventDefault();
})

