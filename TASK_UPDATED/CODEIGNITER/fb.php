<html>

<body>

<form action="verify" method="post" >

Select Your app:
<select name="color" onchange="javascript: submit()">
<option>---</option>
'
<?php
for ($x = 0; $x <= 3; $x++) {
echo "<option>";
echo $my[$x];
echo "</option>";
}
?> '
</select>
</form>
</body>
</html>



   


