import axios from "axios";
window.axios = axios;


import "@fortawesome/fontawesome-free/css/all.min.css";


window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
