<template>
  <a href="#" class="category-card">
    <div class="category-card-img">
      <img :src="img" alt="Category">
      <div class="category-card-overlay">
        <span class="category-card-overlay-text"> {{title}}</span>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  name: 'ACategoryCard',
  props: {
    img: Image,
    title: String,
  }
}
</script>

<style lang="scss" scoped>
.category-card{
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  .category-card-img{
    position: relative;
    .category-card-img img{
      width: 100%;
      height: 100%;
    }
    .category-card-overlay{
      position: absolute;
      bottom: 0;
      left: 0;
      span{
        color: white;
        text-transform: uppercase;
        background-color: (var(--primary-purple), 0.5);
      }
    }
  }
}
</style>