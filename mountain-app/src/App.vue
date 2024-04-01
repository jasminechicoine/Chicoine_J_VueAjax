<template>
  <div id="app">
    <header>
      <h1>Mountain App</h1>
    </header>
    <MountainList :mountains="mountains" @mountain-click="showDetails" />
    <MountainDetail v-if="selectedMountain" :mountain="selectedMountain" />
  </div>
</template>

<script>
import MountainList from '../src/components/MountainList.vue';
import MountainDetail from '../src/components/MountainDetail.vue';
import axios from 'axios';

export default {
  components: {
    MountainList,
    MountainDetail
  },
  data() {
    return {
      mountains: [],
      selectedMountain: null
    };
  },
  methods: {
    async fetchMountains() {
      try {
        const response = await axios.get('http://localhost:8888/chicoine_j_VueAjax/');
        this.mountains = response.data;
      } catch (error) {
        console.error('Error fetching mountains data:', error);
      }
    },
    showDetails(mountain) {
      this.selectedMountain = mountain;
    }
  },
  created() {
    this.fetchMountains();
  }
};
</script>

<style scoped>

</style>