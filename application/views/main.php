<?=$data->description?>
<br><input type=button value="목록" onclick="document.location.href='/index.php/Topic'">
<input type=button value="수정" onclick="document.location.href='/index.php/Topic/update/<?=$data->id ?>'">
<input type=button value="삭제" onclick="document.location.href='/index.php/Topic/delete/<?=$data->id ?>'">
