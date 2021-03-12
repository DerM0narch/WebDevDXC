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
            text-align: center
        }

        img 
        {
            position: relative;
            margin: auto;
            height: 100px;
        }

        </style>


<body>
    <!-- TODO #7 Select Befehl für Teams schreiben und Seite designen -->

    <div class="sideways">
            <div class="gallery js-flickity">
            
            <div class="gallery-cell"><img src="pictures/Team_Logos/G2_logo.png" alt="G2">
                <br>
                <br>
                <br>
                <br>
                <br>
                
            <img src="pictures\Teams_und_Spieler\G2\G2_Wunder_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\G2\G2_Jankos_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\G2\G2_Caps_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\G2\G2_Rekkles_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\G2\G2_Mikyx_Sup.png" alt="Avatar" class="image">
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Fnatic_logo.png" alt="Fnatic">   
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\Fnatic\FNC_Bwipo_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Fnatic\FNC_Selfmade_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Fnatic\FNC_Nisqy_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Fnatic\FNC_Upset_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Fnatic\FNC_Hylissang_Sup.png" alt="Avatar" class="image">
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Rogue_logo.png" alt="RGE">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\Rogue\RGE_Odoamne_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Rogue\RGE_Inspired_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Rogue\RGE_Larssen_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Rogue\RGE_Hans_sama_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Rogue\RGE_Trymbi_Sup.png" alt="Avatar" class="image">
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Schalke04_logo.png" alt="S04">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\Schalke04\S04_Broken_Blade_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Schalke04\S04_Gilius_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Schalke04\S04_Abbedagge_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Schalke04\S04_Neon_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Schalke04\S04_LIMIT_Sup.png" alt="Avatar" class="image">    
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/SKGaming_logo.png" alt="SK">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\SK\SK_Jenax_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\SK\SK_TynX_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\SK\SK_Blue_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\SK\SK_Jezu_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\SK\SK_Treatz_Support.png" alt="Avatar" class="image">   
            </div>
            
            <div class="gallery-cell"><img src="pictures/Team_Logos/UOF_logo.png" alt="UOL">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\UOF.cis\UOL_BOSS_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\UOF.cis\UOL_AHaHaCiK_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\UOF.cis\UOL_Nomanz_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\UOF.cis\UOL_Frappii_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\UOF.cis\UOL_SaNTaS_Sup.png" alt="Avatar" class="image">     
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/FPX_logo.png" alt="FPX">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\FPX\FPX_Nuguri_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\FPX\FPX_Beichuan_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\FPX\FPX_Doinb_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\FPX\FPX_Lwx_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\FPX\FPX_Crisp_Sup.png" alt="Avatar" class="image">   
            
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/VEG_logo.png" alt="VEG">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\VEG\VEG_Charger_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\VEG\VEG_Rein_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\VEG\VEG_PekiDo_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\VEG\VEG_cyraXx_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\VEG\VEG_Mercenary_Sup.png" alt="Avatar" class="image">   
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/DWG_logo.png" alt="DWG">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\DWG\DK_Khan_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\\DWG\DK_Canyon_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\DWG\DK_ShowMaker_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\DWG\DK_Ghost_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\DWG\DK_BeryL_Sup.png" alt="Avatar" class="image">   
            </div>

            <div class="gallery-cell"><img src="pictures/Team_Logos/Gambit_logo.png" alt="Gambit">
                <br>
                <br>
                <br>
                <br>
                <br>
            <img src="pictures\Teams_und_Spieler\Gambit\GMB_Dreampull_Top.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Gambit\GMB_Four_Jungle.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Gambit\GMB_Phlaty_Mid.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Gambit\GMB_Shiganari_Bot.png" alt="Avatar" class="image">
            <img src="pictures\Teams_und_Spieler\Gambit\GMB_Lekcycc_Sup.png" alt="Avatar" class="image">   
            </div>
    </div>
    <script src="js/flickity.pkgd.min.js"></script>

</body>


</html>