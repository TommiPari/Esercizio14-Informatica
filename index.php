<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sfondoCasuale($lar) {
            if ($lar < 150) {
                return "#7FFFD4";
            } else if ($lar > 250) {
                return "#0000FF";
            } else return "#1E90FF";
        }
        $num = rand(50,500);
        echo "<div style='width: {$num}px; height: " . $num*2 . "px; background-color: ". sfondoCasuale($num). "'></div>";
    ?>
</body>
</html>