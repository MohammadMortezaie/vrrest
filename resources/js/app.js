import './bootstrap';
import { createApp } from 'vue';
import BlogCategory from './components/BlogCategory.vue';
import BlogList from './components/BlogList.vue';
import CommentList from './components/CommentList.vue';
import CareerList from './components/CareerList.vue';
import UserList from './components/UserList.vue';

createApp({})
  .component('BlogCategory', BlogCategory)
  .component('BlogList', BlogList)
  .component('CommentList', CommentList)
  .component('CareerList', CareerList)
  .component('UserList', UserList)
  .mount('#app')
