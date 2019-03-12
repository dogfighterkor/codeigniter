<form name=frm method="post" action=/index.php/Topic/save>
<?php if(empty($data)) { ?>
<p><input type="text" name="title" ></p>
<p><textarea name="desc"></textarea></p>
<input type=hidden name="id" value=0>
<?php } else { ?>
<p><input type="text" name="title" value="<?=$data->title ?>" ></p>
<p><textarea name="desc"><?=$data->description ?></textarea></p>
<input type=hidden name="id" value="<?=$data->id?>">
<?php } ?>
<input type=submit value="저장">
</form>
