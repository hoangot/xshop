<div class="panel panel-default">
<div class="panel-heading">Danh mục</div>
  <div class="panel-body">
                <?php
                    require '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai): ?>
                        <div class="list-group">
                            <div class="list-group-item">
                            <a href="<?= $SITE_URL ?>/hang-hoa/liet-ke.php?ma_loai=<?= $loai['ma_loai'] ?>" > <?= $loai['ten_loai'] ?></a>
                            </div>
                        </div>
                <?php endforeach; ?>
                <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    <input name="keywords" placeholder="Từ khóa tìm kiếm">
                </form>                
            
    </div>
</div>