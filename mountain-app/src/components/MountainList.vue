<template>
  <div class="mountain-list">
    <div v-for="mountain in mountains" :key="mountain.id" class="mountain-card" @click="showDetails(mountain)">
      <img :src="mountain.image_url" alt="Mountain" />
      <h2>{{ mountain.name }}</h2>
    </div>
  </div>
</template>

<script>
export default {
  props: ['mountains'],
  methods: {
    showDetails(mountain) {
      this.$emit('mountain-click', mountain);
    }
  }
};
</script>

<style scoped>

</style>
