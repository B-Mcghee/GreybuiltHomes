// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store';
import BaseCard from './components/UI/BaseCard.vue'
import BaseInput from './components/UI/BaseInput.vue'
import BaseButton from './components/UI/BaseButton.vue'

Vue.config.productionTip = false
Vue.component('base-card',BaseCard);
Vue.component('base-input',BaseInput);
Vue.component('base-button', BaseButton);
// const app = CreateApp(App);

// app.component('base-card', BaseCard);
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },

  template: '<App/>'
})
