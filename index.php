<?php 
    if (isset($_POST['download']))
    {
        $imgUrl = $_POST['imgurl'];
        $ch = curl_init($imgUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $download = curl_exec($ch);
        curl_close($ch);
        header('Content-type: image/jpg');
        header('Content-Disposition: attachment; filename="thumbnail.jpg"');
        echo $download;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Downloader Thumbnail | CodingBender</title>
</head>
<body>
    <div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <header>Download Thumbnail</header>
            <div class="url_input">
                <span class="title">Plase video url:</span>
                <div class="field">
                    <input type="text" placeholder="http://youtube.com/" required>
                    <input type="hidden" class="hidden-input" name="imgurl">
                    <div class="bottom_line"></div>
                </div>
            </div>
            <div class="preview-area">
                <img src="" class="thumbnail">
                <i class="fas fa-cloud-download-alt"></i>
                <span>Plase video url to see preview</span>
            </div>
            <button type="submit" class="download-btn" name="download">Download Thumbnail</button>
        </form>
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>