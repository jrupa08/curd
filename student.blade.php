<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <link rel="stylesheet" href="{{resources/css('style.css')}}">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
    
   


<style>
  .error1{
 color:red;
    font-size:10px;
    font-family:  serif;
    text-align:left;
    
    
  }

    </style>

<body>
    <div class="outer">
        <form action="#" class="form">
            <h1>Registration<h1>
            <div class="name flex-col">
                <label for="fname" class="form-label"id="fname">Name:</label>
                <input type="text"  class="input" id="user" placeholder="enter your name">
                <span id="error" class="error1"></span>

            </div>
            <div class="dob flex-col">
                <label for="dob" class="form-label" name="dob">Date Of Birth:</label>
                <input type="date" name="dob" class="input" id="dob1" placeholder="enter your birth date">
                <span id="error1" class="error"></span>

            </div>
            <div class="num flex-col">
                <label for="num" class="form-label" name="num">Number:</label>
                <input type="number" name="number" class="input" id="num" placeholder="enter your number">
                <span id="numb1" class="error1"></span>

            </div>
            <div class="email flex-col">
                <label for="email" class="form-label" name="email">Email:</label>
                <input type="email" id="email" class="input" placeholder="enter your mail">
                <div id="input" class="error1"></span>

            </div>
        
               <div class="gander flex-col">
                <label for="gander"  name="gander">Gender:</label>
                <input type="radio" name="mail" id="mail" class="input" value="checked">mail
                <input type="radio" name="mail" id="femail" class="input" value="checked">femail
                <input type="radio" name="mail"id="other"  class="input" value="checked">other
                <span id="checked"></span>
           </div>
           <div class="state flex-col">
        
             <label for="state" name="state" class="form-label" >Chooes your state:</label> 
        
            <select class="input" id="state">
           
             <option>maharashart</option>
                <option>aasam</option>
                <option>Gujrat</option>
                <option>rajsthan</option>
                </select>
                <span id="error2" class="error1"></span>

           </div>
           <div class="add flex-col">
            <label for="add" class="form-label" id="add1">Address:</label>
           <textarea cols="30" rows="8" id="seterror" class="input"></textarea>
           <span id="seterror1" class="input"></span>
           </div>
           <div class="pass flex-col">
                <label for="password" name="pass" class="form-label">Password:</label>
                <input type="password" name=" password " class="input" id="password" value="" placeholder="enter your password">
                <div id="pass" class="error1"></div>
            </div>

           <div class="confirm-pass flex-col">
            <label for="confirm-pass" name="C-pass" class="form-label">Confirm_password:</label>
            <input type="password" name="C-pass" class="input" id="ConfirmPassword" value=""  placeholder="enter your Confirm-password">
            <div id="pass1" class="error1"></div>
           </div>
<div class="checkbox" class="form-label">
    <input type="checkbox" name="check" id="chec" class="form-label">
    <span id="checked"></span> I accept all condition and term

</div>
<div class="btns">
    <input type="reset" value="cancel" class="btn" id="reset">
    <input type="submit" value="submit"  class="btn" id="submit">

</div>
        </form>
    </div>
</body>
<script src="form2.js"></script>

</html>