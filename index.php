<?php
$title = '';
$page_url = (isset($_GET[ 'page' ])) ? $_GET['page'] : '';

require_once( 'inc/functions.php' );

if ( $_SERVER[ 'SERVER_PORT' ] !== '443' && $_SERVER[ 'SERVER_PORT' ] !== '80' ) {
    header( 'location: ' . root() );
    exit();
}

if ( isset( $_SESSION[ 'rid' ] ) ) {
    switch ( $_GET[ 'page' ] ) {

        case 'home':
            $page = 'pages/home.php';
            $title .= '';
            break;

         case 'accreditation':
            $page = 'pages/accreditation.php';
            $title .= '';
            break;
          
        case 'our-mission':
            $page = 'pages/our-mission.php';
            $title .= '';
            break;

        default:
            $page = 'pages/home.php';
            $title .= '';
            break;
    }
} 
else 
{
    
    switch ( isset($_GET[ 'page' ] ) )
    {

         
        case 'home':
            $page = 'pages/home.php';
            $title .= '';
            break;
         
        case 'accreditation':
            $page = 'pages/accreditation.php';
            $title .= '';
            break;
          
        case 'our-mission':
            $page = 'pages/our-mission.php';
            $title .= '';
            break;
            

        default:
            $page = 'pages/home.php';
            $title .= '';
            break;
    }

}
?>
<!doctype html>
<html lang="en-US" class="js">
<?php 
include 'head.php';
?>

<body class="page-template-default page page-id-294 et_pb_button_helper_class et_fixed_nav et_show_nav et_secondary_nav_enabled et_secondary_nav_two_panels et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_split et_pb_footer_columns4 et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db chrome" style="overflow-x: hidden;"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0.49803921568627"></fefuncr><fefuncg type="table" tableValues="0 0.49803921568627"></fefuncg><fefuncb type="table" tableValues="0 0.49803921568627"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-grayscale"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.54901960784314 0.98823529411765"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.71764705882353 0.25490196078431"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-red"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 1"></fefuncr><fefuncg type="table" tableValues="0 0.27843137254902"></fefuncg><fefuncb type="table" tableValues="0.5921568627451 0.27843137254902"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0 0"></fefuncr><fefuncg type="table" tableValues="0 0.64705882352941"></fefuncg><fefuncb type="table" tableValues="0 1"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-magenta-yellow"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.78039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.94901960784314"></fefuncg><fefuncb type="table" tableValues="0.35294117647059 0.47058823529412"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.65098039215686 0.40392156862745"></fefuncr><fefuncg type="table" tableValues="0 1"></fefuncg><fefuncb type="table" tableValues="0.44705882352941 0.4"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-blue-orange"><fecolormatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix><fecomponenttransfer color-interpolation-filters="sRGB"><fefuncr type="table" tableValues="0.098039215686275 1"></fefuncr><fefuncg type="table" tableValues="0 0.66274509803922"></fefuncg><fefuncb type="table" tableValues="0.84705882352941 0.41960784313725"></fefuncb><fefunca type="table" tableValues="1 1"></fefunca></fecomponenttransfer><fecomposite in2="SourceGraphic" operator="in"></fecomposite></filter></defs></svg>   

    <div id="page-container" class="et-animated-content" style="padding-top: 149px; overflow-y: hidden; margin-top: -1px;">

        <div id="top-header" class="">
            <div class="container clearfix">
                <div id="et-info">
                    <span id="et-info-phone">(847)697-3836</span>
                        <a href="mailto:info@einsteinacademy.us"><span id="et-info-email">info@einsteinacademy.us</span></a>
                        <ul class="et-social-icons">

                            <li class="et-social-icon et-social-facebook">
                                <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="et-social-icon et-social-twitter">
                                <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
                                    <span>Twitter</span>
                                </a>
                            </li>

                        </ul>               
                </div>
                <div id="et-secondary-menu">
                    <div class="et_duplicate_social_icons">
                        <ul class="et-social-icons">
                            <li class="et-social-icon et-social-facebook">
                                <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
                                    <span>Facebook</span>
                                </a>
                            </li>
                            <li class="et-social-icon et-social-twitter">
                                <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
                                    <span>Twitter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul id="et-secondary-nav" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-300">
                            <a href="<?php echo root();?>/" aria-current="page">Home</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266">
                            <a href="<?php echo root();?>contact/">Contact</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2110">
                            <a href="<?php echo root();?>admissions/domestic-application/">Apply Now</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                            <a href="<?php echo root();?>school-closure-emergencies/">Emergency School Closures</a>
                        </li>
                    </ul>               
                </div>

            </div>
        </div>
        
        <header id="main-header" data-height-onload="118" data-height-loaded="true" data-fixed-height-onload="118" class="" style="top: 31px;">
            <div class="container clearfix et_menu_container">            
                <div id="et-top-navigation" data-height="103" data-fixed-height="72">
                    <nav id="top-menu-nav">
                        <ul id="top-menu" class="nav">
                            <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-303">
                                <a href="<?php echo root();?>/" aria-current="page">Home</a>
                            </li>
                            <li id="menu-item-1022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022">
                                <a href="http://einsteinacademy.us/#">About Us</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?php echo root();?>accreditation/">Accreditation</a></li>
                                    <li id="menu-item-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="<?php echo root();?>about-us/our-mission/">Our Mission</a></li>
                                    <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?php echo root();?>faculty/">Faculty</a></li>
                                    <li id="menu-item-434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
                                    <li id="menu-item-1712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1712"><a href="<?php echo root();?>about-us/employment-opportunities/">Employment Opportunities</a></li>
                                    <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328"><a href="<?php echo root();?>contact/">Contact Us</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-349">
                                <a href="<?php echo root();?>#">Academics</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439"><a href="<?php echo root();?>academics/early-childhood-education/">Early Childhood</a></li>
                                    <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a href="<?php echo root();?>academics/lower-school/">Lower School</a></li>
                                    <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="<?php echo root();?>academics/middle-school/">Middle School</a></li>
                                    <li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a href="<?php echo root();?>academics/upper-school/">Upper School</a></li>
                                    <li id="menu-item-1270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1270"><a href="<?php echo root();?>academics/electives-enrichment/">Electives &amp; Enrichment</a></li>
                                    <li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333"><a href="<?php echo root();?>academics/experiential-learning/">Experiential Learning</a></li>
                                    <li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="<?php echo root();?>academics/educational-testing/">Educational Testing</a></li>
                                    <li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698"><a href="<?php echo root();?>academics/college-career-readiness/">College &amp; Career Readiness</a></li>
                                    <li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264"><a href="<?php echo root();?>academics/summer-programs/">Summer Programs</a></li>
                                    <li id="menu-item-1005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-987">
                                <a href="<?php echo root();?>#">Admissions</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-1508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1508"><a href="<?php echo root();?>admissions/apply-domestic/">Apply Domestic</a></li>
                                    <li id="menu-item-1509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1509"><a href="<?php echo root();?>admissions/apply-international/">Apply International</a></li>
                                    <li id="menu-item-1510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1510"><a href="<?php echo root();?>admissions/tuition-financial-aid/">Tuition &amp; Financial Aid</a></li>
                                </ul>
                            </li>
                            <li class="centered-inline-logo-wrap" style="width: 92.04px;">
                                <div class="logo_container">
                                    <span class="logo_helper"></span>
                                    <a href="<?php echo root();?>">
                                        <img src="<?php echo root();?>images/TEA_logo.png" width="512" height="512" alt="The Einstein Academy" id="logo" data-height-percentage="68" data-actual-width="512" data-actual-height="512">
                                    </a>
                                </div>
                            </li>
                            <li id="menu-item-1071" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1071"><a href="<?php echo root();?>#">Resources</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2514"><a href="<?php echo root();?>newsletters/">Panther Periodical</a></li>
                                    <li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422"><a href="<?php echo root();?>resources/forms-information/">Forms &amp; Information</a></li>
                                    <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421"><a href="<?php echo root();?>resources/parent-student-resources/">Parent &amp; Student Resources</a></li>
                                    <li id="menu-item-2365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2365"><a href="<?php echo root();?>wp-content/uploads/2021/07/2021-2022-Calendar.pdf">Calendar</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-1673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1673">
                                <a href="<?php echo root();?>giving/">Giving</a>
                            </li>
                            <li id="menu-item-1234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1234">
                                <a href="<?php echo root();?>student-life/">Student Life</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2332"><a href="<?php echo root();?>einstein-virtual-community-social-events/">Einstein (Virtual) Community Social Events</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379">
                                <a href="<?php echo root();?>contact/">Contact Us</a>
                            </li>
                        </ul>                       
                    </nav>
                    <div id="et_top_search">
                            <span id="et_search_icon"></span>
                    </div>
                    <div id="et_mobile_nav_menu">
                        <div class="mobile_nav closed">
                            <span class="select_page">Select Page</span>
                            <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                            <ul id="mobile_menu" class="et_mobile_menu">
                                <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-303 et_first_mobile_item">
                                    <a href="<?php echo root();?>/" aria-current="page">Home</a>
                                </li>
                                <li id="menu-item-1022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1022"><a href="<?php echo root();?>#">About Us</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?php echo root();?>accreditation/">Accreditation</a></li>
                                        <li id="menu-item-435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="<?php echo root();?>about-us/our-mission/">Our Mission</a></li>
                                        <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?php echo root();?>faculty/">Faculty</a></li>
                                        <li id="menu-item-434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
                                        <li id="menu-item-1712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1712"><a href="<?php echo root();?>about-us/employment-opportunities/">Employment Opportunities</a></li>
                                        <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328"><a href="<?php echo root();?>contact/">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-349">
                                    <a href="<?php echo root();?>#">Academics</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439"><a href="<?php echo root();?>academics/early-childhood-education/">Early Childhood</a></li>
                                        <li id="menu-item-361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a href="<?php echo root();?>academics/lower-school/">Lower School</a></li>
                                        <li id="menu-item-360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-360"><a href="<?php echo root();?>academics/middle-school/">Middle School</a></li>
                                        <li id="menu-item-359" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a href="<?php echo root();?>academics/upper-school/">Upper School</a></li>
                                        <li id="menu-item-1270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1270"><a href="<?php echo root();?>academics/electives-enrichment/">Electives &amp; Enrichment</a></li>
                                        <li id="menu-item-1333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1333"><a href="<?php echo root();?>academics/experiential-learning/">Experiential Learning</a></li>
                                        <li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="<?php echo root();?>academics/educational-testing/">Educational Testing</a></li>
                                        <li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698"><a href="<?php echo root();?>academics/college-career-readiness/">College &amp; Career Readiness</a></li>
                                        <li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264"><a href="<?php echo root();?>academics/summer-programs/">Summer Programs</a></li>
                                        <li id="menu-item-1005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a href="<?php echo root();?>academics/academic-accolades/">Academic Accolades</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-987"><a href="<?php echo root();?>#">Admissions</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1508"><a href="<?php echo root();?>admissions/apply-domestic/">Apply Domestic</a></li>
                                        <li id="menu-item-1509" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1509"><a href="<?php echo root();?>admissions/apply-international/">Apply International</a></li>
                                        <li id="menu-item-1510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1510"><a href="<?php echo root();?>admissions/tuition-financial-aid/">Tuition &amp; Financial Aid</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-1071" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1071"><a href="<?php echo root();?>#">Resources</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2514"><a href="<?php echo root();?>newsletters/">Panther Periodical</a></li>
                                            <li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422"><a href="<?php echo root();?>resources/forms-information/">Forms &amp; Information</a></li>
                                            <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-421"><a href="<?php echo root();?>resources/parent-student-resources/">Parent &amp; Student Resources</a></li>
                                            <li id="menu-item-2365" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2365"><a href="<?php echo root();?>wp-content/uploads/2021/07/2021-2022-Calendar.pdf">Calendar</a></li>
                                        </ul>
                                </li>
                                <li id="menu-item-1673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1673">
                                    <a href="<?php echo root();?>giving/">Giving</a>
                                </li>
                                <li id="menu-item-1234" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1234">
                                    <a href="<?php echo root();?>student-life/">Student Life</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-2332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2332"><a href="<?php echo root();?>einstein-virtual-community-social-events/">Einstein (Virtual) Community Social Events</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-379">
                                    <a href="<?php echo root();?>contact/">Contact Us</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-294 current_page_item menu-item-300">
                                    <a href="<?php echo root();?>/" aria-current="page">Home</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266">
                                    <a href="<?php echo root();?>contact/">Contact</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2110">
                                    <a href="<?php echo root();?>admissions/domestic-application/">Apply Now</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a href="<?php echo root();?>school-closure-emergencies/">Emergency School Closures</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- #et-top-navigation -->
            </div> <!-- .container -->
            <div class="et_search_outer">
                <div class="container et_search_form_container">
                    <form role="search" method="get" class="et-search-form" action="https://einsteinacademy.us/">
                    <input type="search" class="et-search-field" placeholder="Search …" value="" name="s" title="Search for:">                  </form>
                    <span class="et_close_search_field"></span>
                </div>
            </div>
        </header> <!-- #main-header -->
        <div id="et-main-area">
            <div id="main-content">
                <article id="post-294" class="post-294 page type-page status-publish hentry">                
                    <div class="entry-content">
                        <div id="et-boc" class="et-boc">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    
                                    <?php include($page);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <?php include 'quick_links.php'; ?>
        <footer id="main-footer">
            <div id="footer-bottom">
                <div class="container clearfix">
                    <ul class="et-social-icons">
                        <li class="et-social-icon et-social-facebook">
                            <a href="https://www.facebook.com/TheEinsteinAcademy" class="icon" target="_blank">
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-twitter">
                            <a href="https://twitter.com/TheEinsteinAcad" class="icon" target="_blank">
                                <span>Twitter</span>
                            </a>
                        </li>
                    </ul>
                    <div id="footer-info">Website by Twin Tiger Design</div>                   
                </div>
            </div>
        </footer>

        <script type="application/javascript">
            (function() {
                var file     = ["<?php echo root();?>css/et-divi-dynamic-294-late.css"];
                var handle   = document.getElementById('divi-style-parent-inline-inline-css');
                var location = handle.parentNode;

                if (0===document.querySelectorAll('link[href="' + file + '"]').length) {
                    var link  = document.createElement('link');
                    link.rel  = 'stylesheet';
                    link.id   = 'et-dynamic-late-css';
                    link.href = file;

                    location.insertBefore(link, handle.nextSibling);
                }
            })();
        </script>
        <script type="text/javascript">
                var et_animation_data = [{"class":"et_pb_fullwidth_header_0","style":"slideBottom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"1%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_0","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_1","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_2","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_3","style":"fold","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_4","style":"fold","repeat":"once","duration":"1000ms","delay":"150ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_5","style":"fold","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_blurb_6","style":"fold","repeat":"once","duration":"1000ms","delay":"300ms","intensity":"30%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_3","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_4","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_text_5","style":"zoom","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"10%","starting_opacity":"0%","speed_curve":"ease-in-out"},{"class":"et_pb_row_5","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
                    var et_link_options_data = [{"class":"et_pb_blurb_3","url":"\/academics\/early-childhood-education\/","target":"_self"},{"class":"et_pb_blurb_4","url":"\/academics\/middle-school\/","target":"_self"},{"class":"et_pb_blurb_5","url":"\/academics\/lower-school\/","target":"_self"},{"class":"et_pb_blurb_6","url":"\/academics\/upper-school\/","target":"_self"}];
        </script>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53F48L3" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <link rel="stylesheet" id="wp-block-library-css" href="<?php echo root();?>css/style.min(1).css" type="text/css" media="all" onload="media=&#39;all&#39;">
        <script type="text/javascript" src="<?php echo root();?>js/jquery.min.js.download" id="jquery-core-js"></script>
        <script type="text/javascript" src="<?php echo root();?>js/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
        <script type="text/javascript" id="jquery-js-after">
        jqueryParams.length&&$.each(jqueryParams,function(e,r){if("function"==typeof r){var n=String(r);n.replace("$","jQuery");var a=new Function("return "+n)();$(document).ready(a)}});
        </script>
        <script type="text/javascript" id="divi-custom-script-js-extra">
    /* <![CDATA[ */
    var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
    var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"};
    var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
    var et_pb_custom = {"ajaxurl":"http:\/\/einsteinacademy.us\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/einsteinacademy.us\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/einsteinacademy.us\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"dba2f31428","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"1ca9a9299b","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"294","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""};
    var et_pb_box_shadow_elements = [];
    /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo root();?>js/scripts.min.js.download" id="divi-custom-script-js"></script>
        <script type="text/javascript" src="<?php echo root();?>js/jquery.fitvids.js.download" id="fitvids-js"></script>
        <script type="text/javascript" src="<?php echo root();?>js/hashchange.js.download" id="hashchange-js"></script>
        <script type="text/javascript" src="<?php echo root();?>js/frontend-bundle.min.js.download" id="supreme-modules-for-divi-frontend-bundle-js"></script>
        <script type="text/javascript" src="<?php echo root();?>js/common.js.download" id="et-core-common-js"></script>
</body>
</html>