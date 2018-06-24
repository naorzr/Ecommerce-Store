import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);
const store = new Vuex.Store({
  state: {
    items: 0
  },
  mutations: {
    increment(state) {
      state.items++;
    }
  }
});
export default new Vuex.Store({
  state: {
    items: 0
  },
  mutations: {
    setAmount(state, itemsNum) {
      state.items = itemsNum;
    }
  },
  actions: {
    //
  }
});
