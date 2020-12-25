<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Notification</title>
</head>

<style rel="stylesheet">
/* // Import Font-family */
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");


:root {
    --primaryColor: #33813B;
    --darkColor: #202020;
    --whiteColor: #ffffff;
    --fontFamily: "Roboto", sans-serif;
}

body {
    margin: 0;
    padding: 0;
    font-family: var(--fontFamily);
}

/* TYPOGRAPHY */
h1 {
    font-size: 1.9rem;
    margin-block-start: 0.33em;
    margin-block-end: 0.33em;
}

p {
    line-height: 26px;
    margin-block-start: .6em;
    margin-block-end: .6em;
}

.content-wrapper {
    max-width: 450px;
    margin: 0 auto;
    padding: 1.2em;
}

.bg-dark {
    background-color: var(--darkColor);
}

.text-white {
    color: var(--whiteColor);
}

.pt-1 {
    padding-top: 1.2em;
}

.pb-1 {
    padding-bottom: 1.2em;
}

.py-1 {
    padding-top: 1.2em;
    padding-bottom: 1.2em;
}

.px-1 {
    padding-right: 1.2em;
    padding-left: 1.2em;
}

.align-left {
    text-align: left;
}

.link {
    text-decoration: none;
    color: var(--primaryColor);
}

.link:hover {
    /* text-decoration: none; */
}

table tbody td {
    border: 1px solid #ccc;
    margin: 0;
}

table tr {
    margin: 0;
}
</style>

<body>

    <main>
        <div class="content-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>
                            <div class="bg-dark text-white py-1 px-1 align-left">
                                <h1>PRV ONLINE</h1>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-1 py-1">
                            <p>
                                You’re receiving this mail because you requested a password reset for your PRV ONLINE
                                ACCOUNT
                                <br />
                                Please tap the link below to create a new password :
                                <br />
                                <br />
                                <a href="www.linkqualanje.com/resetpassword/myaccount/" class="link">www.linkqualanje.com/resetpassword/myaccount/</a>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>