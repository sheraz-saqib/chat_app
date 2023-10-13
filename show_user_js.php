

<script>
    const chat_body = document.querySelector('.user_body');



    setInterval(() => {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', './php/fetch_user.php', true);
        xhr.onload = () => {
            if (xhr.readyState && XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.responseText;
                    console.log(data);

                    chat_body.innerHTML = data;


                }
            }
        }
        xhr.send()
    }, 500)
</script>