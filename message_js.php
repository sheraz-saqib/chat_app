<script>
    const message_body = document.querySelector('.message_body'),
        message_input = document.querySelector('.message_input input'),
        message_send_btn = document.querySelector('.message_send_btn'),
        message_send_form = document.querySelector('.message_send_form'),
        user_detail = document.querySelector('.user_detail'),
        get_reci_id = document.getElementById('get_reci_id').value,
        get_sender_id = document.getElementById('get_sender_id').value;

    function topToBottom() {
        message_body.scrollTop = message_body.scrollHeight + 1500
    }


    message_send_btn.addEventListener('click', () => {

        if (message_input.value != '') {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', './php/insert_mess.php', true);
            xhr.onload = () => {
                if (xhr.readyState && XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        message_input.value = ''
                        let data = xhr.responseText;

                        // chat_body.innerHTML = data;
                        topToBottom()

                    }
                }
            }
            let formdata = new FormData(message_send_form);
            xhr.send(formdata)
        } else {
            console.log(' fill the message field');
        }




    })


    message_body.addEventListener('mouseenter', () => {
        message_body.classList.add('active')
    })
    message_body.addEventListener('mouseleave', () => {
        message_body.classList.remove('active')
    })

    setInterval(() => {
        let xhr = new XMLHttpRequest();

        xhr.open('POST', './php/get_message.php', true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;
                    // console.log(data);
                    if (!message_body.classList.contains('active')) {
                        message_body.innerHTML = data;
                        topToBottom()
                    }



                }
            }
        }
        let formdata = new FormData(message_send_form);
        xhr.send(formdata)
    }, 500)

    setInterval(() => {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', './php/message_profile.php?user_id=' + get_reci_id + '&sender_id=' + get_sender_id, true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;

                    user_detail.innerHTML = data;


                }
            }
        }
        xhr.send()
    }, 500)
</script>