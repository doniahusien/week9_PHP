<?php
    echo gettype(true);
    echo "<br>";
    echo gettype(false);
    echo "<br>";
    echo gettype(50);
    echo "<br>";
    echo gettype(-8);
    echo "<br>";
    echo gettype(2.4);
    echo "<br>";
    echo gettype(-5.7);
    echo "<br>";
    echo gettype("2.4");
    echo "<br>";
    echo gettype('test');
    echo '<br>';
    echo gettype(array("CS" => "computer science", "IS" => "information system"));
    echo "<br>";
    echo gettype(array("computer Science,Information System"));
    echo "<br>";
    echo gettype(["cs","IS"]);
