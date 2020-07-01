<style type="text/css">


/*============================================
*
*            Form
*
*
*===========================================*/
.form {
padding: 4% 5% 200px 5%;
}

.form p {
	padding-left: 5%;
	padding-right: 5%;
}

* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}

/*============================================
*
*         Fonts
*
*
*===========================================*/

body {
	font-family:'Poppins', sans-serif;
	color: black;
	background-color: white;
}

h1 {
	font-size: 2.5rem;
	text-transform:uppercase;
	color: black;
}

h2 {
	font-size: 2rem;
	letter-spacing: 1px;
	text-transform:uppercase;
	color: #cd8576;
	padding:1% 0 1% 0;
	border-bottom: 2px solid black;
}

p {
	padding-top: 3%;
}

/*============================================
*
*         DESKTOP NAV
*
*
*===========================================*/
.desktop-menu {
	display: none;
}

.desktop-menu img {
	width: 400px;
}

/*============================================
*
*         MAIN HEADER (Portfolio, About, Contact)
*
*
*===========================================*/

.main-header {
	background-color: #d7a09b;
	text-align:center;
	position: fixed;
}

.main-logo {
	padding-top: 10%;
	max-width: 70%;
	background-color: #d7a09b;
}

/* Main Heading H1*/
.main-heading {
	padding-top: 30%;
	padding-left: 5%;
	padding-right: 5%;
}

.main-heading h1 {
	font-size: 2rem;
	letter-spacing: 3px;
	text-transform:uppercase;
	color: #cd8576;
	padding:1% 0 1% 0;
	border-bottom: 2px solid black;

}

/*============================================
*
*          Hamburger Menu
*
*
*===========================================*/

.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
  padding:5px 15px 0px 15px;
  color:#fff;
  border:0;
  font-size:1.4em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}

.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
  padding:7px 15px 0px 15px;
  color:#000;
  border:0;
  font-size:3em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}

.menu{z-index:1000000; font-weight:bold; font-size:.8rem; width:100%; background:#cd8576;  position:absolute; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#F3E2E1; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a {  text-decoration:none;  margin: 0px; color:#000;}
.menu ul li a:hover {  color: black; text-decoration:none;}
.menu a{ text-transform: uppercase; text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}


/*============================================
*
*            Buttons
*
*
*===========================================*/

.button {
  background-color: #ffff;
  border:4px solid #cd8576;
  color: black;
  padding: 12px 16px;
	margin-top: 3%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font: 1.2rem 'Poppins', sans-serif;
	letter-spacing: 1px;
	font-weight: bold;
}

.button:hover {
  background-color: #cd8576;
  color: #ffff;
}

.button:active {
  background-color: #d4d4d4;
  color: #ffff;
}

/*============================================
*
*            Footer
*
*
*===========================================*/

footer {
	text-align: center;
	padding:5% 0 1% 0;
	background-color: #cd8576;
}

.footer-logo {
	max-width: 250px;
	padding-bottom: 7%;
	margin: auto;
	display: block;
}

.social {
	max-width:50px;
	margin: auto;
}

footer p {
	padding-top: 5%;
}

/*============================================
*
*            HOME / Hero Image
*
*
*===========================================*/

.hero-image {
	background-image: url(images/palms.jpg);
	background-size: cover;
	padding: 30% 0 30% 0;
	font-family: 'Manrope', sans-serif;
}

.hero-image h1 {
	font-size: 2rem;
	font-family: 'Manrope', sans-serif;
	color: #cd8576;
	background-color: #ffff;
	letter-spacing: 2px;
	padding-left: 3px;
	max-width: 412px;
}

.container-hero {
	padding:0 5% 0 5%;
}

/*============================================
*
*            HOME / About Content
*
*
*===========================================*/

.about-content {
	background-color: #F3E2E1;
}

.about-me {
	padding:4% 5% 4% 5%;
}

/*Skills Section*/
.skills {
	background-color: #cd8576;
	font-size: 1.25rem;
	color: white;
	line-height: 30px;
	text-transform: uppercase;
	padding: 6% 0 6% 0;
	text-align:center;
}

.skills li {
	list-style-type: none;
}

/*============================================
*
*            Images
*
*
*===========================================*/
img {
	max-width: 100%;
}

/* HOME & PORTFOLIO */
.featured-grid {
	padding: 4% 3% 2% 3%;
	display:flex;
	flex-wrap: wrap;
	margin:auto;
}

figure {
	width: 100%;
	padding: 2px;
}

figcaption {
	padding-bottom: 4%;
	text-align:center;
}

/* HOME / Featured Work */
.featured {
	padding:4% 5% 0 5%;
}

/*============================================
*
*            HOME / Testimonials
*
*
*===========================================*/
.testimonials {
	padding:4% 5% 4% 5%;
	background-color: #F3E2E1;
	text-align: left;
}

/*============================================
*
*            ABOUT / About Section
*
*
*===========================================*/

.about {
	padding: 3% 5%;
}

.about article {
	padding-bottom: 10px;
}

.about img {
	padding-top: 3%;
	width: 100%;
	max-width: 500px;
}

/*============================================
*
*            ABOUT / Resume Section
*
*
*===========================================*/

.resume {
	padding: 4% 10%;
	background-color: #d7a09b;
}

.resume p {
	font-size: 1.3rem;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 3px;
}

/*============================================
*
*           CONTACT / Contact Form
*
*
*===========================================*/
.contact {
  padding: 10px 5%;
  background: white;
  margin: 0 auto;
}

.contact-me a {
	text-decoration: none;
	color: #cd8576;
	font-weight:bold;
}

.contact-me {
	padding-bottom: 3%;
}

/*Contact Image */
.plant {
	width: 100%;
}

/*CONTACT FORM BEGINS*/
.contact-form {
  background: #d7a09b;
	max-width: 700px;
  padding: 10px 3%;
  margin: auto;
  text-align: left;
  color: black;
	text-transform: uppercase;
	font-family:'Poppins', sans-serif;
}

.label_input_wrap {
  display: block;
}

label {

	padding-bottom: 2%;
}

select#services {
	padding: 10px 2%;
	font-family: 'Poppins', sans-serif;
}


.input-section {
  margin-bottom: 10px;
}

input {
  padding:10px 2% 10px 5px;
	margin-bottom: 10px;
	width: 90%;
	max-width: 400px;
}

textarea {
  font-family: sans-serif;
  padding: 10px 5px;
	width: 90%;
	max-width: 400px;
}

textarea#comments, input#firstname, input#lastname, input#email, input#telephone {
	font-family: 'Poppins', sans-serif;
}

/*============================================
*
*            Contact Form / Submit Button
*
*
*===========================================*/

.submit input {
	  background-color: #ffff;
	  border:4px solid #cd8576;
	  color: black;
	  padding: 12px 12px;
		margin-top: 3%;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font: 1.2rem 'Poppins', sans-serif;
		font-weight: bold;
		max-width: 100px;
	}

.submit input:hover {
	  background-color: black;
	  color: #F3E2E1;
	}

.submit input:active {
	  background-color: #d4d4d4;
	  color: #ffff;
	}

/*CONTACT FORM ENDS*/



/**********************Start Min-width 475px *******************/
@media (min-width: 475px) {
/*ABOUT PAGE*/
.about {
	padding: 0% 5%;
}

/*FOOTER*/
footer {
	padding:3% 0 1% 0;
}

.footer-logo {
	padding-bottom: 4%;
}

footer p {
	padding-top: 2%;
}

}

/**********************End Min-width 475px *******************/


/**********************Start Min-width 550px *******************/

@media (min-width: 550px) {

/* MAIN HEADER */
.main-logo {
	padding-top: 5%;
	max-width: 45%;
}

.main-heading {
	padding-top: 20%;
}

}

/**********************End Min-width 550px *******************/


/**********************Start Min-width 600px *******************/
@media (min-width: 600px) {

/* HOMEPAGE */
.hero-image {
	padding: 15% 0 20% 0;
}

/* HOME & PORTFOLIO */
figure {
	width: 49%;
}

figcaption {
	padding-bottom: 5%;
}

}

/**********************End Min-width 600px *******************/


/**********************Start Min-width 700px *******************/

@media (min-width: 700px) {

/* Limit Text Background */
.hero-image h1 {
	max-width: 615px;
}

}

/**********************End Min-width 700px *******************/


/**********************Start Min-width 800px *******************/
@media (min-width: 800px) {

	/* HOME / About */
.about-content {
	display: flex;
}

.about-me {
	max-width: 50%;
}

	/* HOME / Skills */
.skills {
	flex: 1;
	padding-left: 6%;
	text-align: left;
}

	/* HOME / Testimonials */
.testimonials {
	padding: 1% 10% 2% 10%;
	text-align: center;
}

/* MAIN HEADER */
.main-logo {
	padding-top: 3%;
}

.main-heading {
	padding-top: 17%;
}

}
/**********************End Min-width 800px *******************/


/**********************Start Min-width 850px *******************/

@media (min-width: 850px) {

/* HOME */
.hero-image {
	padding: 20% 0 20% 0;
}

.main-heading h1 {
	font-size: 2.6rem;
	letter-spacing: 3px;
	max-width: 520px;

}

}
/**********************End Min-width 850px *******************/


/**********************Start Min-width 900px *******************/
@media (min-width: 900px) {

.main-heading {
	padding-top: 16%;
}

/* HOME & PORTFOLIO IMAGES */
.featured-grid {
	padding: 4% 5% 4% 5%;
}

figure {
	width: 24%;
	padding: 4px;
}

figcaption {
	padding-bottom: 10%;
}

/* FOOTER */
footer {
	padding-top:2%;
}

.footer-logo {
	padding-bottom: 3%;
}

footer p {
	padding-top: 1%;
}

/* Social Icons */
.social {
	max-width: 40px;
}

}
/**********************End Min-width 900px *******************/


/**********************Start Max-width 1000px *******************/
/*Padding on Hamburger Menu in Portfolio Only*/
@media (max-width: 1000px) {

.main-header {
	padding: 2% 1% 2% 1%;
}

}

/**********************End Max-width 1000px *******************/


/**********************Start Min-width 1000px *******************/
@media (min-width: 1000px) {

.hamburger, .cross, .menu {
	display: none;
	}

.main-logo {
	display: none;
}

/* MAIN HEADER */
.main-header {
	padding-bottom: 3%;
}

.main-heading {
	padding-top: 15%;
}

/* HOMEPAGE DESKTOP MENU STYLES START HERE */
	.desktop-menu {
			display: block;
		}

	nav {
		float: left;
		width:100%;
	}

	nav img {
		float: left;
		padding: 3% 0 0 5%;
	}

	nav ul {
		list-style-type: none;
		text-align: right;
		padding: 4% 5% 2% 0;
		text-transform: uppercase;
	}

	nav ul li {
		display: inline;
		padding: 0 2% 0 2%;
	}

	nav a {
		color: #ffff;
		text-decoration:none;
		font: 1.5rem 'Poppins', san-serif;
	}

	nav a:hover {
	  color: black;
	}

	header {
		width: 100%;
		margin: auto;
		max-width: 1700px;
	}
/*End Desktop Navigation */


/* FOOTER */
.footer-logo {
	padding-bottom: 2%;
}

.social {
		max-width: 35px;
	}

/* ABOUT / About Me */

.about {
	display: flex;
	padding-top: 1%;
	padding-bottom: 0;
}

.about article {
	max-width: 700px;
	padding-right: 3%;
}

/* ABOUT / Image */
.about img {
	max-width: 400px;
	width: 100%;
	padding-top: 0;

}

/* ABOUT / Resume Section */
.resume {
	display:flex;
	justify-content: center;
	align-items: center;
	padding-top: 1%;
	padding-bottom: 3%;
}

.resume p {
	padding-right: 40px;
	font-size: 1.5rem;
}

/* CONTACT / Contact Section  */
.contact {
	display: flex;
	justify-content: space-around;
	padding-left: 5%;
	padding-right: 5%;
	margin:auto;
}

.contact-me {
	padding-bottom: 1%;
}

/* CONTACT / Contact Form */
.contact-form {
	margin: 0;
	flex: 1;
}

/* CONTACT / Image */
.plant {
	width: 50%;
}

}
/**********************End Min-width 1000px *******************/


/**********************Start Min-width 1100px *******************/

@media (min-width: 1100px) {
	.main-heading {
		padding-top: 14%;
	}

}

/**********************End Min-width 1100px *******************/


/**********************Start Min-width 1200px *******************/
@media (min-width: 1200px) {

/* HOME PAGE */
/* Increase Hero Text Size */
	.hero-image h1 {
		font-size: 2.5rem;
		max-width: 750px;
	}

	.testimonials {
		padding: 1% 12% 3% 12%;
	}

/* MAIN HEADER*/
.main-header {
	padding-bottom: 2%;
}

.main-heading {
	padding-top: 12%;
}

/* HOME & PORTFOLIO */
.featured-grid {
	padding-top: 2%;
	padding-bottom: 2%;
}

/* PORTFOLIO */
	figcaption {
		padding-top: 2%;
	}

/* ABOUT PAGE */
.about img {
	max-width: 450px;
}

/* FOOTER */
.footer-logo {
padding-bottom: 1%;
}

}
/**********************End Min-width 1200px *******************/


/**********************Start Min-width 1400px *******************/
@media (min-width: 1400px) {
/* HOME PAGE */
	/* Increase Hero Text Size */
	.hero-image h1 {
		font-size: 3rem;
		max-width: 885px;
	}

/* MAIN HEADER */
	.main-header {
		padding-bottom: 1%;
	}

	.main-heading{
		padding-top: 11%;
	}

/* ABOUT PAGE */
	.about img {
		max-width: 600px;
	}

}

/**********************End Min-width 1400px *******************/


/**********************Start Min-width 1700px *******************/

@media (min-width: 1700px) {
	#container {
		max-width: 1700px;
		margin: auto;
		border: 1px solid #F3E2E1;
	}

}
/**********************End Min-width 1700px *******************/


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div id="container">

<header class="main-header">
  <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>

  <nav class="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <nav class="desktop-menu">
    <a href="index.html"><img src="images/logo.png" alt="melinn phifer logo" title="melinn phifer logo" /></a>
    <ul>
      <li><a href="about.html">About</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

    <a href="index.html"><img class="main-logo" src="images/logo.png" alt="melinn phifer logo" title="melinn phifer logo" /></a>
</header>

<section class="form">
    <h1 class="main-heading">Thank you for your inquiry. </h1>
    <p>I have received your message and will be in touch within 24 hours.</p>
</section>
  </div>

  <footer>
    <a href="index.html"><img class=footer-logo src="images/logo-small.png" alt="melinn phifer logo" title="melinn phifer logo" /></a>

    <a href="mailto:melinnphifer@gmail.com" target="_blank"><img class="social" src="images/email.png" alt="email" title="email"/></a>
    <a href="https://instagram.com/workforlipstick" target="_blank"><img class="social" src="images/instagram.png" alt="Instagram" title="Instagram"/></a>
    <a href="https://www.linkedin.com/in/melinnphifer/" target="_blank"><img class="social" src="images/li.png" alt="LinkedIn" title="LinkedIn"/></a>

    <p> MELINN PHIFER &copy; 2020 </p>
  </footer>

	<script src="js/hamburger.js"></script>
