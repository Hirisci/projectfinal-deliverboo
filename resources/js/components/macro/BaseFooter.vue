<template>
    <footer>

        <div class="footer-top">

            <div class="footer-top-card">
                <h4>CHI SIAMO</h4>

                <ul class="footer-top-card-list">
                    <li class="footer-top-card-list-element">Su di Noi</li>
                    <li class="footer-top-card-list-element">Newsletter</li>
                    <li class="footer-top-card-list-element">Diventa un rider</li>
                    <li class="footer-top-card-list-element">Unisciti a noi</li>
                </ul>
            </div>

            <div class="footer-top-card">
                <h4>LEGAL</h4>

                <ul class="footer-top-card-list">
                    <li class="footer-top-card-list-element">Termini e condizioni</li>
                    <li class="footer-top-card-list-element">Privacy</li>
                    <li class="footer-top-card-list-element">Cookies</li>
                </ul>

            </div>

            <div class="footer-top-card">
                <h4>AIUTO</h4>

                <ul class="footer-top-card-list">
                    <li class="footer-top-card-list-element">Contatti</li>
                    <li class="footer-top-card-list-element">FAQs</li>
                    <li class="footer-top-card-list-element">I nostri partner</li>
                </ul>

            </div>

            <div class="footer-top-card">
                <h4>APP DELIVEBOO</h4>

                <ul class="footer-top-card-list">
                    <li class="footer-top-card-list-element">Contatti</li>
                    <li class="footer-top-card-list-element">FAQs</li>
                    <li class="footer-top-card-list-element">I nostri partner</li>
                </ul>
            </div>



        </div>

        <div class="footer-bottom">
        </div>

    </footer>
</template>

<script>
export default {
    name:'BaseFooter',
}
</script>

<style lang="scss" scoped>
footer{
    .footer-top{
        padding: 1.25rem;
        min-height: 20vh;
        background-color: #d4bbfc;

        display: flex;
        flex-wrap: wrap;
        gap: .625rem;

        .footer-top-card{

            padding: 20px;
            background-color: var(--tertiary-purple);
            width: 100%;

            h4{
                color: var(--primary-purple);
                margin-bottom: 1.25rem;
            }

            .footer-top-card-list{
                display: flex;
                flex-direction: column;
                gap: .625rem;
                color: var(--secondary-purple);
            }
        }



    }
    .footer-bottom{
        text-align: center;
        padding: 10px;
        background-color: var(--primary-purple);
        color: white;
    }
}

@media screen and (min-width: 600px) {
  .footer {
        .footer-top{
            .footer-top-card{
                width: 50%;
            }
        }
  }
}

</style>
