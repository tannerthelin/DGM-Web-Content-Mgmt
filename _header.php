<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Cabot Cruises</title>


<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- STYLE SHEETS -->
<link href="css/styles.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet">
<link href="slick/slick.css" rel="stylesheet">
<link href="slick/slick-theme.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- JSON Dataset -->
<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "TravelAgency",
	  "name": "Cabot Cruises",
	  "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website.",
	  "openingHours": "Mo-Fr 09:00-16:00",
	  "telephone": "8005551234",
	  "address": {
		"@type": "PostalAddress",
		"streetAddress": "23 South Main St, Suite 16",
		"addressLocality": "Lexington",
		"addressRegion": "VA"
	  },
	  "priceRange": "$500 to $4000",
	  "image": "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.fodors.com%2Fworlds-best%2Fcruises&psig=AOvVaw10LVr1cbCgbR6nOOcJJHjg&ust=1580681885612000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNDxmoWxsecCFQAAAAAdAAAAABAD"
	}
  </script>
     
</head>
<body>
<!-- HEADER STARTS HERE -->
<div class="header-container">
    <div class="header container">
		<figure class="logo">
			<img
				src="images/logo-1.png"
				srcset="
				images/logo-1.png 1x,
				images/logo-2.png 2x,
				images/logo-3.png 3x"
		/>
		</figure>
        <div class="phone-container">
			<a class="button button-text" href="tel:800-555-1234">(800) 555-1234</a>
        </div>            
    </div>
</div>
    
<!-- NAV STARTS HERE -->
<nav class="clearfix">
	<div class="nav-container">
		<button id="hamburgerBtn"><span><i>&equiv;</i>OPEN</span> <span><i>&otimes;</i>CLOSE</span></button>
		<ul id="primaryNav">
			<li class="current-menu-item"><a href="index.php">Home</a></li>
			<li><a href="cruises.php">Cruises</a></li>
			<li class="parent"><a href="#">Agents</a>
				<ul>
					<li><a href="agent1.php">Jim Halpert</a></li>
					<li><a href="agent2.php">Dwight Schrute</a></li>
				</ul>
			</li>
			<li><a href="bookCruise.php">Book</a></li> 
			<form class="search-form">
					<input class="search-input" type="search" placeholder="Search...">
					<input class="search-button" type="submit" value="Search">
			</form>
		</ul>

		
	</div>
</nav>
    
<!-- MAIN STARTS HERE -->
	<main>