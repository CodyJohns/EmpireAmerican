<template>
    <div class="overlay">
        <div class="modal-cont">
            <div class="overlay-top">
                <div style="position:relative">
                    <button class="btn btn-outline-danger" style="position:absolute;right:0px;" @click="toggleOverlay">X</button>
                </div>
                <div class="col-12" style="text-align: left !important;">
                    <h3 style="margin:0px;padding-top:5px;">Leave a message:</h3>
                </div>
            </div>
            <form @submit.prevent="send">
                <div style="padding: 20px;">
                    <div class="col-12" style="padding-top:20px;text-align: left !important;">
                        <input type="email" v-model="sender" placeholder="Email..." required/>
                    </div>
                    <div class="col-12" style="padding-top:20px;text-align: left !important;">
                        <textarea v-model="message" placeholder="Type your message here..." required></textarea>
                    </div>
                </div>
                <div class="col-12 overlay-bottom">
                    <div style="position:relative">
                        <button class="btn btn-outline-light" style="position:absolute;right:0px;">Send</button>
                    </div>
                    <div style="color:white;padding-right:20px;font-size:90%;text-align: left !important;">
                        Please allow up to<br /> 1 business day for a response. 
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<style>
.overlay {
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.6);
    position: fixed;
    z-index: 1001;
    display: flex;
    justify-content: center;
    align-items: center;
}

.overlay-bottom {
    width:100%;
    background: #d90429;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
    padding: 20px;
}

.overlay-top {
    width:100%;
    background: #f3f3f3;
    border-bottom: 1px solid #e5e5e5;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    padding: 20px;
}

.modal-cont {
    width:90vw;
    max-width: 800px;
    background-color: #fff;
    border-radius: 6px;
}

input {
    border: none;
    outline: none;
    border-bottom: 2px solid #d90429;
    border-left: 2px solid #d90429;
    border-top: 2px solid #e5e5e5;
    border-right: 2px solid #e5e5e5;
    width: 70%;
    padding: 8px;
}

input:focus {
    border-top: 2px solid #ef233c;
    border-right: 2px solid #ef233c;
}

textarea {
    border: none;
    outline: none;
    border-bottom: 2px solid #d90429;
    border-left: 2px solid #d90429;
    border-top: 2px solid #e5e5e5;
    border-right: 2px solid #e5e5e5;
    width: 100%;
    height: 300px;
    padding: 8px;
}

textarea:focus {
    border-top: 2px solid #ef233c;
    border-right: 2px solid #ef233c;
}
</style>

<script>
import axios from "axios"

const Modal = {
    name: 'Modal',
    data: () => {
        return {
            sender: "",
            message: ""
        }
    },
    methods: {
        toggleOverlay() {
            this.$emit('showOverlay', false);
        },
        cancel() {
            this.sender = "";
            this.message = "";

            this.toggleOverlay();
        },
        async send() {

            if(this.sender.length == 0 || this.message.length == 0)
                return;

            let validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if(!this.sender.match(validRegex))
                return;

            let data = new FormData();

            data.append('sender', this.sender);
            data.append('message', this.message);

            let result = await axios.post('/script.php', data);

            this.$emit('displayMessage', result.data.data);

            this.sender = "";
            this.message = "";

            this.toggleOverlay();
        }
    }
}
export default Modal
</script>