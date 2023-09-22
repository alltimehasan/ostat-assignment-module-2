<?php $current_page = basename($_SERVER['REQUEST_URI']); ?>
<nav class="nav flex-column side-nav">
    <a href="./" class="nav-link <?php echo  ($current_page == 'ostat-assignment-module-2') ? 'active' : ''; ?>">Home</a>
    <a href="loop.php" class="nav-link <?php echo  ($current_page == 'loop.php') ? 'active' : ''; ?>">Task 1: Looping with Increment using a Function</a>
    <a href="skip.php" class="nav-link <?php echo  ($current_page == 'skip.php') ? 'active' : ''; ?>">Task 2: Skip Multiples of 5</a>
    <a href="break.php" class="nav-link <?php echo  ($current_page == 'break.php') ? 'active' : ''; ?>">Task 3: Break on Condition</a>
    <a href="fibonacci-series.php" class="nav-link <?php echo  ($current_page == 'fibonacci-series.php') ? 'active' : ''; ?>">Task 4: Fibonacci Series printing using a Function</a>
</nav>