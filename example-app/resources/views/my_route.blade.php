<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>

<body>
    <center>

    <h1><br>ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
    <style>
        .scroll {
            width: 400px;
            height: 365px;
            border: 1px solid black;
            overflow:auto;
            background-color: aliceblue;

        }
        body{
        background-image: url(https://media4.giphy.com/media/UU2E4pmlIWjBZt03ne/200w.webp?cid=ecf05e47cuyw1trq1pkpn2vnobgz93pm9za76q6qr6xfiwzx&ep=v1_gifs_search&rid=200w.webp&ct=g);
        background-repeat: no-repeat ;
        background-size: cover;
        }

    </style>
    <div class="scroll">
            <tr>
            <?php
            if( !empty($myinput) ) {
        for( $i=1; $i<=24; $i++ ) {
            echo"<p>";
            echo"&emsp;$myinput x {$i} = ".( $myinput*$i)."<br/>";
            echo"</p>";
        }
    }
    ?>
    </center>
</body>
</html>
