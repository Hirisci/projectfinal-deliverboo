<template>
    <footer>
        <div class="footer-top container p-0">
            <div class="row d-flex">
                <div class="col-12 col-md-6 col-lg-3 p-0 mb-3">
                    <div class="p-3 footer-top-card m-3">
                        <h4>CHI SIAMO</h4>
                        <ul class="footer-top-card-list">
                            <li class="footer-top-card-item"><a href="#">Su di Noi</a></li>
                            <li class="footer-top-card-item"><a href="#">Newsletter</a></li>
                            <li class="footer-top-card-item"><a href="#">Diventa un rider</a></li>
                            <li class="footer-top-card-item"><a href="#">Unisciti a noi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-0 mb-3">
                    <div class="p-3 footer-top-card m-3">
                        <h4>LEGAL</h4>
                        <ul class="footer-top-card-list">
                            <li class="footer-top-card-item"><a href="#">Termini e condizioni</a></li>
                            <li class="footer-top-card-item"><a href="#">Privacy</a></li>
                            <li class="footer-top-card-item"><a href="#">Cookies</a></li>
                        </ul>
                    </div>
                    </div>
                <div class="col-12 col-md-6 col-lg-3 p-0 mb-3">
                    <div class="p-3 footer-top-card m-3">
                        <h4>AIUTO</h4>
                        <ul class="footer-top-card-list">
                            <li class="footer-top-card-item"><a href="#">Contatti</a></li>
                            <li class="footer-top-card-item"><a href="#">FAQs</a></li>
                            <li class="footer-top-card-item"><a href="#">I nostri partner</a></li>
                        </ul>
                    </div>
                    </div>
                <div class="col-12 col-md-6 col-lg-3 p-0 mb-3">
                    <div class="p-3 footer-top-card m-3">
                        <h4>APP DELIVEBOO</h4>
                        <div class="app-container d-flex flex-column justify-content-center gap-3">
                            <img class="app" src="../imgs/app-store.png" alt="Apple Store">
                            <img class="app" src="../imgs/google-play.png" alt="Google Play">
                        </div>
                    </div>
                </div>
                    </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center mt-5 p-2">
            <p>Copyright &copy; 2022 Team2Boolean. All Rights Reserved</p>
        </div>
    </footer>
</template>
<script>
export default {
  name: "BaseFooter",
};
</script>

<style lang="scss" scoped>
footer{
    background-color: var(--secondary-purple);
    .footer-top-card{
        background-color: var(--tertiary-purple-opacity);
        border-radius: 1.25rem;
        height: 100%;
    }
    .app{
        height: 3rem;
        width: 10rem;
    }
    h4{
        margin-bottom: 1rem;
        color: var(--primary-purple);
        font-weight: bold;
    }
    a{
        text-decoration: none;
    }
    li{
        margin-bottom: .3rem;
    }
    .footer-bottom{
        background-color: var(--primary-purple);
        color: var(--tertiary-purple);
    }
}

</style>
