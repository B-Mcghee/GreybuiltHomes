
import Vue from 'vue';
import Vuex from 'vuex';
import projects from './modules/projects';

//Load Vuex
Vue.use(Vuex);

//create store
export default new Vuex.Store({
  modules:{
    projects
  }
});
