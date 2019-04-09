import axios from 'axios'
import { getToken } from '../utils/auth.js'

// create instance of axios library
const service = axios.create({
  baseURL: process.env.BASE_API, // this would be base api + module url
  timeout: 50000
})

// request interceptor
service.interceptors.request.use(
  config => {
    // Do something before request is sent, pass token or do something nanny
    if (getToken() !== undefined) {
      config.headers['Authorization'] = ' Bearer ' + getToken()
      config.headers['Access-Control-Allow-Method'] = 'GET,HEAD,OPTIONS,POST,PUT'
      config.headers['Access-Control-Allow-Headers'] = 'Origin, X-Requested-With, Content-Type, Accept, Authorization, Access-Control-Allow-Origin,corp-id,user-id,'
    }
    return config
  },
  error => {
    // request error
    console.log(error)
    Promise.reject(error)
  }
)

// response interceptor
service.interceptors.response.use(
  response => response,
  error => {
    console.log('err data:' + error)
    console.log('err' + error)
    return Promise.reject(error)
  }
)

export default service
