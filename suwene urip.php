
<!DOCTYPE html>
<html>
<head>
	<title>Suwene Urip</title>
</head>
<body>
	<form>
		Tanggal Lahir <input type="date" name="birth"/>
		<input type="submit" name="hitung" value="Cek">
	</form>
    <?php
        if(isset($_GET['birth'])){
            $birth = date_create($_GET['birth']);
            $date = date_create(date("Y-m-d H:i:s"));
            $result = date_diff($date, $birth);
            echo "$result->y tahun, $result->m bulan, $result->d hari ($result->days hari)";
        }
    ?>
    <hr>
</body>
</html>
