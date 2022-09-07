<template>
    <section class="section-process container-fluid m-0 d-flex justify-content-center">
        <div class="row d-flex p-0 container-lg py-5">
            <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center mb-3">
                <img src="../imgs/fattorino.png" alt="">
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
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
    background-color: var(--secondary-purple);
    img{
        border-radius: 1.25rem;
        border: .125rem solid var(--primary-purple);
        width: 70%;
        min-width: 15rem;
    }
    .right-side{
        display: flex;
        align-items: center;
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
                border: .0625rem solid var(--primary-purple);
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
                border: .0625rem solid var(--primary-purple);
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
</style>
