import axios from 'axios';

const state = {
  testimonials: [

  ]
};

const getters = {
  allTestimonials : state => state.testimonials
};

const actions = {
   async fetchTestimonials({ commit }){
    const response = await axios.get('../static/testimonials.json')
    .then(response => {

      commit('setTestimonials', response.data.testimonials);

  });
    // console.log('settestimonials',response.data)

  }


};

const mutations = {
  setTestimonials:(state, testimonials) => (state.testimonials = testimonials)
};

export default {
  state,
  getters,
  actions,
  mutations
}
