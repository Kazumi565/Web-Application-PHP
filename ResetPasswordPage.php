<?php
load_login_page();

function load_login_page()
{
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password recovery</title>
        <link rel="stylesheet" href="Styles/generalLogin.css">
    </head>

    <body>
        <div id="contentWrap">
            <h1>Password recovery</h1>
            <p id="parolaRecuperata" role="status">Password reset is not available in this educational demo.</p>
            <button id="RedirectToLogin" onclick="redirect_to_login_page()">Back to login</button>
            <div id="errorField"></div>
        </div>
        <script src="Script/resetPasswordPage.js"></script>
        <script src="Script/generalUserFunctions.js"></Script>
    </body>

    </html>

    <?php
}
?>