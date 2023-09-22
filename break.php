<?php
include 'head.php';
?>

<body>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3">
                <?php include 'side-nav.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="task">
                    <h2 class="task-title">Module 2 Assignment:<br>Mastering PHP loop & Function</h2>
                    <?php
                    function printFibonacci($n) {
                        $a = 0;
                        $b = 1;
                        $count = 0;
                        
                        while ($count < $n) {
                            // If the Fibonacci number exceeds 100, break out of the loop
                            if ($a > 100) {
                                break;
                            }
                            
                            echo $a . " ";
                            
                            $next = $a + $b;
                            $a = $b;
                            $b = $next;
                            
                            $count++;
                        }
                    }

                    printFibonacci(10);

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>