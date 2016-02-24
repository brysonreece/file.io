<?php
	function populateList() {
	
		$uploads = glob("uploads/*.*");

		foreach($uploads as $file) {
			$filename = pathinfo($file)[filename];

			if (substr($file, -7) == '.tar.gz') {
				$extension = "tar.gz";// continue
			} else {
				$extension = strtolower(pathinfo($file)[extension]);
			};

			$timestamp = date("M. j, Y", filemtime($file));

			$textExts = array("doc", "docx", "log", "msg", "odt", "pages", "rtf", "tex", "txt", "wpd", "wps", "pdf");
			$dataExts = array("csv", "dat", "ged", "key", "keychain", "pps", "ppt", "pptx", "sdf", "tar", "tax2014", "tax2015", "vcf", "xml", "xlr", "xls", "xlsx");
			$audioExts = array("aif", "iff", "m3u", "m4a", "mid", "mp3", "mpa", "wav", "wma", "flac");
			$videoExts = array("3g2", "3gp", "asf", "avi", "flv", "m4v", "mov", "mp4", "mpg", "rm", "srt", "swf", "vob", "wmv");
			$threeDExts = array("3dm", "3ds", "max", "obj", "skp", "stl");
			$imageExts = array("bmp", "dds", "gif", "jpg", "png", "psd", "pspimage", "tga", "thm", "tif", "tiff", "yuv", "ai", "eps", "ps", "svg");
			$executableExts = array("apk", "app", "bat", "cgi", "com", "exe", "gadget", "jar", "pif", "wsf");
			$gamesExts = array("dem", "gam", "nes", "rom", "sav");
			$cadExts = array("dwg", "dxf");
			$gisExts = array("gpx", "kml", "kmz");
			$webExts = array("asp", "aspx", "cer", "cfm", "csr", "css", "htm", "html", "js", "jsp", "php", "rss", "xhtml");
			$pluginExts = array("crx", "plugin");
			$fontExts = array("fnt", "fon", "otf", "ttf", "woff");
			$systemExts = array("cab", "cpl", "cur", "deskthemepack", "dll", "dmp", "drv", "icns", "ico", "lnk", "sys");
			$settingsExts = array("cfg", "ini", "prf");
			$compressedExts = array("7z", "cbr", "deb", "gz", "pkg", "rar", "rpm", "sitx", "tar.gz", "zip", "zipx");
			$diskimageExts = array("bin", "cue", "dmg", "iso", "mdf", "toast", "vcd");
			$developerExts = array("c", "class", "cpp", "cs", "dtd", "fla", "h", "java", "lua", "m", "pl", "py", "sh", "sln", "swift", "vb", "vcxproj", "xcodeproj");
			$backupExts = array("bak", "tmp");

			if (in_array($extension, $textExts)) {
				$glyph = "document"; //text glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $dataExts)) {
				$glyph = "list-numbered"; //data glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $audioExts)) {
				$glyph = "volume"; //"mute"; audio glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $videoExts)) {
				$glyph = "video"; //video glyph
				$video = true;
				$image = false;
			}
			else if (in_array($extension, $threeDExts)) {
				$glyph = "eye"; //3D glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $imageExts)) {
				$glyph = "image"; //image glyph
				$video = false;
				$image = true;
			}
			else if (in_array($extension, $executableExts)) {
				$glyph = "window"; //executable glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $gamesExts)) {
				$glyph = "star"; //game glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $cadExts)) {
				$glyph = "home"; //CAD glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $gisExts)) {
				$glyph = "location"; //GIS glyph (map?)
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $webExts)) {
				$glyph = "export"; //web glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $pluginExts)) {
				$glyph = "upload"; //plugin glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $fontExts)) {
				$glyph = "bubble"; //font glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $systemExts)) {
				$glyph = "cmd"; //system glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $settingsExts)) {
				$glyph = "gear"; //settings glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $compressedExts)) {
				$glyph = "folder"; //compressed glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $diskimageExts)) {
				$glyph = "radio-unchecked"; //disk image glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $developerExts)) {
				$glyph = "user"; //developer glyph
				$video = false;
				$image = false;
			}
			else if (in_array($extension, $backupExts)) {
				$glyph = "lock"; //backup glyph
				$video = false;
				$image = false;
			} else {
				$glyph = "clip";
				$video = false;
				$image = false;
			};

			if ($video == true) {
				$insert = "<a href='/uploads/$filename.$extension' data-type=\"video\" data-toggle='lightbox' data-title=\"$filename\" style=\"margin-right: 1em;\">Watch</a>";
			} else if (($video == false) and ($image == true)) {
				$insert = "<a href='/uploads/$filename.$extension' data-type=\"image\" data-toggle='lightbox' data-title=\"$filename\" style=\"margin-right: 1em;\">View</a>";
			} else {
				$insert = "";
			};

			$icon = "<span style='margin-right:1em; display:inline-block;' class=\"fui-" . $glyph . "\"></span>";
			echo "
				<li>
					<p class='alignleft'>$icon $filename</p>
					<div class='alignright'>
						<p style='padding-right: 2em'>$timestamp</p>
						<p style='padding-right: 2em'>$extension</p>" . $insert . "
						<a href='/uploads/$filename.$extension'>Download</a>
					</div>
					<div style='clear: both;'></div>
				</li>
			";
		}
	};
?>