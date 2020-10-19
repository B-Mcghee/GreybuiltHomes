<template>
    <div class="root">

        <div class="content">
            <h2>Contact us</h2>
            <base-card>
            <div class="form-container">
                <div class="personal-info" v-if="show">
                  <base-input>
                    <label for="">First Name</label>
                    <input type="text">
                    <label for="">Last Name</label>
                    <input type="text">
                  </base-input>
                  <div class="form-interest">
                    <label for="">Interested In?</label>
                    <select name="" id="">
                    <option value="type" v-for="type in interests" :key="type.index">{{type}}</option>
                    </select>
                  </div>
                  <div>
                    <label for="">Description</label>
                    <input type="textarea">
                  </div>
                  <div>
                    <button @click="info()">click</button>
                    <base-button  @click="info()">
                      Next
                    </base-button>

                  </div>
                </div>
                <div class="personal-info" v-else>
                  <div>
                    <label for="">Email</label>
                    <input type="email">
                    <label for="">Phone Number</label>
                    <input type="number">
                  </div>
                  <div>
                    <label for="">Schedule Date</label>
                      <input type="datetime-local">
                  </div>
                  <div>
                    <label for="">Time</label>
                    <input type="time">
                  </div>
                  <div>

                    <base-button  @click="info()">
                      Confirm
                    </base-button>

                  </div>
                </div>
            </div>
      </base-card>

        </div>

    </div>
</template>

<script>
// import Header from '@/components/Header'
export default {
    data() {
        return {
            show: true,
            interests: ['Building a House', 'Other']
        }
    },
    methods: {
      info(){
        this.show = !this.show;
      }
    }//,
    // components: { 'app-header': Header }
}
</script>

<style lang="scss" scoped>
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
.form-container {
    width: 600px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: auto auto auto auto auto auto;
}

.input-div {
    h5 {
        margin: 4px;
        padding: 0;
    }
}

// input {
//     cursor: text;
//     border-radius: 10px;
//     -webkit-transition: all 0.30s ease-in-out;
//     -moz-transition: all 0.30s ease-in-out;
//     -ms-transition: all 0.30s ease-in-out;
//     -o-transition: all 0.30s ease-in-out;
//     outline: none;
//     padding: 6px 0px 6px 3px;
//     margin: 10px 1px 6px 0px;
//     border: 1px solid #DDDDDD;
//     width: 75%;
// }

// input:focus {
//     box-shadow: 0 0 5px $background;
//     padding: 6px 0px 6px 3px;
//     margin: 10px 1px 6px 0px;
//     border: 1px solid $background;
//     background-color: $container;
// }

.input-button {
    background-color: $background;
    margin-top: 5%;
    width: 30%;
}

.input-button {
    padding: 5px 10px;
    font-size: 15px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: $background;
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px #999;
}

.input-button:hover {
    background-color: $background
}

.input-button:active {
    background-color: #031129;
    box-shadow: 0 1px #666;
    transform: translateY(4px);
}

@media screen and (max-width: 1024px) {
    .form-container {
        margin: 15px auto;
        width: 600px;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto auto auto auto;
    }
    // input {
    //     cursor: vertical-text;
    //     border-radius: 5px;
    //     -webkit-transition: all 0.30s ease-in-out;
    //     -moz-transition: all 0.30s ease-in-out;
    //     -ms-transition: all 0.30s ease-in-out;
    //     -o-transition: all 0.30s ease-in-out;
    //     outline: none;
    //     padding: 3px 0px 3px 3px;
    //     margin: 5px 1px 3px 0px;
    //     border: 1px solid #c4c3c3;
    //     width: 75%;
    // }
    // input:focus {
    //     box-shadow: 0 0 5px $background;
    //     padding: 3px 0px 3px 3px;
    //     margin: 5px 1px 3px 0px;
    //     border: 1px solid $background;
    //     background-color: $container;
    // }
    .input-button {
        background-color: $background;
        margin-top: 5%;
        width: 30%;
    }
    .input-button {
        padding: 5px 10px;
        font-size: 15px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: $background;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px #999;
    }
    .input-button:hover {
        background-color: $background
    }
    .input-button:active {
        background-color: #031129;
        box-shadow: 0 1px #666;
        transform: translateY(4px);
    }
}

@media screen and (max-width: 500px) {
  .form-interest{
    display: flex;
    flex-direction: row;
    justify-items: space-around;
    justify-content: space-evenly;
    max-width: 300px;
  }
    .content {
        border-radius: 15px;
        padding: 10px 0px;
        margin: 20px auto;
        height: auto;
        width: 96vw;
    }
    label {
        display: block;
    }
    .form-container {
        width: 360px;
        margin: 15px auto;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto auto auto auto;
    }
}
</style>
