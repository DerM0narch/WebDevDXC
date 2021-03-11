<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'src/navigation.php' ?>
    <?php include 'src/db_conn.php' ?>

    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <style>
        .gallery-cell 
        {
            width: 100%;
            height: 900px;
            margin-right: 30px;
            counter-increment: gallery-cell;
        }

        img 
        {
            position: relative;
            margin: auto;
            height: 100px;
        }
    </style>

<!--Style für die Bilder + Hovertext -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
* {box-sizing: border-box;}

        .container 
        {
        position: relative;
        width: 50%;
        max-width: 300px;
        }

        .image 
        {
        display: block;
        width: 100%;
        height: auto;
        }

        .overlay 
        {
        position: absolute; 
        bottom: 0; 
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); /* Black see-through */
        color: #f1f1f1; 
        width: 100%;
        transition: .5s ease;
        opacity:0;
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
        }

        .container:hover .overlay 
        {
        opacity: 1;
        }
    </style>
</head>


<body>
    <!-- TODO #7 Select Befehl für Teams schreiben und Seite designen -->

    <div class="sideways">
            <div class="gallery js-flickity">
            
            <div class="gallery-cell"><img src="pictures/Team_Logos/G2_logo.png" alt="G2">
                 <hr> </div>
                 
            <div class="gallery-cell"><img src="pictures\Teams_und_Spieler\G2\G2_Wunder_Top.png"> 
                <hr> </div>
            
            <div class="gallery-cell"><img src="pictures/Team_Logos/Fnatic_logo.png" alt="Fnatic">
                <hr> </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Rogue_logo.png" alt="RGE">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Schalke04_logo.png" alt="S04">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/SKGaming_logo.png" alt="SK">
                <hr></div>
            
            <div class="gallery-cell"><img src="pictures/Team_Logos/UOF_logo.png" alt="UOL">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/FPX_logo.png" alt="FPX">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/VEG_logo.png" alt="VEG">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/DWG_logo.png" alt="DWG">
                <hr></div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Gambit_logo.png" alt="Gambit">
                <hr></div>

        </div>

    <script src="js/flickity.pkgd.min.js"></script>
</body>

</html>