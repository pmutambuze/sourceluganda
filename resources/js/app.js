import "./bootstrap";
import Vue from "vue";
Vue.component("wysiwyg", require("./components/wysiwyg.vue").default);
Vue.component("index-library", require("./components/guests/library/index.vue").default);

const app = new Vue({
}).$mount("#app");
