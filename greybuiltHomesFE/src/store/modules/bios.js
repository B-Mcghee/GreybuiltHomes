import axios from 'axios';

const state = {
  bios: []
};

const getters = {
  allBios : state => state.bios
};

const actions = {
   async fetchBios({ commit }){
    const response = await axios.get('../static/bios.json')
    .then(response => {
      console.log('setBios',response.data.bios);
      commit('setBios', response.data.bios);

  });
    // console.log('setProjects',response.data)

  }


};

const mutations = {
  setBios:(state, bios) => (state.bios = bios)
};

export default {
  state,
  getters,
  actions,
  mutations
}
