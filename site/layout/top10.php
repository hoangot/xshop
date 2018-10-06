<div class="panel panel-default">
    <div class="panel-heading">Top 10 yêu thích</div>
    <div class="panel-body">
        <?php
            require_once '../../dao/hang-hoa.php';
            $hh_array = hang_hoa_select_top10();
            foreach ($hh_array as $hh) {
                $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                echo "
                    <div>
                        <div><img class='img-responsive' src='$CONTENT_URL/images/products/$hh[hinh]'></div>
                        <div><a href='$href'>$hh[ten_hh]</a></div>
                    </div>
                ";
            }
        ?>
    </div>
</div>
