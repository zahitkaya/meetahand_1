
<?php require view . '/static/header.php' ?>

<div>
    <ul>


        <?php


        for ($i = 0; $i < 1000; $i++) {
            $son[$i] = null;
            $sql = $db->prepare("select * from cikmis where cikmis_dersid=? ");
            $sql1 = $db->prepare("select * from cikmis1 where cikmis_id=? ");
            $sql->execute([$i]);
            $sql1->execute([$i]);
            $a = $sql->fetch(PDO::FETCH_ASSOC);
            $b = $sql1->fetch(PDO::FETCH_ASSOC);
            if ($a['cikmis_dersid']) {
                $cikmis_dersad[$i] = $a['cikmis_dersad'];
                echo '<li style=""><a href=' . url . '/cikmis/' . $cikmis_dersad[$i] . '>' . $cikmis_dersad[$i] . '</a></li>';
                $cikmis_dersid[$i] = $a['cikmis_dersid'];
            }
            if ($b['cikmis_id']) {
                $cikmis_soru[$i] = $b['cikmis_soru'];
                $a_sik[$i] = $b['a_sik'];
                $b_sik[$i] = $b['b_sik'];
                $c_sik[$i] = $b['c_sik'];
                $d_sik[$i] = $b['d_sik'];
                $e_sik[$i] = $b['e_sik'];
                $dogru_sik[$i] = $b['dogru_sik'];
            }


            if ($b['cikmis_dersad'] == strtolower(url(1)) && $b['cikmis_soru']) {

                $son[$i] = $cikmis_soru[$i];
                $sonA[$i] = $a_sik[$i];
                $sonB[$i] = $b_sik[$i];
                $sonC[$i] = $c_sik[$i];
                $sonD[$i] = $d_sik[$i];
                $sonE[$i] = $e_sik[$i];
                $sonDogru[$i] = $dogru_sik[$i];
            }
        }

        ?>

    </ul>
</div>


<br><br>
<div class="cikmis-soru">
    <ul>
        <?php
        $k = 0;
        for ($i = 1; $i < count($cikmis_soru) + 1; $i++) {


            if ($son[$i]) {
                echo $k . '<br>';
                $k++;
                echo '  <li>' . $son[$i] . '</li>
        <li> <input type="radio" name="siklar' . $i . '" >' . $sonA[$i] . '  </input></li>
        <li> <input type="radio" name="siklar' . $i . '" >' . $sonB[$i] . '  </input></li>
        <li> <input type="radio" name="siklar' . $i . '" >' . $sonC[$i] . '  </input></li>
        <li> <input type="radio" name="siklar' . $i . '" >' . $sonD[$i] . '  </input></li>
        <li> <input type="radio" name="siklar' . $i . '" >' . $sonE[$i] . '  </input></li>

 ';
            }
        }


        ?>

    </ul>
</div>










<?php require view . '/static/footer.php' ?>

<script type="text/javascript">


</script>