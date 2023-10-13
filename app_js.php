<script>
    const search_input = document.getElementById('search_input'),
        search_cross = document.querySelector('.search_cross');
    const chat_body = document.querySelector('.user_body');


    search_input.addEventListener('input', () => {
        if (search_input.value.length > 0) {
            search_cross.style.display = 'block'
            search_input.classList.add('searching');

            let xhr = new XMLHttpRequest();
            xhr.open('GET', './php/search.php?searchqurey=' + search_input.value, true);
            xhr.onload = () => {
                if (xhr.readyState && XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        let data = xhr.responseText;
                        chat_body.innerHTML = data;

                    }
                }
            }
            xhr.send()



        } else {
            search_cross.style.display = 'none'
            search_input.classList.remove('searching');
        }
    })
    search_cross.addEventListener('click', () => {
        search_input.value = ''
        search_cross.style.display = 'none'
        search_input.classList.remove('searching');
    })



    setInterval(() => {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', './php/fetch_user.php', true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;

                    if (!search_input.classList.contains('searching')) {

                        chat_body.innerHTML = data;
                    }


                }
            }
        }
        xhr.send()
    }, 500)

    chat_body.onload = () => {
        chat_body.scrollTop = chat_body.scrollHeight
    }


    
</script>