import _axios from 'axios';
const axios = _axios;
axios.defaults.baseURL = 'http://localhost:8000/api/';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
export default axios;
