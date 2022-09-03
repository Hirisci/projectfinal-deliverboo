<template>
  <div class="aside-menu-title-container section-title-container">
    <div class="section-title px-3"><h6>{{title}}</h6></div>
    <div class="triangle-element"></div>
    <!-- menu sinistro della darshboard  -->
    <div class="menu-sx">
        <ul class="py-4">
            <div class="section-title-container">
                <div class="section-title px-3"><h6>ACCOUNT</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="#">Visualizza ristorante</a></li>
                <li><a href="#">Modifica dati ristorante</a></li>
            </ul>
            
            <div class="section-title-container">
                <div class="section-title px-3"><h6>PIATTI</h6></div>
                <div class="triangle-element"></div>
            </div>
            
            <ul class="py-3 mx-3">
                <li><a href="#">Visualizza piatti</a></li>
                <li><a href="#">Aggiungi piatti</a></li>
            </ul>
            <div class="section-title-container">
                <div class="section-title px-3"><h6>STATISCHE VENDITA</h6></div>
                <div class="triangle-element"></div>
            </div>
            <ul class="py-3 mx-3">
                <li><a href="#">Visualizza ordini</a></li>
            </ul>
            
        </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AAsideMenuTitle',
  props: {
    title: String,
  }
}
</script>

<style lang="scss" scoped>
.menu {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    gap: 3rem;

    &-sx{ 
        width: 25%;
        border-radius: var(--border-radius);
        background-color: var(--secondary-purple);
        ul {
            li {
                line-height: 1.75rem;
                a {
                    color: inherit;
                    text-decoration: none;
                    opacity: 0.8;
                    font-weight: 600;
                }
            }
        }
        .section-title-container {
            display: flex;
            .section-title {
                background-color: var(--primary-purple);
                color: white;
                padding: 0.3125rem;
                width: 80%;
            }
            .triangle-element {
                width: 2.0656rem;
                background-color: var(--primary-purple);
                transform: skewX(45deg);
                margin-left: -16.8px;
            }
        }
    }  
}
</style>