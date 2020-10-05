<template>
    <div>
        <app-header></app-header>
        <div class="content">
            <h2>Contact</h2>
            <div class="form-container">

                <div class="input-div one">
                    <h5>First Name</h5>
                    <input type="text" class="input" />
                </div>
                <div class="input-div two">
                    <h5>Last Name</h5>
                    <input type="text" class="input" />
                </div>
                <div class="input-div three">
                    <h5>Email</h5>
                    <input type="email" class="input" />
                </div>
                <div class="input-div four">
                    <h5>Phone Number</h5>
                    <input type="text" class="input" />
                </div>
                <div class="input-div five">
                    <h5>Call Date</h5>
                    <input type="date" class="input" />
                </div>
                <div class="input-div six">
                    <button type="submit" class="input-button">Submit</button>
                </div>



            </div>


        </div>
    </div>
</template>

<script>
import Header from './Header'
export default {
    components: { 'app-header': Header }
}
</script>

<style lang="scss" scoped>
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

.form-container {
  width: 600px;
  margin: 15px auto;
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
    input {
        cursor:text;
        border-radius: 10px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
        width: 75%;
    }
    input:focus {
        box-shadow: 0 0 5px $background;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid $background;
        background-color: $container;
    }
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
       input {
        cursor: vertical-text;
        border-radius: 5px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid #c4c3c3;
        width: 75%;
    }
    input:focus {
        box-shadow: 0 0 5px $background;
        padding: 3px 0px 3px 3px;
        margin: 5px 1px 3px 0px;
        border: 1px solid $background;
        background-color: $container;
    }
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
