<template>
    <div class="root">

        <div class="content">
            <div class="container">

                <div class="contact-image">
                    <!-- <img src="/static/Images/side.jpg" alt=""> -->
                    <h1>LETS GET CONNECTED!</h1>
                </div>

                <h2>Get In Touch</h2>
                <base-card>
                    <div class="form-group">
                        <div class="name form-control">
                            <label for="">Name</label>
                            <base-input type="text" />
                        </div>
                        <div class="email form-control">
                            <label for="email">Email</label>
                            <base-input type="email" name="email" id="" />
                        </div>
                        <div class="phone-number form-control">
                            <label for="number">Phone Number</label>
                            <base-input type="number" />
                        </div>
                        <div class="schedule-call form-control">
                            <label for="">Schedule Call</label>
                            <!-- <div class="flex mb-2">
                                    <label class="text-gray-600 font-medium"><input class="mr-1" type="radio" value="" v-model="timezone">Local</label>
                                    <label class="text-gray-600 font-medium ml-3"><input class="mr-1" type="radio" value="utc" v-model="timezone">UTC</label>
                                </div>
                                <v-date-picker v-model="date" mode="multiple" /> -->

                        </div>

                        <div class="submit">
                            <button type="submit">Submit</button>
                        </div>
                    </div>



                </base-card>
            </div>

        </div>

    </div>
</template>

<script>
import VDatePicker from 'v-calendar/lib/components/date-picker.umd';
import DatePicker from 'vue2-datepicker';

export default {
    data() {
        return {
            date: '',
            show: true,
            interests: ['Building a House', 'Other'],
            contact: {
                FirstName: '',
                LastName: '',
                Email: '',
                PhoneNumber: '',
                Appointment: ''

            },
            timezone: '',
        }
    },
    components: {
        VDatePicker,
        DatePicker
    },
    methods: {
        info() {
            this.show = !this.show;
        }
    }
}
</script>

<style lang="scss" scoped>
$primary: rgb(148, 148, 148);
$shadowGrey: #54595f;
$secondary: rgb(18, 39, 68);
.content {
    text-align: center;
    margin-bottom: 50px;
}

.input-div {
    h5 {
        margin: 4px;
        padding: 0;
    }
}

h2{
  margin: 25px auto;
}
.contact-image {
    position: relative;
    height: 225px;
    width: 100%;
    background: linear-gradient(90deg, rgba(18, 39, 68, 0.3), rgba(18, 39, 68, 0.7)), url('/static/Images/sidewalk.jpg');
    background-color: $secondary;
    background-position: center;
    background-size: cover;
    z-index: -1;
    margin: 0;
}

h1 {
    font-size: 2.5em;
    margin-block-start: 0;
    margin-block-end: 0;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    left: 25%;
    top: 25%;
    right: 25%;
    bottom: 25%;
    color: #fff;
    font-weight: bold;
    margin: 0 auto;
    position: absolute;
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
//     box-shadow: 0 0 5px $secondary;
//     padding: 6px 0px 6px 3px;
//     margin: 10px 1px 6px 0px;
//     border: 1px solid $secondary;
//     background-color: $container;
// }
.input-button {
    background-color: $secondary;
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
    background-color: $secondary;
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px #999;
}

.input-button:hover {
    background-color: $secondary
}

.input-button:active {
    background-color: #031129;
    box-shadow: 0 1px #666;
    transform: translateY(4px);
}

@media screen and (max-width: 1100px) {
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
    //     box-shadow: 0 0 5px $secondary;
    //     padding: 3px 0px 3px 3px;
    //     margin: 5px 1px 3px 0px;
    //     border: 1px solid $secondary;
    //     background-color: $container;
    // }
    .content{

          .slot-container {
        max-width: 80%;
        margin: 0 5% 0 10%;
    }
    }
      input {
        display: block;
        width: 100%;
        padding: 0.15rem;
    }
        .submit {
        margin: 0 auto;
        width: 50%;
        button {
            max-width: 90%;
            padding: 0.15rem;
            padding: 10px 40px;
            color: #fff;
            background: $primary;
            border-radius: 5px;
            transition: all .3s ease-in-out;
            border: 1px solid $primary;
        }
        button:hover {
            cursor: pointer;
            background: rgb(18, 39, 68);
            padding: 10px 25px;
            border-radius: 12px;
        }
    }


}

@media screen and (max-width: 759px) {
    .content {
        height: 100vh;

    }
    .content {
        display: flex;
        flex-direction: column;
        align-content: center; // justify-content: center;
        width: 100vw;
    }
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 0.5rem;
    }

    .form-group {
        text-align: center;
        align-items: center;
    }

}
@media screen and (max-width: 500px) {

  .content{
           .slot-container {
            max-width: 80%;
            margin: 0 auto;
        }
  }
 h1{
   font-size: 2em;
 }

}
</style>
