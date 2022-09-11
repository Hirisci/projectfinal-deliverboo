<template>
  <div class="titleCard">
    <div class="titleCard-title">
      <p>{{ title }}</p>
    </div>
    <div
      class="titleCard-subTitle"
      :class="error ? 'error' : ''"
      v-if="subTitle"
    >
      {{ subText }}
    </div>
  </div>
</template>

<script>
export default {
  name: "ATitleCard",
  props: {
    error: Boolean,
    title: String,
    subTitle: Boolean,
    subText: String,
  },
};
</script>

<style lang="scss" scoped>
.titleCard {
  width: 70%;
  color: white;
  display: flex;
  align-items: center;
  flex-direction: column;
  position: relative;
  &-title {
    width: 100%;
    border-radius: 30px;
    font-weight: 700;
    text-transform: uppercase;
    background-color: var(--primary-purple);
    p {
      text-align: center;
      padding: 0.5rem 0;
    }
  }
  &-subTitle {
    font-size: 0.8rem;
    font-weight: 700;
    background-color: var(--secondary-purple);
    text-align: center;
    padding: 0rem 0.9rem;
    padding-top: 0.2rem;
    padding-bottom: 0.5rem;
    text-transform: uppercase;
    color: black;
    border-radius: 0 0 30px 30px;
  }
  .error {
    background-color: var(--delete-color);
    color: white;
  }
}
</style>