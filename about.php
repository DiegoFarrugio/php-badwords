<?php
    $paragraph = $_GET['paragraph'];
    $badword = $_GET['badword'];
    $formatted = str_replace($badword, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>

    <body>
            <div>
                <h4>
                    Testo originale
                </h4>
                <div>
                    <?php
                    echo $paragraph;
                    ?>
                </div>
                <div>
                    <h5>
                        Lunghezza del paragrafo: <?php echo  strlen($paragraph)?>
                    </h5>
                </div>
                </div>

                <div>
                    <h4>
                        Testo modificato
                    </h4>
                    <div>
                        <?php
                            echo $formatted;
                        ?>
                    </div>
                    <div>
                    <h5>
                        lunghezza paragrafo: <?php echo  strlen($formatted)?>
                    </h5>
                </div>
            </div>
    </body>
</html>