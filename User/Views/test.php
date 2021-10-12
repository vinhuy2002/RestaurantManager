<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="theme-color" content="#33b5e5">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/3.9.0/compiled.min.css?ver=3.9.0-update.4">
	<link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_3.3.0/plugins/css/all.min.css">
	<link rel='stylesheet' id='roboto-subset.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />


	<meta charset="utf-8">
	<title>Bootstrap Buttons - examples &amp; tutorial</title>

	<meta name="description" content="Responsive Buttons built with the latest Bootstrap 5. Buttons provide predefined styles (warning, info, danger} for multiple button types: outline, rounded, social, floating, fixed, tags, etc.">
	<meta name="image" content="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/components/buttons/buttons.jpg">

	<meta itemprop="name" content="Bootstrap Buttons - examples &amp; tutorial">
	<meta itemprop="description" content="Responsive Buttons built with the latest Bootstrap 5. Buttons provide predefined styles (warning, info, danger} for multiple button types: outline, rounded, social, floating, fixed, tags, etc.">
	<meta itemprop="image" content="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/components/buttons/buttons.jpg">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:title" content="Bootstrap Buttons - examples &amp; tutorial">
	<meta property="twitter:description" content="Responsive Buttons built with the latest Bootstrap 5. Buttons provide predefined styles (warning, info, danger} for multiple button types: outline, rounded, social, floating, fixed, tags, etc.">
	<meta property="twitter:site" content="@MDBootstrap">
	<meta property="twitter:creator" content="@MDBootstrap">
	<meta property="twitter:image:src" content="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/components/buttons/buttons.jpg">
	<meta property="twitter:player" content="https://www.youtube.com/watch?v=c9B4TPnak1A">

	<meta property="og:title" content="Bootstrap Buttons - examples &amp; tutorial">
	<meta property="og:description" content="Responsive Buttons built with the latest Bootstrap 5. Buttons provide predefined styles (warning, info, danger} for multiple button types: outline, rounded, social, floating, fixed, tags, etc.">
	<meta property="og:image" content="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/components/buttons/buttons.jpg">
	<meta property="og:url" content="https://mdbootstrap.com/docs/standard/components/buttons/">
	<meta property="og:site_name" content="MDB - Material Design for Bootstrap">
	<meta property="og:locale" content="en_US">
	<meta property="og:video" content="https://www.youtube.com/watch?v=c9B4TPnak1A">
	<meta property="fb:admins" content="443467622524287">
	<meta property="og:type" content="website">

	<script data-cfasync="false">
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W7MBMN');
</script>


<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [{
			"@type": "ListItem",
			"position": 1,
			"name": "MDBootstrap",
			"item": "https://mdbootstrap.com/",
			"image": "https://mdbcdn.b-cdn.net/img/Marketing/mdb-press-pack/mdb-main.jpg"
		}, {
			"@type": "ListItem",
			"position": 2,
			"name": "Standard",
			"item": "https://mdbootstrap.com/docs/standard/",
			"image": "https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.jpg"
		}, {
			"@type": "ListItem",
			"position": 3,
			"name": "Buttons",
			"item": "https://mdbootstrap.com/docs/standard/components/buttons/",
			"image": "https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/components/buttons/buttons.jpg"
		}]
	}
</script>

<style>
#navbarNotification::after {
	content: none !important;
}


#main-navbar .badge {
	position: absolute;
	font-size: .6rem;
	margin-top: -.1rem;
	margin-left: -.5rem;
	padding: .2em .45em;
}


#main-navbar .nav-link {
	color: rgba(0, 0, 0, .55) !important;
	font-size: 1rem !important;
	font-weight: 400;
}

#main-navbar .nav-link :hover {
	color: rgb(76, 76, 76);
}



[aria-labelledby=new-mdb-technologies-dropdown] li {
	background-color: rgb(255, 255, 255) !important;
}

[aria-labelledby=new-mdb-technologies-dropdown] li :hover {
	background-color: #EEEEEE !important;
	box-shadow: none !important;
}

[aria-labelledby=userDropdown] a {
	background-color: rgb(255, 255, 255) !important;
	box-shadow: none !important;
}

[aria-labelledby=userDropdown] a:hover {
	background-color: #EEEEEE !important;
}

#navbarNotificationContent a {
	background-color: rgb(255, 255, 255) !important;
	box-shadow: none !important;
}

#navbarNotificationContent a:hover {
	background-color: #EEEEEE !important;
}
</style>
<style>
.docs-pills {
	border-radius: 0.5rem;
}

.docs-pills pre[class*="language-"] {
	border-bottom-right-radius: 0.5rem;
	border-bottom-left-radius: 0.5rem;
}

.docs-pills .btn-copy-code,
.docs-tab-content .export-to-snippet {
	position: absolute;
	top: 16px;
	right: 16px;
	box-shadow: none !important;
	color: #616161 !important;
	background-color: transparent !important;
	padding: 6px 15px !important;
}
</style>
</head>

<body class="mdb-skin-custom " data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="250">

	<header>
		<style>

		#mdb-sidenav .sidenav-collapse, .sidenav .rotate-icon {
			transition-property: none;
		}

		#mdb-sidenav .fas {
			color: #9FA6B2;
		}
		#mdb-sidenav a {
			color: #4B5563;
		}
		#mdb-sidenav a.active {
			background-color: rgba(18,102,241,.05);
		}
		#mdb-sidenav .sidenav-item {
			margin-left: 5px;
			margin-right: 5px;
		}
		#mdb-sidenav .sidenav-item:first-child {
			margin-top: 4px;
		}
		#mdb-sidenav .sidenav-item:last-child {
			margin-bottom: 4px;
		}

		#mdb-sidenav-toggler {
			display: none;
			background-color: transparent;
		}

		.mdb-docs-layout {
			padding-left: 240px;
		}

		@media (max-width: 1440px) {
			#mdb-sidenav-toggler {
				display: unset;
			}

			#mdb-sidenav {
				transform: translate(-100%);
			}

			.mdb-docs-layout {
				padding-left: 0px;
			}
		}

		.sidenav-icon {
			color: #9fa6b2;
			height: 14px;
		}
	</style>

	<div class="sidenav" data-mdb-mode="side" data-mdb-hidden="false" data-mdb-accordion="true" id="mdb-sidenav" role="navigation">



		<a class="ripple d-flex justify-content-center py-4" href="/" data-mdb-ripple-color="primary">
			<img id="MDB-logo" src="https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo" draggable="false">
		</a>

		<ul class="sidenav-menu" style="padding-bottom: 300px;">

			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;"><i class="fas fa-download fa-fw me-3"></i></div>
					<span>
						Getting started
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/">About MDB</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/installation/">Installation</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/quick-start/">Quick start</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/">Tutorials</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/optimization/">Optimization</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/changelog/">Changelog</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/faq/">FAQ</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/migration/">Migration</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/vsc-snippets/">VSC snippets</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/rtl/">RTL</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/supported-browsers/">Supported Browsers</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/getting-started/webpack-starter/">Webpack starter</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/freebies/">Free starter templates</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-gem fa-fw me-3"></i></div>
					<span>
						MDB Pro
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/pro/">About MDB Pro</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/installation/">Installation</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/plugins-installation/">Plugins installation</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/quick-start/">Quick start</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/faq/">FAQ</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/git/">Git &amp; repository</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/support/">Premium support</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/updates/">Updates</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/pro/builder/">Builder</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-database fa-fw me-3"></i></div>
					<span>
						CLI &amp; hosting
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/cli/">About MDB GO / CLI</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/quick-start/">Quick start</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/getting-started/">Getting started</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/overview/">Overview</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/frontend/">Frontend</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/backend/">Backend</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/database/">Databases</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/wordpress/">WordPress</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/configuration/">Configuration</a>

					</li>

					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/cli/reference/">Reference</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-th-large fa-fw me-3"></i></div>
					<span>
						Layout
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/layout/grid/">Grid system</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/breakpoints/">Breakpoints</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/containers/">Containers</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/columns/">Columns</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/display/">Display</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/flexbox/">Flexbox</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/float/">Float</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/gutters/">Gutters</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/horizontal-alignment/">Horizontal alignment</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/utilities-for-layout/">Utilities for layout</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/vertical-alignment/">Vertical alignment</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/layout/z-index/">Z-index</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-paint-brush fa-fw me-3"></i></div>
					<span>
						Content &amp; styles
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/content-styles/theme/">Theme</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/animations/">Animations</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/background-image/">Background image</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/colors/">Colors</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/figures/">Figures</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/flags/">Flags</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/hover-effects/">Hover effects</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/icons/">Icons</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/images/">Images</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/masks/">Masks</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/reboot/">Reboot</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/shadows/">Shadows</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/content-styles/typography/">Typography</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-bars fa-fw me-3"></i></div>
					<span>
						Navigation
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/breadcrumb/">Breadcrumb</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/footer/">Footer</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/headers/">Headers</a>


					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/navbar/">Navbar</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/pagination/">Pagination</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/pills/">Pills</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/scrollspy/">Scrollspy</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/sidenav/">Sidenav</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/navigation/tabs/">Tabs</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-cubes fa-fw me-3"></i></div>
					<span>
						Components
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/accordion/">Accordion</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/alerts/">Alerts</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/badges/">Badges</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/buttons/">Buttons</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/button-group/">Button group</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/cards/">Cards</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/carousel/">Carousel</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/chips/">Chips</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/collapse/">Collapse</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/dropdowns/">Dropdowns</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/lightbox/">Lightbox</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/list-group/">List group</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/modal/">Modal</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/popconfirm/">Popconfirm</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/popovers/">Popovers</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/progress/">Progress</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/rating/">Rating</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/spinners/">Spinners</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/stepper/">Stepper</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/toasts/">Toasts</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/components/tooltips/">Tooltips</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-edit fa-fw me-3"></i></div>
					<span>
						Forms
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item" style="border-bottom: 1px solid #eee;">
						<a class='sidenav-link ' href="/docs/standard/forms/overview/">Overview</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/autocomplete/">Autocomplete</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/checkbox/">Checkbox</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/datepicker/">Datepicker</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/datetimepicker/">DateTimepicker</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/file/">File</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/input-fields/">Input fields</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/input-group/">Input group</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/multi-range-slider/">Multi range</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/search/">Search</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/select/">Select</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/switch/">Switch</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/radio/">Radio</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/range/">Range</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/timepicker/">Timepicker</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/forms/validation/">Validation</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-table fa-fw me-3"></i></div>
					<span>
						Data
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/data/charts/">Charts</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/data/charts-advanced/">Charts advanced</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/data/tables/">Tables</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/data/datatables/">Datatables</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-wrench fa-fw me-3"></i></div>
					<span>
						Utilities
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/api/">API</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/borders/">Borders</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/clearfix/">Clearfix</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/close-button/">Close button</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/embeds/">Embeds</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/interactions/">Interactions</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/overflow/">Overflow</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/position/">Position</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/screen-readers/">Screen readers</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/sizing/">Sizing</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/spacing/">Spacing</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/stretched-link/">Stretched link</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/text/">Text</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/text-truncation/">Text truncation</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/utilities/visibility/">Visibility</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-code fa-fw me-3"></i></div>
					<span>
						Methods
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/clipboard/">Clipboard</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/infinite-scroll/">Infinite scroll</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/lazy-loading/">Lazy loading</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/loading-management/">Loading management</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/ripple/">Ripple</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/scrollbar/">Scrollbar</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/smooth-scroll/">Smooth scroll</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/sticky/">Sticky</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/methods/touch/">Touch</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-layer-group fa-fw me-3"></i></div>
					<span>
						Design blocks
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/admin/">Admin</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/blog/">Blog</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/ecommerce/">eCommerce</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/forms/">Forms</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/industries/">Industries</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/landing-page/">Landing page</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/modals/">Modals</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/navigation/">Navigation</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/design-blocks/portfolio/">Portfolio</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-plug fa-fw me-3"></i></div>
					<span>
						Plugins
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/calendar/">Calendar</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/captcha/">Captcha</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/color-picker/">Color picker</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/cookies-management/">Cookies management</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/countdown/">Countdown</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/data-parser/">Data parser</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/drag-and-drop/">Drag and drop</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/dummy/">Dummy</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/ecommerce-gallery/">eCommerce gallery</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/file-upload/">File upload</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/filters/">Filters</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/input-mask/">Input mask</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/mention/">Mention</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/multi-item-carousel/">Multi item carousel</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/onboarding/">Onboarding</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/organization-chart/">Organization chart</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/parallax/">Parallax</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/scroll-status/">Scroll status</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/storage-management/">Storage management</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/table-editor/">Table editor</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/transfer/">Transfer</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/tree-view/">Tree view</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/treetable/">TreeTable</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/vector-maps/">Vector maps</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/plugins/wysiwyg-editor/">WYSIWYG editor</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-image fa-fw me-3"></i></div>
					<span>
						Templates
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/templates/admin-dashboard/">Admin dashboards</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/templates/blog/">Blog</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/templates/ecommerce/">eCommerce</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/templates/landing-page/">Landing pages</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/templates/portfolio/">Portfolios</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class="fas fa-puzzle-piece fa-fw me-3"></i></div>
					<span>
						Integrations
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/integrations/admin-dashboard-nodejs-expressjs/">Admin dashboard + Node.js</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/integrations/admin-dashboard-php-laravel/">Admin dashboard + PHP</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/integrations/admin-dashboard-net-aspnet/">Admin dashboard + .NET Core</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/integrations/contact-form-nodejs/">Contact form + Node.js</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/integrations/contact-form-php/">Contact form + PHP</a>

					</li>
				</ul>
			</li>



			<li class="sidenav-item">
				<a class="sidenav-link">
					<div style="width: 33.5px;  "><i class='fas fa-tools fa-fw me-3'></i></div>
					<span>
						Tools & resources
					</span>
				</a>
				<ul class="sidenav-collapse">
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/builder/">Drag &amp; drop builder</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/lab/">Lab</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/docs/standard/tools/">Design generators</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/snippets/standard/mdbootstrap/3270249#html-tab-view">Snippet contest <span class='badge bg-primary ms-2'>New</span></a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="/snippets/">Newsletter</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="https://www.youtube.com/c/Mdbootstrap?sub_confirmation=1">YouTube  channel</a>

					</li>
					<li class="sidenav-item">
						<a class='sidenav-link ' href="https://www.facebook.com/groups/682245759188413">Private FB community</a>

					</li>
				</ul>
			</li>


		</ul>


	</div>

	<span id="dpl-auth-modal"></span>

	<style>
	#mdb-navbar {
		padding-left: 240px;
		height: 58px;
	}

	#mdb-navbar-brand-logo {
		display: none;
	}

	#sidenav-toggler {
		display: none;
	}

	#mdb-5-search-container {
		position: relative;
		font-size: .8rem;
	}

	#mdb-5-search-dropdown {
		display: none;
		position: absolute;
		top: 36px;
		overflow-y: hidden;
		width: 100%;
		z-index: 999999;
		background-color: white;
	}

	.mdb-5-search-keywords {
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}

	#mdb-5-search-list {
		overflow-y: scroll;
		max-height: 265px;
		position: relative;
	}

	#mdb-5-search-list li a {
		transition: background-color .3s ease-in;
	}

	#mdb-5-search-list li a:hover, #mdb-5-search-list li a:active, #mdb-5-search-list li a:focus {
		background-color: rgba(0, 0, 0, 0.05);
		outline: none;
	}

	#mdb-5-search-input {
		min-width: 230px;
	}

	#mdb-5-search-icon {
		transition: color .3s ease-out;
	}


	@media (max-width: 1440px) {
		#sidenav-toggler {
			display: inline-block;
		}
	}

	@media (max-width: 1440px) {
		#mdb-navbar {
			padding-left: 0;
		}
	}
</style>
<nav id="mdb-navbar" class="  navbar fixed-top navbar-expand-lg navbar-light bg-white shadow-2">
	<div class="container-fluid">
		<button id="sidenav-toggler" data-mdb-toggle="sidenav" data-mdb-target="#mdb-sidenav" type="button" class="btn shadow-0 p-0 me-3"><i class="fas fa-bars fa-lg"></i></button>
		<a class="navbar-brand me-2" id="mdb-navbar-brand-logo" href="https://mdbootstrap.com/">
			<img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -1px">
		</a>

		<div id="mdb-5-search-container">
			<form class="d-none d-md-flex input-group w-auto my-auto">
				<input id="mdb-5-search-input" autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' />
				<span class="input-group-text border-0"><i class="fas fa-search" id="mdb-5-search-icon"></i></span>
			</form>
			<div id="mdb-5-search-dropdown" class="rounded shadow-5">
				<ul id="mdb-5-search-list" class="list-unstyled mb-0"></ul>
				<hr class="my-0">
				<p class="text-muted small text-end pe-3 mt-3">search results: <strong id="mdb-5-search-count"></strong></p>
			</div>
		</div>


		<span id="dpl-navbar-new-right-buttons" class="navbar-nav ms-auto d-flex flex-row"></span>

	</div>
</nav>



</header>





<main class="pt-5 mdb-docs-layout">
	<div class="container mt-5 px-lg-5">





		<ul id="docs-nav-pills" class="nav nav-pills mb-4" role="tablist" >
			<li class="nav-item">
				<a id="docs-tab-overview" class="nav-link active px-5 font-weight-bold" data-mdb-toggle="tab" href="#docsTabsOverview" role="tab">Overview</a>
			</li>


			<li class="nav-item">
				<a id="docs-tab-gettingstarted" class="nav-link px-5 font-weight-bold" data-mdb-toggle="tab" href="#docsTabsAPI" role="tab">API</a>
			</li>



			<li class="nav-item">
				<a class="nav-link px-5 font-weight-bold" href="https://mdbootstrap.com/docs/standard/tools/builders/buttons/" target="_blank">Builder<i class="fas fa-external-link-alt ms-1"></i></a>
			</li>



		</ul>
		<div class="tab-content">
			<div class="tab-pane fade in show active" id="docsTabsOverview" role="tabpanel">
				<div class="row">

					<div class=" col-lg-10  col-md-12">
						<style>
						blockquote {
							margin-bottom: 0px!important;
						}
					</style>
					<!--Section: Docs content-->
					<section>
						<!--Section: Introduction-->
						<section id="section-introduction">
							<!-- Main title -->
							<h2 class="h1 fw-bold">Buttons

							</h2>

							<!-- Seo title -->
							<h1 class="h6">Bootstrap 5 Button component
							</h1>

							<!-- Description -->
							<div class="row">
								<div class="col-md-7 mb-4">
									<p class="my-4">Responsive Buttons built with the latest Bootstrap 5. Buttons provide predefined styles (warning, info, danger} for multiple button types: outline, rounded, social, floating, fixed, tags, etc.
									</p>

									<p class="my-4">
										Use MDB custom button styles for actions in forms, dialogs, and more with support for
										multiple sizes, states, and more.
									</p>

									<p class="note note-light">
										<strong>Note:</strong> Read the <strong>API</strong> tab to find all available options and
										advanced customization
									</p>
								</div>
								<div class="col-md-5 mb-4 text-center">
									<p><strong>Video tutorial</strong></p>

									<div
									class="bg-image classy hover-overlay shadow-1-strong rounded ripple"
									data-mdb-ripple-color="light"
									>
									<picture>
										<source
										srcset="https://mdbootstrap.com/img/Marketing/templates/tutorial/buttons.webp"
										type="image/webp"
										/>
										<img
										src="https://mdbootstrap.com/img/Marketing/templates/tutorial/buttons.jpg"
										class="w-100"
										alt="MDB 5 - Bootstrap 5 &amp; Material Design 2.0"
										/>
									</picture>
									<a rel="nofollow" target="_blank" href="https://www.youtube.com/watch?v=RkViQUAQ15II">
										<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
									</a>
								</div>
							</div>
						</div>
					</section>
					<!--Section: Introduction-->

					<hr class="my-5" />

					<!--Section: Basic example-->
					<section id="section-basic-example">
						<!-- Section title -->
						<h2 class="mb-4">Basic example</h2>

						<!--Section: Demo-->
						<section class="pb-4">
							<div class="bg-white border rounded-5">
								<section class="p-4 text-center w-100">
									<button type="button" class="btn btn-primary">Button</button>
								</section>


								<div class="p-4 text-center border-top">
									<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example1" role="button"
									aria-expanded="false" aria-controls="example1" data-ripple-color="hsl(0, 0%, 67%)"><i
									class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
									<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
										class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
									</div>

								</div>
							</section>
							<!--Section: Demo-->

							<!--Section: Code-->
							<section class="collapse" id="example1">
								<section class="pb-4">






									<div class="docs-pills border">
										<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
											<ul class="nav nav-pills p-2">



												<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_713ecf034f0bbfeac2ba05f7e69c7cf8212f7182" role="tab">HTML</a></li>

											</ul>
										</div>
										<div class="tab-content">






											<div class="tab-pane fade  active show " id="mdb_713ecf034f0bbfeac2ba05f7e69c7cf8212f7182" role="tabpanel">
												<pre class="grey lighten-3 mb-0 line-numbers language-html">
													<code>

														&lt;button type=&#34;button&#34; class=&#34;btn btn-primary&#34;&gt;Button&lt;/button&gt;

													</code>
												</pre>
											</div>


										</div>
									</div>



								</section>
							</section>
							<!--Section: Code-->

							<h4>Disable text wrapping</h4>
							<p>
								If you don’t want the button text to wrap, you can add the
								<code>.text-nowrap</code> class to the button. In Sass, you can set
								<code>$btn-white-space: nowrap</code> to disable text wrapping for each button.
							</p>
						</section>
						<!--Section: Basic example-->

						<hr class="my-5" />

						<!--Section: Colors-->
						<section id="section-colors">
							<!--Section title-->
							<h2 class="mb-4">Colors</h2>

							<!-- Section description -->
							<p>
								MDB includes several predefined button styles, each serving its own semantic purpose, with a
								few extras thrown in for more control.
							</p>

							<!--Section: Demo-->
							<section class="pb-4">
								<div class="bg-white border rounded-5">
									<section class="p-4 text-center w-100">
										<button type="button" class="btn btn-primary">Primary</button>
										<button type="button" class="btn btn-secondary">Secondary</button>
										<button type="button" class="btn btn-success">Success</button>
										<button type="button" class="btn btn-danger">Danger</button>
										<button type="button" class="btn btn-warning">Warning</button>
										<button type="button" class="btn btn-info">Info</button>
										<button type="button" class="btn btn-light" data-mdb-ripple-color="dark">Light</button>
										<button type="button" class="btn btn-dark">Dark</button>
										<button type="button" class="btn btn-link" data-mdb-ripple-color="dark">Link</button>
									</section>


									<div class="p-4 text-center border-top">
										<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example2" role="button"
										aria-expanded="false" aria-controls="example2" data-ripple-color="hsl(0, 0%, 67%)"><i
										class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
										<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
											class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
										</div>

									</div>
								</section>
								<!--Section: Demo-->

								<!--Section: Code-->
								<section class="collapse" id="example2">
									<section class="pb-4">






										<div class="docs-pills border">
											<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
												<ul class="nav nav-pills p-2">



													<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_ed2fc44b1a64997cc6e59d38b51137e5a0f389f1" role="tab">HTML</a></li>

												</ul>
											</div>
											<div class="tab-content">






												<div class="tab-pane fade  active show " id="mdb_ed2fc44b1a64997cc6e59d38b51137e5a0f389f1" role="tabpanel">
													<pre class="grey lighten-3 mb-0 line-numbers language-html">
														<code>

															&lt;button type=&#34;button&#34; class=&#34;btn btn-primary&#34;&gt;Primary&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-secondary&#34;&gt;Secondary&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-success&#34;&gt;Success&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-danger&#34;&gt;Danger&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-warning&#34;&gt;Warning&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-info&#34;&gt;Info&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-light&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;Light&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-dark&#34;&gt;Dark&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-link&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;Link&lt;/button&gt;

														</code>
													</pre>
												</div>


											</div>
										</div>



									</section>
								</section>
								<!--Section: Code-->
								<p class="note note-info">
									<strong>Conveying meaning to assistive technologies:</strong>
									<br />
									Using color to add meaning only provides a visual indication, which will not be conveyed to
									users of assistive technologies – such as screen readers. Ensure that information denoted by
									the color is either obvious from the content itself (e.g. the visible text), or is included
									through alternative means, such as additional text hidden with the
									<code>.visually-hidden</code> class.
								</p>
							</section>
							<!--/Section: Colors-->

							<hr class="my-5" />

							<!--Section: Outline-->
							<section id="section-outline">
								<!--Section title-->
								<h2 class="mb-4">Outline</h2>

								<!-- Section description -->
								<p>
									In need of a button, but not the hefty background colors they bring? Replace the default
									modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and
									colors on any button.
								</p>

								<p>
									In the outline buttons, we recommend adding
									<code>data-mdb-ripple-color="dark"</code> to change the color of the
									<strong>ripple effect</strong>. The default light color of the ripple (applied automatically
									to every button) may not be well visible in the case of light and outline buttons.
								</p>

								<p>
									To learn more about the ripple effect and all the available options have a look at
									<a href="https://mdbootstrap.com/docs/standard/methods/ripple/">Ripple Docs</a>.
								</p>

								<!--Section: Demo-->
								<section class="pb-4">
									<div class="bg-white border rounded-5">
										<section class="p-4 text-center w-100">
											<button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">
												Primary
											</button>
											<button type="button" class="btn btn-outline-secondary" data-mdb-ripple-color="dark">
												Secondary
											</button>
											<button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">
												Success
											</button>
											<button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">
												Danger
											</button>
											<button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">
												Warning
											</button>
											<button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">Info</button>
											<button type="button" class="btn btn-outline-light" data-mdb-ripple-color="dark">
												Light
											</button>
											<button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Dark</button>
										</section>


										<div class="p-4 text-center border-top">
											<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example3" role="button"
											aria-expanded="false" aria-controls="example3" data-ripple-color="hsl(0, 0%, 67%)"><i
											class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
											<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
												class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
											</div>

										</div>
									</section>
									<!--Section: Demo-->

									<!--Section: Code-->
									<section class="collapse" id="example3">
										<section class="pb-4">






											<div class="docs-pills border">
												<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
													<ul class="nav nav-pills p-2">



														<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_198e58c1030a8593388d9d3280dd70b732098ef6" role="tab">HTML</a></li>

													</ul>
												</div>
												<div class="tab-content">






													<div class="tab-pane fade  active show " id="mdb_198e58c1030a8593388d9d3280dd70b732098ef6" role="tabpanel">
														<pre class="grey lighten-3 mb-0 line-numbers language-html">
															<code>

																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-primary&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Primary
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-secondary&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Secondary
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-success&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Success
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-danger&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Danger
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-warning&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Warning
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-info&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Info
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-light&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Light
																&lt;/button&gt;
																&lt;button type=&#34;button&#34; class=&#34;btn btn-outline-dark&#34; data-mdb-ripple-color=&#34;dark&#34;&gt;
																Dark
																&lt;/button&gt;

															</code>
														</pre>
													</div>


												</div>
											</div>



										</section>
									</section>
									<!--Section: Code-->

									<p class="note note-info">
										Some of the button styles use a relatively light foreground color, and should only be used on
										a dark background in order to have sufficient contrast.
									</p>
								</section>
								<!--/Section: Outline-->

								<hr class="my-5" />

								<!--Section: Rounded-->
								<section id="section-rounded">
									<!--Section title-->
									<h2 class="mb-4">Rounded</h2>

									<!-- Section description -->
									<p>Add <code>.btn-rounded</code> class to make the button rounded.</p>

									<!--Section: Demo-->
									<section class="pb-4">
										<div class="bg-white border rounded-5">
											<section class="p-4 text-center w-100">
												<button type="button" class="btn btn-primary btn-rounded">Primary</button>
												<button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
												<button type="button" class="btn btn-success btn-rounded">Success</button>
												<button type="button" class="btn btn-danger btn-rounded">Danger</button>
												<button type="button" class="btn btn-warning btn-rounded">Warning</button>
												<button type="button" class="btn btn-info btn-rounded">Info</button>
												<button type="button" class="btn btn-light btn-rounded">Light</button>
												<button type="button" class="btn btn-dark btn-rounded">Dark</button>
											</section>


											<div class="p-4 text-center border-top">
												<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example4" role="button"
												aria-expanded="false" aria-controls="example4" data-ripple-color="hsl(0, 0%, 67%)"><i
												class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
												<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
													class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
												</div>

											</div>
										</section>
										<!--Section: Demo-->

										<!--Section: Code-->
										<section class="collapse" id="example4">
											<section class="pb-4">






												<div class="docs-pills border">
													<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
														<ul class="nav nav-pills p-2">



															<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_2d6dabf68aa6804ed51edd827fc2e4f4a9f6e8ed" role="tab">HTML</a></li>

														</ul>
													</div>
													<div class="tab-content">






														<div class="tab-pane fade  active show " id="mdb_2d6dabf68aa6804ed51edd827fc2e4f4a9f6e8ed" role="tabpanel">
															<pre class="grey lighten-3 mb-0 line-numbers language-html">
																<code>

																	&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-rounded&#34;&gt;Primary&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-secondary btn-rounded&#34;&gt;Secondary&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-success btn-rounded&#34;&gt;Success&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-danger btn-rounded&#34;&gt;Danger&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-warning btn-rounded&#34;&gt;Warning&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-info btn-rounded&#34;&gt;Info&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-light btn-rounded&#34;&gt;Light&lt;/button&gt;
																	&lt;button type=&#34;button&#34; class=&#34;btn btn-dark btn-rounded&#34;&gt;Dark&lt;/button&gt;

																</code>
															</pre>
														</div>


													</div>
												</div>



											</section>
										</section>
										<!--Section: Code-->
									</section>
									<!--/Section: Rounded-->

									<hr class="my-5" />

									<!--Section: Rounded outline-->
									<section id="section-rounded-outline">
										<!--Section title-->
										<h2 class="mb-4">Rounded outline</h2>

										<!-- Section description -->
										<p>
											You can use <code>.btn-outline-*</code> and <code>.btn-rounded</code> together to make the
											button outline and rounded at the same time.
										</p>

										<!--Section: Demo-->
										<section class="pb-4">
											<div class="bg-white border rounded-5">
												<section class="p-4 text-center w-100">
													<button
													type="button"
													class="btn btn-outline-primary btn-rounded"
													data-mdb-ripple-color="dark"
													>
													Primary
												</button>
												<button
												type="button"
												class="btn btn-outline-secondary btn-rounded"
												data-mdb-ripple-color="dark"
												>
												Secondary
											</button>
											<button
											type="button"
											class="btn btn-outline-success btn-rounded"
											data-mdb-ripple-color="dark"
											>
											Success
										</button>
										<button type="button" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">
											Danger
										</button>
										<button
										type="button"
										class="btn btn-outline-warning btn-rounded"
										data-mdb-ripple-color="dark"
										>
										Warning
									</button>
									<button type="button" class="btn btn-outline-info btn-rounded" data-mdb-ripple-color="dark">
										Info
									</button>
									<button type="button" class="btn btn-outline-light btn-rounded" data-mdb-ripple-color="dark">
										Light
									</button>
									<button type="button" class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="dark">
										Dark
									</button>
								</section>


								<div class="p-4 text-center border-top">
									<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example5" role="button"
									aria-expanded="false" aria-controls="example5" data-ripple-color="hsl(0, 0%, 67%)"><i
									class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
									<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
										class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
									</div>

								</div>
							</section>
							<!--Section: Demo-->

							<!--Section: Code-->
							<section class="collapse" id="example5">
								<section class="pb-4">






									<div class="docs-pills border">
										<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
											<ul class="nav nav-pills p-2">



												<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_969702b1542701a27045fe83af281ef772e57bfb" role="tab">HTML</a></li>

											</ul>
										</div>
										<div class="tab-content">






											<div class="tab-pane fade  active show " id="mdb_969702b1542701a27045fe83af281ef772e57bfb" role="tabpanel">
												<pre class="grey lighten-3 mb-0 line-numbers language-html">
													<code>

														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-primary btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Primary
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-secondary btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Secondary
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-success btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Success
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-danger btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Danger
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-warning btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Warning
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-info btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Info
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-light btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Light
														&lt;/button&gt;
														&lt;button
														type=&#34;button&#34;
														class=&#34;btn btn-outline-dark btn-rounded&#34;
														data-mdb-ripple-color=&#34;dark&#34;
														&gt;
														Dark
														&lt;/button&gt;

													</code>
												</pre>
											</div>


										</div>
									</div>



								</section>
							</section>
							<!--Section: Code-->
						</section>
						<!--/Section: Rounded outline-->

						<hr class="my-5" />

						<!--Section: Floating-->
						<section id="section-floating">
							<!--Section title-->
							<h2 class="mb-4">Floating</h2>

							<!-- Section description -->
							<p>Use <code>.btn-floating</code> class to make a circle button.</p>

							<p>
								<strong>To make it works properly you have to put an icon inside.</strong> The text will not
								fit in. You can find hundreds of available icons in our
								<a href="/docs/standard/content-styles/icons/">icons docs</a>.
							</p>

							<!--Section: Demo-->
							<section class="pb-4">
								<div class="bg-white border rounded-5">
									<section class="p-4 text-center w-100">
										<button type="button" class="btn btn-primary btn-floating">
											<i class="fas fa-download"></i>
										</button>
									</section>


									<div class="p-4 text-center border-top">
										<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example6" role="button"
										aria-expanded="false" aria-controls="example6" data-ripple-color="hsl(0, 0%, 67%)"><i
										class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
										<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
											class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
										</div>

									</div>
								</section>
								<!--Section: Demo-->

								<!--Section: Code-->
								<section class="collapse" id="example6">
									<section class="pb-4">






										<div class="docs-pills border">
											<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
												<ul class="nav nav-pills p-2">



													<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_a60901bd4cabbecf2687dcf80d7439eaa98ab6e1" role="tab">HTML</a></li>

												</ul>
											</div>
											<div class="tab-content">






												<div class="tab-pane fade  active show " id="mdb_a60901bd4cabbecf2687dcf80d7439eaa98ab6e1" role="tabpanel">
													<pre class="grey lighten-3 mb-0 line-numbers language-html">
														<code>

															&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-floating&#34;&gt;
															&lt;i class=&#34;fas fa-download&#34;&gt;&lt;/i&gt;
															&lt;/button&gt;

														</code>
													</pre>
												</div>


											</div>
										</div>



									</section>
								</section>
								<!--Section: Code-->

								<p>
									You can apply almost all the same classes and attributes to the floating buttons as to the
									regular buttons - colors, ripples, sizes, outline, etc.
								</p>

								<!--Section: Demo-->
								<section class="pb-4">
									<div class="bg-white border rounded-5">
										<section class="p-4 text-center w-100">
											<button type="button" class="btn btn-primary btn-lg btn-floating">
												<i class="fab fa-facebook-f"></i>
											</button>
											<button
											type="button"
											class="btn btn-outline-success btn-floating"
											data-mdb-ripple-color="dark"
											>
											<i class="fas fa-star"></i>
										</button>
										<button type="button" class="btn btn-danger btn-floating">
											<i class="fas fa-magic"></i>
										</button>
										<button type="button" class="btn btn-dark btn-floating">
											<i class="fab fa-apple"></i>
										</button>
									</section>


									<div class="p-4 text-center border-top">
										<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example7" role="button"
										aria-expanded="false" aria-controls="example7" data-ripple-color="hsl(0, 0%, 67%)"><i
										class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
										<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
											class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
										</div>

									</div>
								</section>
								<!--Section: Demo-->

								<!--Section: Code-->
								<section class="collapse" id="example7">
									<section class="pb-4">






										<div class="docs-pills border">
											<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
												<ul class="nav nav-pills p-2">



													<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_4ae75f26c5bff9d2e2181f686ccf03eb1a3d8662" role="tab">HTML</a></li>

												</ul>
											</div>
											<div class="tab-content">






												<div class="tab-pane fade  active show " id="mdb_4ae75f26c5bff9d2e2181f686ccf03eb1a3d8662" role="tabpanel">
													<pre class="grey lighten-3 mb-0 line-numbers language-html">
														<code>

															&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-lg btn-floating&#34;&gt;
															&lt;i class=&#34;fab fa-facebook-f&#34;&gt;&lt;/i&gt;
															&lt;/button&gt;
															&lt;button
															type=&#34;button&#34;
															class=&#34;btn btn-outline-success btn-floating&#34;
															data-mdb-ripple-color=&#34;dark&#34;
															&gt;
															&lt;i class=&#34;fas fa-star&#34;&gt;&lt;/i&gt;
															&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-danger btn-floating&#34;&gt;
															&lt;i class=&#34;fas fa-magic&#34;&gt;&lt;/i&gt;
															&lt;/button&gt;
															&lt;button type=&#34;button&#34; class=&#34;btn btn-dark btn-floating&#34;&gt;
															&lt;i class=&#34;fab fa-apple&#34;&gt;&lt;/i&gt;
															&lt;/button&gt;

														</code>
													</pre>
												</div>


											</div>
										</div>



									</section>
								</section>
								<!--Section: Code-->
							</section>
							<!--/Section: Floating-->

							<hr class="my-5" />

							<!--Section: Fixed buttons-->
							<section id="section-fixed-buttons">
								<!-- Section title -->
								<h2 class="mb-4">Fixed buttons</h2>

								<!-- Description -->
								<p>
									Use <code>.fixed-action-btn</code> class to create a fixed button with a list of available
									options that shows on hover or click.
								</p>
								<p>See the live example of a fixed button in the bottom right corner of this page.</p>

								<p class="note note-light">
									<strong>Note:</strong> There are available <code>show</code>/<code>hide</code> methods to
									manually open and close the list. Read the <strong>API</strong> tab to find more info.
								</p>

								<!--Section: Demo-->

								<div class="fixed-action-btn" id="fixed1">
									<a class="btn btn-floating btn-primary btn-lg" style="background-color: #f44336;">
										<i class="fas fa-pencil-alt"></i>
									</a>

									<ul class="list-unstyled">
										<li>
											<a class="btn btn-primary btn-floating btn-lg" style="background-color: #f44336;"
											><i class="fas fa-star"></i
											></a>
										</li>
										<li>
											<a class="btn btn-primary btn-floating btn-lg" style="background-color: #fdd835;"
											><i class="fas fa-user"></i
											></a>
										</li>
										<li>
											<a class="btn btn-primary btn-floating btn-lg" style="background-color: #4caf50;"
											><i class="fas fa-envelope"></i
											></a>
										</li>
										<li>
											<a class="btn btn-primary btn-floating btn-lg" style="background-color: #2196f3;"
											><i class="fas fa-shopping-cart"></i
											></a>
										</li>
									</ul>
								</div>

								<section class="pb-4">
									<div class="bg-white border rounded-5">

										<div class="p-4 text-center">
											<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example111" role="button"
											aria-expanded="false" aria-controls="example111" data-ripple-color="hsl(0, 0%, 67%)"><i
											class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
											<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
												class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
											</div>

										</div>
									</section> 
									<section class="collapse" id="example111">





										<div class="docs-pills border">
											<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
												<ul class="nav nav-pills p-2">



													<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_445b14755bd9b854a8ff4e67e3e22edda778993f" role="tab">HTML</a></li>

												</ul>
											</div>
											<div class="tab-content">






												<div class="tab-pane fade  active show " id="mdb_445b14755bd9b854a8ff4e67e3e22edda778993f" role="tabpanel">
													<pre class="grey lighten-3 mb-0 line-numbers language-html">
														<code>


															&lt;div class=&#34;fixed-action-btn&#34; id=&#34;fixed1&#34;&gt;
															&lt;a class=&#34;btn btn-floating btn-primary btn-lg&#34; style=&#34;background-color: #f44336;&#34;&gt;
															&lt;i class=&#34;fas fa-pencil-alt&#34;&gt;&lt;/i&gt;
															&lt;/a&gt;

															&lt;ul class=&#34;list-unstyled&#34;&gt;
															&lt;li&gt;
															&lt;a class=&#34;btn btn-primary btn-floating btn-lg&#34; style=&#34;background-color: #f44336;&#34;
															&gt;&lt;i class=&#34;fas fa-star&#34;&gt;&lt;/i
															&gt;&lt;/a&gt;
															&lt;/li&gt;
															&lt;li&gt;
															&lt;a class=&#34;btn btn-primary btn-floating btn-lg&#34; style=&#34;background-color: #fdd835;&#34;
															&gt;&lt;i class=&#34;fas fa-user&#34;&gt;&lt;/i
															&gt;&lt;/a&gt;
															&lt;/li&gt;
															&lt;li&gt;
															&lt;a class=&#34;btn btn-primary btn-floating btn-lg&#34; style=&#34;background-color: #4caf50;&#34;
															&gt;&lt;i class=&#34;fas fa-envelope&#34;&gt;&lt;/i
															&gt;&lt;/a&gt;
															&lt;/li&gt;
															&lt;li&gt;
															&lt;a class=&#34;btn btn-primary btn-floating btn-lg&#34; style=&#34;background-color: #2196f3;&#34;
															&gt;&lt;i class=&#34;fas fa-shopping-cart&#34;&gt;&lt;/i
															&gt;&lt;/a&gt;
															&lt;/li&gt;
															&lt;/ul&gt;
															&lt;/div&gt;

														</code>
													</pre>
												</div>



											</div>
										</div>



									</section>
									<!--Section: Demo-->


									<!--Section: Code-->
									<section class="collapse" id="example8">
										<section class="pb-4">

											<!-- prettier-ignore -->





											<div class="docs-pills border">
												<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
													<ul class="nav nav-pills p-2">



														<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_3fd04d78b23a86b51131908d27c28b20497c39cf" role="tab">HTML</a></li>

													</ul>
												</div>
												<div class="tab-content">






													<div class="tab-pane fade  active show " id="mdb_3fd04d78b23a86b51131908d27c28b20497c39cf" role="tabpanel">
														<pre class="grey lighten-3 mb-0 line-numbers language-html">
															<code>

																&lt;div class=&#34;fixed-action-btn&#34;&gt;
																&lt;a
																class=&#34;btn btn-floating btn-primary btn-lg&#34;
																style=&#34;background-color: #f44336&#34;
																&gt;
																&lt;i class=&#34;fas fa-pencil-alt&#34;&gt;&lt;/i&gt;
																&lt;/a&gt;

																&lt;ul class=&#34;list-unstyled&#34;&gt;
																&lt;li&gt;
																&lt;a
																class=&#34;btn btn-primary btn-floating btn-lg&#34;
																style=&#34;background-color: #f44336&#34;
																&gt;&lt;i class=&#34;fas fa-star&#34;&gt;&lt;/i
																&gt;&lt;/a&gt;
																&lt;/li&gt;
																&lt;li&gt;
																&lt;a
																class=&#34;btn btn-primary btn-floating btn-lg&#34;
																style=&#34;background-color: #fdd835&#34;
																&gt;&lt;i class=&#34;fas fa-user&#34;&gt;&lt;/i
																&gt;&lt;/a&gt;
																&lt;/li&gt;
																&lt;li&gt;
																&lt;a
																class=&#34;btn btn-primary btn-floating btn-lg&#34;
																style=&#34;background-color: #4caf50&#34;
																&gt;&lt;i class=&#34;fas fa-envelope&#34;&gt;&lt;/i
																&gt;&lt;/a&gt;
																&lt;/li&gt;
																&lt;li&gt;
																&lt;a
																class=&#34;btn btn-primary btn-floating btn-lg&#34;
																style=&#34;background-color: #2196f3&#34;
																&gt;&lt;i class=&#34;fas fa-shopping-cart&#34;&gt;&lt;/i
																&gt;&lt;/a&gt;
																&lt;/li&gt;
																&lt;/ul&gt;
																&lt;/div&gt;

															</code>
														</pre>
													</div>


												</div>
											</div>



										</section>
									</section>
									<!--Section: Code-->
								</section>
								<!--/Section: Fixed buttons-->

								<hr class="my-5" />

								<!--Section: Social-->
								<section id="section-social">
									<!--Section title-->
									<h2 class="mb-4">Social</h2>

									<!-- Section description -->
									<p>
										Combining our icons and custom colors you can create social buttons. Combining our icons and
										custom colors you can create social buttons. See all available icons in our
										<a href="https://mdbootstrap.com/docs/standard/content-styles/icons/">icons search</a> (check
										"brands" to filter brand icons).
									</p>

									<p>
										In the example below, we place a Facebook icon
										<code>&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;</code> inside the button and set
										a <strong>background-color</strong> to <code>#3B5998</code> (facebook brand color).
									</p>

									<!--Section: Demo-->
									<section class="pb-4">
										<div class="bg-white border rounded-5">
											<section class="p-4 text-center w-100">
												<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
												><i class="fab fa-facebook-f"></i
												></a>
											</section>


											<div class="p-4 text-center border-top">
												<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example9" role="button"
												aria-expanded="false" aria-controls="example9" data-ripple-color="hsl(0, 0%, 67%)"><i
												class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
												<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
													class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
												</div>

											</div>
										</section>
										<!--Section: Demo-->

										<!--Section: Code-->
										<section class="collapse" id="example9">
											<section class="pb-4">






												<div class="docs-pills border">
													<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
														<ul class="nav nav-pills p-2">



															<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_5b07324f279ade817d7e743b5ae76f9736dc69d5" role="tab">HTML</a></li>

														</ul>
													</div>
													<div class="tab-content">






														<div class="tab-pane fade  active show " id="mdb_5b07324f279ade817d7e743b5ae76f9736dc69d5" role="tabpanel">
															<pre class="grey lighten-3 mb-0 line-numbers language-html">
																<code>

																	&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #3b5998;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																	&gt;&lt;i class=&#34;fab fa-facebook-f&#34;&gt;&lt;/i
																	&gt;&lt;/a&gt;

																</code>
															</pre>
														</div>


													</div>
												</div>



											</section>
										</section>
										<!--Section: Code-->

										<!--Subsection: Sample brands-->
										<section id="subsection-sample-brands">
											<!--Subsection title-->
											<h4 class="mt-5">Sample brands</h4>

											<!--Description-->
											<p>A few the most popular brands in form of social buttons.</p>

											<!--Section: Demo-->
											<section class="pb-4">
												<div class="bg-white border rounded-5">

													<section class="p-4 text-center w-100">
														<!-- Facebook -->
														<a class="btn btn-primary m-1" style="background-color: #3b5998;" href="#!" role="button"
														><i class="fab fa-facebook-f"></i
														></a>

														<!-- Twitter -->
														<a class="btn btn-primary m-1" style="background-color: #55acee;" href="#!" role="button"
														><i class="fab fa-twitter"></i
														></a>

														<!-- Google -->
														<a class="btn btn-primary m-1" style="background-color: #dd4b39;" href="#!" role="button"
														><i class="fab fa-google"></i
														></a>

														<!-- Instagram -->
														<a class="btn btn-primary m-1" style="background-color: #ac2bac;" href="#!" role="button"
														><i class="fab fa-instagram"></i
														></a>

														<!-- Linkedin -->
														<a class="btn btn-primary m-1" style="background-color: #0082ca;" href="#!" role="button"
														><i class="fab fa-linkedin-in"></i
														></a>

														<!-- Pinterest -->
														<a class="btn btn-primary m-1" style="background-color: #c61118;" href="#!" role="button"
														><i class="fab fa-pinterest"></i
														></a>

														<!-- Vkontakte -->
														<a class="btn btn-primary m-1" style="background-color: #4c75a3;" href="#!" role="button"
														><i class="fab fa-vk"></i
														></a>

														<!-- Stack overflow -->
														<a class="btn btn-primary m-1" style="background-color: #ffac44;" href="#!" role="button"
														><i class="fab fa-stack-overflow"></i
														></a>

														<!-- Youtube -->
														<a class="btn btn-primary m-1" style="background-color: #ed302f;" href="#!" role="button"
														><i class="fab fa-youtube"></i
														></a>

														<!-- Slack -->
														<a class="btn btn-primary m-1" style="background-color: #481449;" href="#!" role="button"
														><i class="fab fa-slack-hash"></i
														></a>

														<!-- Github -->
														<a class="btn btn-primary m-1" style="background-color: #333333;" href="#!" role="button"
														><i class="fab fa-github"></i
														></a>

														<!-- Dribbble -->
														<a class="btn btn-primary m-1" style="background-color: #ec4a89;" href="#!" role="button"
														><i class="fab fa-dribbble"></i
														></a>

														<!-- Reddit -->
														<a class="btn btn-primary m-1" style="background-color: #ff4500;" href="#!" role="button"
														><i class="fab fa-reddit-alien"></i
														></a>

														<!-- Whatsapp -->
														<a class="btn btn-primary m-1" style="background-color: #25d366;" href="#!" role="button"
														><i class="fab fa-whatsapp"></i
														></a>
													</section>


													<div class="p-4 text-center border-top">
														<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example10" role="button"
														aria-expanded="false" aria-controls="example10" data-ripple-color="hsl(0, 0%, 67%)"><i
														class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
														<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
															class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
														</div>

													</div>
												</section>
												<!--Section: Demo-->

											</section>
											<!--Section: Code-->
											<section class="collapse" id="example10">
												<section class="pb-4">






													<div class="docs-pills border">
														<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
															<ul class="nav nav-pills p-2">



																<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_5df6b795db97ad225faf61cbdfc4fde0aa816ac1" role="tab">HTML</a></li>

															</ul>
														</div>
														<div class="tab-content">






															<div class="tab-pane fade  active show " id="mdb_5df6b795db97ad225faf61cbdfc4fde0aa816ac1" role="tabpanel">
																<pre class="grey lighten-3 mb-0 line-numbers language-html">
																	<code>

																		&lt;!-- Facebook --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #3b5998;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-facebook-f&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Twitter --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #55acee;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-twitter&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Google --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #dd4b39;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-google&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Instagram --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #ac2bac;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-instagram&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Linkedin --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #0082ca;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-linkedin-in&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Pinterest --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #c61118;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-pinterest&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Vkontakte --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #4c75a3;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-vk&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Stack overflow --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #ffac44;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-stack-overflow&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Youtube --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #ed302f;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-youtube&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Slack --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #481449;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-slack-hash&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Github --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #333333;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-github&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Dribbble --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #ec4a89;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-dribbble&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Reddit --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #ff4500;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-reddit-alien&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																		&lt;!-- Whatsapp --&gt;
																		&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #25d366;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																		&gt;&lt;i class=&#34;fab fa-whatsapp&#34;&gt;&lt;/i
																		&gt;&lt;/a&gt;

																	</code>
																</pre>
															</div>


														</div>
													</div>



												</section>
											</section>
											<!--Section: Code-->
										</section>
										<!--Subsection: Sample brands-->

										<!--Subsection: Floating-->
										<section id="subsection-floating-social">
											<!--Subsection title-->
											<h4 class="mt-5">Floating social</h4>

											<!--Description-->
											<p>
												By adding <code>.btn-floating</code> class you can create a nice, floating social button.
											</p>

											<!--Section: Demo-->
											<section class="pb-4">
												<div class="bg-white border rounded-5">
													<section class="p-4 text-center w-100">
														<a
														class="btn btn-primary btn-lg btn-floating"
														style="background-color: #ac2bac;"
														href="#!"
														role="button"
														><i class="fab fa-instagram"></i
														></a>
													</section>


													<div class="p-4 text-center border-top">
														<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example11" role="button"
														aria-expanded="false" aria-controls="example11" data-ripple-color="hsl(0, 0%, 67%)"><i
														class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
														<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
															class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
														</div>

													</div>
												</section>
												<!--Section: Demo-->
												<!--Section: Code-->
												<section class="collapse" id="example11">
													<section class="pb-4">






														<div class="docs-pills border">
															<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																<ul class="nav nav-pills p-2">



																	<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_6607d40d2d239b39896d7f134e34a5f9325bdbb8" role="tab">HTML</a></li>

																</ul>
															</div>
															<div class="tab-content">






																<div class="tab-pane fade  active show " id="mdb_6607d40d2d239b39896d7f134e34a5f9325bdbb8" role="tabpanel">
																	<pre class="grey lighten-3 mb-0 line-numbers language-html">
																		<code>

																			&lt;a
																			class=&#34;btn btn-primary btn-lg btn-floating&#34;
																			style=&#34;background-color: #ac2bac;&#34;
																			href=&#34;#!&#34;
																			role=&#34;button&#34;
																			&gt;&lt;i class=&#34;fab fa-instagram&#34;&gt;&lt;/i
																			&gt;&lt;/a&gt;

																		</code>
																	</pre>
																</div>


															</div>
														</div>



													</section>
												</section>
												<!--Section: Code-->

											</section>
											<!--Subsection: Floating-->

											<!--Subsection: Text-->
											<section id="subsection-text">
												<!--Subsection title-->
												<h4 class="mt-5">Text</h4>

												<!--Description-->
												<p>
													You don't need to use only an icon. You can add text to the button. Remember to add some
													spacing classes (for example <code>.me-2</code>) to provide a proper space between icon and
													text.
												</p>

												<!--Section: Demo-->
												<section class="pb-4">
													<div class="bg-white border rounded-5">
														<section class="p-4 text-center w-100">
															<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"
															><i class="fab fa-twitter me-2"></i>Twitter</a
															>
														</section>


														<div class="p-4 text-center border-top">
															<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example12" role="button"
															aria-expanded="false" aria-controls="example12" data-ripple-color="hsl(0, 0%, 67%)"><i
															class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
															<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
															</div>

														</div>
													</section>
													<!--Section: Demo-->

													<!--Section: Code-->
													<section class="collapse" id="example12">
														<section class="pb-4">






															<div class="docs-pills border">
																<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																	<ul class="nav nav-pills p-2">



																		<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_e82858b7fb1e1b187a0ce5fda340b713af99f4a9" role="tab">HTML</a></li>

																	</ul>
																</div>
																<div class="tab-content">






																	<div class="tab-pane fade  active show " id="mdb_e82858b7fb1e1b187a0ce5fda340b713af99f4a9" role="tabpanel">
																		<pre class="grey lighten-3 mb-0 line-numbers language-html">
																			<code>

																				&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #55acee;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																				&gt;&lt;i class=&#34;fab fa-twitter me-2&#34;&gt;&lt;/i&gt;Twitter&lt;/a
																				&gt;

																			</code>
																		</pre>
																	</div>


																</div>
															</div>



														</section>
														<!--Section: Code-->
													</section>
													<!--Subsection: Text-->

													<!--Subsection: Only icon-->
													<section id="subsection-only-icon">
														<!--Subsection title-->
														<h4 class="mt-5">Only icon</h4>

														<!--Description-->
														<p>
															By removing button classes and replacing <code>background-color</code> with
															<code>color</code> you can create minimalistic, clickable icons.
														</p>

														<!--Section: Demo-->
														<section class="pb-4">
															<div class="bg-white border rounded-5">
																<section class="p-4 text-center w-100">
																	<!-- Facebook -->
																	<a class="m-1" style="color: #3b5998;" href="#!" role="button"
																	><i class="fab fa-facebook-f fa-lg"></i
																	></a>

																	<!-- Twitter -->
																	<a class="m-1" style="color: #55acee;" href="#!" role="button"
																	><i class="fab fa-twitter fa-lg"></i
																	></a>

																	<!-- Google -->
																	<a class="m-1" style="color: #dd4b39;" href="#!" role="button"
																	><i class="fab fa-google fa-lg"></i
																	></a>

																	<!-- Instagram -->
																	<a class="m-1" style="color: #ac2bac;" href="#!" role="button"
																	><i class="fab fa-instagram fa-lg"></i
																	></a>
																</section>


																<div class="p-4 text-center border-top">
																	<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example13" role="button"
																	aria-expanded="false" aria-controls="example13" data-ripple-color="hsl(0, 0%, 67%)"><i
																	class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																	<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																		class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																	</div>

																</div>
															</section>
															<!--Section: Demo-->

															<!--Section: Code-->
															<section class="collapse" id="example13">
																<section class="pb-4">






																	<div class="docs-pills border">
																		<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																			<ul class="nav nav-pills p-2">



																				<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_dbf9476642efad1ab59c5a3b989cb7a16af3b880" role="tab">HTML</a></li>

																			</ul>
																		</div>
																		<div class="tab-content">






																			<div class="tab-pane fade  active show " id="mdb_dbf9476642efad1ab59c5a3b989cb7a16af3b880" role="tabpanel">
																				<pre class="grey lighten-3 mb-0 line-numbers language-html">
																					<code>

																						&lt;!-- Facebook --&gt;
																						&lt;a style=&#34;color: #3b5998;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																						&gt;&lt;i class=&#34;fab fa-facebook-f fa-lg&#34;&gt;&lt;/i
																						&gt;&lt;/a&gt;

																						&lt;!-- Twitter --&gt;
																						&lt;a style=&#34;color: #55acee;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																						&gt;&lt;i class=&#34;fab fa-twitter fa-lg&#34;&gt;&lt;/i
																						&gt;&lt;/a&gt;

																						&lt;!-- Google --&gt;
																						&lt;a style=&#34;color: #dd4b39;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																						&gt;&lt;i class=&#34;fab fa-google fa-lg&#34;&gt;&lt;/i
																						&gt;&lt;/a&gt;

																						&lt;!-- Instagram --&gt;
																						&lt;a style=&#34;color: #ac2bac;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																						&gt;&lt;i class=&#34;fab fa-instagram fa-lg&#34;&gt;&lt;/i
																						&gt;&lt;/a&gt;

																					</code>
																				</pre>
																			</div>


																		</div>
																	</div>



																</section>
																<!--Section: Code-->
															</section>
															<!--Subsection: Only icon-->

															<!--Subsection: Notifications-->
															<section id="subsection-notifications">
																<!--Subsection title-->
																<h4 class="mt-5">Notifications</h4>

																<!--Description-->
																<p>By using a badge you can create a button with a notification to provide a counter.</p>

																<!--Section: Demo-->
																<section class="pb-4">
																	<div class="bg-white border rounded-5">
																		<section class="p-4 text-center w-100">
																			<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"
																			><i class="fab fa-facebook-f"></i><span class="badge bg-danger ms-2">8</span></a
																			>
																		</section>


																		<div class="p-4 text-center border-top">
																			<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example14" role="button"
																			aria-expanded="false" aria-controls="example14" data-ripple-color="hsl(0, 0%, 67%)"><i
																			class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																			<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																				class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																			</div>

																		</div>
																	</section>
																	<!--Section: Demo-->

																	<!--Section: Code-->
																	<section class="collapse" id="example14">
																		<section class="pb-4">






																			<div class="docs-pills border">
																				<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																					<ul class="nav nav-pills p-2">



																						<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_7880a9ca0967c1e3d835954cf15ca54aef1c3067" role="tab">HTML</a></li>

																					</ul>
																				</div>
																				<div class="tab-content">






																					<div class="tab-pane fade  active show " id="mdb_7880a9ca0967c1e3d835954cf15ca54aef1c3067" role="tabpanel">
																						<pre class="grey lighten-3 mb-0 line-numbers language-html">
																							<code>

																								&lt;a class=&#34;btn btn-primary&#34; style=&#34;background-color: #3b5998;&#34; href=&#34;#!&#34; role=&#34;button&#34;
																								&gt;&lt;i class=&#34;fab fa-facebook-f&#34;&gt;&lt;/i&gt;&lt;span class=&#34;badge bg-danger ms-2&#34;&gt;8&lt;/span&gt;&lt;/a
																								&gt;

																							</code>
																						</pre>
																					</div>


																				</div>
																			</div>



																		</section>
																		<!--Section: Code-->
																	</section>
																	<!--Subsection: Notifications-->
																</section>
																<!--/Section: Social-->

																<hr class="my-5" />

																<!--Section: Tags-->
																<section id="section-tags">
																	<!--Section title-->
																	<h2 class="mb-4">Tags</h2>

																	<!-- Section description -->
																	<p>
																		The <code>.btn</code> classes are designed to be used with the
																		<code>&lt;button&gt;</code> element. However, you can also use these classes on
																		<code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply
																		a slightly different rendering).
																	</p>

																	<p>
																		When using button classes on <code>&lt;a&gt;</code> elements that are used to trigger in-page
																		functionality (like collapsing content), rather than linking to new pages or sections within
																		the current page, these links should be given a <code>role="button"</code> to appropriately
																		convey their purpose to assistive technologies such as screen readers.
																	</p>

																	<!--Section: Demo-->
																	<section class="pb-4">
																		<div class="bg-white border rounded-5">
																			<section class="p-4 text-center w-100">
																				<a class="btn btn-primary" href="#" role="button">Link</a>
																				<button class="btn btn-primary" type="submit">Button</button>
																				<input class="btn btn-primary" type="button" value="Input" />
																				<input class="btn btn-primary" type="submit" value="Submit" />
																				<input class="btn btn-primary" type="reset" value="Reset" />
																			</section>


																			<div class="p-4 text-center border-top">
																				<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example15" role="button"
																				aria-expanded="false" aria-controls="example15" data-ripple-color="hsl(0, 0%, 67%)"><i
																				class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																				<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																					class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																				</div>

																			</div>
																		</section>
																		<!--Section: Demo-->

																		<!--Section: Code-->
																		<section class="collapse" id="example15">
																			<section class="pb-4">






																				<div class="docs-pills border">
																					<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																						<ul class="nav nav-pills p-2">



																							<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_d4baffe36d39042aa524d8da1773f6d80e8d5128" role="tab">HTML</a></li>

																						</ul>
																					</div>
																					<div class="tab-content">






																						<div class="tab-pane fade  active show " id="mdb_d4baffe36d39042aa524d8da1773f6d80e8d5128" role="tabpanel">
																							<pre class="grey lighten-3 mb-0 line-numbers language-html">
																								<code>

																									&lt;a class=&#34;btn btn-primary&#34; href=&#34;#&#34; role=&#34;button&#34;&gt;Link&lt;/a&gt;
																									&lt;button class=&#34;btn btn-primary&#34; type=&#34;submit&#34;&gt;Button&lt;/button&gt;
																									&lt;input class=&#34;btn btn-primary&#34; type=&#34;button&#34; value=&#34;Input&#34; /&gt;
																									&lt;input class=&#34;btn btn-primary&#34; type=&#34;submit&#34; value=&#34;Submit&#34; /&gt;
																									&lt;input class=&#34;btn btn-primary&#34; type=&#34;reset&#34; value=&#34;Reset&#34; /&gt;

																								</code>
																							</pre>
																						</div>


																					</div>
																				</div>



																			</section>
																		</section>
																		<!--Section: Code-->
																	</section>
																	<!--/Section: -->

																	<hr class="my-5" />

																	<!--Section: Sizes-->
																	<section id="section-sizes">
																		<!--Section title-->
																		<h2 class="mb-4">Sizes</h2>

																		<!-- Section description -->
																		<p>
																			Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for
																			additional sizes.
																		</p>

																		<!--Section: Demo-->
																		<section class="pb-4">
																			<div class="bg-white border rounded-5">
																				<section class="p-4 text-center w-100">
																					<button type="button" class="btn btn-primary btn-sm">Button</button>
																					<button type="button" class="btn btn-primary">Button</button>
																					<button type="button" class="btn btn-primary btn-lg">Button</button>
																				</section>


																				<div class="p-4 text-center border-top">
																					<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example16" role="button"
																					aria-expanded="false" aria-controls="example16" data-ripple-color="hsl(0, 0%, 67%)"><i
																					class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																					<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																						class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																					</div>

																				</div>
																			</section>
																			<!--Section: Demo-->

																			<!--Section: Code-->
																			<section class="collapse" id="example16">
																				<section class="pb-4">






																					<div class="docs-pills border">
																						<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																							<ul class="nav nav-pills p-2">



																								<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_d336e29a4f8a8030194007ab93b6fbf132f1a98d" role="tab">HTML</a></li>

																							</ul>
																						</div>
																						<div class="tab-content">






																							<div class="tab-pane fade  active show " id="mdb_d336e29a4f8a8030194007ab93b6fbf132f1a98d" role="tabpanel">
																								<pre class="grey lighten-3 mb-0 line-numbers language-html">
																									<code>

																										&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-sm&#34;&gt;Button&lt;/button&gt;
																										&lt;button type=&#34;button&#34; class=&#34;btn btn-primary&#34;&gt;Button&lt;/button&gt;
																										&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-lg&#34;&gt;Button&lt;/button&gt;

																									</code>
																								</pre>
																							</div>


																						</div>
																					</div>



																				</section>
																			</section>
																			<!--Section: Code-->
																		</section>
																		<!--/Section: Sizes-->

																		<hr class="my-5" />

																		<!--Section: Active state-->
																		<section id="section-active-state">
																			<!--Section title-->
																			<h2 class="mb-4">Active state</h2>

																			<!-- Section description -->
																			<p>Add <code>.active</code> class to make the button look pressed.</p>

																			<!--Section: Demo-->
																			<section class="pb-4">
																				<div class="bg-white border rounded-5">
																					<section class="p-4 text-center w-100">
																						<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"
																						>Primary link</a
																						>
																						<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
																					</section>


																					<div class="p-4 text-center border-top">
																						<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example17" role="button"
																						aria-expanded="false" aria-controls="example17" data-ripple-color="hsl(0, 0%, 67%)"><i
																						class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																						<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																							class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																						</div>

																					</div>
																				</section>
																				<!--Section: Demo-->

																				<!--Section: Code-->
																				<section class="collapse" id="example17">
																					<section class="pb-4">






																						<div class="docs-pills border">
																							<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																								<ul class="nav nav-pills p-2">



																									<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_80ad543a02aaaba054de5e5943c7ec9971e4e2e4" role="tab">HTML</a></li>

																								</ul>
																							</div>
																							<div class="tab-content">






																								<div class="tab-pane fade  active show " id="mdb_80ad543a02aaaba054de5e5943c7ec9971e4e2e4" role="tabpanel">
																									<pre class="grey lighten-3 mb-0 line-numbers language-html">
																										<code>

																											&lt;a href=&#34;#&#34; class=&#34;btn btn-primary btn-lg active&#34; role=&#34;button&#34; aria-pressed=&#34;true&#34;
																											&gt;Primary link&lt;/a
																											&gt;
																											&lt;a href=&#34;#&#34; class=&#34;btn btn-secondary btn-lg active&#34; role=&#34;button&#34; aria-pressed=&#34;true&#34;
																											&gt;Link&lt;/a
																											&gt;

																										</code>
																									</pre>
																								</div>


																							</div>
																						</div>



																					</section>
																				</section>
																				<!--Section: Code-->
																			</section>
																			<!--/Section: Active state-->

																			<hr class="my-5" />

																			<!--Section: Disabled state-->
																			<section id="section-disabled-state">
																				<!--Section title-->
																				<h2 class="mb-4">Disabled state</h2>

																				<!-- Section description -->
																				<p>
																					Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any
																					<code>&lt;button&gt;</code> element. Disabled buttons have
																					<code>pointer-events: none</code> applied to, preventing hover and active states from
																					triggering.
																				</p>

																				<!--Section: Demo-->
																				<section class="pb-4">
																					<div class="bg-white border rounded-5">
																						<section class="p-4 text-center w-100">
																							<button type="button" class="btn btn-primary btn-lg" disabled>Primary button</button>
																							<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
																						</section>


																						<div class="p-4 text-center border-top">
																							<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example18" role="button"
																							aria-expanded="false" aria-controls="example18" data-ripple-color="hsl(0, 0%, 67%)"><i
																							class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																							<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																								class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																							</div>

																						</div>
																					</section>
																					<!--Section: Demo-->

																					<!--Section: Code-->
																					<section class="collapse" id="example18">
																						<section class="pb-4">






																							<div class="docs-pills border">
																								<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																									<ul class="nav nav-pills p-2">



																										<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_a5ed2598f1559684fe3cec18832d44e2539f2696" role="tab">HTML</a></li>

																									</ul>
																								</div>
																								<div class="tab-content">






																									<div class="tab-pane fade  active show " id="mdb_a5ed2598f1559684fe3cec18832d44e2539f2696" role="tabpanel">
																										<pre class="grey lighten-3 mb-0 line-numbers language-html">
																											<code>

																												&lt;button type=&#34;button&#34; class=&#34;btn btn-primary btn-lg&#34; disabled&gt;Primary button&lt;/button&gt;
																												&lt;button type=&#34;button&#34; class=&#34;btn btn-secondary btn-lg&#34; disabled&gt;Button&lt;/button&gt;

																											</code>
																										</pre>
																									</div>


																								</div>
																							</div>



																						</section>
																					</section>
																					<!--Section: Code-->

																					<p>Disabled buttons using the <code>&lt;a&gt;</code> element behave a bit different:</p>

																					<ul>
																						<li>
																							<code>&lt;a&gt;</code>s don’t support the <code>disabled</code> attribute, so you must add
																							the <code>.disabled</code> class to make it visually appear disabled.
																						</li>
																						<li>
																							Some future-friendly styles are included to disable all
																							<code>pointer-events</code> on anchor buttons. In browsers which support that property, you
																							won’t see the disabled cursor at all.
																						</li>
																						<li>
																							Disabled buttons should include the
																							<code>aria-disabled="true"</code> attribute to indicate the state of the element to
																							assistive technologies.
																						</li>
																					</ul>

																					<!--Section: Demo-->
																					<section class="pb-4">
																						<div class="bg-white border rounded-5">
																							<section class="p-4 text-center w-100">
																								<a
																								href="#"
																								class="btn btn-primary btn-lg disabled"
																								tabindex="-1"
																								role="button"
																								aria-disabled="true"
																								>Primary link</a
																								>
																								<a
																								href="#"
																								class="btn btn-secondary btn-lg disabled"
																								tabindex="-1"
																								role="button"
																								aria-disabled="true"
																								>Link</a
																								>
																							</section>


																							<div class="p-4 text-center border-top">
																								<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example19" role="button"
																								aria-expanded="false" aria-controls="example19" data-ripple-color="hsl(0, 0%, 67%)"><i
																								class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																								<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																									class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																								</div>

																							</div>
																						</section>
																						<!--Section: Demo-->

																						<!--Section: Code-->
																						<section class="collapse" id="example19">
																							<section class="pb-4">






																								<div class="docs-pills border">
																									<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																										<ul class="nav nav-pills p-2">



																											<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_3e633325ff50d10ccc92a79acf137bb2c2b9df5c" role="tab">HTML</a></li>

																										</ul>
																									</div>
																									<div class="tab-content">






																										<div class="tab-pane fade  active show " id="mdb_3e633325ff50d10ccc92a79acf137bb2c2b9df5c" role="tabpanel">
																											<pre class="grey lighten-3 mb-0 line-numbers language-html">
																												<code>

																													&lt;a
																													href=&#34;#&#34;
																													class=&#34;btn btn-primary btn-lg disabled&#34;
																													tabindex=&#34;-1&#34;
																													role=&#34;button&#34;
																													aria-disabled=&#34;true&#34;
																													&gt;Primary link&lt;/a
																													&gt;
																													&lt;a
																													href=&#34;#&#34;
																													class=&#34;btn btn-secondary btn-lg disabled&#34;
																													tabindex=&#34;-1&#34;
																													role=&#34;button&#34;
																													aria-disabled=&#34;true&#34;
																													&gt;Link&lt;/a
																													&gt;

																												</code>
																											</pre>
																										</div>


																									</div>
																								</div>



																							</section>
																						</section>
																						<!--Section: Code-->
																						<p class="note note-warning">
																							<strong>Link functionality caveat:</strong>
																							<br />
																							The <code>.disabled</code> class uses <code>pointer-events: none</code> to try to disable the
																							link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized.
																							In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard
																							navigation remains unaffected, meaning that sighted keyboard users and users of assistive
																							technologies will still be able to activate these links. So to be safe, add a
																							<code>tabindex="-1"</code> attribute on these links (to prevent them from receiving keyboard
																							focus) and use custom JavaScript to disable their functionality.
																						</p>
																					</section>
																					<!--/Section: Disabled state-->

																					<hr class="my-5" />

																					<!--Section: Toggle states-->
																					<section id="section-block-buttons">
																						<!--Section title-->
																						<h2 class="mb-4">Block buttons</h2>

																						<!-- Section description -->
																						<p>
																							Create responsive stacks of full-width, “block buttons” like those in Bootstrap 4 with a mix
																							of our display and gap utilities. By using utilities instead of button specific classes, we
																							have much greater control over spacing, alignment, and responsive behaviors.
																						</p>

																						<!--Section: Demo-->
																						<section class="pb-4">
																							<div class="bg-white border rounded-5">
																								<section class="p-4 text-center w-100">
																									<div class="d-grid gap-2">
																										<button class="btn btn-primary" type="button">Button</button>
																										<button class="btn btn-primary" type="button">Button</button>
																									</div>
																								</section>


																								<div class="p-4 text-center border-top">
																									<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example20" role="button"
																									aria-expanded="false" aria-controls="example20" data-ripple-color="hsl(0, 0%, 67%)"><i
																									class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																									<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																										class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																									</div>

																								</div>
																							</section>
																							<!--Section: Demo-->

																							<!--Section: Code-->
																							<section class="collapse" id="example20">
																								<section class="pb-4">






																									<div class="docs-pills border">
																										<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																											<ul class="nav nav-pills p-2">



																												<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_24f4db106e4a0e3f01ca3b90edc2129ac37e279f" role="tab">HTML</a></li>

																											</ul>
																										</div>
																										<div class="tab-content">






																											<div class="tab-pane fade  active show " id="mdb_24f4db106e4a0e3f01ca3b90edc2129ac37e279f" role="tabpanel">
																												<pre class="grey lighten-3 mb-0 line-numbers language-html">
																													<code>

																														&lt;div class=&#34;d-grid gap-2&#34;&gt;
																														&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																														&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																														&lt;/div&gt;

																													</code>
																												</pre>
																											</div>


																										</div>
																									</div>



																								</section>
																							</section>
																							<!--Section: Code-->

																							<p>
																								Here we create a responsive variation, starting with vertically stacked buttons until the
																								<code>md</code> breakpoint, where <code>.d-md-block</code> replaces the
																								<code>.d-grid</code> class, thus nullifying the <code>gap-2</code> utility. Resize your
																								browser to see them change.
																							</p>

																							<!--Section: Demo-->
																							<section class="pb-4">
																								<div class="bg-white border rounded-5">
																									<section class="p-4 text-center w-100">
																										<div class="d-grid gap-2 d-md-block">
																											<button class="btn btn-primary" type="button">Button</button>
																											<button class="btn btn-primary" type="button">Button</button>
																										</div>
																									</section>


																									<div class="p-4 text-center border-top">
																										<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example21" role="button"
																										aria-expanded="false" aria-controls="example21" data-ripple-color="hsl(0, 0%, 67%)"><i
																										class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																										<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																											class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																										</div>

																									</div>
																								</section>
																								<!--Section: Demo-->

																								<!--Section: Code-->
																								<section class="collapse" id="example21">
																									<section class="pb-4">






																										<div class="docs-pills border">
																											<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																												<ul class="nav nav-pills p-2">



																													<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_dc5a9ebc9238b9d5650e043373177d68696f4c4e" role="tab">HTML</a></li>

																												</ul>
																											</div>
																											<div class="tab-content">






																												<div class="tab-pane fade  active show " id="mdb_dc5a9ebc9238b9d5650e043373177d68696f4c4e" role="tabpanel">
																													<pre class="grey lighten-3 mb-0 line-numbers language-html">
																														<code>

																															&lt;div class=&#34;d-grid gap-2 d-md-block&#34;&gt;
																															&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																															&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																															&lt;/div&gt;

																														</code>
																													</pre>
																												</div>


																											</div>
																										</div>



																									</section>
																								</section>
																								<!--Section: Code-->

																								<p>
																									You can adjust the width of your block buttons with grid column width classes. For example,
																									for a half-width “block button”, use <code>.col-6</code>. Center it horizontally with
																									<code>.mx-auto</code>, too.
																								</p>

																								<!--Section: Demo-->
																								<section class="pb-4">
																									<div class="bg-white border rounded-5">
																										<section class="p-4 text-center w-100">
																											<div class="d-grid gap-2 col-6 mx-auto">
																												<button class="btn btn-primary" type="button">Button</button>
																												<button class="btn btn-primary" type="button">Button</button>
																											</div>
																										</section>


																										<div class="p-4 text-center border-top">
																											<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example22" role="button"
																											aria-expanded="false" aria-controls="example22" data-ripple-color="hsl(0, 0%, 67%)"><i
																											class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																											<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																												class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																											</div>

																										</div>
																									</section>
																									<!--Section: Demo-->

																									<!--Section: Code-->
																									<section class="collapse" id="example22">
																										<section class="pb-4">






																											<div class="docs-pills border">
																												<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																													<ul class="nav nav-pills p-2">



																														<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_7b9adbe1e891abacb7dcbf2df568051d1d027f4b" role="tab">HTML</a></li>

																													</ul>
																												</div>
																												<div class="tab-content">






																													<div class="tab-pane fade  active show " id="mdb_7b9adbe1e891abacb7dcbf2df568051d1d027f4b" role="tabpanel">
																														<pre class="grey lighten-3 mb-0 line-numbers language-html">
																															<code>

																																&lt;div class=&#34;d-grid gap-2 col-6 mx-auto&#34;&gt;
																																&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																																&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																																&lt;/div&gt;

																															</code>
																														</pre>
																													</div>


																												</div>
																											</div>



																										</section>
																									</section>
																									<!--Section: Code-->

																									<p>
																										Additional utilities can be used to adjust the alignment of buttons when horizontal. Here
																										we’ve taken our previous responsive example and added some flex utilities and a margin utility
																										on the button to right align the buttons when they’re no longer stacked.
																									</p>

																									<!--Section: Demo-->
																									<section class="pb-4">
																										<div class="bg-white border rounded-5">
																											<section class="p-4 text-center w-100">
																												<div class="d-grid gap-2 d-md-flex justify-content-md-end">
																													<button class="btn btn-primary me-md-2" type="button">Button</button>
																													<button class="btn btn-primary" type="button">Button</button>
																												</div>
																											</section>


																											<div class="p-4 text-center border-top">
																												<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example23" role="button"
																												aria-expanded="false" aria-controls="example23" data-ripple-color="hsl(0, 0%, 67%)"><i
																												class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																												<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																													class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																												</div>

																											</div>
																										</section>
																										<!--Section: Demo-->

																										<!--Section: Code-->
																										<section class="collapse" id="example23">
																											<section class="pb-4">






																												<div class="docs-pills border">
																													<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																														<ul class="nav nav-pills p-2">



																															<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_359c0432a56c4dfb525b4f211139f0ea33dc3a77" role="tab">HTML</a></li>

																														</ul>
																													</div>
																													<div class="tab-content">






																														<div class="tab-pane fade  active show " id="mdb_359c0432a56c4dfb525b4f211139f0ea33dc3a77" role="tabpanel">
																															<pre class="grey lighten-3 mb-0 line-numbers language-html">
																																<code>

																																	&lt;div class=&#34;d-grid gap-2 d-md-flex justify-content-md-end&#34;&gt;
																																	&lt;button class=&#34;btn btn-primary me-md-2&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																																	&lt;button class=&#34;btn btn-primary&#34; type=&#34;button&#34;&gt;Button&lt;/button&gt;
																																	&lt;/div&gt;

																																</code>
																															</pre>
																														</div>


																													</div>
																												</div>



																											</section>
																										</section>
																										<!--Section: Code-->
																									</section>
																									<!--/Section: Toggle states-->

																									<hr class="my-5" />

																									<!--Section: Toggle states-->
																									<section id="section-toggle-states">
																										<!--Section title-->
																										<h2 class="mb-4">Toggle states</h2>

																										<!-- Section description -->
																										<p>
																											Add <code>data-mdb-toggle="button"</code> to toggle a button’s <code>active</code> state. If
																											you’re pre-toggling a button, you must manually add the <code>.active</code> class
																											<strong>and</strong> <code>aria-pressed="true"</code> to the <code>&lt;button&gt;</code>.
																										</p>

																										<!--Section: Demo-->
																										<section class="pb-4">
																											<div class="bg-white border rounded-5">
																												<section class="p-4 text-center w-100">
																													<button type="button" class="btn btn-primary" data-mdb-toggle="button" autocomplete="off">
																														Toggle button
																													</button>
																													<button
																													type="button"
																													class="btn btn-primary active"
																													data-mdb-toggle="button"
																													autocomplete="off"
																													aria-pressed="true"
																													>
																													Active toggle button
																												</button>
																												<button
																												type="button"
																												class="btn btn-primary"
																												disabled
																												data-mdb-toggle="button"
																												autocomplete="off"
																												>
																												Disabled toggle button
																											</button>
																										</section>


																										<div class="p-4 text-center border-top">
																											<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example24" role="button"
																											aria-expanded="false" aria-controls="example24" data-ripple-color="hsl(0, 0%, 67%)"><i
																											class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																											<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																												class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																											</div>

																										</div>
																									</section>
																									<!--Section: Demo-->

																									<!--Section: Code-->
																									<section class="collapse" id="example24">
																										<section class="pb-4">






																											<div class="docs-pills border">
																												<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																													<ul class="nav nav-pills p-2">



																														<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_0816f0c684a66472270c6e67da8397c732ebe971" role="tab">HTML</a></li>

																													</ul>
																												</div>
																												<div class="tab-content">






																													<div class="tab-pane fade  active show " id="mdb_0816f0c684a66472270c6e67da8397c732ebe971" role="tabpanel">
																														<pre class="grey lighten-3 mb-0 line-numbers language-html">
																															<code>

																																&lt;button type=&#34;button&#34; class=&#34;btn btn-primary&#34; data-mdb-toggle=&#34;button&#34; autocomplete=&#34;off&#34;&gt;
																																Toggle button
																																&lt;/button&gt;
																																&lt;button
																																type=&#34;button&#34;
																																class=&#34;btn btn-primary active&#34;
																																data-mdb-toggle=&#34;button&#34;
																																autocomplete=&#34;off&#34;
																																aria-pressed=&#34;true&#34;
																																&gt;
																																Active toggle button
																																&lt;/button&gt;
																																&lt;button
																																type=&#34;button&#34;
																																class=&#34;btn btn-primary&#34;
																																disabled
																																data-mdb-toggle=&#34;button&#34;
																																autocomplete=&#34;off&#34;
																																&gt;
																																Disabled toggle button
																																&lt;/button&gt;

																															</code>
																														</pre>
																													</div>


																												</div>
																											</div>



																										</section>
																									</section>
																									<!--Section: Code-->

																									<!--Section: Demo-->
																									<section class="pb-4">
																										<div class="bg-white border rounded-5">
																											<section class="p-4 text-center w-100">
																												<a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button">Toggle link</a>
																												<a
																												href="#"
																												class="btn btn-primary active"
																												role="button"
																												data-mdb-toggle="button"
																												aria-pressed="true"
																												>Active toggle link</a
																												>
																												<a href="#" class="btn btn-primary disabled" role="button" data-mdb-toggle="button"
																												>Disabled toggle link</a
																												>
																											</section>


																											<div class="p-4 text-center border-top">
																												<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example25" role="button"
																												aria-expanded="false" aria-controls="example25" data-ripple-color="hsl(0, 0%, 67%)"><i
																												class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																												<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																													class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																												</div>

																											</div>
																										</section>
																										<!--Section: Demo-->
																										<!--Section: Demo-->

																										<!--Section: Code-->
																										<section class="collapse" id="example25">
																											<section class="pb-4">






																												<div class="docs-pills border">
																													<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																														<ul class="nav nav-pills p-2">



																															<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_ef0990b3434af7855a5a7acce1510c38a782ba85" role="tab">HTML</a></li>

																														</ul>
																													</div>
																													<div class="tab-content">






																														<div class="tab-pane fade  active show " id="mdb_ef0990b3434af7855a5a7acce1510c38a782ba85" role="tabpanel">
																															<pre class="grey lighten-3 mb-0 line-numbers language-html">
																																<code>

																																	&lt;a href=&#34;#&#34; class=&#34;btn btn-primary&#34; role=&#34;button&#34; data-mdb-toggle=&#34;button&#34;&gt;Toggle link&lt;/a&gt;
																																	&lt;a
																																	href=&#34;#&#34;
																																	class=&#34;btn btn-primary active&#34;
																																	role=&#34;button&#34;
																																	data-mdb-toggle=&#34;button&#34;
																																	aria-pressed=&#34;true&#34;
																																	&gt;Active toggle link&lt;/a
																																	&gt;
																																	&lt;a href=&#34;#&#34; class=&#34;btn btn-primary disabled&#34; role=&#34;button&#34; data-mdb-toggle=&#34;button&#34;
																																	&gt;Disabled toggle link&lt;/a
																																	&gt;

																																</code>
																															</pre>
																														</div>


																													</div>
																												</div>



																											</section>
																										</section>
																										<!--Section: Code-->
																									</section>
																									<!--/Section: Toggle states-->

																									<hr class="my-5" />

																									<!-- Section: Tailwind Elements -->
																									<section class="">
																										<p>
																											If you want to support our friends from Tailwind Elements you can also check out the
																											<a target="_blank" href="https://tailwind-elements.com/docs/standard/components/buttons/"
																											>Tailwind buttons</a
																											>
																											documentation.
																										</p>
																									</section>
																									<!-- Section: Tailwind Elements -->
																								</section>
																								<!--Section: Docs content-->

																							</div>




																							<div class="col-lg-2 d-none d-lg-block">
																								<div id="scrollspy" class="sticky-top" style="top: 80px;">
																									<style>
																									.dc-content-animation {
																										height: 20px;
																										width: 50%;
																										display: inline-block;
																										animation: placeholderPulse 1s infinite ease-in-out;
																										-webkit-animation:  placeholderPulse 1s infinite ease-in-out;
																									}
																									@keyframes placeholderPulse {
																										0%{
																											background-color: rgba(133, 214, 251, .1);
																											color: rgba(133, 214, 251, .1);
																										}
																										50%{
																											background-color: rgba(133, 214, 251, .3);
																											color: rgba(133, 214, 251, .3);
																										}
																										100%{
																											background-color: rgba(133, 214, 251, .1);
																											color: rgba(133, 214, 251, .1);
																											}}
																										</style>

																										<div class="position-relative d-none d-xl-block" id=dpl-gtm-scroll style="min-height:250px;margin-bottom: 1rem;">
																											<div class="position-absolute w-100 justify-content-center">
																												<div class="border border-info shadow-3 rounded overflow-hidden" style="border-color: rgba(133, 214, 251, .3) !important;">
																													<span class="dc-content-animation mx-2 mb-2 mt-3" style="width: 40%;"></span>
																													<span class="dc-content-animation mx-2 mb-1" style="width: 70%;"></span>
																													<span class="dc-content-animation mx-2 mb-1"></span>
																													<span class="dc-content-animation mx-2 mb-1" style="width: 80%;"></span>
																													<span class="dc-content-animation mx-2 mb-1" style="width: 70%;"></span>
																													<span class="dc-content-animation mx-2 mb-1" style="width: 80%;"></span>
																													<span class="dc-content-animation mx-2 mb-1" style="width: 85%;"></span>

																												</div>
																											</div>
																										</div>


																										<ul class="nav flex-column nav-pills menu-sidebar" data-mdb-allow-hashes="true">


																											<li class="nav-item">
																												<a class="nav-link active" href="#section-introduction">Introduction</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-basic-example">Basic example</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-colors">Colors</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-outline">Outline</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-rounded">Rounded</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-rounded-outline">Rounded outline</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-floating">Floating</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-fixed-buttons">Fixed buttons</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-social">Social</a>
																												<ul class="nav flex-column ps-3">
																													<li class="nav-item">
																														<a class="nav-link" href="#subsection-sample-brands">Sample brands</a>
																													</li>
																													<li class="nav-item">
																														<a class="nav-link" href="#subsection-floating-social">Floating social</a>
																													</li>
																													<li class="nav-item">
																														<a class="nav-link" href="#subsection-text">Text</a>
																													</li>
																													<li class="nav-item">
																														<a class="nav-link" href="#subsection-only-icon">Only icon</a>
																													</li>
																													<li class="nav-item">
																														<a class="nav-link" href="#subsection-notifications">Notifications</a>
																													</li>
																												</ul>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-tags">Tags</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-sizes">Sizes</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-active-state">Active state</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-disabled-state">Disabled state</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-block-buttons">Block buttons</a>
																											</li>
																											<li class="nav-item">
																												<a class="nav-link" href="#section-toggle-states">Toggle states</a>
																											</li>


																										</ul>
																									</div>
																								</div>


																							</div>
																						</div>


																						<div class="tab-pane fade" id="docsTabsAPI" role="tabpanel">
																							<div class="row">

																								<div class=" col-lg-10  col-md-12">


																									<!--Section: Docs content-->
																									<section>
																										<!--Section: Introduction-->
																										<section id="api-section-introduction">
																											<!-- Main title -->
																											<h2 class="h1 fw-bold">
																												Buttons


																												- API
																											</h2>
																										</section>
																										<!--Section: Introduction-->

																										<hr class="my-5" />

																										<!--Section: Usage-->
																										<section id="api-section-usage">
																											<!-- Section title -->
																											<h2>Usage</h2>

																											<h4 class="mt-5 mb-3">Via data attributes</h4>

																											<p>For all buttons except fixed buttons</p>
																											<!-- prettier-ignore -->
																											<section class="pb-4">
																												<div class="bg-white border rounded-5">

																													<div class="p-4 text-center">
																														<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example1" role="button"
																														aria-expanded="false" aria-controls="api-example1" data-ripple-color="hsl(0, 0%, 67%)"><i
																														class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																														<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																															class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																														</div>

																													</div>
																												</section> <div class="collapse" id="api-example1" > 




																													<div class="docs-pills border">
																														<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																															<ul class="nav nav-pills p-2">



																																<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_1ead76f13cc8ddf5b861460cbf6c0209b6aaaa22" role="tab">HTML</a></li>

																															</ul>
																														</div>
																														<div class="tab-content">






																															<div class="tab-pane fade  active show " id="mdb_1ead76f13cc8ddf5b861460cbf6c0209b6aaaa22" role="tabpanel">
																																<pre class="grey lighten-3 mb-0 line-numbers language-html">
																																	<code>

																																		&lt;button type=&#34;button&#34; class=&#34;btn btn-primary&#34; data-mdb-toggle=&#34;button&#34; autocomplete=&#34;off&#34;&gt;
																																		Toggle button
																																		&lt;/button&gt;

																																	</code>
																																</pre>
																															</div>


																														</div>
																													</div>


																												</div>

																												<h4 class="mt-5 mb-3">Via JavaScript</h4>

																												<!-- prettier-ignore -->
																												<section class="pb-4">
																													<div class="bg-white border rounded-5">

																														<div class="p-4 text-center">
																															<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example2" role="button"
																															aria-expanded="false" aria-controls="api-example2" data-ripple-color="hsl(0, 0%, 67%)"><i
																															class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																															<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																															</div>

																														</div>
																													</section> <div class="collapse" id="api-example2" > 




																														<div class="docs-pills border">
																															<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																<ul class="nav nav-pills p-2">



																																	<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_0b3134f51461c1ae1b11bd7bc17b6482e28d93d7" role="tab">JavaScript</a></li>

																																</ul>
																															</div>
																															<div class="tab-content">






																																<div class="tab-pane fade  active show " id="mdb_0b3134f51461c1ae1b11bd7bc17b6482e28d93d7" role="tabpanel">
																																	<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																		<code>

																																			const exampleEl = document.querySelector(&#39;example&#39;);
																																			const myButton = new mdb.Button(exampleEl);

																																		</code>
																																	</pre>
																																</div>


																															</div>
																														</div>


																													</div>

																													<h4 class="mt-5 mb-3">Via jQuery</h4>

																													<p class="note note-warning">
																														<strong>Note:</strong> By default, MDB <strong>does not</strong> include jQuery and you have
																														to add it to the project on your own.
																													</p>

																													<!-- prettier-ignore -->
																													<section class="pb-4">
																														<div class="bg-white border rounded-5">

																															<div class="p-4 text-center">
																																<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example3" role="button"
																																aria-expanded="false" aria-controls="api-example3" data-ripple-color="hsl(0, 0%, 67%)"><i
																																class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																																<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																	class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																																</div>

																															</div>
																														</section> <div class="collapse" id="api-example3" > 




																															<div class="docs-pills border">
																																<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																	<ul class="nav nav-pills p-2">



																																		<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_d8bf0a20f50970a58c77090bb3c3573e813809c5" role="tab">JavaScript</a></li>

																																	</ul>
																																</div>
																																<div class="tab-content">






																																	<div class="tab-pane fade  active show " id="mdb_d8bf0a20f50970a58c77090bb3c3573e813809c5" role="tabpanel">
																																		<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																			<code>

																																				$(&#39;#exampleID&#39;).button(&#39;methodName&#39;);

																																			</code>
																																		</pre>
																																	</div>


																																</div>
																															</div>


																														</div>
																													</section>
																													<!--Section: Usage-->

																													<hr class="my-5" />

																													<!--Section: Methods-->
																													<section id="api-section-methods">
																														<!-- Section title -->
																														<h2 class="mb-4">Methods</h2>

																														<p>You can create a button instance with the button constructor, for example:</p>

																														<section class="pb-4">
																															<div class="bg-white border rounded-5">

																																<div class="p-4 text-center">
																																	<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example4" role="button"
																																	aria-expanded="false" aria-controls="api-example4" data-ripple-color="hsl(0, 0%, 67%)"><i
																																	class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																																	<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																		class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																																	</div>

																																</div>
																															</section> <div class="collapse" id="api-example4" > 




																																<div class="docs-pills border">
																																	<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																		<ul class="nav nav-pills p-2">



																																			<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_6cf9e76467be843be088e54b6c4b41931e967fc3" role="tab">JavaScript</a></li>

																																		</ul>
																																	</div>
																																	<div class="tab-content">

																																		<!-- prettier-ignore -->





																																		<div class="tab-pane fade  active show " id="mdb_6cf9e76467be843be088e54b6c4b41931e967fc3" role="tabpanel">
																																			<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																				<code>

																																					const button = document.querySelector(&#39;#myButton&#39;)
																																					const bsButton = new mdb.Button(button)

																																				</code>
																																			</pre>
																																		</div>


																																	</div>
																																</div>


																															</div>

																															<table class="table my-4 table-striped table-bordered">
																																<thead>
																																	<tr>
																																		<th>Method</th>
																																		<th>Description</th>
																																		<th>Example</th>
																																	</tr>
																																</thead>
																																<tbody>
																																	<tr>
																																		<td>
																																			<code>dispose</code>
																																		</td>
																																		<td>Destroys an element's button.</td>
																																		<td>instance.dispose()</td>
																																	</tr>
																																	<tr>
																																		<td>
																																			<code>getInstance</code>
																																		</td>
																																		<td>Static method which allows you to get the button instance associated to a DOM element.</td>
																																		<td>Button.getInstance(button)</td>
																																	</tr>
																																	<tr>
																																		<td>
																																			<code>toggle</code>
																																		</td>
																																		<td>Toggles push state. Gives the button the appearance that it has been activated.</td>
																																		<td>instance.toggle()</td>
																																	</tr>
																																	<tr>
																																		<td>
																																			<code>show</code>
																																		</td>
																																		<td>Manually opens fixed button list.</td>
																																		<td>instance.show()</td>
																																	</tr>
																																	<tr>
																																		<td>
																																			<code>hide</code>
																																		</td>
																																		<td>Manually hides fixed button list.</td>
																																		<td>instance.hide()</td>
																																	</tr>
																																</tbody>
																															</table>

																															<p>For example, to toggle all buttons</p>

																															<!-- prettier-ignore -->
																															<section class="pb-4">
																																<div class="bg-white border rounded-5">

																																	<div class="p-4 text-center">
																																		<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example5" role="button"
																																		aria-expanded="false" aria-controls="api-example5" data-ripple-color="hsl(0, 0%, 67%)"><i
																																		class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																																		<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																			class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																																		</div>

																																	</div>
																																</section> <div class="collapse" id="api-example5" > 




																																	<div class="docs-pills border">
																																		<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																			<ul class="nav nav-pills p-2">



																																				<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_e1218fac0b4c2c9c17fa4c4c9d835af1d2bc81ec" role="tab">JavaScript</a></li>

																																			</ul>
																																		</div>
																																		<div class="tab-content">






																																			<div class="tab-pane fade  active show " id="mdb_e1218fac0b4c2c9c17fa4c4c9d835af1d2bc81ec" role="tabpanel">
																																				<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																					<code>

																																						const buttons = document.querySelectorAll(&#39;.btn&#39;)
																																						buttons.forEach((button) =&gt; {
																																							const button = new mdb.Button(button)
																																							button.toggle()
																																						})

																																					</code>
																																				</pre>
																																			</div>


																																		</div>
																																	</div>


																																</div>
																																<!-- prettier-ignore -->
																															</section>
																															<!--Section: Methods-->

																															<hr class="my-5" />

																															<!--Section: Events-->
																															<section id="api-section-events">
																																<!-- Section title -->
																																<h2 class="mb-4">Events</h2>

																																<div class="table-responsive">
																																	<table class="table table-striped table-bordered">
																																		<thead>
																																			<tr>
																																				<th class="th-sm">Name</th>
																																				<th class="th-sm">Description</th>
																																			</tr>
																																		</thead>
																																		<tbody>
																																			<tr>
																																				<td class="text-nowrap">
																																					<code class="highlighter-rouge">show.mdb.button</code>
																																				</td>
																																				<td>
																																					This event fires immediately when the fixed button
																																					<code>show</code> method has been called.
																																				</td>
																																			</tr>
																																			<tr>
																																				<td class="text-nowrap">
																																					<code class="highlighter-rouge">shown.mdb.button</code>
																																				</td>
																																				<td>
																																					This event is fired when a fixed button list has been made visible to the user (will
																																					wait for CSS transitions to complete).
																																				</td>
																																			</tr>
																																			<tr>
																																				<td class="text-nowrap">
																																					<code class="highlighter-rouge">hide.mdb.button</code>
																																				</td>
																																				<td>
																																					This event is fired immediately when the fixed button
																																					<code>hide</code> method has been called.
																																				</td>
																																			</tr>
																																			<tr>
																																				<td class="text-nowrap">
																																					<code class="highlighter-rouge">hidden.mdb.button</code>
																																				</td>
																																				<td>
																																					This event is fired when a fixed button list has been hidden from the user (will wait
																																					for CSS transitions to complete).
																																				</td>
																																			</tr>
																																		</tbody>
																																	</table>
																																</div>

																																<!-- prettier-ignore -->
																																<section class="pb-4">
																																	<div class="bg-white border rounded-5">

																																		<div class="p-4 text-center">
																																			<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example6" role="button"
																																			aria-expanded="false" aria-controls="api-example6" data-ripple-color="hsl(0, 0%, 67%)"><i
																																			class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																																			<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																				class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																																			</div>

																																		</div>
																																	</section> <div class="collapse" id="api-example6" > 




																																		<div class="docs-pills border">
																																			<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																				<ul class="nav nav-pills p-2">



																																					<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_370c1ae308f1dcc9d3bcd140c946f1f19a4bf60b" role="tab">JavaScript</a></li>

																																				</ul>
																																			</div>
																																			<div class="tab-content">






																																				<div class="tab-pane fade  active show " id="mdb_370c1ae308f1dcc9d3bcd140c946f1f19a4bf60b" role="tabpanel">
																																					<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																						<code>

																																							const myFixedButton = document.getElementById(&#39;myFixedButton&#39;)
																																							myFixedButton.addEventListener(&#39;show.mdb.button&#39;, function (e) {
																																								// do something...
																																							})

																																						</code>
																																					</pre>
																																				</div>


																																			</div>
																																		</div>


																																	</div>
																																	<!-- prettier-ignore -->
																																</section>
																																<!--Section: Events-->

																																<hr class="my-5" />

																																<!--Section: Import-->
																																<section id="api-section-import">
																																	<!-- Section title -->
																																	<h2 class="mb-4">Import</h2>

																																	<!-- Description -->
																																	<p>
																																		<strong>MDB UI KIT</strong> also works with module bundlers. Use the following code to import
																																		this component:
																																	</p>

																																	<!-- prettier-ignore -->
																																	<section class="pb-4">
																																		<div class="bg-white border rounded-5">

																																			<div class="p-4 text-center">
																																				<a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#api-example7" role="button"
																																				aria-expanded="false" aria-controls="api-example7" data-ripple-color="hsl(0, 0%, 67%)"><i
																																				class="fas fa-code me-md-2"></i><span class="d-none d-md-inline-block">Show code</span></a>
																																				<a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)"><i class="fas fa-file-code me-md-2 pe-none"></i><span
																																					class="d-none d-md-inline-block export-to-snippet pe-none">Edit in sandbox</span></a>
																																				</div>

																																			</div>
																																		</section> <div class="collapse" id="api-example7" > 




																																			<div class="docs-pills border">
																																				<div class="d-flex justify-content-between py-2" style="padding-left: .6rem;">
																																					<ul class="nav nav-pills p-2">



																																						<li class="nav-item"><a class="nav-link  active show " data-mdb-toggle="tab" href="#mdb_95de822f24f6ecad295b6e5a82b93bf828297db3" role="tab">JavaScript</a></li>

																																					</ul>
																																				</div>
																																				<div class="tab-content">






																																					<div class="tab-pane fade  active show " id="mdb_95de822f24f6ecad295b6e5a82b93bf828297db3" role="tabpanel">
																																						<pre class="grey lighten-3 mb-0 line-numbers language-js">
																																							<code>

																																								import { Button } from &#39;mdb-ui-kit&#39;;

																																							</code>
																																						</pre>
																																					</div>


																																				</div>
																																			</div>


																																		</div>
																																	</section>
																																	<!--Section: Import-->
																																</section>
																																<!--Section: Docs content-->


																															</div>




																															<div class="col-lg-2 d-none d-lg-block">
																																<div id="scrollspy" class="sticky-top" style="top: 80px;">
																																	<ul class="nav flex-column nav-pills menu-sidebar" data-mdb-allow-hashes="true">


																																		<li class="nav-item">
																																			<a class="nav-link active" href="#api-section-usage">Usage</a>
																																		</li>
																																		<li class="nav-item">
																																			<a class="nav-link" href="#api-section-methods">Methods</a>
																																		</li>
																																		<li class="nav-item">
																																			<a class="nav-link" href="#api-section-events">Events</a>
																																		</li>
																																		<li class="nav-item">
																																			<a class="nav-link" href="#api-section-import">Import</a>
																																		</li>


																																	</ul>
																																</div>
																															</div>


																														</div>
																													</div>

																												</div>
																											</div>
																										</main>

																										<footer id="mdb-footer" class="mt-5" style="background-color: hsl(216, 25%, 95.1%);">
																											<div class="container py-5">

																												<div class="text-center">

																													<p class="">
																														Get useful tips & free resources directly to your inbox along with exclusive subscriber-only content.
																													</p>
																													<a href="https://mdbootstrap.com/newsletter/"  class="btn btn-primary">JOIN OUR MAILING LIST NOW<i
																														class="fas fa-angle-double-right ms-2"></i></a>




																													</div>


																												</div>


																												<div class="text-center p-3" style="background-color: rgba(0,0,0,0.1);">© 2021
																													Copyright:
																													<a class="" href="https://mdbootstrap.com/"> <strong>MDBootstrap.com</strong></a>
																												</div>

																											</footer>
																											<span id="dpl-mdb5-cookies-modal"></span>
																											<span id="dpl-newmdb-docs-snippets-modal"></span>
																											<div
																											class="modal fade"
																											id="apiRestrictedModal"
																											tabindex="-1"
																											aria-labelledby="exampleModalLabel"
																											aria-hidden="true"
																											>
																											<div class="modal-dialog">
																												<div class="modal-content">
																													<div class="modal-body">

																														<section>
																															<div class="text-center">
																																<h3 class="font-weight-bold border border-primary p-3 mb-3">Access restricted</h3>

																																<h5><strong>To view this section you must have an active MDB Pro account</strong></h5>

																																<p>
																																	<strong>Log in</strong> to your account or
																																	<strong>purchase an MDB Pro subscription</strong> if you are a new user
																																</p>

																																<a class="btn btn-primary me-1 auth-modal-toggle" data-auth-modal-tab="sign-in" data-mdb-dismiss="modal">Login</a>
																																<a
																																class="btn btn-secondary"
																																target="_blank"
																																href="https://mdbootstrap.com/docs/standard/pro/"
																																role="button"
																																>Buy MDB Pro</a>
																															</div>
																														</section>
																													</div>
																													<div class="modal-footer">
																														<button type="button" class="btn btn-primary" data-mdb-dismiss="modal">
																															Close
																														</button>
																													</div>
																												</div>
																											</div>
																										</div>



																										<script>
																											const CONFIG = {
																												apiUrl: "https://mdbootstrap.com/api/docs"
																											};

																											const supportedLanguages = {
																												en: {
																													flag: 'united kingdom',
																													name: 'English'
																												},
																												cn: {
																													flag: 'china',
																													name: '中文'
																												}
																											};

																											function getSiteLanguage() {
																												const [, language ] = location.pathname.split('/');
																												switch (language) {
																													case 'cn': return 'cn';
																													case 'es': return 'cn';
																													default: return 'en';
																												}
																											}

																											function getCurrentTechnology() {
																												const currentUrl = location.pathname;
																												switch (true) {
																													case currentUrl.includes('/docs/standard'): return 'standard';
																													case currentUrl.includes('/b5/angular'): return 'b5-angular';
																													case currentUrl.includes('/b5/react'): return 'b5-react';
																													case currentUrl.includes('/b5/vue'): return 'b5-vue';
																													case currentUrl.includes('/b4/jquery'): return 'jquery';
																													case currentUrl.includes('/docs/angular'): return 'angular';
																													case currentUrl.includes('/docs/react'): return 'react';
																													case currentUrl.includes('/docs/vue'): return 'vue';
																												}
																											}

																											function getCookie(name) {
																												const decodedCookie = decodeURIComponent(document.cookie);
																												const cookies = decodedCookie.split(';');

																												for (let i = 0; i < cookies.length; i++) {
																													let cookie = cookies[i];
																													while (cookie.charAt(0) === ' ') {
																														cookie = cookie.substring(1);
																													}
																													if (cookie.indexOf(name) === 0) {
																														return cookie.substring(name.length, cookie.length);
																													}
																												}

																												return null;
																											}
																										</script>
																										<script>

																											document.addEventListener('DOMContentLoaded', (e) => {

																												function checkSidenavActiveLinks() {

																													document.querySelectorAll('.sidenav-menu li').forEach((menu)=>{

																														var collapse = document.querySelectorAll('ul.sidenav-collapse li').forEach((link)=>{
																															var is_active = link.querySelector('a.sidenav-link').classList.contains('active');
																															var collapseIcon = menu.querySelector('.rotate-icon');

																															if (is_active && collapseIcon) {
																																link.classList.add('show');
																																return false;
																															}
																														});
																													});
																												}


																												checkSidenavActiveLinks();

																												const setTransitionProperties = () => {
																													const sidenav = document.getElementById('mdb-sidenav');
																													const rotateIcons = sidenav.getElementsByClassName('rotate-icon');
																													const collapse = sidenav.getElementsByClassName('sidenav-collapse');

																													rotateIcons.forEach(icon => {
																														icon.style.transitionProperty = 'transform'
																													});

																													collapse.forEach(collapse => {
																														collapse.style.transitionProperty = 'height'
																													});
																												}


																												setTimeout(setTransitionProperties, 1);
																											});
																										</script>

																										<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/mdb5/3.9.0/compiled.min.js"></script>
																										<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/search/search.js"></script>

																										<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/dist/main.js"></script>

																										<script>
																											let isSidenavHidden = false;
																											isSidenavHidden =  false ;
																											const sidenav = document.getElementById('mdb-sidenav');
																											const instance = mdb.Sidenav.getInstance(sidenav);


																											let innerWidth = null;

																											const setMode = () => {
																												if (window.innerWidth === innerWidth) return;

																												innerWidth = window.innerWidth;
																												const isFrontPage = 0;

																												if (innerWidth <= 1440 || isFrontPage || isSidenavHidden) {
																													instance.changeMode('over');
																													instance.hide();
																													return;
																												}
																												instance.changeMode('side');
																												instance.show();
																											};

																											if( sidenav ) {
																												window.addEventListener('resize', setMode);
																												setMode();
																											}


																											function mdbScrollSpyTo(e) {
																												e.preventDefault();
																												const hash = e.target.getAttribute('href');
																												const target = document.getElementById(hash.substring(1));

																												window.scroll({
																													top: target.offsetTop - 100,
																													behavior: 'smooth'
																												});

																												if (history.pushState) {
																													history.pushState(null, null, hash);
																												} else {
																													location.hash = hash;
																												}
																											}

																											document.querySelectorAll('#scrollspy .menu-sidebar a').forEach((link) => {
																												link.addEventListener('click', mdbScrollSpyTo, false);
																											});


																											if (window.location.hash) {
																												const target = document.getElementById(window.location.hash.substring(1));

																												setTimeout(function() {
																													window.scroll({
																														top: 0
																													});

																													setTimeout(() => {
																														window.scroll({
																															top: target.offsetTop - 100,
																															behavior: 'smooth'
																														});
																													}, 1000);
																												}, 1);
																											}


																											window.addEventListener("load", (event) => {
																												const locationHash = window.location.hash;
																												const scrollTop = () => {
																													window.scrollTo({ top: 0, behavior: 'smooth' });
																												}

																												if (locationHash === "#docsTabsAPI") {
																													const apiTab = document.querySelector('#docs-nav-pills a[href="#docsTabsAPI"]');

																													if (apiTab) {
																														const apiTabsInstance = new mdb.Tab(apiTab);

																														apiTabsInstance.show();
																														scrollTop();
																													}
																												} else if (locationHash === "#docsTabsOverview") {
																													scrollTop();
																												} else if (["#topTemplates", "#newTemplates", "#trendingTemplates"].indexOf(locationHash) !== -1) {
																													const templateTab = document.querySelector('#templates-nav-pills a[href="' + locationHash + '"]');

																													if (templateTab) {
																														const templateTabsInstance = new mdb.Tab(templateTab);

																														templateTabsInstance.show();
																														scrollTop();
																													}
																												}

																												const navPills = document.querySelectorAll('#docs-nav-pills a[data-mdb-toggle="tab"]');

																												if (navPills.length) {
																													navPills.forEach((el) => {
																														el.addEventListener('click', (e) => {
																															window.location.hash = e.target.hash;

																															scrollTop();
																														});
																													});
																												}

																												const templatePills = document.querySelectorAll('#templates-nav-pills a[data-mdb-toggle="pill"]');

																												if (templatePills.length) {
																													templatePills.forEach((el) => {
																														el.addEventListener('click', (e) => {
																															window.location.hash = e.target.hash;

																															scrollTop();
																														});
																													});
																												}
																											});
																										</script>


																										<script>
																											(function() {
																												const searchInput = document.getElementById('mdb-5-search-input');
																												const searchIcon = document.getElementById('mdb-5-search-icon');
																												const searchList = document.getElementById('mdb-5-search-list');
																												const searchForm = document.getElementById('mdb-5-search-container');
																												const searchDropdown = document.getElementById('mdb-5-search-dropdown');
																												const searchCount = document.getElementById('mdb-5-search-count');

																												const searchJsonFile = "https://mdbootstrap.com/wp-content/themes/mdbootstrap4" + '/js/search/search.json';
																												const search = new Search(searchInput, searchIcon, searchList, searchForm, searchDropdown, searchCount, searchJsonFile);

																												search.init();
																											})();
																										</script>








																										<script>

																										</script><blockquote>
																										</blockquote>





																									</body>

																									</html>
