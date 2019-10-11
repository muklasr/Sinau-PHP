<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi Morse</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="kode" required>
        <input type="submit" name="konversi" value="Konversi">
    </form>
    <?php
        if (isset($_POST['kode'])) {
            $kode = $_POST['kode'];
            $karakter = explode(" ", $kode);
            foreach ($karakter as $x => $data) {
                switch ($data) {
                    case ".-":
                        $c = "A";
                        break;
                    case "-...":
                        $c = "B";
                        break;
                    case "-.-.":
                        $c = "C";
                        break;
                    case "-..":
                        $c = "D";
                        break;
                    case ".":
                        $c = "E";
                        break;
                    case "..-.":
                        $c = "F";
                        break;
                    case "--.":
                        $c = "G";
                        break;
                    case "....":
                        $c = "H";
                        break;
                    case "..":
                        $c = "I";
                        break;
                    case ".---":
                        $c = "J";
                        break;
                    case "-.-":
                        $c = "K";
                        break;
                    case ".-..":
                        $c = "L";
                        break;
                    case "--":
                        $c = "M";
                        break;
                    case "-.":
                        $c = "N";
                        break;
                    case "---":
                        $c = "O";
                        break;
                    case ".--.":
                        $c = "P";
                        break;
                    case "--.-":
                        $c = "Q";
                        break;
                    case ".-.":
                        $c = "R";
                        break;
                    case "...":
                        $c = "S";
                        break;
                    case "-":
                        $c = "T";
                        break;
                    case "..-":
                        $c = "U";
                        break;
                    case "...-":
                        $c = "V";
                        break;
                    case ".--":
                        $c = "W";
                        break;
                    case "-..-":
                        $c = "X";
                        break;
                    case "-.--":
                        $c = "Y";
                        break;
                    case "--..":
                        $c = "Z";
                        break;
                    default:
                        $c = " ";
                        break;
                }
                echo $c;
            }
        }
    ?>
</body>
</html>