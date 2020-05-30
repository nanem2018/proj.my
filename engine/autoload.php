<?php

function autoload($dir, $isLib = false, $exludeFiles = [])
{

	$files = scandir($dir);

	$exludeFiles = array_merge(['.', '..'], $exludeFiles);

	foreach ($files as $file) {

		if (!in_array($file, $exludeFiles)) {
			if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
				autoload($dir . DIRECTORY_SEPARATOR . $file, $exludeFiles);
			}

			if ("text/x-php" == mime_content_type($dir.DIRECTORY_SEPARATOR.$file))  {
				if($isLib) {
					if(substr($file, -8) == ".lib.php") {
				require_once ($dir.DIRECTORY_SEPARATOR.$file);
					}
					else {
						continue;
					}
			}
				else {
					require_once ($dir.DIRECTORY_SEPARATOR.$file);
				}
			}
		}
	}


}