<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>

<body>
    <br><br>

 <!--button to go back to the previous page -->
 <br>
    <a href="javascript:history.back()" class="btn btn-primary form-btn back ">Retour</a>
    <br>    <!--scoll up button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top" class=" top form-btn">Top</button><br>
    <p class="footer-p">©Arcadia 2024 <br>
CGV <br>
Réglement intérieur <br>
Données personnelles <br>
Mentions légales <br>
Politique de gestion des cookies</p>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop
            || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop =  0;//for safari
            document.documentElement.scrollTop = 0;//for chrome and firefox
        }   
        </script>
</body>

</html>