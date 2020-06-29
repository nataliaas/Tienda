<?php
session_start();

$key=$_GET['key'];
unset($_SESSION['carrito'][$key]);
header('location:verCarrito.php?m=1');

<td class="total" ><?= $total ?>€ <small class="tax_label">(con IVA)</small></td>