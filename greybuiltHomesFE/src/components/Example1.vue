<template>
    <div>
        <div class="grid-container">
            <div class="grid-item grid-item-1">
              <h1>Grid Item 1</h1>
            </div>
            <div class="grid-item grid-item-2">
              <h1>Grid Item 2</h1>
            </div>
            <!-- <div class="grid-item grid-item-3">
                <h1>Grid Item 3</h1>
            </div>
            <div class="grid-item grid-item-4">
                <h1>Grid Item 4</h1>
            </div>
            <div class="grid-item grid-item-5">
                <h1>Grid Item 5</h1>
            </div> -->

        </div>
    </div>
</template>

<script>
export default {

}
</script>


<style scoped>
* {
    box-sizing: border-box;
}

.grid-item {

    border: 2px solid black;
    background-color: red;
}

.grid-container {
    display: grid;
    grid-template-columns: 500px 450px;
    grid-auto-rows: minmax(150px, auto);
    /* grid-row-gap: 20px;
    grid-column-gap: 10px; */
    grid-gap: 20px;
    background-color: black;


    /* grid-template-columns: repeat(4, 100px);
    grid-template-rows:  200px 150px; *auto row is second column */
}

.grid-item-1{
grid-column-start: 1;
grid-column-end:2;
grid-row-start: 1;
grid-row-end: 6;

}

 .grid-item-2{

   grid-column-start: 2;
  grid-column-end:6;
  grid-row-start: 1;
  grid-row-end: 6;

}

</style>
