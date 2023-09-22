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
                        echo "<h3>For Loop</h3>";
                        function printEvenWithFor($start, $end, $step) {
                            for ($i = $start; $i <= $end; $i++) {
                                if ($i % 2 == 0) {
                                    echo $i . " ";
                                }
                            }   
                        }
                        printEvenWithFor(1, 20, 2);

                        echo "<br>";
                        echo "<br>";

                        echo "<h3>While Loop</h3>";
                        function printEvenWithWhile($start, $end, $step) {
                            $i = $start;
                            while ($i <= $end) {
                                if ($i % 2 == 0) {
                                    echo $i . " ";
                                }
                                $i++;
                            }
                        }
                        printEvenWithWhile(1, 20, 2);

                        echo "<br>";
                        echo "<br>";

                        echo "<h3>Do-While Loop</h3>";
                        function printEvenWithDoWhile($start, $end, $step) {
                            $i = $start;
                            do {
                                if ($i % 2 == 0) {
                                    echo $i . " ";
                                }
                                $i++;
                            } while ($i <= $end);
                        }                        
                        printEvenWithDoWhile(1, 20, 2);
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>