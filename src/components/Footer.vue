<template>
    <div class="col-12 b-red p-4" style="min-height:300px;">
        <div class="f-mob">
            <div class="fbox">
                <h4>Contact</h4>
                <div style="text-align: left !important;">
                    <div style="display:flex;">
                        <font-awesome-icon icon="fa-solid fa-phone" />
                        <div style="padding-left: 8px;">
                            <p>(972) 201-7993<br />Business hours:<br /> Mon - Fri, 9am - 5pm</p>
                        </div>
                    </div>
                    <div style="display:flex;">
                        <font-awesome-icon icon="fa-solid fa-envelope" />
                        <div style="padding-left: 8px;">
                            <p>support@empire-american.com</p>
                        </div>
                    </div>
                    <div style="padding-left: 22px;">
                        Center of operations:
                    </div>
                    <div style="display:flex;">
                            <font-awesome-icon icon="fa-solid fa-location-dot" />
                        <div style="padding-left: 10px;">
                            <p>49 N 400 W Suite 102<br />Provo, Utah<br />84601-2782</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fbox">
                <h4>Other Info</h4>
                <div style="text-align: left !important;">
                    <p><a href="#" id="footer">Careers at Empire-American</a></p>
                    <p><a href="#" id="footer">About Us</a></p>
                    <p><a href="#" id="footer">Contact Us</a></p>
                    <p>Copyright &copy; 2022 Empire American. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.b-red {
    background: #ef233c;
}

.fbox {
    max-width: 300px;
    min-width: 250px;
    background: #fa2842;
    border-radius: 6px;
    padding:20px;
    margin:0px 40px;
    color: #fff;
}

.f-mob {
    display: flex;
    justify-content: center;
}

a#footer {
    color: #f9f9f9;
    text-decoration: none;
}

a#footer:hover {
    color: #CCC;
}

@media only screen and (max-width: 576px) {
    .fbox {
        margin:0 auto;
        margin-bottom:20px;
    }
    .f-mob {
        width:100%;
        display: inline-block;
        vertical-align: top;
        text-align: center;
    }
}
</style>

<script>
const Footer = {
    name: 'Footer'
}
export default Footer
</script>