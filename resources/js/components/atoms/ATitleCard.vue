<template>
  <div class="titlecard">
    <span class="titlecard-title"> {{title}} </span>
  </div>
</template>

<script>
export default {
    name: "ATitleCard",
    props:{
        title: String,
    }
}
</script>

<style lang="scss" scoped>
    .titlecard{
        background-color: var(--primary-purple);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        width: 50%;
        padding: 10px;
        font-weight: 700;
        text-transform: uppercase;
    }
</style>