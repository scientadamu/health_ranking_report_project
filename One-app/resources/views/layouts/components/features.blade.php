<style>
    .features{
    margin: 0;
    padding: 0;
    background: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 320px;
    min-width: 300px;
}
.features-block-diagram{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80%;
    height: 90%;
    min-width: 300px;
    /* background: white; */
}

.features>.features-block-diagram>img{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 200px;
    width: 300px;
    /* position: relative; */
    /* background: red; */
}

@media screen and (min-width: 500px) {
    .features{
        display: flex;
        height: 500px;
        min-width: 500px;
    }
     .features-block-diagram{
        width: 80%;
        height: 90%;
        /* background: gray; */
    }
    .features>.features-block-diagram>img{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 400px;
        width: 90%;
        min-width: 500px;
        /* position: relative; */
        /* background: red; */
    }
} 

</style>
<div class="features">
        <div class="features-block-diagram">
            <!-- <div class="img">.</div> -->
            <img src="../../images/BHCPF_block_diagram.png" alt="features-b-diagram">

        </div>
    </div>