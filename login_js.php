<script>
  const open_eye_icon = document.querySelectorAll(".open_eye_icon"),
    signin_form = document.querySelector('.signin_form'),
    show_error_container = document.querySelector('.show_error'),
    error_cross = document.querySelector('.error_cross'),
    error_box = document.querySelector('.error'),
    login_btn = document.querySelector('#login_btn');


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

  // error_cross.addEventListener('click',()=>{
  //   error_box.remove()
  // })



  signin_form.addEventListener('submit', e => {
    e.preventDefault();
  })


  login_btn.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './php/login.php', true);
    xhr.onload = () => {
      if (xhr.readyState && XMLHttpRequest.DONE) {
        if (xhr.status == 200) {
          let data = xhr.responseText;
          console.log(data);

          show_error_container.innerHTML = data;

          if (data == "success") {
            window.location.href = 'chat.php';
          }
        }
      }
    }
    let formData = new FormData(signin_form)
    xhr.send(formData)
  })
</script>