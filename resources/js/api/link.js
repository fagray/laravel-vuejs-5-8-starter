import request from '../utils/http.js'
let BASE_URL = 'http://linktree.test'

export function fetchLinks (query) {
    return request({
        url: BASE_URL + '/api/v1/links',
        method: 'get',
        params: query
    })
}