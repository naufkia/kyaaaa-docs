<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<title>Kyaaaa-PHP Docs</title>
<meta name="color-scheme" content="dark">
<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/vinorodrigues/bootstrap-dark@0.6.1/dist/bootstrap-night.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css" />
<!-- Highlight Syntax -->
<!--<link rel="stylesheet" type="text/css" href="assets/vendor/highlight.js/styles/github.css" />-->
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="assets/css/prism.css" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125" class="bootstrap-dark">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark bg-dark-2">
      <div class="container-fluid">
        <!-- Sidebar Toggler -->
		<button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>
		
		<!-- Logo --> 
        <h3 class="my-0 ml-2">Kyaaaa-PHP <span class="text-2">Docs</span></h3> 
		     
        <!-- Logo End -->
    
		<div id="header-nav" class="justify-content-end">
        <ul class="social-icons social-icons-sm ml-lg-2 mr-3">
          <li class="social-icons-twitter"><a data-toggle="tooltip" href="https://github.com/naufkia/kyaaaa-php" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-github fa-2x text-white"></i></a></li>
        </ul>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================ -->
  <div id="content" role="main">
    
	<!-- Sidebar Navigation
	============================ -->
	<div class="idocs-navigation bg-dark-2">
      <ul class="nav flex-column ">
        <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_installation">Installation</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#idocs_routes">Framework (MVC)</a>
          <ul class="nav flex-column">
			<li class="nav-item"><a class="nav-link" href="#idocs_routes">Router</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_controllers">Controllers</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_models">Model & Query Builder</a></li>
			<li class="nav-item"><a class="nav-link" href="#idocs_views">Views</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#idocs_content">Helper</a>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_typography">URL Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_code">Dump Helper</a></li>
          </ul>
		</li>
      </ul>
    </div>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 
        
        <!-- Getting Started
		============================ -->
        <section id="idocs_start">
            <h2 class="ml-n3">Getting Started</h2>
            <ol class="ml-n2">
                <li>Below is the weird folder structure :
                    <ul>
                        <li><code>/apk</code> - Contains all of the assets referenced
                            <ul>
                                <li><code>/apk/Conf</code> - Configuration Directory
                                    <ul>
                                        <li><code>/apk/Conf/System</code> - Core Directory (don't edit any files here)</li>
                                    </ul>
                                </li>
                                <li><code>/apk/Kontolers</code> - Controllers Directory</li>
                                <li><code>/apk/Modols</code> - Models Directory</li>
                                <li><code>/apk/Piews</code> – Views Directory</li>
                            </ul>
                        </li>
                        <li><code>/ewwe</code> - Public Directory
                    </ul>
                </li>
            </ol>
        </section>

          <hr class="divider">
		
        <!-- Installation
		============================ -->
        <section id="idocs_installation">
          <h2 class="ml-n3">Installation</h2>
            <div class="alert alert-warning mb-4 w-50 ml-3"><span class="badge badge-danger text-uppercase">Note:</span> PHP version 7.4 or newer is required.</div>
          <p class="lead">Composer Installation</p>
            <div class="alert alert-dark text-alert ml-3" role="alert">
                composer create-project naufkia/kyaaaa-php
            </div>
        <p class="lead">Manual Installation</p>
            <p class="ml-3">Download or Clone from github : <a class="ml-1" target="_blank" href="https://github.com/naufkia/kyaaaa-php"><i class="fas fa-external-link-alt"></i> https://github.com/naufkia/kyaaaa-php</a></p>
            <p class="lead">Running Your App</p>
            <p class="ml-3">Start by running the server, by default it runs on localhost:6969</p>
            <div class="alert alert-dark text-alert ml-3" role="alert">
                php kyaaaa
            </div>
            <div class="alert alert-warning mb-4 w-75 ml-3"><span class="badge badge-danger text-uppercase">Note:</span> If any error happen try to run <code>composer install</code> then <code>composer update</code> first.</div>
        </section>
        
		<hr class="divider">
		
        <!-- HTML Structure
		============================ -->
        <section id="idocs_routes">
          <h2 class="ml-n3">Routes</h2>

            <p class="lead">Basic Usage</p>
                <p class="ml-3">Config File : <code class="text-alert">apk/Conf/Routes.php</code></p>
            <ul class="changelog ml-3">
                <li><span class="badge badge-success">GET</span> <code>$router->get('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-info">POST</span> <code>$router->post('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-primary">PUT</span> <code>$router->put('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-danger">DELETE</span> <code>$router->post('/home', function() { /* ... */ });</code></li>
            </ul>
            <p class="lead">Dynamic based Route Patterns</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n1">// http(s)://www.example.org/product/12/item/21
$router->get('/product/:productId/item/:itemId', function($productId, $itemId) {
    echo 'Product #' . $productId . ', item #' . $itemId;
});</code></pre>
            <p class="ml-3">or With RegEx</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->get('/product/:id', function($id) {
    echo 'Product #'.$id;
})->with('id','[0-9]+');</code></pre>
<pre class="line-numbers ml-3"><code class="language-php ml-n1">// http(s)://www.example.org/product/12-windowsphone`
$router->get('/product/:id-:title', function($id, $title) {
    echo 'Product #' . $id . ', title #' . $title;
})->with('id','[0-9]+')
->with('title','[a-z\0-9]+');</code></pre>

            <p class="lead">Group Routing</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->group('/product', function() use ($router) {

    // Produces: '/product/'
    $router->get('/', function() {
        echo 'Product overview';
    });

    // Produces: '/product/id'
    $router->get('/:id', function($id) {
        echo 'Product #' . $id;
    });

});</code></pre>

<pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->group('/articles', function() use ($router) {

// Produces: '/product/'
$router->get('/', function() {
    echo 'Product overview';
});

    $router->group('/item', function() use ($router) {
        // Produces: '/product/item'
        $router->get('/', function() {
            echo 'Item Overview';
        });

        // Produces: '/product/item/4'
        $router->get('/:id', function($id) {
            echo 'Item #: ' . $id;
        });
    });

});</code></pre>
            <p class="lead">Using Controller</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->get('/users/:id', '\Apk\Kontolers\UserKntl#index');</code></pre>
            <p class="ml-3">or</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->get('/users/:id', [\Apk\Kontolers\UserKntl::class,'index']);</code></pre>
            <p class="lead">Before Route (Middleware)</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n1">$router->get('/product/:id', function($id) {
    echo "Product #:".$id;
})->middleware(function($id){
    if(!filter_var($id,FILTER_VALIDATE_INT)){
        echo "id should provide an integer";
        exit;
    }
});</code></pre>
        </section>
        
		<hr class="divider">

          <section id="idocs_controllers">
              <h2 class="ml-n3">Controllers</h2>
              <p class="lead">Example</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n1">&lt;?php namespace Apk\Kontolers;

use Apk\Modols\HomeModol;

class HomeKntl {
    public function __construct() {
        $this->suUsersM = new HomeModol();
    }

    public function index() {
//        $get_user = $this->suUsersM->get_users_active();
//        dd($get_user); // use d() or dd() for dump!
        $data['title'] = 'Hello World';
        $data['subtitle'] = 'Kyaaaa Weird PHP Framework';
        return view('home', $data);
    }
}</code></pre>
          </section>

          <hr class="divider">

          <section id="idocs_controllers">
              <h2 class="ml-n3">Model & Query Builder</h2>
              <p class="lead">Example</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n1">// WIP</code></pre>
          </section>

          <hr class="divider">
        
      </div>
    </div>
	
  </div>
  <!-- Content end -->
  
</div>
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript
============================ -->
<script src="assets/vendor/jquery/jquery.min.js"></script> 
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Highlight JS -->
<!--<script src="assets/vendor/highlight.js/highlight.min.js"></script> -->
<!-- Easing --> 
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Magnific Popup --> 
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Custom Script -->
<script src="assets/js/theme.js"></script>
<script src="assets/js/prism.js"></script> 
</body>
</html>
