<template>
  <div class="plate-card">
    <div class="overlay"></div>
    <div class="plate-card-left">
        <img :src="img" alt="Plate">
        <div class="plate-card-left-text">
            <span class="plate-card-left-text-name"> {{name}} </span>
            <span class="plate-card-left-text-description"> {{description}} </span>
            <span> {{price}} € </span>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "MPlateCard",
    props: {
        img: String,
        name: String,
        description: String,
        price: String,
    }
}
</script>

<style lang="scss" scoped>
.plate-card{
    background-color: var(--secondary-purple);
    border-radius: 20px;
    padding: 10px;
    display: flex;
    &:hover{
        background-color: red;
    }
    .plate-card-left{
        display: flex;
        gap: 10px;
        .plate-card-left-text{
            display: flex;
            flex-flow: column;
            gap: 10px;
        }
    }
}
</style>