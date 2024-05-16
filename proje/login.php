<?php
if($_POST["email"] == "B231210068@sakarya.edu.tr" && $_POST["password"] == "B231210068") {
    echo "Hoşgeldin " . $_POST["email"];
    echo "<br>Girişin Onaylandı.";
    header("refresh:2; index.html");
} else {
    echo "Kullanıcı epostası yada şifre hatalı";
    header("refresh:2; login.html");
}
?>
