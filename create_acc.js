const open_eye_icon = document.querySelectorAll(".open_eye_icon"),
  fileInput = document.querySelector(".fileInput"),
  img_container = document.querySelector(".take_img_field"),
  user_image_input = document.querySelector("#user_image_input"),
  show_user_img = document.querySelector(".user_image"),
  user_img_tag = document.querySelector(".user_image img"),
  img_input_h2  = document.querySelector('.img_h2'),
  field_icon = document.querySelector('.picture_icon'),
  show_user_img_btn = document.querySelector(".show_user_img_btn"),
  show_img_container = document.querySelector(".show_img_container"),
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

img_container.addEventListener("click", () => {
  user_image_input.click();
});

function imgError() {
  show_img_container.classList.add("disabled");
  show_user_img_btn.setAttribute("disabled", "disabled");
  img_input_h2.textContent = 'Choose Picture'
   field_icon.innerHTML= "<i class='bx bx-photo-album'></i>"
}
function imgSuccess() {
  show_img_container.classList.remove("disabled");
  show_user_img_btn.removeAttribute("disabled", "disabled");
  img_input_h2.textContent = 'Picture Selected'
  field_icon.innerHTML= "<i class='bx bxs-check-circle'  ></i>"
}

function img() {
  user_image_input.addEventListener("change", (e) => {
    let file = e.target.files[0];
    let img = URL.createObjectURL(file);
    user_img_tag.src = img;
    
  });
}

function fileValidation() {
  let allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
  let fileInput = user_image_input.value;
  if (allowedExtensions.exec(fileInput)) {
    img();
    imgSuccess();
  } else {
    imgError();
  }
}
// }
user_image_input.addEventListener("input", () => fileValidation());

show_user_img_btn.addEventListener("click", () => {
  show_user_img.classList.toggle("user_image_active");
  show_user_img_btn.value == "Image Preview" ? show_user_img_btn.value = "Hide Image" : show_user_img_btn.value = "Image Preview"  
})



error_cross.addEventListener('click',()=>{
  error_box.remove()
})

sigup_form.addEventListener('submit',e=>{
  e.preventDefault();
})

