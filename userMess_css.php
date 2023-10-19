<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap'); */
    @import url(root.css);

    * {
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    :root {
        --primary_color: rgb(77, 77, 77);
    }

    html {
        font-size: 62.5%;
    }

    body {
        max-width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main_body {
        width: 50rem;
        min-height: 52rem;
        margin: 1rem;
        background-color: rgb(245, 245, 245);
        border-radius: 1rem;
        box-shadow: 0 .5rem 1rem rgba(22, 22, 22, 0.096);
    }

    .message_header {
        display: flex;
        align-items: center;
        margin-top: 1rem;
        margin-left: 1rem;
    }

    .user_detail {
        display: flex;
        align-items: center;

    }

    .user_name {
        font-size: 1.3rem;
        font-weight: 600;
        letter-spacing: .1rem;
        color: rgba(0, 0, 0, 0.74);
        text-transform: capitalize;
    }

    .user_name .user_status {
        font-size: .9rem;
        font-weight: 500;
        margin-top: -.2rem;
    }

    .back_btn i {
        font-size: 2.5rem;
        color: var(--primary_color);
        margin-right: 1rem;
    }

    .user_img img {
        aspect-ratio: 1/1;
        object-fit: cover;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
        margin-right: 1rem;

    }

    .message_body {
        width: 100%;
        max-height: 42rem;
        min-height: 42rem;
        margin-top: 1rem;
        padding: .2rem;
        overflow-x: scroll;
        /* height: 100%; */
    }

    .message_body::-webkit-scrollbar {
        width: 0;
    }

    .receive_message,
    .sender_message {
        display: flex;
        font-size: 1.2rem;
        margin: .5rem 0;


    }

    .receive_message {
        justify-content: flex-end;
        margin-right: 1rem;

    }

    .sender_message {
        justify-content: flex-start;
        align-items: center;
        margin-left: 1rem;
        ;
    }

    .sender_message p {
        background-color: white;
        padding: 1rem;
        display: flex;
        align-items: center;
        border-radius: 2rem;
        color: var(--primary_color);
        max-width: 26rem;
        min-width: 2rem;
        position: relative;
        padding-right: 3rem;
        /* overflow: hidden; */
        word-break: break-all;
        padding-bottom: 1.4rem;
    }

    .sender_message p .message_time {
        position: absolute;
        bottom: .2rem;
        font-size: .8rem;
        right: 1rem;
    }

    .receive_message .receive-mess_text {
        background-color: var(--primary_color);
        padding: 1rem;
        display: flex;
        align-items: center;
        /* flex-direction: column; */
        border-radius: 2rem;
        color: white;
        border-bottom-right-radius: 0;
        max-width: 26rem;
        min-width: 6rem;
        position: relative;
        padding-right: 2rem;
        padding-bottom: 1.2rem;
        word-break: break-all;

    }

    .receive_message .receive-mess_text span {
        position: absolute;
        font-size: .8rem;
        margin-left: .3rem;
        bottom: 0;
        right: .4rem;
        display: flex;
        align-items: center;


    }

    .receive_message .receive-mess_text span i {
        font-size: 1.2rem;
    }

    .receive_message .receive-mess_text span .double_tick_active {
        color: rgb(47, 139, 231);
    }

    /* .receive-mess_text span .double_tick{
    font-size: 1.2rem;
    margin-left: 4rem !important;

} */
    .sender_message .sender_img img {
        aspect-ratio: 1/1;
        object-fit: cover;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        margin-right: .5rem;
    }

    .message_input_container {
        margin-bottom: 1rem;
    }

    .message_input_container input {
        width: 100%;
        background-color: transparent;
        border: transparent;
        outline: none;
        padding: .5rem;
        /* padding-left: 1.6rem; */
    }

    .message_input {
        display: flex;
        align-items: center;
        background-color: white;
        margin: 0 .5rem;
        height: 3.7rem;
        border-radius: 2rem;
    }

    .message_input .bxs-send {
        background-color: var(--primary_color);
        color: white;
        font-size: 1.5rem;
        height: inherit;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 4rem;
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
        cursor: pointer;
        transition: .3s;

    }

    .message_input .bxs-send:hover {
        border-radius: 50%;
        transform: rotate(-30deg);
    }

    .message_input .bx-plus {
        font-size: 1.7rem;
        color: var(--primary_color);

        border: 1px solid var(--primary_color);
        border-radius: 50%;
        cursor: pointer;
        margin-left: 1rem;
    }
</style>