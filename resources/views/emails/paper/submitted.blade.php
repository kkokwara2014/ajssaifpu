<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>

    <body>
        <br>
        Dear {{$paper->leadauthor}} ,<p></p>
        <p>Thank you for your interest in AJSSAIFPU.</p>
        You have successfully submitted a paper titled: <p></p>
        {{ $paper->papertitle}} <br>
        

        <br>
        <br>
        Thank you.

        <br><br>
        AJSSAIFPU Editorial Team.
    </body>

</html>