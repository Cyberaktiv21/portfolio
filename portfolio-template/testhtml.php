<!doctype html>
<html>
<head>
	<meta charset="UTF-8">

	<!--/ /---- Put your name in the title of the page ----/ /-->
	<title>Nikhil Johns</title>
	
	<!--/ /-------- Normalize CSS --------/ /-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
	
	<!--/ /-------- Google Fonts --------/ /-->
	<!-- Add a link to google fonts here if you want them -->
	
	<!--/ /-------- Font Awesome --------/ /-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!--/ /-------- Your Styles --------/ /-->
	<link href="styles.css" rel="stylesheet">

	<!--/ /---Put a short description for your site below. 20 words or less---/ /-->
	<meta description="Third-year Computer Science student from PES University, interested in music, debate, and digital twin projects.">

	<!--/ /-------- Needed For Mobile Devices --------/ /-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	
    <!-- ------------------------------------------------------
    The site is designed to be mobile first. The wrapper elements
    are in place for when you get to desktop size to contain the 
    content.
    ------------------------------------------------------- -->
    
	<header class="primary">
        <div class="wrapper">
            
			<div class="logo-container">
				<h1>Nikhil<br>Johns<br>Portfolio</h1>

				<!-- ------------------------------------------------------
				Note that the image of the logo is linked to the home page.
				------------------------------------------------------- -->
				<a href="index.html"><img src="https://dummyimage.com/175/c4c4c4/fff&text=logo" alt="logo image" id="logo"></a>
			</div>
            
            
			<!-- ------------------------------------------------------
            The navigation here is linking to the sections further down
            the page.
            ------------------------------------------------------- -->
			<nav id="mainnav">
            	<ul>
                	<li><a href="#work">Work</a></li>
                    <li><a href="#about-contact">About</a></li>
                    <li><a href="#about-contact">Contact</a></li>
                </ul>
            </nav>
            
        </div>
        
    </header>
    
    <!-- ------------------------------------------------------
    This is the work section, which has two parts: the featured
    section and the projects section.
    ------------------------------------------------------- -->
    
    <section id="work">
   		<div class="wrapper">
        	<h2>Check Out My Best Projects</h2>
        	<section class="featured">
                <article>
                	<!-- ------------------------------------------------------
                    Link the image below to the detail page for this project.
                    Use the page.html file to make that page. Also link the 
                    anchor tag in the paragraph below to the same page.
                    ------------------------------------------------------- -->
                	<a href="#"><img src="https://dummyimage.com/510x300/c4c4c4/fff&text=Featured+Project" alt="image"></a>
                </article>
                
                <article>
                	<h3>Supply Chain Digital Twin</h3>
                    <h4>Challenge Statement</h4>
                    <p>Exploring a digital twin approach to optimize supply chain processes, from production to delivery. This project models operations in real-time, helping predict bottlenecks, reduce costs, and improve efficiency throughout the supply chain.</p> 
                    <p><a href="#">Find out how I solved this problem</a></p> 
                </article>
            </section> <!-- end row -->
            
            
            <!-- ------------------------------------------------------
            The projects section is for additional projects. I put four in
            here, but it could be more, or less. You just have to pay
            attention to how they wrap, and how many you want per row.
            
            Note that each image should be linked to the page with more
            detailed information about that project. You can use a copy of
            page.html to create those pages.
            ------------------------------------------------------- -->
            
            <section class="projects">
            
            	<article>
                	<h3>Project Title</h3>
                	<a href="#"><img src="https://dummyimage.com/340x200/c4c4c4/fff&text=Another+Project" alt="image"></a>
                    <p><strong>Role:</strong> Designer</p>
                    <p><strong>Description:</strong> Website for a restaurant and redesigned the online menu.</p>
                </article>
                
                <article>
                	<h3>Project Title</h3>
                	<a href="#"><img src="https://dummyimage.com/340x200/c4c4c4/fff&text=Another+Project" alt="image"></a>
                    <p><strong>Role:</strong> Designer</p>
                    <p><strong>Description:</strong> Website for a restaurant and redesigned the online menu.</p>
                </article>
                
                <article>
                	<h3>Project Title</h3>
                	<a href="#"><img src="https://dummyimage.com/340x200/c4c4c4/fff&text=Another+Project" alt="image"></a>
                    <p><strong>Role:</strong> Designer</p>
                    <p><strong>Description:</strong> Website for a restaurant and redesigned the online menu.</p>
                </article>
				
				<article>
                	<h3>Project Title</h3>
                	<a href="#"><img src="https://dummyimage.com/340x200/c4c4c4/fff&text=Another+Project" alt="image"></a>
                    <p><strong>Role:</strong> Designer</p>
                    <p><strong>Description:</strong> Website for a restaurant and redesigned the online menu.</p>
                </article>
            
            </section><!-- end row -->
            
        </div> <!-- end work wrapper -->
    </section>
    
    
    <!-- ------------------------------------------------------
    This is the about and contact section. The links in the main
    navigation link to this section. 
    ------------------------------------------------------- -->
    
    <section id="about-contact" class="secondary">
   		<div class="wrapper">
        	
			<div class="profile-photo">
            	<img src="http://placehold.it/260?text=Your+Photo" alt="image">
            </div>
			
            <article>
				<h2>About Me</h2>
				<p>Nikhil Johns, a Computer Science 3rd-year student from PES University, Bengaluru. Acting at the junction of minimalism and intellectual purity to create great work for living breathing human beings. I'm also passionate about music and debate.</p>
				<h3>Skills</h3>
				<p>I am particularly good at analyzing systems for efficiency and really enjoy solving real-world problems with technology. I am currently learning advanced data analytics and I'm very excited about implementing digital twin solutions for supply chains.</p>
			</article> 
                
			<article>
				<h2>Contact Me!</h2>
				<p>I am currently looking for opportunities to work on innovative tech solutions. Please feel free to contact me by phone, email or through the usual social media channels.</p>

				<!-- ------------------------------------------------------
				Be sure to encode your email address at this site, so you 
				don't get spam. http://wbwip.com/wbw/emailencoder.html
				------------------------------------------------------- -->

				<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:&#101;&#109;&#097;&#105;&#108;&#064;&#115;&#111;&#109;&#101;&#119;&#104;&#101;&#114;&#101;&#046;&#099;&#111;&#109;">&#101;&#109;&#097;&#105;&#108;&#064;&#115;&#111;&#109;&#101;&#119;&#104;&#101;&#114;&#101;&#046;&#099;&#111;&#109;</a><br>
				<i class="fa fa-phone" aria-hidden="true"></i> 123-456-7890</p>

				<!-- ------------------------------------------------------
				You can see here that I have included font-awesome. It is used
				to create the icons above and below. You can go to the font-awesome
				website to see the available icons and swap some out.
				------------------------------------------------------- -->

				<p class="social">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a> 
					<a href="#"><i class="fab fa-twitter-square"></i></a>
				</p>
			</article>
                   
        </div>
    </section>
    
    
    <!-- ------------------------------------------------------
    The footer section is not doing much on this page. Add more
    content if necessary.
    ------------------------------------------------------- -->
    <footer class="primary">
    	<div class="wrapper">
        	<p class="centered">&copy; 2019 all rights reserved</p>
        </div>
    </footer>

</body>
</html>