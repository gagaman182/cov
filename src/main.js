import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
//ui framework
import Buefy from "buefy";
import "buefy/dist/buefy.css";
// address
import VueThailandAddress from "vue-thailand-address";
import "vue-thailand-address/dist/vue-thailand-address.css";

//fontawesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { faUserSecret } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

// internal icons
import {
  faCheck,
  faCheckCircle,
  faInfoCircle,
  faExclamationTriangle,
  faExclamationCircle,
  faArrowUp,
  faAngleRight,
  faAngleLeft,
  faAngleDown,
  faEye,
  faEyeSlash,
  faCaretDown,
  faCaretUp,
  faUpload
} from "@fortawesome/free-solid-svg-icons";

library.add(
  faCheck,
  faCheckCircle,
  faInfoCircle,
  faExclamationTriangle,
  faExclamationCircle,
  faArrowUp,
  faAngleRight,
  faAngleLeft,
  faAngleDown,
  faEye,
  faEyeSlash,
  faCaretDown,
  faCaretUp,
  faUpload
);
Vue.component("vue-fontawesome", FontAwesomeIcon);

// Material Design Icon
import MenuIcon from "vue-material-design-icons/Menu.vue";
// import วันที่
import moment from "moment";

//axios
import axios from "axios";
import VueAxios from "vue-axios";

//ui framework
Vue.use(Buefy, {
  defaultIconComponent: "vue-fontawesome",
  defaultIconPack: "fas",
  defaultDateFormatter: date => {
    return moment(date).format("DD/MM/YYYY");
  },
  defaultDateParser: date => {
    return moment(date, "DD/MM/YYYY").toDate();
  }
});

// address
Vue.use(VueThailandAddress);
//fontawesome
library.add(faUserSecret);

Vue.component("font-awesome-icon", FontAwesomeIcon);
// Material Design Icon
Vue.component("menu-icon", MenuIcon);

// axios
Vue.use(VueAxios, axios);

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount("#app");
