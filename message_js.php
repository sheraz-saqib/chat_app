<script>
    const message_body = document.querySelector('.message_body'),
        message_input = document.querySelector('.message_input input'),
        message_send_btn = document.querySelector('.message_send_btn'),
        message_send_form = document.querySelector('.message_send_form')






    message_send_btn.addEventListener('click', () => {
        if (message_input.value != '') {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', './php/insert_mess.php', true);
            xhr.onload = () => {
                if (xhr.readyState && XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        message_input.value = ''
                        let data = xhr.responseText;
                        console.log(data);
                        // chat_body.innerHTML = data;


                    }
                }
            }
            let formdata = new FormData(message_send_form);
            xhr.send(formdata)
        } else {
            console.log(' fill the message field');
        }



    })


    setInterval(() => {
        let xhr = new XMLHttpRequest();

        xhr.open('POST', './php/get_message.php', true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;
                    // console.log(data);

                    message_body.innerHTML = data;


                }
            }
        }
        let formdata = new FormData(message_send_form);
        xhr.send(formdata)
    }, 500)
</script>