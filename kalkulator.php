<?php
// $hasil = null;
// $nomer1 = null;
// $nomer2 = null;
// $operation = null;
// cara pertama menggunakan isset dan kedua menggunakan null
if (isset($_POST['hitung'])) {
    $nomer1 = $_POST['nomor1'];
    $nomer2 = $_POST['nomor2'];
    $operation = $_POST['operasimatik'];


    switch ($operation) {
        case 'tambah':
            $hasil = $nomer1 + $nomer2;
            break;
        case 'kurang':
            $hasil = $nomer1 - $nomer2;
            break;
        case 'kali':
            $hasil = $nomer1 * $nomer2;
            break;
        case 'bagi':
            if ($nomer2 != 0) {
                $hasil = $nomer1 / $nomer2;
            } else {
                $hasil = "ora iso dibagi karo 0!";
            }
            break;
        default:
            $hasil = "Ngga valid! Mass";
            break;
    }

    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gradient-to-r from-purple-500 via-pink-500 to-red-500">
    <div class="bg-white p-8 rounded-xl shadow flex flex-col justify-center items-center">
        <h2 class="text-2xl font-bold mb-4">Calculator <b class="text-blue-500">PHP PROJECT</b></h2>
        <form method="post" class="flex flex-col mb-10 gap-4 w-96">
            <input class="border rounded p-2" type="number" name="nomor1" placeholder="Masukkan Angka ke 1" required>
            <select name="operasimatik">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">×</option>
                <option value="bagi">÷</option>
            </select>
            <input class="border rounded p-2" type="number" name="nomor2" placeholder="Masukkan Angka ke 2" required>
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit" name="hitung">Hitung</button>
        </form>
        <div class='mt-4 text-4xl font-bold flex items-start'><?php if (isset($hasil)) echo "Hasil dari $nomer1 $operation $nomer2 adalah: $hasil"; ?> </div>
        <div class="mt-8 text-sm text-gray-500">
            Created by <a href="https://github.com/iqbaladiatma" class="hover:text-blue-500">Iqbal Adiatma</a>
        </div>
    </div>
</body>

</html>