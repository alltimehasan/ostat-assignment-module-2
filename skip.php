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
                    for ($i = 1; $i <= 50; $i++) {
                        if ($i % 5 == 0) {
                            continue;  // Skips the current iteration if $i is a multiple of 5
                        }
                        echo $i . " ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>