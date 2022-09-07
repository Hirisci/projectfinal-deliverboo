<template>
    <section class="section-process">

        <div class="container">

            <div class="img-container">

                <img class="fattorino" src="../imgs/fattorino.png" alt="">

            </div>

            <div class="right-side">

                <div class="right-side-dots">

                    <div class="big-dot">
                        <div class="big-dot-inside">
                        </div>
                    </div>

                    <div class="mini-dots-container">
                        <div class="mini-dot"></div>
                        <div class="mini-dot"></div>
                        <div class="mini-dot"></div>
                    </div>

                    <div class="big-dot">
                        <div class="big-dot-inside">
                        </div>
                    </div>

                    <div class="mini-dots-container">
                        <div class="mini-dot"></div>
                        <div class="mini-dot"></div>
                        <div class="mini-dot"></div>
                    </div>

                    <div class="big-dot">
                        <div class="big-dot-inside">
                        </div>
                    </div>

                </div>

                <div class="right-side-words">
                    <h3>ORDINA</h3>
                    <h3>PAGA</h3>
                    <h3>ATTENDI SUL TUO DIVANO</h3>
                </div>

            </div>

        </div>

    </section>
</template>

<script>
export default {
    name: 'ProcessSection',
}
</script>

<style lang="scss" scoped>

    .section-process{

        width: 100vw;
        background-color: var(--secondary-purple);
        padding: 1.25rem 0;

        .container{

            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;

            .img-container{
                padding-top: 1.25rem;

                width: 90%;

                display: flex;
                justify-content: center;
                align-items: center;

                .fattorino{
                    width: 80%;
                    border-radius: 1.25rem;
                }

            }

            .right-side{
                padding: 3.125rem 0;
                display: flex;
                width: 95%;
                margin: 0;

                &-dots{
                    padding-right: .625rem;
                    align-items: flex-end;
                    display: flex;
                    flex-direction: column;
                    gap: .3125rem;
                    width: 37%;

                    .big-dot{

                        width: 1.875rem;
                        height: 1.875rem;
                        border-radius: 50%;
                        background-color: var(--tertiary-purple);
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        &-inside{

                            width: .9375rem;
                            height: .9375rem;
                            border-radius: 50%;
                            background-color: var(--primary-purple);

                        }
                    }

                    .mini-dots-container{

                        width: 1.875rem;
                        display: flex;
                        align-items: center;
                        flex-direction: column;
                        gap: .3125rem;

                        .mini-dot{
                        width: .3125rem;
                        height: .3125rem;
                        border-radius: 50%;
                        background-color: var(--tertiary-purple);
                        }

                    }

                }

                &-words{
                    display: flex;
                    flex-direction: column;
                    gap: 2.5rem;
                    width: 50%;
                }
            }

        }

    }

</style>
