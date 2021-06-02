<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body style="background-color: black; margin: 0; padding: 0;">
    <style>
        .diva {
            text-align: center;
            width: 500px;
            height: auto;
            /*background-color: purple;*/
            position: relative;
            animation-name: example;
            animation-duration: 20s;
            animation-timing-function: linear;
            /*animation-delay: 3s;*/
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
        .size {
            width: 100vw;
            height: auto;
            /*background-color: gold;*/
            /* position: absolute; */
            overflow: hidden;
        }
        @keyframes example {
          0%   {left:-500px; top:0px;}
          20%  {left:100vw; top:0px;}
          40%  {left:-500px; top:0px;}
          60%  {left:100vw; top:0px;}
          80%  {left:-500px; top:0px;}
          100%  {left:100vw; top:0px;}
        }
        .list {
            font-size: 30px;
            margin: 0;
            padding: 0;
        }
        .div {
            color: green;
            margin: 0;
            padding: 0;
        }
        .h1 {
            text-align: center;
            font-size: 50px;
            color:green;
            margin: 0;
            padding: 0;
        }
        .none {
            display: none;
        }
    </style>
    <div class="none">
    <?php
        include "../index.php";
    ?>
    </div>
    <div class="div">
        <div class="size">
            <div class="diva">
                <h1 class="h1">Ernest first database</h1>
            </div>
         </div>
        <!-- <h1 class="h1">Ernest text database</h1> -->
        <!-- <marquee direction="left" height="auto" width="100%"><h1 class="h1">Ernest text database</h1></marquee> -->
        <h3 class="list">
        <?php
        // error_reporting(0);
        $myfile = fopen($fname, "r") or die("Error viewing database!!!");
        $x=0;
        while(!feof($myfile)) {
        // echo "<li class='list'>" . fgets($myfile) . "<br> </li>";
        echo "$x.} " . fgets($myfile) . "<br> </li>";
        $x++;
        }
        fclose($myfile); 
        ?></h3>
        </h1>
    </div>
</body>

</html>