
<?php

if (isset($_POST["submit"])) {

    $weightFactor = $_POST["weight"];

    if (preg_match("/^[0-9]+$/", $weightFactor)) {

        function maxClories($weightFactor, $activityFactor, $ageFactor)
        {
            $maxClories = $weightFactor * $activityFactor * $ageFactor;
            return $maxClories;
        }

        function activityFactor($activity)
        {
            $activityFactor = "";
            if ($activity == "developer" || $activity == "administrative_operator" || $activity == "manager") {

                $activityFactor = 100;
            } else if ($activity == "police_officer" || $activity == "soldier") {
                $activityFactor = 200;
            } else if ($activity == "athlete") {
                $activityFactor = 300;
            } else if ($activity == "other") {
                $activityFactor = 150;
            } else if ($activity == "none1") {
                die("Select the offered option");
            }

            return $activityFactor;
        }

        function ageFactor($age)
        {
            $ageFactor = "";
            if ($age == "0_3") {
                $ageFactor = 1.9;
            } else if ($age == "4_10") {
                $ageFactor = 1.5;
            } else if ($age == "11_18") {
                $ageFactor = 1.2;
            } else if ($age == "19_26") {
                $ageFactor = 1;
            } else if ($age == "27_30" || $age == "50_60") {
                $ageFactor = 0.8;
            } else if ($age == "31_35" || $age == "45_49") {
                $ageFactor = 0.7;
            } else if ($age == "36_44" || $age == "61_66") {
                $ageFactor = 0.6;
            } else if ($age == "none2") {
                die("Select the offered option");
            }
            return $ageFactor;
        }
        $maxCloriesPerPerson =  maxClories($weightFactor, activityFactor($_POST["activities"]), ageFactor($_POST["ages"]));

        echo "The maximum number of calories - " . $maxCloriesPerPerson . "kcal";
    } else {
        echo  "You did not fill in the form correctly";
    }
}
