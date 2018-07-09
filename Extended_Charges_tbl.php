<?php 
require './class/myclass.php';
connection_open();

if($_POST)
{
    $duration = $_POST['txt1'];
    $charges = $_POST['txt2'];
    
        
    $q = mysql_query("insert into Extended_Charges_tbl (Extended_Charges_Duration,Extended_Charges) values ('{$duration}','{$charges}')") or die(mysql_error());
    
    if($q)
    {
        echo "<script>alert('Record Inserted');</script>";
    }
}
?>


<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Expert Per Hour</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/green.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->

<?php 
include './themepart/top-menu.php';
?>

<div class="clearfix"></div>

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			 
			<h2>Extended_Charges Form:</h2>
		</div>

		<div class="six columns">
			<a href="add-resume.html" class="button">Post a Resume, It’s Free!</a>
		</div>

	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven   columns">

            
            
            <div class="container">
	
	<!-- Submit Page -->
	<div class="ten columns">
		<div class="submit-page">

                    <form method="post">
			<!-- Notice -->
		 
			<!-- Email -->
			<div class="form">
				<h5>Extended_Charges_Duration</h5>
                                <input class="search-field" type="text" name="txt1" required="true"/>
			</div>
                        <div class="form">
				<h5>Extended_Charges</h5>
                                <input class="search-field" type="text" name="txt2" required="true"/>
                                
			</div>
		 	<div class="divider margin-top-0"></div>
			 
                        <input class="button big margin-top-5" type="submit" value="Insert">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input class="button big margin-top-5" type="button"  onclick="window.location='Extended_Charges_dd.php';" value="Display">
                    </form>
		</div>
	</div>

            </div>
            
        </div>

               
<?php 
include './themepart/sidebar.php';
?>
        
</div>


<!-- Footer
================================================== -->
<div class="margin-top-25"></div>



<?php 
include './themepart/footer.php';
?>



<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/headroom.min.js"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>
 

</body>

<!-- Mirrored from www.vasterad.com/themes/workscout/browse-resumes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 06:45:13 GMT -->
</html>