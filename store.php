<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Store - Under Construction</title>
    <style>
        /* Define animation for clicking motion */
        @keyframes click {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Apply animation to button when clicked */
        button:active {
            animation: click 0.1s linear;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="page-container" style="align-items: center;">
        <div class="storePageContainer">
            <h2>DRIPPERS</h2>
            <div class="containersDrippers">
                <div class="storeImgcontainer">
                    <img src="store\img\drippers\pink1.jpg" alt="Dripper-">
                    <p>V60 Plastic Coffee Dripper 02 - </p>
                    <p>Night Sky Series ✨</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\drippers\metal1.jpg" alt="Dripper-">
                    <p>V60 Metal Coffee Dripper 02</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\drippers\terracotta1.jpg" alt="Dripper-">
                    <p>V60 Ceramic Coffee Dripper 02 </p>
                    <p>New Colors</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\drippers\white1.jpg" alt="Dripper-">
                    <p>V60 Ceramic Coffee Dripper 02 </p>
                    <p>Classic Colors</p>
                </div>
            </div>
            <h2>FEATURED COFFEE</h2>
            <div class="containersCoffee">
                <div class="storeImgcontainer">
                    <img src="store\img\coffee\Blueimage.jpg" alt="Coffee-">
                    <p>Santa Isabel - El Salvador (Washed)</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\coffee\Orangeimage.jpg" alt="Coffee-">
                    <p>Santa Isabel - El Salvador</p>
                    <p>(Natural Process)</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\coffee\Grayimage.jpg" alt="Coffee-">
                    <p>Roaster’s Choice</p>
                </div>
                <div class="storeImgcontainer">
                    <img src="store\img\coffee\Trashimage.jpg" alt="Coffee-">
                    <p>Esmeralda Decaf – Mexico</p>
                </div>
            </div>
            <button class="infinite-scroll button button--tertiary">
                Show more
            </button>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>