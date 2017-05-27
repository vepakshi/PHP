<html>
<head>
<script type="text/javascript">

function winPop(url)
{
   if (url) {
      var w=window.open(url,'newWin      w.focus();
   }
   else alert("Please choose an item.");
}
</script>
</head>
<body>
<form>
<select id="drop1">
<option selected>Select. . .</option>
<option value="http://www.codingforums.com">CF</option>
<option value="http://www.codingforums.com">CF</option>
<option value="http://www.codingforums.com">CF</option>
</select>
<input type="button" onclick="winPop(document.getElementById('drop1').options[document.getElementById('drop1').selectedIndex].value);" value="GO">

</body>
</html>