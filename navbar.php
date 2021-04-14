<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <title>Navbar</title>
</head>
<body>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand logo-image" href="index.html"><img src="images/adidas.png" alt="alternative"></a> 
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#!">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#!">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#!">FEATURES</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#!" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">STORE</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!"><span class="item-text">ADIDAS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#!"><span class="item-text">ADIDAS YEEZY</span></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#!">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#!">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#!">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav>

    <section style="height:100vh; background:#0013f9c2;"></section>
    <section style="height:100vh; background:black;"></section>
    <section style="height:100vh; background:purple;"></section>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script>
        // jQuery to collapse the navbar on scroll
    $(window).on('scroll load', function() {
		if ($(".navbar").offset().top > 20) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
    });
</script>

<style>
.navbar-custom {
	background-color: #020400;
	box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
	font: 700 0.75rem/2rem "Montserrat", sans-serif;
	transition: all 0.2s;
}

.navbar-custom .navbar-brand.logo-image img {
    width: 52px;
	height: 46px;
	margin-bottom: 1px;
	-webkit-backface-visibility: hidden;
}

.navbar-custom .navbar-brand.logo-text {
	font: 700 2.375rem/1.5rem "Montserrat", sans-serif;
	color: #fff;
	letter-spacing: -0.5px;
	text-decoration: none;
}

.navbar-custom .navbar-nav {
	margin-top: 0.75rem;
}

.navbar-custom .nav-item .nav-link {
	padding: 0 0.75rem 0 0.75rem;
	color: #fff;
	text-decoration: none;
	transition: all 0.2s ease;
}

.navbar-custom .nav-item .nav-link:hover,
.navbar-custom .nav-item .nav-link.active {
	color: #02aacc;
}

/* Dropdown Menu */
.navbar-custom .dropdown:hover > .dropdown-menu {
	display: block; /* this makes the dropdown menu stay open while hovering it */
	min-width: auto;
	animation: fadeDropdown 0.2s; /* required for the fade animation */
}

@keyframes fadeDropdown {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.navbar-custom .dropdown-toggle:focus { /* removes dropdown outline on focus  */
	outline: 0;
}

.navbar-custom .dropdown-menu {
	margin-top: 0;
	border: none;
	border-radius: 0.25rem;
	background-color: #020400;
}

.navbar-custom .dropdown-item {
	color: #fff;
	text-decoration: none;
}

.navbar-custom .dropdown-item:hover {
	background-color: #0b1502;
}

.navbar-custom .dropdown-item .item-text {
	font: 700 0.75rem/1.5rem "Montserrat", sans-serif;
}

.navbar-custom .dropdown-item:hover .item-text {
	color: #00c9db;
}

.navbar-custom .dropdown-items-divide-hr {
	width: 100%;
	height: 1px;
	margin: 0.25rem auto 0.25rem auto;
	border: none;
	background-color: #b5bcc4;
	opacity: 0.2;
}
/* end of dropdown menu */

.navbar-custom .social-icons {
	display: none;
}

.navbar-custom .navbar-toggler {
	border: none;
	color: #fff;
	font-size: 2rem;
}

.navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-times{
	display: none;
}

.navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-bars{
	display: inline-block;
}

.navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-bars{
	display: none;
}

.navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-times{
	display: inline-block;
	margin-right: 0.125rem;
}

/* Min-width width 768px */
@media (min-width: 768px) {

	/* Navigation */
	.navbar-custom {
		padding: 2.125rem 1.5rem 2.125rem 2rem;
		box-shadow: none;
        background: transparent;
	}
	
	.navbar-custom .navbar-brand.logo-text {
		color: #fff;
	}

	.navbar-custom .navbar-nav {
		margin-top: 0;
	}

	.navbar-custom .nav-item .nav-link {
		padding: 0.25rem 0.75rem 0.25rem 0.75rem;
		color: #fff;
	}
	
	.navbar-custom .nav-item .nav-link:hover,
	.navbar-custom .nav-item .nav-link.active {
		color: #00c9db;
	}

	.navbar-custom.top-nav-collapse {
        padding: 0.5rem 1.5rem 0.5rem 2rem;
		box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
		background-color: #020400;
	}

	.navbar-custom.top-nav-collapse .navbar-brand.logo-text {
		color: #fff;
	}

	.navbar-custom.top-nav-collapse .nav-item .nav-link {
		color: #fff;
	}
	
	.navbar-custom.top-nav-collapse .nav-item .nav-link:hover,
	.navbar-custom.top-nav-collapse .nav-item .nav-link.active {
		color: #0b1502;
	}

	.navbar-custom .dropdown-menu {
		box-shadow: 0 0.25rem 0.375rem 0 rgba(0, 0, 0, 0.03);
	}

	.navbar-custom .dropdown-item {
		padding-top: 0.25rem;
		padding-bottom: 0.25rem;
	}

	.navbar-custom .dropdown-items-divide-hr {
		width: 84%;
	}

}
/* end of min-width width 768px */


/* Min-width width 992px */
@media (min-width: 992px) {
	
	/* Navigation */
	.navbar-custom .social-icons {
		display: block;
		margin-left: 0.5rem;
	}

	.navbar-custom .fa-stack {
		margin-bottom: 0.1875rem;
		margin-left: 0.375rem;
		font-size: 0.75rem;
	}
	
	.navbar-custom .fa-stack-2x {
		color: #00c9db;
		transition: all 0.2s ease;
	}
	
	.navbar-custom .fa-stack-1x {
		color: #fff;
		transition: all 0.2s ease;
	}

	.navbar-custom .fa-stack:hover .fa-stack-2x {
		color: #fff;
	}

	.navbar-custom .fa-stack:hover .fa-stack-1x {
		color: #00c9db;
	}
}
/* end of min-width width 992px */


/* Min-width width 1200px */
@media (min-width: 1200px) {
	
	/* Navigation */
	.navbar-custom {
		padding: 2.125rem 5rem 2.125rem 5rem;
	}

	.navbar-custom.top-nav-collapse {
        padding: 0.5rem 5rem 0.5rem 5rem;
	}
	/* end of navigation */

}
/* end of min-width width 1200px */
</style>

</html>
















  