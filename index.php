<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/randomPlace.css">
        <title>Random place !</title>
    </head>
    <body>
        <div class="container-fluid" id="main_content">

            <div class="row justify-content-center text-white fixed-top mt-5">
                <h1> Disposition de la salle </h1>
            </div>  
            <div class="row justify-content-center">
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_1"></div>
                </div>
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_2"></div>
                </div>
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_3"></div>
                </div>                
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_4"></div>
                </div>
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_5"></div>
                </div>
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_6"></div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_7"></div>
                </div>
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_8"></div>
                </div>
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_9"></div>
                </div>                
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_10"></div>
                </div>
                <div class="randomPlace_desk left_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_11"></div>
                </div>
                <div class="randomPlace_desk right_desk">
                    <div class="randomPlace_desk_person" id="randomPlace_desk_12"></div>
                </div>
            </div> 
            <div class="row justify-content-center mt-5">
                <button onclick="generateRandomNumber()"> Générer une nouvelle disposition </button>
            </div>
             
        </div>

        <!-- Optional JavaScript -->
        
        <script src="js/randomPlace.js" type="text/javascript"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
    </body>
</html>