<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
		<h2>Welcome to Home</h2>

		<ul>
			<li><a href="view_category.php?id=Logistics">Logistics</a></li>
			<li><a href="view_category.php?id=Menufacturer">Menufacturer</a></li>
			<li><a href="view_category.php?id=Food">Food</a></li>
			<li><a href="view_category.php?id=Healths">Healths</a></li>
		</ul>
</body>
</html>

INSERT INTO `categories`.`tbl_info` (`info_id`, `company_name`, `country`, `category`) VALUES (NULL, 'Subway', 'Brasil', 'Food'), (NULL, 'Healths Care', 'Paris', 'Healths');