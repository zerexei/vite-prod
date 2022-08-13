import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";

const app = createApp({
    data() {
        return {
            message: "Hello Vue!",
        };
    },
});

app.mount("#app");
