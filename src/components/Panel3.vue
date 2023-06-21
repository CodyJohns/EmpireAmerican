<template>
    <div class="col-12 h-v70 word-cluster" style="max-height:650px;overflow-y: hidden;">
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 text-center pt-4">
            <div class="row">
                <div class="col-sm-6 offset-sm-6 para-adv b-outer" style="height:80vh;background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 10%);">
                    <div class="b-inner">
                        <h2>Advertising</h2>
                        <p class="adv-text">
                            Promote your brand on our websites. Have your advertisments seen by actual individuals.<br /><br />
                            
                            No complex "Cost-per-click" calculations, just a flat-rate, affordable monthly fee.

                            <div style="text-align: center !important;margin-top:16px;">
                                <button class="btn btn-outline-danger" @click="toggleOverlay">Contact for info</button>
                            </div>
                        </p>
                        <img src="@/assets/words.png" class="mobile-words" style="width:100%;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.word-cluster {
    background-image: url('@/assets/words.png');
    background-repeat: no-repeat;
    background-position: left;
}

.mobile-words {
    display: none;
}

.adv-text {
    padding-left:50px;
    text-align:left !important;
}

.para-adv {
    padding-left: 50px;
}

.b-outer {
    position: relative;
}

.b-inner {
    position: absolute;
    top: 40%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

@media only screen and (max-width: 576px) {
    .word-cluster {
        background-image: none;
    }
    .mobile-words {
        display: block;
    }
    .adv-text {
        padding-left: 0px;
    }
    .para-adv {
        padding-left: 0px;
    }
}

@media only screen and (min-width: 576px) and (max-width:1200px) {
    .word-cluster {
        background-size: 80%;
    }
    .para-adv {
        padding-left: 30px;
    }
}

@media only screen and (min-width: 1600px) {
    .word-cluster {
        background-position: 20%;
    }
    .b-inner {
        top: 30%;
    }
}
</style>

<script>
const Panel3 = {
    name: 'Panel3',
    methods: {
        toggleOverlay() {
            this.$emit('showOverlay', true);
        }
    }
}
export default Panel3
</script>