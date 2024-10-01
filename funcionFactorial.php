<?php
	function factorial($n) {
            if ($n==0)
				return 1;
			$fact = 1;
            for ($j = 1; $j <= $n; $j++) {
                $fact *= $j; 
            }
            return $fact;
        }
?>