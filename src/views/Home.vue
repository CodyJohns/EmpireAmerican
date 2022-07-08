<template>
    <div class="col-12 full-h">
        <Modal v-if="show_overlay" @showOverlay="toggleModal" @displayMessage="showPopup" />
        <Popup v-if="show_popup" :message="popup_message" :key="popup_message" />
        <div class="col-12 text-center pt-3">
            <span style="position:absolute;left:3%;top:20px;" class="contact-info"><font-awesome-icon icon="fa-solid fa-phone" /> (972) 201-7993</span>
            <img src="@/assets/logo_small.png" height="60" />  
            <span style="position:absolute;right:3%;top:20px;" class="contact-info">support@empire-american.com <font-awesome-icon icon="fa-solid fa-envelope" /></span>
        </div>
        <Landing />
        <Panel2 />
        <Panel4 @showOverlay="toggleModal" />
        <Panel3 @showOverlay="toggleModal" />
        <Footer />
    </div>
</template>

<style>
body {
    margin: 0 auto;
}

.full-h {
    height: 100vh;
}

@media only screen and (max-width: 730px) {
    .contact-info {
        display:none;
    }
}
</style>

<script>
import Landing from '@/components/Landing.vue'
import Panel2 from '@/components/Panel2.vue'
import Panel3 from '@/components/Panel3.vue'
import Footer from '@/components/Footer.vue'
import Panel4 from '@/components/Panel4.vue'
import Modal from '@/components/Modal.vue'
import Popup from '../components/Popup.vue'

const Home = {
    name: 'Home',
    components: {
        Landing,
        Panel2,
        Panel3,
        Panel4,
        Footer,
        Modal,
        Popup
    },
    data: function() {
        return {
            show_overlay: false,
            show_popup: false,
            popup_message: ""
        }
    },
    created() {
        document.title = "Empire American | Business done well";
    },
    methods: {
        toggleModal(bool) {
            this.show_overlay = bool;
        },
        showPopup(msg) {
            this.popup_message = msg;

            this.show_popup = true;

            let x = setTimeout(() => {
                this.show_popup = false;
            }, 20000);
        }
    }
}
export default Home
</script>