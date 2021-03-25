<!DOCTYPE html>
<!-- F:\YandexDisk\web\!!!Шаблон Admin - панель\Шаблон Admin - панель\!!!!!!portoadmin\themeforest-8539472-porto-admin-responsive-html5-template\Documentation -->
<!--[if IE 6 ]><html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en-us" class="ie8"> <![endif]-->
<!--[if (gt IE 7)|!(IE)]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<title>Админ панель</title>

	<meta name="description" content="">
	<meta name="author" content="Okler Themes">
	<meta name="copyright" content="Okler Themes">

	<meta name="date" content="1970-01-01T01:00:00+01:00">

	<link rel="stylesheet" href="css/documenter_style.css" media="all">
	<!-- <link rel="stylesheet" href="css/theme.css" media="all"> -->
	<!-- <link rel="stylesheet" href="js/google-code-prettify/prettify.css" media="screen"> -->
	<!-- <script src="js/google-code-prettify/prettify.js"></script> -->

	<link rel="stylesheet" href="css/doc.css" media="screen">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />

	<script src="js/jquery.js"></script>

	<!-- <script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.easing.js"></script>  -->

	<script>document.createElement('section'); var duration = '500', easing = 'swing';</script>


	<style>

	</style>

</head>

<body class="documenter-project-porto-admin">
	<div id="documenter_sidebar">
		<a href="#documenter_cover" id="documenter_logo"></a>
		<ul id="documenter_nav">
			<li><a class="current" href="#documenter_cover">Start</a></li>

			<li><a href="#tips" title="Tips">Tips</a></li>
			<li><a href="#files_structure" title="Files Structure">Files Structure</a></li>
			<li><a href="#html_structure" title="HTML Structure">HTML Structure</a></li>
			<li><a href="#css" title="CSS">CSS</a></li>
			<li><a href="#javascript" title="Javascript">Javascript</a></li>
			<li><a href="#customization_styles" title="Customization & Styles">Customization & Styles</a></li>
			<li><a href="#skin" title="Skin">Skin</a></li>
			<li><a href="#icons" title="Icons">Icons</a></li>
			<li><a href="#effects" title="Effects">Effects</a></li>
			<li><a href="#admin_extension" title="Admin Extension">Admin Extension</a></li>
			<li><a href="#source_credits" title="Source & Credits">Source & Credits</a></li>
			<li><a href="../../index-session.php" title="Вернуться на сайт">Вернуться на сайт</a></li>
		</ul>
		<div id="documenter_copyright">Copyright Okler Themes 2014<br>
			made with the <a href="http://rxa.li/documenter">Documenter v2.0</a>
		</div>
	</div>
	<div id="documenter_content">
		<section id="documenter_cover">
			<h1>Porto Admin</h1>
			<h2>Responsive HTML5 Template 1.4.1</h2>
			<div id="documenter_buttons">

			</div>
			<hr>
			<ul>
				<li>created: 08/01/2014</li>
				<li>latest update: 05/19/2015</li>
				<li>by: </li>
				<li><a href=""></a></li>
				<li>email: </li>
			</ul>

		</section>

		<section id="tips">
			<div class="page-header">
				<h3>Tips</h3>
				<hr class="notop">
			</div>
			<p class="info">
				Most of the questions are already answered in the FAQ&#39;s:<br>

			<p class="info">
				<strong>Due to local security restrictions, some things will not work locally, especially in Chrome. But
					everything will work once the files have been updated to your website.</strong>
			</p>
			<p class="info">
				Use Firebug or Chrome Developer Tools.</p>
			<p class="info">
				Do not start from scratch, use an existing page from the demo and modify it to learn how it works.</p>
			<p class="info">
				Getting an error message? Someone might have seen it too, try a google search for a quick fix.</p>
			<p class="info">
				Explore the live demo for pages ideas and sample code.</p>
		</section>

		<section id="files_structure">
			<div class="page-header">
				<h3>Files Structure</h3>
				<hr class="notop">
			</div>
			<pre class="prettyprint lang-html linenums">
/HTML
    (Template Pages... - HTML Files)
    /assets
        /ajax (Ajax Files for Demo Preview only)
        /images
        /javascript
            theme.js
            theme.init.js
            theme.custom.js (Customize the theme in this file)
        /stylesheets
            /sass (Sass sources file - you don&#39;t need to change those)
            /skins
                default.css (Save the skin in this file)
            invoice-print.css
            theme.css
            theme-custom.css (Customize the thme is this file)
        /vendor
            (Plugins...)</pre>
			<p> &nbsp;</p>
		</section>

		<section class="panel" id="html_structure" >
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
				</div>
		
				<h2 class="panel-title">Unseen Column</h2>
			</header>
			<div class="panel-body" style="display: block;">
				<table class="table table-bordered table-striped table-condensed mb-none">
					<thead>
						<tr>
							<th>Code</th>
							<th class="hidden-xs hidden-sm">Company</th>
							<th class="text-right">Price</th>
							<th class="text-right hidden-xs hidden-sm">Change</th>
							<th class="text-right hidden-xs">Change %</th>
							<th class="text-right">Open</th>
							<th class="text-right hidden-xs hidden-sm">High</th>
							<th class="text-right hidden-xs hidden-sm">Low</th>
							<th class="text-right">Volume</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>AAC</td>
							<td class="hidden-xs hidden-sm">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
							<td class="text-right">$1.38</td>
							<td class="text-right hidden-xs hidden-sm">-0.01</td>
							<td class="text-right hidden-xs">-0.36%</td>
							<td class="text-right">$1.39</td>
							<td class="text-right hidden-xs hidden-sm">$1.39</td>
							<td class="text-right hidden-xs hidden-sm">$1.38</td>
							<td class="text-right">9,395</td>
						</tr>
						<tr>
							<td>AAD</td>
							<td class="hidden-xs hidden-sm">ARDENT LEISURE GROUP</td>
							<td class="text-right">$1.15</td>
							<td class="text-right hidden-xs hidden-sm">  +0.02</td>
							<td class="text-right hidden-xs">1.32%</td>
							<td class="text-right">$1.14</td>
							<td class="text-right hidden-xs hidden-sm">$1.15</td>
							<td class="text-right hidden-xs hidden-sm">$1.13</td>
							<td class="text-right">56,431</td>
						</tr>
						<tr>
							<td>AAX</td>
							<td class="hidden-xs hidden-sm">AUSENCO LIMITED</td>
							<td class="text-right">$4.00</td>
							<td class="text-right hidden-xs hidden-sm">-0.04</td>
							<td class="text-right hidden-xs">-0.99%</td>
							<td class="text-right">$4.01</td>
							<td class="text-right hidden-xs hidden-sm">$4.05</td>
							<td class="text-right hidden-xs hidden-sm">$4.00</td>
							<td class="text-right">90,641</td>
						</tr>
						<tr>
							<td>ABC</td>
							<td class="hidden-xs hidden-sm">ADELAIDE BRIGHTON LIMITED</td>
							<td class="text-right">$3.00</td>
							<td class="text-right hidden-xs hidden-sm">  +0.06</td>
							<td class="text-right hidden-xs">2.04%</td>
							<td class="text-right">$2.98</td>
							<td class="text-right hidden-xs hidden-sm">$3.00</td>
							<td class="text-right hidden-xs hidden-sm">$2.96</td>
							<td class="text-right">862,518</td>
						</tr>
						<tr>
							<td>ABP</td>
							<td class="hidden-xs hidden-sm">ABACUS PROPERTY GROUP</td>
							<td class="text-right">$1.91</td>
							<td class="text-right hidden-xs hidden-sm">0.00</td>
							<td class="text-right hidden-xs">0.00%</td>
							<td class="text-right">$1.92</td>
							<td class="text-right hidden-xs hidden-sm">$1.93</td>
							<td class="text-right hidden-xs hidden-sm">$1.90</td>
							<td class="text-right">595,701</td>
						</tr>
						<tr>
							<td>ABY</td>
							<td class="hidden-xs hidden-sm">ADITYA BIRLA MINERALS LIMITED</td>
							<td class="text-right">$0.77</td>
							<td class="text-right hidden-xs hidden-sm">  +0.02</td>
							<td class="text-right hidden-xs">2.00%</td>
							<td class="text-right">$0.76</td>
							<td class="text-right hidden-xs hidden-sm">$0.77</td>
							<td class="text-right hidden-xs hidden-sm">$0.76</td>
							<td class="text-right">54,567</td>
						</tr>
						<tr>
							<td>ACR</td>
							<td class="hidden-xs hidden-sm">ACRUX LIMITED</td>
							<td class="text-right">$3.71</td>
							<td class="text-right hidden-xs hidden-sm">  +0.01</td>
							<td class="text-right hidden-xs">0.14%</td>
							<td class="text-right">$3.70</td>
							<td class="text-right hidden-xs hidden-sm">$3.72</td>
							<td class="text-right hidden-xs hidden-sm">$3.68</td>
							<td class="text-right">191,373</td>
						</tr>
						<tr>
							<td>ADU</td>
							<td class="hidden-xs hidden-sm">ADAMUS RESOURCES LIMITED</td>
							<td class="text-right">$0.72</td>
							<td class="text-right hidden-xs hidden-sm">0.00</td>
							<td class="text-right hidden-xs">0.00%</td>
							<td class="text-right">$0.73</td>
							<td class="text-right hidden-xs hidden-sm">$0.74</td>
							<td class="text-right hidden-xs hidden-sm">$0.72</td>
							<td class="text-right">8,602,291</td>
						</tr>
						<tr>
							<td>AGG</td>
							<td class="hidden-xs hidden-sm">ANGLOGOLD ASHANTI LIMITED</td>
							<td class="text-right">$7.81</td>
							<td class="text-right hidden-xs hidden-sm">-0.22</td>
							<td class="text-right hidden-xs">-2.74%</td>
							<td class="text-right">$7.82</td>
							<td class="text-right hidden-xs hidden-sm">$7.82</td>
							<td class="text-right hidden-xs hidden-sm">$7.81</td>
							<td class="text-right">148</td>
						</tr>
						<tr>
							<td>AGK</td>
							<td class="hidden-xs hidden-sm">AGL ENERGY LIMITED</td>
							<td class="text-right">$13.82</td>
							<td class="text-right hidden-xs hidden-sm">  +0.02</td>
							<td class="text-right hidden-xs">0.14%</td>
							<td class="text-right">$13.83</td>
							<td class="text-right hidden-xs hidden-sm">$13.83</td>
							<td class="text-right hidden-xs hidden-sm">$13.67</td>
							<td class="text-right">846,403</td>
						</tr>
						<tr>
							<td>AGO</td>
							<td class="hidden-xs hidden-sm">ATLAS IRON LIMITED</td>
							<td class="text-right">$3.17</td>
							<td class="text-right hidden-xs hidden-sm">-0.02</td>
							<td class="text-right hidden-xs">-0.47%</td>
							<td class="text-right">$3.11</td>
							<td class="text-right hidden-xs hidden-sm">$3.22</td>
							<td class="text-right hidden-xs hidden-sm">$3.10</td>
							<td class="text-right">5,416,303</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<section id="css">
			<div class="page-header">
				<h3>CSS</h3>
				<hr class="notop">
			</div>
			<h3>
				&nbsp;</h3>
			<h3>
				<strong>CSS Helper Classes</strong>
			</h3>
			<h4 id="css_text_helpers">Text Helpers</h4>
			<table class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>
							Class</th>
						<th>
							Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							.text-xs</td>
						<td>
							Change text font-size</td>
					</tr>
					<tr>
						<td>
							.text-sm</td>
						<td>
							Change text font-size</td>
					</tr>
					<tr>
						<td>
							.text-md</td>
						<td>
							Change text font-size</td>
					</tr>
					<tr>
						<td>
							.text-lg</td>
						<td>
							Change text font-size</td>
					</tr>
					<tr>
						<td>
							.text-xl</td>
						<td>
							Change text font-size</td>
					</tr>
					<tr>
						<td>
							.text-primary</td>
						<td>
							Changes text color to the primary color</td>
					</tr>
					<tr>
						<td>
							.text-primary-inverse</td>
						<td>
							Changes text color to the primary color inverse</td>
					</tr>
					<tr>
						<td>
							.text-dark</td>
						<td>
							Changes text color to dark version</td>
					</tr>
					<tr>
						<td>
							.text-dark-inverse</td>
						<td>
							Changes text color to dark version inverse</td>
					</tr>
					<tr>
						<td>
							.text-light</td>
						<td>
							Change text weight</td>
					</tr>
					<tr>
						<td>
							.text-normal</td>
						<td>
							Change text weight</td>
					</tr>
					<tr>
						<td>
							.text-semibold</td>
						<td>
							Change text weight</td>
					</tr>
					<tr>
						<td>
							.text-bold</td>
						<td>
							Change text weight</td>
					</tr>
					<tr>
						<td>
							.text-uppercase</td>
						<td>
							Uppercase text</td>
					</tr>
					<tr>
						<td>
							.text-lowercase</td>
						<td>
							Lowercase text</td>
					</tr>
					<tr>
						<td>
							.text-capitalize</td>
						<td>
							Capitalize text</td>
					</tr>
				</tbody>
			</table>
			<h4 id="css_spacements">Spacements</h4>
			<table class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>
							Class</th>
						<th>
							Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							.m-none</td>
						<td>
							Changes all margins to none</td>
					</tr>
					<tr>
						<td>
							.m-auto</td>
						<td>
							Changes margin to 0 auto</td>
					</tr>
					<tr>
						<td>
							.m-xs</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.m-sm</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.m-md</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.m-lg</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.m-xl</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.m-xlg</td>
						<td>
							Changes all margins</td>
					</tr>
					<tr>
						<td>
							.mt-none</td>
						<td>
							Changes margin-top to none</td>
					</tr>
					<tr>
						<td>
							.mt-xs</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mt-sm</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mt-md</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mt-lg</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mt-xl</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mt-xlg</td>
						<td>
							Changes margin-top</td>
					</tr>
					<tr>
						<td>
							.mb-none</td>
						<td>
							Changes margin-bottom to none</td>
					</tr>
					<tr>
						<td>
							.mb-xs</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mb-sm</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mb-md</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mb-lg</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mb-xl</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mb-xlg</td>
						<td>
							Changes margin-bottom</td>
					</tr>
					<tr>
						<td>
							.mr-none</td>
						<td>
							Changes margin-left to none</td>
					</tr>
					<tr>
						<td>
							.ml-xs</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.ml-sm</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.ml-md</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.ml-lg</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.ml-xl</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.ml-xlg</td>
						<td>
							Changes margin-left</td>
					</tr>
					<tr>
						<td>
							.mr-none</td>
						<td>
							Changes margin-right to none</td>
					</tr>
					<tr>
						<td>
							.mr-xs</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.mr-sm</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.mr-md</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.mr-lg</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.mr-xl</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.mr-xlg</td>
						<td>
							Changes margin-right</td>
					</tr>
					<tr>
						<td>
							.p-none</td>
						<td>
							Changes all paddings to none</td>
					</tr>
					<tr>
						<td>
							.p-auto</td>
						<td>
							Changes padding to 0 auto</td>
					</tr>
					<tr>
						<td>
							.p-xs</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.p-sm</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.p-md</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.p-lg</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.p-xl</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.p-xlg</td>
						<td>
							Changes all paddings</td>
					</tr>
					<tr>
						<td>
							.pt-none</td>
						<td>
							Changes padding-top to none</td>
					</tr>
					<tr>
						<td>
							.pt-xs</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pt-sm</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pt-md</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pt-lg</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pt-xl</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pt-xlg</td>
						<td>
							Changes padding-top</td>
					</tr>
					<tr>
						<td>
							.pb-none</td>
						<td>
							Changes padding-bottom to none</td>
					</tr>
					<tr>
						<td>
							.pb-xs</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pb-sm</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pb-md</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pb-lg</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pb-xl</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pb-xlg</td>
						<td>
							Changes padding-bottom</td>
					</tr>
					<tr>
						<td>
							.pr-none</td>
						<td>
							Changes padding-left to none</td>
					</tr>
					<tr>
						<td>
							.pl-xs</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pl-sm</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pl-md</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pl-lg</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pl-xl</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pl-xlg</td>
						<td>
							Changes padding-left</td>
					</tr>
					<tr>
						<td>
							.pr-none</td>
						<td>
							Changes padding-right to none</td>
					</tr>
					<tr>
						<td>
							.pr-xs</td>
						<td>
							Changes padding-right</td>
					</tr>
					<tr>
						<td>
							.pr-sm</td>
						<td>
							Changes padding-right</td>
					</tr>
					<tr>
						<td>
							.pr-md</td>
						<td>
							Changes padding-right</td>
					</tr>
					<tr>
						<td>
							.pr-lg</td>
						<td>
							Changes padding-right</td>
					</tr>
					<tr>
						<td>
							.pr-xl</td>
						<td>
							Changes padding-right</td>
					</tr>
					<tr>
						<td>
							.pr-xlg</td>
						<td>
							Changes padding-right</td>
					</tr>
				</tbody>
			</table>
			<h4 id="css_others">Others</h4>
			<table class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>
							Class</th>
						<th>
							Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							.ib</td>
						<td>
							Changes display to inline-block and set vertical-align to top</td>
					</tr>
					<tr>
						<td>
							.va-middle</td>
						<td>
							Changes vertical-align to middle</td>
					</tr>
					<tr>
						<td>
							.bg-primary</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-secondary</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-tertiary</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-quartenary</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-success</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-warning</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-danger</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-info</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
						<td>
							.bg-dark</td>
						<td>
							Changes background and text color to inverse color of background</td>
					</tr>
					<tr>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="javascript">
			<div class="page-header">
				<h3>Javascript</h3>
				<hr class="notop">
			</div>
			<p> Javascript files are splited into three files.<br>
				The files are located at <code>javascripts</code></p>
			<ul>
				<li> theme.js</li>
				<li> theme.custom.js</li>
				<li> theme.init.js</li>
			</ul>
			<p> &nbsp;</p>
			<h4 id="javascript_theme">Theme</h4>
			<p> The file are located at <code>javascripts/theme.js</code><br>
				<br>
				The main theme file contains:
			</p>
			<ul>
				<li> Essential code of the basic structure</li>
				<li> A collection of plugin initializators</li>
			</ul>
			<p> &nbsp;</p>
			<h4 id="javascript_theme_custom">Theme - Custom</h4>
			<p> The file are located at <code>javascripts/theme.custom.js</code></p>
			<p> You can place here all of your code customization, and also extend the theme plugins.<br>
				This is the safest way to do your customizations and easily theme version without losing your
				modifications.<br>
				<br>
				Here is an example of theme plugin that you can extend:
			</p>
			<pre class="prettyprint lang-js linenums">
	$.extend(theme.PluginSelect2.defaults, {
		minimumResultsForSearch: -1
	});
</pre>
			<p> Now, by default, all of your select2 plugin will have <code>minimumResultsForSearch</code> set to -1 by
				default.<br>
				You can also extend all the other options, including methods:</p>
			<pre class="prettyprint lang-js linenums">
	$.extend(theme.PluginCodeMirror.defaults, {
		beforeChange: function(instance, changeObj) {
			// Your code here
		}
	});
</pre>
			<h4 id="javascript_theme_initializators">Theme - Initializators</h4>
			<p> The file are located at <code>javascripts/theme.init.js</code></p>
			<p> This file have a collection of javascript plugin initializators</p>
		</section>
		<section id="customization_styles">
			<div class="page-header">
				<h3>Customization & Styles</h3>
				<hr class="notop">
			</div>
			<h4 id="customization_styles_layout_style_default_boxed_scroll_">Layout Style (Default/Boxed/Scroll)</h4>
			<p>
				The template has three different layout modes, Default, Boxed, Scroll.</p>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;boxed&quot;&gt;
</pre>
			<p>
				The class can be set to: fixed (default), boxed and scroll.&nbsp;</p>
			<p>
				<br>
				You can also customize the background if you&#39;re using the boxed layout.
			</p>
			<p>
				&nbsp;</p>
			<h4 id="customization_styles_background_color_light_dark_">Background Color (Light/Dark)</h4>
			<p>
				You can set the background color to dark, by adding the class in the HTML element:</p>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;dark&quot;&gt;
</pre>
			<p>
				&nbsp;</p>
			<h4 id="customization_styles_header_color_light_dark_">Header Color (Light/Dark)</h4>
			<p>
				You can set the header color to dark, by adding the class in the HTML element:</p>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;header-dark&quot;&gt;
</pre>
			<p>
				&nbsp;</p>
			<h4 id="customization_styles_sidebar_left_size_xs_sm_md_">Sidebar Left Size (XS/SM/MD)</h4>
			<p>
				You can set the sidebar left site, by adding the class in the HTML element:</p>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;sidebar-left-xs&quot;&gt;</pre>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;sidebar-left-sm&quot;&gt;</pre>
			<pre class="prettyprint lang-html linenums">
&lt;html class=&quot;sidebar-left-md&quot;&gt; (Default)</pre>
		</section>
		<section id="skin">
			<div class="page-header">
				<h3>Skin</h3>
				<hr class="notop">
			</div>
			<p> The style switcher was made to support unlimited skin colors, for that we use <strong>Less </strong>(<a
					href="http://www.lesscss.org/">http://www.lesscss.org/</a>) to process the CSS dinamically in the
				demo and show the color right away.</p>
			<p> Generate your own skin color using the Preview on ThemeForest:</p>
			<p> <br>
				<img alt="" src="images/image_2.jpg">
			</p>
			<p> &nbsp;</p>
			<p> You don&#39;t need to use LESS in your project, after you done customizing your skin you may want to
				grab the generated code and save it in a file (stylesheets/skins/default.css).</p>
			<p> <strong>Make sure that the path to the skin file is correct (In the HTML).</strong></p>
			<p> &nbsp;</p>
		</section>
		<section id="icons">
			<div class="page-header">
				<h3>Icons</h3>
				<hr class="notop">
			</div>
			<p> <strong>Font Awesome</strong> is a @font-face iconset that you can change size and color of the icons
				using CSS.<br>
				<br>
				If you need more information, please visit this site: <a
					href="http://fontawesome.io/">http://fontawesome.io/</a>
			</p>
			<p> &nbsp;</p>
			<h4 id="icons_html_markup">HTML Markup:</h4>
			<pre class="prettyprint lang-html linenums">
&lt;i class=&quot;fa fa-edit&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;fa fa-search&quot;&gt;&lt;/i&gt;
...
</pre>
			<p> &nbsp;</p>
		</section>
		<section id="effects">
			<div class="page-header">
				<h3>Effects</h3>
				<hr class="notop">
			</div>
			<p> You can add some Animations / Transitions to the elements which fires when an element scrolls into view,
				it&#39;s pretty simple to use and you can add it in any element.<br>
				&nbsp;</p>
			<p> <strong>Usage:</strong></p>
			<pre class="prettyprint lang-html linenums">
&lt;img class=&quot;appear-animation&quot; src=&quot;...&quot; data-appear-animation=&quot;fadeIn&quot; data-appear-animation-delay=&quot;250&quot;&gt;</pre>
			<p> <br>
				Heads up: The Attribute <strong>data-appear-animation-delay</strong> is <strong>Optional </strong>and is
				set in <strong>Miliseconds</strong>.</p>
			<p> The animation can be set to:</p>
			<ul>
				<li> flash</li>
				<li> shake</li>
				<li> bounce</li>
				<li> tada</li>
				<li> swing</li>
				<li> wobble</li>
				<li> wiggle</li>
				<li> pulse</li>
				<li> fadeIn</li>
				<li> fadeInUp</li>
				<li> fadeInDown</li>
				<li> fadeInLeft</li>
				<li> fadeInRight</li>
				<li> fadeInUpBig</li>
				<li> fadeInDownBig</li>
				<li> fadeInLeftBig</li>
				<li> fadeInRightBig</li>
				<li> bounceIn</li>
				<li> bounceInUp</li>
				<li> bounceInDown</li>
				<li> bounceInLeft</li>
				<li> bounceInRight</li>
				<li> rotateIn</li>
				<li> rotateInUpLeft</li>
				<li> rotateInDownLeft</li>
				<li> rotateInUpRight</li>
				<li> rotateInDownRight</li>
			</ul>
		</section>
		<section id="admin_extension">
			<div class="page-header">
				<h3>Admin Extension</h3>
				<hr class="notop">
			</div>
			<h3>
				How to integrate Porto Admin Extension on Porto.<br>
				&nbsp;</h3>
			<div class="alert alert-info">
				<strong>Warning!</strong> The admin extension is <strong>NOT</strong> included on Porto - Responsive
				HTML5 Template, to get all features, purchase both templates: <a
					href="http://www.themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler"
					target="_blank">Porto ($15)</a> + <a
					href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler"
					target="_blank">Porto Admin ($23)</a>: <strong>$38 Total.</strong>
			</div>
			<p> &nbsp;</p>
			<p> The Admin Extension is a package with some features from Porto Admin template that can be used in the
				Front-End (Porto - Responsive HTML5 Template).<br>
				&nbsp;</p>
			<p> - Porto - Responsive HTML5 Template comes with a few samples files, such as feature-admin-charts.html,
				feature-admin-forms-advanced.html, etc... with those, you can see the HTML Markup and the working pages
				from the preview.</p>
			<p> <br>
				- In each page you can see which CSS/JS files you need to include to get the elements working.</p>
			<p> &nbsp;</p>
			<p> <strong>Steps to use the admin extension:</strong></p>
			<p> 1) Add the CSS files for that specific page (in this example, based on
				feature-admin-forms-advanced.html):</p>
			<p> <img src="images/image_5.jpg"></p>
			<p> &nbsp;</p>
			<p> (Make sure the paths for the admin match with your own structure, in this example, the path is
				/admin/...)</p>
			<p> &nbsp;</p>
			<p> 2) Add the JS files for that specific page:</p>
			<p> <img src="images/image_6.jpg"></p>
			<p> &nbsp;</p>
			<p> (Consider to combine and compress all those files on your project)</p>
			<p> &nbsp;</p>
			<p> 3) That&#39;s it, now you can start to use the features from the admin as seen in the preview.</p>
			<p> <img src="images/image_3.jpg"><br>
				&nbsp;</p>
			<p> <strong>SKIN: </strong>If you want to change the color skin, don&#39;t forget to generate the extension
				skin file and save in the file (stylesheets/skins/extension.css):</p>
			<p> <img src="images/image_4.jpg"></p>
		</section>
		<section id="source_credits">
			<div class="page-header">
				<h3>Source & Credits</h3>
				<hr class="notop">
			</div>
			<p class="info">
				The images included in preview are for demonstration purposes and should always be replaced with your
				own work.</p>
			<p style="margin-left: 40px;">
				<br>
				<strong>Images</strong>: <a href="http://photodune.net/">http://photodune.net/</a><br>
				<strong>Subtle Patterns</strong>: <a
					href="http://subtlepatterns.com/">http://subtlepatterns.com/</a><br>
				Fonts:<br>
				<strong>&nbsp;&nbsp; &nbsp;Google Fonts</strong> - <a
					href="http://www.google.com/webfonts">http://www.google.com/webfonts</a><br>
				<strong>&nbsp;&nbsp; &nbsp;Icons Font-face</strong> - <a
					href="http://fontawesome.io/">http://fontawesome.io/</a><br>
				<br>
				Scripts:<br>
				<strong>bootstrap<br>
					bootstrap-colorpicker<br>
					bootstrap-datepicker<br>
					bootstrap-fileupload<br>
					bootstrap-markdown<br>
					bootstrap-maxlength<br>
					bootstrap-multiselect<br>
					bootstrap-tagsinput<br>
					bootstrap-timepicker<br>
					bootstrap-wizard<br>
					codemirror<br>
					dropzone<br>
					flot<br>
					flot-tooltip<br>
					font-awesome<br>
					fuelux<br>
					fullcalendar<br>
					gauge<br>
					gmaps<br>
					ios7-switch<br>
					isotope<br>
					jquery<br>
					jquery-appear<br>
					jquery-autosize<br>
					jquery-browser-mobile<br>
					jquery-cookie<br>
					jquery-datatables<br>
					jquery-datatables-bs3<br>
					jquery-easypiechart<br>
					jquery-idletimer<br>
					jquery-maskedinput<br>
					jquery-matchheight<br>
					jquery-nestable<br>
					jquery-placeholder<br>
					jquery-sparkline<br>
					jquery-ui<br>
					jquery-ui-touch-punch<br>
					jquery-validation<br>
					jqvmap<br>
					jstree<br>
					less<br>
					magnific-popup<br>
					modernizr<br>
					morris<br>
					nanoscroller<br>
					owl-carousel<br>
					pnotify<br>
					raphael<br>
					select2<br>
					snap-svg<br>
					summernote</strong>
			</p>
			<p> <br>
				<br>
				Once again, thank you so much for purchasing this template. As I said at the beginning, I&#39;d be glad
				to help you if you have any questions.
			</p>
			<h4 id="source_credits_brstrongokler_themes_strong"><br>
				<strong>Okler Themes</strong>
			</h4>
		</section>

	</div>
	<script src="js/script.js"></script>
	<!-- <script src="js/theme.init.js"></script>
	<script src="js/theme.js"></script> -->
</body>

</html>