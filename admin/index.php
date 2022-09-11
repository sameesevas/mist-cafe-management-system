
<?php
           error_reporting(E_ERROR | E_PARSE);
session_start();

if( $_SESSION['userStatus'] == 'null' ) {
    $_SESSION['userStatus'] = 'loggedout';
    $_SESSION['userType'] = 'loggedout';
    $_SESSION['UID'] = null;
}

if( $_SESSION['userStatus'] == 'loggedin') {
    header("Location: /mcafe/admin/manage1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIST Cafeteria Dashboard</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Jim+Nightshade&family=Open+Sans:wght@300&family=Rubik+Moonrocks&display=swap');

* {
    font-family: 'Open Sans', sans-serif;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root {
    --color-primary: #B13B19;
    --color-white: #dad7d2;
    --color-black: #181A1B;
    --color-gray: #9f978b;

    --font-lg: 38px;
    --font-md: 24px;
    --font-sm: 15px;
    --font-xs: 9px;

    --size-lg: 1280px;
    --size-md: 976px;
    --size-sm: 768px;
    --size-xs: 500px;
}

@import url("../main.css");

body, html {
    width: 100%;
    height: 100%;
}

body {
    display: flex;
}

aside {
    width: 30%;
    height: 100%;
    background-color: var(--color-white);
    color: var(--color-black);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 100px;
}




.aside-lblTitle, .aside-lblCreateAccount {
    font-weight: bolder;
    font-size: 34px;
    color: var(--color-black);
}

.aside-lblCreateAccount {
    font-size: var(--font-sm);
    margin-top: 10px;
}

.aside-lblCreateAccount a {
    color: var(--color-primary);
    font-weight: bolder;
}

.aside-formBox {
    margin-top: 20px;
    width: 70%;

}

.asideForm-fieldBox {
    display: flex;
    flex-direction: column;
    width: 100%;
    margin: 20px 0;
}

.formField-lblName {
    font-weight: bold;
    color: var(--color-black);
    margin: 5px 0;
}

.formField-txtName {
    height: 40px;
    background-color: transparent;
    color: var(--color-black);
    border: 1px solid var(--color-gray);
    border-radius: 3px;
    outline: none;
    padding: 10px;
    font-size: var(--font-sm);
    font-weight: bolder;
}

.formField-txtName:focus {
    border: 1px solid var(--color-primary);
}

.asideForm-fieldBox:nth-child(3) {
    flex-direction: row;
}

.formField-chRememberMe {
    margin-right: 10px;
    width: 15px;
    height: 15px;
    border: 1px solid var(--color-gray);
    transform: translateY(8px);
    cursor: pointer;
}

.asideForm-btnLogin {
    width: 100%;
    height: 45px;
    border: none;
    border-radius: 3px;
    background-color: var(--color-primary);
    color: var(--color-white);
    font-weight: bolder;
    font-size: 18px;
    cursor: pointer;
}

.asideForm-btnLogin:hover {
    background-color: #8d2b0f;
}

.asideForm-btnForgetBox {
    width: 100%;
    text-align: center;
    margin-top: 20px;
}

.asideForm-btnForget {
    color: var(--color-primary);
    font-weight: bolder;
}

.aside-descriptionBox {
    width: 100%;
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: var(--color-gray);
    font-weight: bolder;
}

.aside-descriptionBox a {
    color: var(--color-gray);
}

.aside-descriptionBox a:hover {
    color: var(--color-primary);
}



main {
    width: 70%;
    height: 100%;
    background-image: url("https://i.ibb.co/BjXjCGz/received-532833591809655.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
    background-size: cover;
}
  </style>
</head>
<body>
    <aside>
        
        <!-- <div class="aside-lblTitleBox"> -->
            <h1  class="">Admin Login</h1>
          
        <!-- </div> -->
        <div class="aside-formBox">
            <form action="./loginHandler.php" class="aside-form" method='POST'>
                <div class="asideForm-fieldBox">
                    <span class="formField-lblName">Login ID</span>
                    <input type="text" name="loginId" id="txtEmail" class="formField-txtName">
                </div>
                <div class="asideForm-fieldBox">
                    <span class="formField-lblName">Password</span>
                    <input type="text" name="password" id="txtPassword" class="formField-txtName">
                </div>

                <button type='submit' class='btn btn-primary'>Login</button>
                
            </form>
            
        </div>
    </aside>
    <main></main>
</body>

</html>
</html>


