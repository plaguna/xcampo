<html>
<head>
<title>XCampo Test</title>
</head>
<body>
<form action="test.php" method="GET" name="search" onsubmit="alert('delay...'); return true;">
  Search: <input type="text" name="q" value="" />
  <input type="submit" name="search" value="Search" />
</form>
<?php
  if(isset($_GET['q']))
    echo $_GET['q'];
?>
</body>
</html>
