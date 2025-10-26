<?php
        $pvp = 8;
        $IVA = 21;

        if (empty($_GET['ingr'])) {
                $pvp_public = $pvp * (1 + $IVA / 100);
                echo "Has demanat només la pizza bàsica. El preu és $pvp_public € (IVA inclòs)<br>";
        } else {
                $pvp_public = (8 + count($_GET['ingr'])) * (1 + $IVA / 100);
                echo "Has demanat la pizza bàsica amb:<br> ";
                foreach ($_GET['ingr'] as $ingredient) {
                        if ($ingredient) {
                                echo "* $ingredient<br>";
                        }
                }
                echo "El preu és $pvp_public € (IVA inclòs)<br>";
        }
?>


