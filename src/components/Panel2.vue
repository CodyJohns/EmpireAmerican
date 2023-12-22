<template>
    <div class="col-12 red-b h-v70" style="max-height:650px;overflow:hidden;">
        <div class="col-10 offset-1 col-sm-8 offset-sm-2 text-center pt-4">
            <div class="row">
                <div class="col-sm-6 a-outer">
                    <div class="a-inner">
                        <h2>Projects</h2>
                        <p style="text-align:left !important;">
                            Our current projects:
                            <ul style="text-align:left !important;">
                                <li>
                                    EZ-Budget - <a href="https://ezbudget.app/" target="_blank">ezbudget.app</a><br />
                                    <div style="padding:15px 0px;">
                                        Secure budgeting app that can help user track income and spending, set savings/investment goals, 
                                    and help user detect what that income is being spent on by percentages.
                                    </div>
                                </li>
                                <li>
                                    Regex-GPT - <a href="https://aixpwkerwshhs2xpfasmlfvcva.apigateway.us-phoenix-1.oci.customer-oci.com/" target="_blank">Link here</a><br />
                                    <div style="padding:15px 0px;">
                                        Prototype regular expression generation using OpenAI's ChatGPT 4 Turbo. Includes the ability to add and run testcases for
                                        the generated regular expression.
                                    </div>
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="@/assets/server.webp" class="serve-img" />
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.a-outer {
    position: relative;
}

.a-inner {
    position: absolute;top: 30%;-ms-transform: translateY(-50%);transform: translateY(-50%);
}

@media only screen and (max-width: 500px) {
    .serve-img {
        width: 100%;
    }
}

@media only screen and (max-width: 567px) {
    .a-inner {
        position: unset;
        -ms-transform: none;
        transform: none;
    }
}

.red-b {
    background-image: linear-gradient(16deg, #ef233c 50%, #d90429 50%);
    color: #fefefe;
}
</style>

<script>
const Panel2 = {
    name: 'Panel2',
}
export default Panel2
</script>