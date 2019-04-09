import { fetchLinks } from '../../api/link'

const link = {
  state: {
    links: [],
    linksLoaded: true
  },
  mutations: {
    SET_LINKS: (state, links) => {
      state.links = links
    }
  },
  getters: {
    links (state) {
      return state.links
    }
  },
  actions: {
    CreateLink ({ commit }, payLoad) {
      return new Promise((resolve, reject) => {
        createLink(payLoad).then(response => {
          resolve()
        }).catch(error => {
          reject(error)
        })
      })
    },
    FetchLinks ({ commit }, query) {
      return new Promise((resolve, reject) => {
        fetchLinks(query).then(response => {
          commit('SET_LINKS', response.data)
          resolve()
        }).catch(error => {
          reject(error)
        })
      })
    }
  }
}

export default link