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
                    function printFibonacci($n)
                    {
                        $a = 0;
                        $b = 1;

                        for ($i = 0; $i < $n; $i++) {
                            echo $a . " ";

                            $next = $a + $b;
                            $a = $b;
                            $b = $next;
                        }
                    }

                    // Calling the function to print the first 10 Fibonacci numbers
                    printFibonacci(15);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>