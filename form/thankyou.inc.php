<style type="text/css">

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
	font-size: 1.5rem;
	text-transform:uppercase;
	color: black;
}


p {
	padding-top: 3%;
}

a {
	text-decoration: none;
	color: #cd8576;
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
	font-size: 1.5rem;
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
*            Form
*
*
*===========================================*/

.form {
	padding: 4% 5% 100px 5%;
}

.form p {
	padding-left: 5%;
	padding-right: 5%;
}

.form li {
	padding-left: 5%;
	padding-right: 5%;
}

ul {
	list-style-type: none;
}


/*============================================
*
*            Button
*
*
*===========================================*/

.button {
  background-color: #ffff;
  border:4px solid #cd8576;
  color: black;
  padding: 6px 8px;
	margin-top: 3%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font: .9rem 'Poppins', sans-serif;
	font-weight: bold;
}

.button:hover {
  background-color: black;
	color: white;
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
	max-width: 1700px;
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


/**********************Start Min-width 475px *******************/
@media (min-width: 475px) {


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


/**********************Start Min-width 800px *******************/
@media (min-width: 800px) {

/* MAIN HEADER */
.main-logo {
	padding-top: 3%;
}

.main-heading {
	padding-top: 17%;
}

}
/**********************End Min-width 800px *******************/


/**********************End Min-width 850px *******************/


/**********************Start Min-width 900px *******************/
@media (min-width: 900px) {

.main-heading {
	padding-top: 16%;
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

/* MAIN HEADER*/
.main-header {
	padding-bottom: 2%;
}

.main-heading {
	padding-top: 12%;
}

/* FOOTER */
.footer-logo {
padding-bottom: 1%;
}

}
/**********************End Min-width 1200px *******************/


/**********************Start Min-width 1400px *******************/
@media (min-width: 1400px) {

/* MAIN HEADER */
	.main-header {
		padding-bottom: 1%;
	}

	.main-heading{
		padding-top: 11%;
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

/**********************Start Max-width 620px *******************/
@media only screen and (max-width: 620px) {
/* For Mobile Phones */
.menu, .main, .right {
	width: 100%;
}

}

/**********************End Max-width 620px *******************/

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

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

<section class="form" style="overflow:auto">
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
