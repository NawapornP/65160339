<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <h1>ตารางสูตรคูณแม่</h1>
    <h1>{{ $myinput }}</h1>
    <?php
    if( !empty($multi_x) ) {
        for( $i=1; $i<=24; $i++ ) {
            echo"<p>";
            echo"&emsp;$multi_x x {$i} = ".( $multi_x *$i)."<br/>";
            echo"</p>";
        }
    }
    ?>
</body>
</html>
