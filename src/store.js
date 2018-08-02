import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import data from './assets/data/work.json'

Vue.use(Vuex)

const state = {
  site: [],
  transitioning_in: false,
  transitioning_out: false,
  loaded: true,
  index: null,
  nav: true
}

const mutations = {
  REPLACE_QUERYDATA (state, data) {
    state.site = data
    return state
  },
  SET_PROJECT (state, data) {
    state.currProject = data
    return state
  },
  SET_LOADED (state, loaded) {
    state.loaded = loaded || false
  },
  SET_TRANSITIONING_IN (state, transitioning) {
    state.transitioning_in = transitioning
    return state
  },
  SET_TRANSITIONING_OUT (state, transitioning) {
    state.transitioning_out = transitioning
    return state
  },
  CLOSE_NAV (state) {
    state.nav = true
  },
  OPEN_NAV (state) {
    state.nav = false
  }
}

const actions = {
  LOAD_DATA (context, payload) {
    // let url = 'https://data.aiwinter.org/json?_format=json'
    context.commit('SET_LOADED', false)
    console.log(data)
    axios
      .get(data)
      .then(function (response) {
        console.log(response)
        let data = response.data

        for (var i = data.length - 1; i >= 0; i--) {
          data[i]['id'] = i
        }

        context.commit('REPLACE_QUERYDATA', data)
        context.commit('SET_LOADED', true)
        return response.data
      })
      .catch(function (error) {
        return error
      })
  }
}

const getters = {
  loading: state => !state.loaded,
  index: state => state.index
}

export default new Vuex.Store({
  state,
  getters,
  actions,
  mutations
})
