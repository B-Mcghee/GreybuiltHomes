import axios from 'axios';

const state = {
  projects: [

  ]
};

const getters = {
  allProjects : state => state.projects
};

const actions = {
   async fetchProjects({ commit }){
    const response = await axios.get('../static/projects.json')
    .then(response => {

      commit('setProjects', response.data.projects);

  });
    // console.log('setProjects',response.data)

  }


};

const mutations = {
  setProjects:(state, projects) => (state.projects = projects)
};

export default {
  state,
  getters,
  actions,
  mutations
}
