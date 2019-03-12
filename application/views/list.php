<ul>
<?php
foreach($data as $entry) {
?>
	<li><a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>
<input type=button value="작성" onclick="document.location.href = '/index.php/topic/write'">
