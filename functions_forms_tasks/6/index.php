<?php
/**
 * @var array $files
 * @var string $dir
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
                <h1>Photowall</h1>
            </div>
        </header>
        <div class="container">
            <?php
            function cutExcess($files) {
            $result = array();
            for ($i = 0; $i < count($files); $i++) {
            if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
            }
            return $result;
            }

            $dir = __DIR__.'/'."img";
            $files = scandir($dir);
            $files = cutExcess($files);
            //var_dump($files);
            ?>
        <table class="table table-hover table-inverse">
            <?php
            for($i = 0; $i < count($files); $i++):{ ?>
                <tr>
                    <img src= "<?= "img/$files[$i]"?>" class="rounded float-left" width="20%">
                </tr>
            <?php } endfor; ?>
        </table>
        </div>
        <form action="action.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="photo[]" multiple class="form-control-file">
                <p class="form-text text-muted">Please download image.</p>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
</body>
</html>