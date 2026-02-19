<?php
$num_camisas=2;
$precio=10;
$total = $num_camisas*$precio;
$total=($num_camisas>=3) ? $total-($total*0.2) : $total-($total*0.1);

echo "El total es: $".$total;