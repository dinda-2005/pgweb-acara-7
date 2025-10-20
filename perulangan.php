<html> 
<body>
<?php

//menggunakan while
$i=1;
while($i<=5)
{ echo "Angka " . $i . "<br />"; 
$i++;
}

//menggunakan do...while
$i=0;
do
{ 
$i++;
echo "Angka " . $i . "<br />";
} 
while ($i<5);

//menggunakan for
for ($i=1; $i<=5; $i++)
{ 
echo "Hello World!<br />";
} 

//menggunakan forache
$arr=array("satu", "dua", "tiga");
foreach ($arr as $nilai) 
{
echo "Nilai: " . $nilai . "<br />"; 
}
?>
</body>
</html>