<template>
    <div class="root">

        <div class="content">
            <h2>Contact us</h2>
            <base-card>
                <div class="form-group">
                    <div class="first-name form-control">
                        <label for="">First Name</label>
                        <input type="text">
                    </div>
                    <div class="last-name form-control ">
                        <label for="">Last Name</label>
                        <input type="text">
                    </div>
                    <div class="email form-control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                    </div>
                    <div class="phone-number form-control">
                        <label for="number">Phone Number</label>
                        <input type="number">
                    </div>
                    <div class="schedule-call form-control">
                        <label for="">Schedule Call</label>
                        <input type="datetime-local">
                    </div>
                    <div class="submit">
                      <input type="submit">
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
            interests: ['Building a House', 'Other'],
            contact: {
                FirstName: '',
                LastName: '',
                Email: '',
                PhoneNumber: '',
                Appointment: ''

            }
        }
    },
    methods: {
        info() {
            this.show = !this.show;
        }
    } //,
    // components: { 'app-header': Header }
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
    .form-group {
        display: grid;
    }
    .first-name {
        grid-column: 1 / span 1;
        grid-row: 1 / span 1;
    }
    .last-name {
        grid-column: 2/ span 1;
        grid-row: 1 / span 1;
    }
    .email {
        grid-column: 1/ span 2;
        grid-row: 2
    }
    .phone-number {
        grid-column: 1/ span 2;
        grid-row: 3
    }
    .schedule-call {
        grid-column: 1/ span 2;
        grid-row: 4
    }
    .submit{
              grid-column: 1/ span 2;

      grid-row: 5;
    }
    .form-control{
      display: grid;
      grid-auto-columns: 1;
      grid-auto-columns: 100% 100%;

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
