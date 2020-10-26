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


@media screen and (max-width: 1100px) {

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
