<?php
	// Import Sections
	function import($file){
		$path = '';
		if (substr($file, 0, 1) === '_') {
			$path = __DIR__ . '/sections/';
		} else {
			$path = __DIR__ . '/sections/_';
		}
		require $path . $file . '.php';
	}

	// Redirect
	// $request = $_SERVER['REQUEST_URI'];

	// switch (true) {
	// 	// case '/about' :
	// 	case strstr($request,'about') :
	// 		echo $request;
	// 		header("Location: ./about.php");
	// 		exit;
	// 		break;
  //   case '/courses' :
	// 		header("Location: ./courses.php");
	// 		break;
  //   case '/news' :
	// 		header("Location: ./news.php");
	// 		break;
  //   case '/contact' :
	// 		header("Location: ./contact.php");
	// 		break;
	// }

?>