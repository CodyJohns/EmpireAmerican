<template>
    <div class="col-12 h-v70 b-gray" style="max-height:650px;overflow-y: hidden;">
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 text-center pt-4">
            <div class="row">
                <div class="col-12 col-sm-5 c-outer" style="height:80vh;;">
                    <div class="c-inner">
                        <h2>Let us work with you.</h2>
                        <p style="text-align: left !important;">
                            We are willing to work with you to make your project or business the best looking and most functional it 
                            can be. We meet deadlines and reach goals all while keeping costs to an affordable level.<br /><br />

                            Send us a message to take your dream to the next level.<br /><br />

                            <div style="text-align: center !important;margin-top: -10px;">
                                <button class="btn btn-outline-danger" @click="toggleOverlay">Contact us</button>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.b-gray {
    background-image: linear-gradient(90deg, #f1f1f1 52%, rgba(255, 255, 255, 0) 64%), url('@/assets/panel2_bkg.jpg');
    background-position: center, 200px 0px;
    background-size: 100%, 110%;
}

.c-outer {
    position: relative;
}

.c-inner {
    position: absolute;top: 40%;-ms-transform: translateY(-50%);transform: translateY(-50%);
}

a {
    color: #555;
    text-decoration: none;
}

a:hover {
    color: #CCC;
}

@media only screen and (max-width: 567px) {
    .b-gray {
        background-image: linear-gradient(180deg, #f1f1f1 52%, rgba(255, 255, 255, 0) 64%), url('@/assets/panel2_bkg.jpg');
        background-position: center, center 280px;
        background-size: 100%, 200%;
    }
    .c-inner {
        position: unset;
        -ms-transform: none;
        transform: none;
    }
}

@media only screen and (min-width: 568px) and (max-width: 669px) {
    .b-gray {
        background-position: center, 0px;
        background-size: 100%, 160%;
    }
}

@media only screen and (min-width: 670px) and (max-width: 860px) {
    .b-gray {
        background-position: center, 80px 0px;
        background-size: 100%, 140%;
    }
}

@media only screen and (min-width: 1600px) {
    .c-inner {
        top: 30%;
    }
}

@media only screen and (min-width: 1300px) and (max-width: 2159px){
    .b-gray {
        background-position: center, 250px -100px;
        background-size: 100%, 100%;
    }
}

@media only screen and (min-width: 2160px) {
    .b-gray {
        background-position: center, 540px -135px;
        background-size: 100%, 80%;
    }
}
</style>

<script>
const Panel4 = {
    name: 'Panel4',
    methods: {
        toggleOverlay() {
            this.$emit('showOverlay', true);
        }
    }
}
export default Panel4
</script>