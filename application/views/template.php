<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
        <script type="text/javascript" src="/assets/scripts/default.js"></script>
    </head>
    <body>
        <div id="container">
            <div>
                <ul>
                    <li><a id="homeLink" href="/welcome">Home</a></li>
                    <li><a id="catalogLink" href="/catalog">Catalog</a></li>
                    <li><a id="aboutLink" href="/about">About</a></li>
                    <li><a id="admin" href="/roles/actor/admin">Admin</a></li>
                    <li><a id="user" href="/roles/actor/user">User</a></li>
                    <li><a id="guest" href="/roles/actor/guest">Guest</a></li>
                </ul>
            </div>

            {content}
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
                {ci_version}</p>
        </div>
    </body>
</html>