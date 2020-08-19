<?php require_once "code.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>

<body>
    <div id="f8f8">
        <div id="ag">
            <img src="image.png" id="img" alt="1" />
            <form action="code.php" id="form" name="myForm" onsubmit="return validateForm()" method="POST">
                <div class="form-group row">
                    <label for="name" name="fname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputs" id="name" name="name" pattern="[A-Za-z Öö Ğğ üÜ Əə Iı Çç Şş]{3,}" title="Minimum üç hərfdən ibarət olmalıdır." onchange="Name()" placeholder="Luke Skywalker" required="required" />
                    </div>
                </div>
                <div  class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                    <input type="radio" name="gender" data-icon='' required="required" value="male" id="male" /><label for="male">Male</label>
                    <input type="radio" name="gender" data-icon='' required="required" value="female" id="female"/> <label for="female">Female</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" max="2002-01-01" min="1970-01-01" class="form-control" id="date" placeholder="May 25, 1977" required="required" name="date" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="lukeskywalker@galaxy.com" required="required" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputs" id="city" name="city" pattern="[A-Za-z Öö Ğğ üÜ Əə Iı Çç Şş]{3,}" title="Minimum üç hərfdən ibarət olmalıdır." onchange="City()" placeholder="Moisture Farm" required="required" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputs" id="country" name="country" pattern="[A-Za-zÖö Ğğ üÜ Əə Iı Çç Şş]{3,}" title="Minimum üç hərfdən ibarət olmalıdır." onchange="Country()" placeholder="Tatooine" required="required" />
                    </div>
                </div>
                <div id="yeddi" class="form-group row">
                    <label class="col-sm-2 col-form-label" name="subscription">Subscription</label>
                    <div class="col-sm-10">
                        <div class="d-flex justify-content-around">
                            <input type="submit" id="bronzeinput" value="Bronze" />
                            <input type="submit" id="silverinput" value="Silver" />
                            <input type="submit" id="goldinput" value="Gold" />
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-3 bd-highlight">
                        <button id="cancel">CANCEL</button>
                    </div>
                    <div class="p-3 bd-highlight">
                        <button name="save" id="save">SAVE</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>


    <script src="https://kit.fontawesome.com/6b6c1dbe0e.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="build/js/intlTelInput.js"></script>
   <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js.js"></script>
 
    <script>

        onload = function(){
            Status();
        }

         function UrlParam(){
            var url_string = window.location.href;
            var url = new URL(url_string);
            return url.searchParams.get("status");
        };

        function Status(){
            if(UrlParam()=="ok"){
                swal("Əla","Əməliyyat Ugurla İcra Edildi");
            }

            if(UrlParam()=="no"){
                swal("ERROR");
                setTimeout(yonlendir,2000);
            }

            if(UrlParam()!=null){
                setTimeout(Yonlendir,2000);
            }

        }
        function Yonlendir(){
            location.href = "index.php";
        }
     
    </script>

</body>
</html>