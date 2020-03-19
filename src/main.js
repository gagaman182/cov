import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
//ui framework
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
// address
import VueThailandAddress from 'vue-thailand-address';
import 'vue-thailand-address/dist/vue-thailand-address.css';
//ui framework
Vue.use(Buefy);
Vue.use(VueThailandAddress);

Vue.config.productionTip = false;

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app");