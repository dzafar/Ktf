<?php 
mkdir("backup");

$fileName = array_merge(
	glob("js/*.js"),
	glob("css/*.css"),
	glob("*.html"),
	glob("*.php")
);

$old_size = $_REQUEST['size'];
$size;
foreach ($fileName as $file) {
	$size = filesize($file) + $size;
}

if ($size <> $old_size and $old_size){

	$counFile = count(scandir('./backup/'));// архивирование 
	$zipFile = "backup/backup".$counFile.".zip";
	$zipArchive = new ZipArchive();
	if ($zipArchive->open($zipFile, (ZipArchive::CREATE | ZipArchive::OVERWRITE))){
		foreach ($fileName as $file) {
			$zipArchive->addGlob($file);
		}
	}
	$zipArchive->close();// архивирование 

	echo '<script type="text/javascript">
	parent.location.reload();
	</script>';
}

echo '<meta http-equiv="refresh" content="1;URL=reload_&_backup.php?size='.$size.'"/>';
?>

<style type="text/css">
	body{
		background: gold;
	}
</style>


<!-- автоматическое развертывание проекта
создание папко с датами изменений
отслеживание активности 
более оптимизированный шаг бэкапинга -->