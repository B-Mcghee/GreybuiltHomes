import axios from 'axios';

const state = {
  projects: [
    // {
    //   id: 1,
    //   title: 'Project one'
    // },
    // {
    //   id: 2,
    //   title: 'Project two'
    // },
    // {
    //   id: 3,
    //   title: 'Project three'
    // },
    // {
    //   id: 4,
    //   title: 'Project four'
    // }
  ]
};

const getters = {
  allProjects : state => state.projects
};

const actions = {
   async fetchProjects({ commit }){
    const response = await axios.get('../static/projects.json')
    .then(response => {
      console.log('setProjects',response.data.projects);
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
