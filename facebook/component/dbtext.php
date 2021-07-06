<body style="background-color: black; margin: 0; padding: 0;">
    <div style="color: green; margin: 0; padding: 0;">
        <h1 style="text-align: center; color:green; margin: 0; padding: 0;">Ernest text database</h1>
        <h3>
        <?php

        // if (!empty($name) && !empty($password)) {
        // $me = "The name box is empty";
        while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        // }
        
        ?>
        </h1>
    </div>
</body>