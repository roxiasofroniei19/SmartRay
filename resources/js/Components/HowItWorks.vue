<template>
    <div class="how-it-works">
        <div class="how-it-works-content">
            <span class="how-it-works-content-title">HOW IT WORKS</span> 
            <span class="how-it-works-content-subtitle mt-1">Learn more about our features</span>
        </div>

        <div class="how-it-works-steps">
<!-- Mno mai baga spacing padding p-3 sau cat vrei si eventual un mt -2 si dupa faci imaginea mai mica si o centrezi si textu a lil smaller pa -->
            <div class="how-it-works-upload p-3 mt-2"> 
                <img
                    src="../../../storage/app/public/img/upload-icon2.png"
                     alt="Upload Illustration"
                />
                <span class="upload-image">Upload your image</span> <hr>
                <span class="how-it-works-upload-content mt-2">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam inventore sint 
                    minima molestiae harum voluptatibus expedita, rerum doloribus dolorem, corporis 
                    atque ipsa praesentium reiciendis fugiat ab eveniet aliquid. Deserunt, explicabo.
                </span>
            </div>

            <div class="how-it-works-analyse p-3 mt-2">
                <img
                    src="../../../storage/app/public/img/analyse-icon2.png" 
                     alt="Analyse Illustration"
                />
                <span class="analyse-image">Analyse your image</span> <hr>
                <span class="how-it-works-analyse-content mt-2">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, officia 
                    numquam obcaecati, dolore harum in esse nesciunt itaque quas id, unde repellendus 
                    quaerat. Amet, necessitatibus dolore a sint doloremque magni.
                    </span>
            </div>

            <div class="how-it-works-results p-3 mt-2">
                <img
                    src="../../../storage/app/public/img/results-icon2.png"
                     alt="Results Illustration"
                />

                <span class="receiving-results">Receiving results</span> <hr>
                <span class="how-it-works-results-content mt-2 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi inventore totam 
                    unde dolorem ea dolor aliquam provident ab eveniet ad voluptates veniam eius 
                    adipisci, minima quia officia nam magni? Quidema sint doloremque magni.
                    </span>

            </div>

        </div>


    </div>
</template>

.<script>
export default {
    
}
</script>

.<style scoped lang="scss">
@import '../../css/_variables.scss';


.how-it-works{ 
    background-image: linear-gradient(to right bottom, #455e59, #497b70, #4c9985, #50b89a, #55d7ad);
    padding-top: 3em;
    padding-bottom: 3em;

    span {
    display: inline-block;
    width: 100%;
    text-align: center;   
    }

    .how-it-works-content{
        text-align: center;
    }

    .how-it-works-content-title
    {
        font-size: 2em;
        font-weight: bold;
        color:white;
    }

    .how-it-works-content-subtitle
    {
        color:white;
        opacity: 0.80;
    }

    .upload-image{
        font-size: 1.5em;
        color:white;
        font-weight: bold;
    }

    .analyse-image{
        font-size: 1.5em;
        color:white;
        font-weight: bold;
    }
    .receiving-results{
        font-size: 1.5em;
        color:white;
        font-weight: bold;
    }

    
}
.how-it-works-steps {     
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;

        div {
            max-width: 25%; 
        }

        img { 
            max-height: 7em;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
}
.how-it-works-upload-content{
    font-size: 0.9em;
    color: white;
    opacity: 0.90;
}
.how-it-works-analyse-content{
    font-size: 0.9em;
    color: white;
    opacity: 0.90;
}
.how-it-works-results-content{
    font-size: 0.9em;
    color: white;
    opacity: 0.90;
}php artisan serve


hr{
    height: 1.5px;
    border-width: 0;
    border: none;
    border-top: 1px solid white;
    margin: 0.6em auto;
    opacity: 0.20;
}

</style>