<template>
  <footer>
    <div class="footer-top"></div>
    <div class="footer-bottom">
        <h6>FOOTER + COPYRIGHT</h6>
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
        min-height: 20vh;
        background-color: #d4bbfc;
    }
    .footer-bottom{
        text-align: center;
        padding: 10px;
        background-color: var(--primary-purple);
        color: white;
    }
}
</style>