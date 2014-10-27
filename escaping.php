<?php
include_once 'header.php';
    $script = "<script>alert(\"hacknuto!\");</script>";
    $alert = "alert('hacknuto z mouseover!');";
    $img = "\"\"\"><SCRIPT>alert(\"XSS\")</SCRIPT>\"";
    $imgOnMouseOver = "SRC=# onmouseover=\"alert('xxs')\"";
    $onError = "/ onerror=\"alert(String.fromCharCode(88,83,83))\"";
    $link = "http://ha.ckers.org/xss.js\">";
    $embed = '<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>';
?>
<div><?php echo(htmlspecialchars($script, ENT_QUOTES));?></div>
<div onmouseover="<?php echo(htmlspecialchars(json_encode($alert), ENT_QUOTES));?>">najeď na mne myší</div>
<img <?php echo(htmlspecialchars($img, ENT_QUOTES));?>>
<img src=<?php echo(htmlspecialchars($imgOnMouseOver, ENT_QUOTES));?>>
<script src="<?php echo(htmlspecialchars($link, ENT_QUOTES));?>"></script>
<IMG SRC=<?php echo(htmlspecialchars($onError, ENT_QUOTES));?>></img>
<?php echo(htmlspecialchars($embed, ENT_QUOTES));
include_once 'footer.php';
?>
