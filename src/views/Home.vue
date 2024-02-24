<template>
    <div class="col-12 full-h">
        <Modal v-if="show_overlay" @showOverlay="toggleModal" @displayMessage="showPopup" />
        <Popup v-if="show_popup" :message="popup_message" :key="popup_message" />
        <div class="d-flex justify-content-between p-4 top-nav-links">
            <span><font-awesome-icon icon="fa-solid fa-envelope" /> support@empire-american.com</span>
            <span><a href="https://portal.empire-american.com/"><font-awesome-icon icon="fa-solid fa-computer" /> Client Portal</a></span>
        </div>
        <div class="col-12 pt-3 d-flex justify-content-center logo">
            <div class="d-flex">
                <img src="@/assets/logo_new.png" height="60" />
                <h4 class="mt-1 ms-2">Empire<br />American</h4>
            </div>
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

.logo {
    margin-top: -70px;
}

@media only screen and (max-width: 730px) {
    .logo {
        margin-top: 0px;
    }

    .top-nav-links {
        background-color: #efefef;
        border-bottom: 2px solid #e5e5e5;
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