<?php
    session_start();
    $userId = $_SESSION['Id'];
    
?>
<header class="container-fluid row">
    <section class="left col-md-10">
        <!-- <h1 class="site-name"><a href="Home page.php">Used Premium Cars</a> </h1> -->
        <?php
            echo "<h1 class='site-name'><a class='' href='../Home page.php'>Used Premium Cars</a></h1>";
        ?>
        <nav class="nav_bar">
            <?php
                echo "<a class='px-5' href='/Used Cars/CarListing/car-listing.php?id=$userId'>Used Car Listing</a>"
            ?>
            <a class="px-5" href="/Used Cars/SellYourCar/add-car.php">Sell Your Car</a>
            <a class="px-5" href="/Used Cars/Enquiries/enquiry.php">Enquiries</a>
            <a class="px-5" href="/Used Cars/CarListing/car-listing.php">View Full Listing</a>
        </nav>
    </section>
    <section class="right col-md-2 text-end">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle user-info-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </span>
                <span>
                    <?php
                        if (isset($_SESSION['Name'])) {
                            echo $_SESSION['Name'];
                        }
                    ?>
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><?php
                    echo "<a class='dropdown-item' href='/Used Cars/EditProfile/edit-profile.php?id=$userId'>Edit Profile</a>";
                    ?></li>
                <li><a class="dropdown-item" href="/Used Cars/Login/index.php">Logout</a>
                </li>
            </ul>
        </div>
    </section>
</header>