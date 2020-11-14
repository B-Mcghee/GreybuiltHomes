<template>
    <div class="root-home">
        <div class="landing-page">

        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
$primary: rgb(148, 148, 148);
$shadowGrey: #54595f;
$secondary: rgb(18, 39, 68);
@media screen and (max-width: 500px) {
    .landing-page {
        background: linear-gradient(180deg, rgba(18, 39, 68, 0.3), rgba(18, 39, 68, 0.6)), url('/static/Images/House.jpg');
        background-position: top;
        background-size: cover;
        height: 300px;
        max-width: 100%;
    }
}
</style>
