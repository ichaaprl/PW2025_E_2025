<?php
class ContohStatic {
    public static $angka = 1;

    public static function hallo() {
        return "Halo" . self::$angka++ . "<br>";
    }
}

echo ContohStatic::$angka();
echo ContohStatic::hallo();
?>
