<!DOCTYPE html>
<html>
<head>
    <title>Research Riddle</title>
</head>
<body>
    <?php
        $checkQ1      =   $_POST["inputAnswer1"];
        $checkQ2      =   $_POST["inputAnswer2"];
        $checkQ3      =   $_POST["inputAnswer3"];
        $checkQ4      =   $_POST["inputAnswer4"];
        
        $totalScore = 0;


        if ($checkQ1 == "RESEARCH") {
            $totalScore += 1;
        } 
        
        if ($checkQ2 == "STATEMENT OF THE PROBLEM") {
            $totalScore += 1;
        } 
        
        if ($checkQ3 == "RESEARCH PARADIGM") {
            $totalScore += 1;
        }

        if ($checkQ4 == "BACKGROUND OF THE STUDY") {
            $totalScore += 1;
        }
    ?>

    <p>Total Score: <?php echo $totalScore?> / 20</p>

</body>
</html>