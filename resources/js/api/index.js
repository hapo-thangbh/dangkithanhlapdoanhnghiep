import axios from 'axios'
axios.defaults.baseURL = process.env.VUE_APP_API_URL
axios.defaults.headers.post['Content-Type'] = 'application/json'
axios.defaults.headers.post['Access-Control-Allow-Origin'] = '*'
axios.defaults.headers.get['Access-Control-Allow-Origin'] = '*'
axios.defaults.headers.delete['Content-Type'] = 'application/json'
axios.defaults.headers.put['Content-Type'] = 'application/json'

export const ApiService = {
  get (url, slug = '') {
    return axios.get(`${url}/${slug}`).catch(error => console.log(error))
  },
  query (url, params) {
    return axios.get(`${url}`, { params }).catch(error => console.log(error))
  },
  post (url, params, config) {
    return axios.post(`${url}`, params, config)
  },
  delete (url, params, config) {
    return axios.delete(`${url}`, params, config)
  },
  put (url, params, config) {
    return axios.put(`${url}`, params, config)
  }
}
  
  export default ApiService