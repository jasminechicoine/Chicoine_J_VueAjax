<template>
  <div class="mountain-detail">
    <h1>{{ mountain.name }}</h1>
    <img :src="mountain.image_url" alt="Mountain" />
    <p>{{ mountain.description }}</p>
  </div>
</template>

<script>
export default {
  props: ['mountain']
};
</script>

<style scoped>

</style>