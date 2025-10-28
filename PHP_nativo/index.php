<form method="post">
<label>Digite um número:</label>
<input type="number" name="n">
<input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST["n"])) {
$n = $_POST["n"];
echo "Potência (n2): " . pow($n,2) . "<br>";
echo "Raiz quadrada: " . sqrt($n) . "<br>";
echo "Valor absoluto: " . abs($n) . "<br>";
}
?>