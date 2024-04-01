import { createRouter, createWebHistory } from 'vue-router';
import MountainList from '/Applications/MAMP/htdocs/chicoine_j_VueAjax/mountain-app/src/components/MountainList.vue';

const routes = [
  { path: '/', component: MountainList }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;