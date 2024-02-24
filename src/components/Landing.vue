<template>
    <div class="col-12 text-center d-flex justify-content-center align-items-center b-diamonds h-v70">
        <div>
            <h1 class="cursive-text">Business software<br />done well.</h1>
            <blockquote class="pt-4" style="width:360px;margin:0 auto;">
                "There’s no shortage of remarkable ideas, what’s missing is the will to execute them."<br />- Seth Godin
            </blockquote>
        </div>
    </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

.h-v70 {
    height: 70vh;
    min-height: 600px;
}

.cursive-text {
    font-family: 'Great Vibes', cursive;
    font-size: 72px;
}

.b-diamonds {
    background-image: url('@/assets/background-gray.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 50%;
}

@media only screen and (max-width: 500px) {
    .cursive-text {
        font-size: 48px;
    }
}

@media only screen and (min-width:801px) and (max-width:1000px) {
    .b-diamonds {
        background-size: 60%;
    }
}

@media only screen and (min-width:601px) and (max-width:800px) {
    .b-diamonds {
        background-size: 80%;
    }
}

@media only screen and (max-width:600px) {
    .b-diamonds {
        background-size: 100%;
    }
}
</style>

<script>
const Landing = {
    name: 'Landing',
}
export default Landing
</script>