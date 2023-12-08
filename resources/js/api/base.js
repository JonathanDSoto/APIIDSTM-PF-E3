import _axios from 'axios';
const axios = _axios;
axios.defaults.baseURL = 'https://nonograms.dododev.net/api/';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
export default axios;
