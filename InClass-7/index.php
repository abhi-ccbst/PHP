<html> 
<body>
    <?php 
        function exclaim($str) {
            return $str . "!";  // Abhi => Abhi!
        }

        function ask($str) {
            return $str . "?";
        }

        function printFor($str, $formate) {
            echo $formate($str);
        } 

        function divide($a, $b) {
            if ($b ===0) {
                throw new Exception("Division value is zero(0)");
            }
            return $a/$b;
        }

        printFor("Abhi", "exclaim");
        try {
            divide(3, 0);
        } catch(Exception $e) {
            echo "<p style='color: red; font-weight: bold;'>Exception: " . $e->getMessage() . "</p>";
        }        // Version 7 +++ anonymous function
        printFor("Abhi", function ($str) {return $str . "#";});
        
    ?>
</body>
</html>        