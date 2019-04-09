import Vue from 'vue'
import Vuex from 'vuex'
import link from './modules/link'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    link
  }
})

export default store