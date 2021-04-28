<?php
// checks login status - changes option to login or logout
if (!isset($_SESSION['new_admin'])) {
    $choice = 'login';
    login_logout_button($choice);
} else {
    $choice = 'logout';
    login_logout_button($choice);
}

function login_logout_button($choice)
{
    if (strcmp($choice, 'blank') === 0) {
        $button = "";
    } elseif (strcmp($choice, 'login') === 0) {
        $button = "<a href='secure/login.php' class='nav-link'>LOG IN</a>";
    } elseif (strcmp($choice, 'logout') === 0) {
        $button = "<a href='secure/logout.php' class='nav-link'>LOGOUT</a>";
    }
    echo "
    <!-- Navbar -->
    <nav id='mainNavbar' class='navbar navbar-dark navbar-expand-md fixed-top'>
        <div class='container-fluid'>
            <a href='index.php' class='navbar-brand mybrand display-1'>POWERLIFTING CENTRAL</a>
            <!-- Burger button -->
            <button class='navbar-toggler mynavbar-toggler' type='button' data-toggle='collapse' data-target='#navLinks' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <!-- Navbar links -->
            <div class='collapse navbar-collapse' id='navLinks'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a href='index.php' class='nav-link'>HOME</a>
                    </li>
                    <li class='nav-item'>
                        <a href='trends.php' class='nav-link'>TRENDS</a>
                    </li>
                    <li class='nav-item'>
                        <a href='stats.php' class='nav-link'>STATS</a>
                    </li>
                    <li class='nav-item'>
                        <a href='journey.php' class='nav-link'>MY JOURNEY</a>
                    </li>
                    <li class='nav-item'>
                        <a href='contact.php' class='nav-link'>CONTACT US</a>
                    </li>

                </ul>
            </div>
            <!-- Login button -->
            <ul class='nav justify-content-md-end collapse navbar-collapse' id='navLinks'>
                <li class='nav-item '>
                    $button
                </li>
            </ul>
        </div>
    </nav>
";
}
