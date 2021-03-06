<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <!--  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
       

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;
    background-color:#FFFAF5;
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    
    margin: 10px auto;
    max-width: 600px
}

h4 {
    letter-spacing: -1px;
    font-weight: 400
}

.img {
    width: 70px;
    height: 70px;
    border-radius: 6px;
    object-fit: cover
}

#img-section p,
#deactivate p {
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
    font-size: 14px
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #E16A00
}

select {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px
}

select:focus {
    outline: none
}

.button {
    background-color: #fff;
    color:  #E16A00
}

.button:hover {
    background-color:  #E16A00;
    color: #fff
}

.btn-primary {
    background-color:  #E16A00

}

.danger {
    background-color: #fff;
    color: #E16A00;;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404;
    color: #fff
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}
    </style>



</head>

<body>
   

        <div class="wrapper bg-white px-4 py-5 mx-auto">
        <h4 class="pb-4 border-bottom"><b>My Profile</b></h4>
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://hedwig-cf.netmarble.com/forum-common/mherosgb/futurefight_en/thumbnail/152c5218cffa4bbea711fe82c318b475_1630842929906_d.jpg" class="img"  alt="">
            <div class="pl-sm-4 pl-2 " id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div>
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Ben"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Dover"> </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="bendover@gmail.com"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" placeholder="+60 17 782 7156"> </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="country">Country</label> <select name="country" id="country" class="bg-light">
                        <option value="india" selected>Malaysia</option>
                        <option value="usa">Indonesia</option>
                        <option value="uk">United Kingdom</option>
                        <option value="uae">United Arab Emirates</option>
                        <option value="saudi">Saudi Arabia</option>
                    </select> </div>
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Language</label>
                <div class="arrow"> <select name="language" id="language" class="bg-light">
                        <option value="english" selected>English</option>
                        <option value="enguk">English (United States) </option>
                        <option value="arab">Arabic</option>
                    </select> </div>
            </div>
        </div>
        <div class="py-3 pb-4 border-bottom"> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b>Deactivate account</b>
                <p>Deletes all account details and passwords</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Deactivate</button> </div>
        </div>
    </div>
</div>

</body>

</html>