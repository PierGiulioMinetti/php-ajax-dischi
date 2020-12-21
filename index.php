

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="dist/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- GENERAL CONTAINER -->
    <div id="app" class="general-container d-flex flex-clmn">
        <!-- HEADER -->
        <div class="header d-flex">   
            <img class="logo-header" src="logo.png" alt="logo-spotify">
             <div class="container-select">
            
                 <span>
                     select genre
                 </span>
                 <select name="select" 
                        @change="filtra()"
                        v-model="valore"
                 >

                    <option value="all">all</option>
                    <option 
                        v-for="genere in generi"
                        v-bind:value="genere">{{genere}}
                    </option>
                 </select>
             </div>
        </div>
        <!-- MAIN -->
        <div class="main">
            <div class="container-main">
                <div class="container-album d-flex">
                    
                        <div class="single-album"
                            v-for="album in arrayDati"
                        >

                            <div class="album-cover d-flex">
                                <img v-bind:src="album.poster" alt="">
                            </div>
                            <div class="album-description">
                                <p>
                                   {{album.title}}
                                </p>
                                <p>
                                    {{album.author}}
                                </p>
                                <p>
                                   {{album.year}}
                                </p>

                                <p>
                                    {{album.genre}}
                                </p>


                                <!-- PHP -->
                            

                            <!-- PHP -->
                            </div>
                        </div>
                     
                </div>
            </div>
        </div>
    </div>


    <!-- js -->
    <script src="dist/js/main.js"></script>
</body>

</html>