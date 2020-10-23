<template>
<div class="root">

        <div class="content">
            <h2>Contact us</h2>
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
                        <base-input type="submit" />
                    </div>
                </div>



            </base-card>
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
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
.form-container {
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
    } // input {
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

@media screen and (max-width: 1100px) {
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 0.5rem;
    }
    input {
        display: block;
        width: 100%;
        padding: 0.15rem;
    }
}
</style>
