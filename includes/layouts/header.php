<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>

<html lang="en">
	<head>
		<title>Open Repository <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div id="header">
      <h1>Open Repository <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
    </div>
