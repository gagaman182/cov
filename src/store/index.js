import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        name: "",
        coins: [],
        message: ''
    },
    mutations: {
        updateMessage(state, name) {
            state.name = name
        },

        SET_COINS(state, coins) {
            state.coins = coins
        },
        SET_MESSAGE(state, message) {
            state.message = message
        }

    },
    actions: {
        loadCoins({ commit }) {
            axios
                .get('http://localhost/pump/pump/api/pump.php')
                .then(r => r.data)
                .then(coins => {
                    commit('SET_COINS', coins)
                })
        },

        adddata: function(store, { commit }) {
            axios
                .POST('http://localhost/covid/cov/api/save_data.php', { dd: store.state.name })
                .then(r => r.data)
                .then(message => {
                    commit('SET_MESSAGE', message)
                })

        }
    },
    modules: {}
});