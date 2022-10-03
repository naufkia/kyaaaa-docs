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
<link rel="stylesheet" type="text/css" href="assets/css/prism.css?v=8" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css?v=8" />

</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125" class="bootstrap-dark" onload="launch_toast()">
    <div id="toast"><div id="img"><img style="margin-top:3px;" width="80%" src="assets/images/search.png"/></div><div id="desc">JUST (CTRL+F) FOR SEARCH</div></div>
    <script>
        function launch_toast() {
            var x = document.getElementById("toast")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
        }
        </script>
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
        <h3 class="my-0 ml-2">Kyaaaa-PHP <span class="text-2">LazyDocs</span></h3> 
		     
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
        <li class="nav-item"><a class="nav-link active" href="#section_start">Getting Started</a>
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#section_installation">Installation</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#section_routes">Framework (MVC)</a>
          <ul class="nav flex-column">
			<li class="nav-item"><a class="nav-link" href="#section_routes">Router</a></li>
			<li class="nav-item"><a class="nav-link" href="#section_controllers">Controllers</a></li>
			<li class="nav-item"><a class="nav-link" href="#section_models">Models</a></li>
			<li class="nav-item"><a class="nav-link" href="#section_views">Views</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#section_url">Helper</a>
			<ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#section_url">URL Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_dump">Dump Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_sanitize">Sanitize Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_redirect">Redirect Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_session">Session Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_request">HTTP Request Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_csrf">CSRF Helper</a></li>
            <li class="nav-item"><a class="nav-link" href="#section_email">E-Mail Helper</a></li>
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
        <section id="section_start">
            <h2 class="ml-3 ml-sm-n3">Getting Started</h2>
            <p class="ml-3">Folder structure :</p>
            <ol class="ml-n2">
                <ul>
                    <li><code>/core</code> App Directory
                        <ul>
                            <li><code>/core/Conf</code> Configuration Directory
                                <ul>
                                    <li><code>/core/Conf/Kyaaaa</code> Base classes of kyaaaa framework</li>
                                </ul>
                            </li>
                            <li><code>/core/Controllers</code> Controllers Directory</li>
                            <li><code>/core/Models</code> Models Directory</li>
                            <li><code>/core/Views</code> Views Directory</li>
                        </ul>
                    </li>
                    <li><code>/public</code> Public Directory
                </ul>
            </ol>
        </section>

          <hr class="divider">
		
        <!-- Installation
		============================ -->
        <section id="section_installation">
          <h2 class="ml-3 ml-sm-n3">Installation</h2>
          <p class="lead">System Requirements</p>
            <p class="ml-3 text-white fw-bolder">Note: PHP version 7.4 or newer is required. </p>

          <p class="lead">Composer Installation</p>
            <div class="alert alert-dark text-alert ml-3" role="alert">
                composer create-project naufkia/kyaaaa-php:dev-main
            </div>
        <p class="lead">Manual Installation</p>
            <p class="ml-3">Download or Clone from github <a class="ml-1" target="_blank" href="https://github.com/naufkia/kyaaaa-php"><i class="fas fa-external-link-alt"></i> https://github.com/naufkia/kyaaaa-php</a></p>
            <div class="alert alert-dark text-alert ml-3" role="alert">
                composer install
            </div>
            <p class="lead">Running Your App</p>
            <p class="ml-3">Start by running the server, by default it runs on localhost:6969</p>
            <div class="alert alert-dark text-alert ml-3" role="alert">
                php kyaaaa
            </div>
        
        </section>
        
		<hr class="divider">
		
        <!-- HTML Structure
		============================ -->
        <section id="section_routes">
          <h2 class="ml-3 ml-sm-n3">Routes</h2>

            <p class="lead">Basic Usage</p>
                <p class="ml-3">Config File : <code class="text-alert">apk/Conf/Routes.php</code></p>
            <ul class="changelog ml-3">
                <li><span class="badge badge-success">GET</span> <code>$router->get('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-info">POST</span> <code>$router->post('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-primary">PUT</span> <code>$router->put('/home', function() { /* ... */ });</code></li>
                <li><span class="badge badge-danger">DELETE</span> <code>$router->delete('/home', function() { /* ... */ });</code></li>
            </ul>
            <p class="lead">Dynamic based Route Patterns</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">// http(s)://www.example.org/product/12/item/21
$router->get('/product/:productId/item/:itemId', function($productId, $itemId) {
    echo 'Product #' . $productId . ', item #' . $itemId;
});</code></pre>
            <p class="ml-3">or With RegEx</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->get('/product/:id', function($id) {
    echo 'Product #'.$id;
})->with('id','[0-9]+');</code></pre>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">// http(s)://www.example.org/product/12-windowsphone`
$router->get('/product/:id-:title', function($id, $title) {
    echo 'Product #' . $id . ', title #' . $title;
})->with('id','[0-9]+')
->with('title','[a-z\0-9]+');</code></pre>

            <p class="lead">Group Routing</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->group('/product', function() use ($router) {

    // Produces: '/product/'
    $router->get('/', function() {
        echo 'Product overview';
    });

    // Produces: '/product/id'
    $router->get('/:id', function($id) {
        echo 'Product #' . $id;
    });

});</code></pre>

<pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->group('/articles', function() use ($router) {

// Produces: '/articles/'
$router->get('/', function() {
    echo 'Product overview';
});

    $router->group('/item', function() use ($router) {
        // Produces: '/articles/product/item'
        $router->get('/', function() {
            echo 'Item Overview';
        });

        // Produces: '/articles/product/item/4'
        $router->get('/:id', function($id) {
            echo 'Item #: ' . $id;
        });
    });

});</code></pre>
            <p class="lead">Using Controller</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->get('/users/:id', '\core\Controllers\HomeCtrl#index');</code></pre>
            <p class="ml-3">or</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->get('/users/:id', [\core\Controllers\UserCtrl::class,'index']);</code></pre>
            <p class="lead">Before Route (Middleware)</p>
            <pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->get('/product/:id', function($id) {
    echo "Product #:".$id;
})->middleware(function($id){
    if(!filter_var($id,FILTER_VALIDATE_INT)){
        echo "id should provide an integer";
        exit;
    }
});</code></pre>
        </section>
        
		<hr class="divider">

          <section id="section_controllers">
              <h2 class="ml-3 ml-sm-n3">Controllers</h2>
              <p class="lead">Example</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php namespace Core\Controllers;

use Core\Models\HomeModel;

class HomeCtrl {
    public function __construct() {
        $this->suUsersM = new HomeModel();
    }

    public function index() {
//        $get_user = $this->suUsersM->get_users_active();
//        dd($get_user); // use d() or dd() for dump!
        $data['title'] = 'Hello World';
        $data['subtitle'] = 'The Subtitles';
        return view('home', $data);
    }
}</code></pre>
          </section>

          <hr class="divider">

          <section id="section_models">
              <h2 class="ml-3 ml-sm-n3">Modeling Data</h2>
              <p class="lead">Database Config File</p>
              <div class="alert alert-dark text-alert ml-3" role="alert">
                /core/Conf/Database.php
              </div>
              <p class="lead">Models Example</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php namespace Core\Models;

use Core\Conf\Kyaaaa\DB;

class HomeModel {
    public function get_users_active() {
        $builder = DB::query('users');
        $builder->select('*');
        $builder->where('status', 'active');
        $query = $builder->get();
        return $query;
    }
}</code></pre>
              <p class="lead">Query Builder</p>
              <p class="lead ml-3">Get Data</p>
              <p class="ml-3">Get all data</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$query = $builder->all()->get();
return $query; // Produces: SELECT * FROM mytable</code></pre>
              <p class="ml-3">Get all data with limit</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$query = $builder->all()->limit(20)->get();
return $query; // Produces: SELECT * FROM mytable LIMIT 20</code></pre>
              <p class="ml-3">Get specific columns from the table</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('name,email,status');
$query = $builder->get();
return $query; // Produces: SELECT name,email,status FROM mytable</code></pre>

              <p class="ml-3">Get only one columns from the table</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('COUNT(id) AS total')
$query = $builder->first();
return $query; // Produces: SELECT name,email,status FROM mytable</code></pre>

              <p class="lead ml-3">Looking for Specific Data</p>
              <p class="ml-3">Where</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->where('status', 'active');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status = 'active'</code></pre>

              <p class="ml-3">Where with custom operators</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->where('status !=', 'active');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status != 'active'</code></pre>

<p class="ml-3">Using AND Operator</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->where('status', 'active');
$builder->and('publish !=', 0);
return $query; // Produces: SELECT * FROM mytable WHERE status = 'active' AND publish = 0</code></pre>

<p class="ml-3">Using OR Operator</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->where('status', 'active');
$builder->or('publish', 1);
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status = 'active' OR publish = 1</code></pre>

<p class="ml-3">Using HAVING</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->where('status', 'active');
$builder->having('publish', 1);
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status = 'active' HAVING publish = 1</code></pre>

              <p class="ml-3">Where is NULL</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->whereIsNull('status');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status IS NULL</code></pre>

              <p class="ml-3">Where is NOT NULL</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->whereIsNotNull('status');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status IS NULL</code></pre>

              <p class="ml-3">Where Like</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->whereLike('status', 'a%');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status LIKE 'a%'</code></pre>

              <p class="ml-3">Where In</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->whereIn('status', '1,2,3');
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable WHERE status IN (1,2,3)</code></pre>

              <p class="lead ml-3">Ordering Data</p>
              <p class="ml-3">OrderBy</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->select('*');
$builder->orderBy('id', 'DESC'); // OR 'ASC'
$query = $builder->get();
return $query; // Produces: SELECT * FROM mytable ORDER BY 'DESC'</code></pre>


          <p class="lead ml-3">Inserting Data</p>
          <p class="ml-3">Insert</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$data = [
    'id' => 1,
    'name' => 'rehan',
    'status' => 'active'
];
$builder = DB::query('mytable');
$builder->insert($data);
$query = $builder->save();
return $query; // Produces: INSERT INTO mytable (id, name, email) VALUES ('1', 'rehan', 'active')</code></pre>

          <p class="lead ml-3">Updating Data</p>
          <p class="ml-3">Update</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$data = [
    'status' => 'non-active'
];
$builder = DB::query('mytable');
$builder->update($data);
$builder->where('id', 1);
$query = $builder->save();
return $query; // gives UPDATE mytable SET status = 'non-active' WHERE id = 1</code></pre>

          <p class="lead ml-3">Deleting Data</p>
          <p class="ml-3">Update</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('mytable');
$builder->delete();
$builder->where('id', 1);
$query = $builder->save();
return $query; // Produces: DELETE FROM mytable WHERE id = 1</code></pre>

          <p class="lead ml-3">Join Data</p>
          <p class="ml-3">Supported Types of Joins: <code class="text-alert">INNER</code> <code class="text-alert">LEFT</code> <code class="text-alert">RIGHT</code> <code class="text-alert">CROSS</code></p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('users');
$builder->select('*');
$builder->join('INNER','comments', 'users.id = comments.user_id');
$query = $builder->get();
return $query; // Produces: SELECT * FROM users INNER JOIN comments ON users.id = comments.user_id'</code></pre>

<p class="lead ml-3">Grouping Data</p>
          <p class="ml-3">GROUP BY</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('users');
$builder->select('COUNT(id),address');
$builder->groupBy('address');
$query = $builder->get();
return $query; // Produces: SELECT COUNT(id),address FROM users GROUP BY address'</code></pre>

          <p class="lead ml-3">Union Queries</p>
          <p class="ml-3">Union</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('customers')->select('name');
$builder->union('suppliers', 'name');
$query = $builder->get();
return $query; // Produces: SELECT city FROM customers UNION SELECT city FROM suppliers</code></pre>
          <p class="ml-3">Union All</p>
          <pre class="line-numbers ml-3"><code class="language-php ml-n03">$builder = DB::query('customers')->select('name');
$builder->unionAll('suppliers', 'name');
$query = $builder->get();
return $query; // Produces: SELECT city FROM customers UNION ALL SELECT city FROM suppliers</code></pre>

              <p class="lead ml-3">Custom Raw Queries</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">$query = DB::query()->raw('TRUNCATE TABLE mytable');
return $query;</code></pre>

          </section>

          <hr class="divider">

          <section id="section_views">
              <h2 class="ml-3 ml-sm-n3">Views</h2>
              <p class="lead">Creating a View</p>
              <p class="ml-3 mb-n2">Note : View files must be ended with *.kyaaaa.php</p>
              <p class="ml-3">Create a file called blog.kyaaaa.php and put this in it:</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;html>
&lt;head>
    &lt;title>My Blog&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>Welcome to my Blog!&lt;/h1>
&lt;/body>
&lt;/html></code></pre>

              <p class="lead">Displaying a View & Passing data to views</p>
              <p class="ml-3">Controller Example</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php

namespace Core\Controllers;

class Blog
{
    public function index()
    {
        $data['title'] = 'Blog Title';
        $data['desc'] = 'Blog Desc';
        return view('blog_view', $data);
    }
}</code></pre>
              <p class="ml-3">Parsing data in views</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;html>
&lt;head>
    &lt;title>&lt;?= $title ?>&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>&lt;?= $title ?>&lt;/h1>
    &lt;h3>&lt;?= $desc ?>&lt;/h3>
&lt;/body>
&lt;/html></code></pre>

          </section>

          <section id="section_url">
              <h2 class="ml-3 ml-sm-n3">Helper</h2>
              <p class="lead" id="section_url">URL Helper</p>
              <p class="ml-3">Example usage of url helper on views</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;html>
&lt;head>
    &lt;title>My Blog&lt;/title>
    &lt;link href="&lt;?= url('assets/css') ?>/bootstrap.min.css" rel="stylesheet">
&lt;/head>
&lt;body>
    &lt;h1>Welcome to my Blog!&lt;/h1>
&lt;/body>
&lt;/html></code></pre>

              <p class="lead" id="section_dump">DUMP Helper</p>
              <p class="ml-3">Example usage of dump helper on controllers</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php namespace Core\Controllers;

use Core\Models\HomeModel;

class HomeCtrl {
    public function __construct() {
        $this->HomeModel = new HomeModel();
    }

    public function index() {
            $get_user_active = $this->HomeModel->get_users_active();
            dd($get_user_active); // use d() or dd() for dump!
    }
}</code></pre>

<p class="lead" id="section_sanitize">Sanitize Helper</p>
<p class="ml-3">Example usage of sanitize helper on views</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;html>
&lt;head>
    &lt;title>&lt;?= esc($title) ?>&lt;/title>
&lt;/head>
&lt;body>
    &lt;h1>&lt;?= esc($title) ?>&lt;/h1>
    &lt;h3>&lt;?= esc($desc) ?>&lt;/h3>
&lt;/body>
&lt;/html></code></pre>

              <p class="lead" id="section_redirect">Redirect Helper</p>
              <p class="ml-3">Example usage <code class="text-alert">redirectTo()</code></p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php
redirectTo(url('user/privacy')); // redirect to http://localhost:5555/user/privacy</code></pre>
<p class="ml-3">Redirect to external url</p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php
redirectTo('https://google.com'); // redirect to https://google.com</code></pre>
<p class="ml-3">Redirect with http header codes. Supported <code class="text-alert">301</code> <code class="text-alert">302</code> <code class="text-alert">303</code></p>
              <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;?php
// Default Moved Temporary 303 or 302, if you want moved permanently use custom code 
redirectTo('https://google.com', 301); // redirect to https://google.com with HTTP/1.1 301 Moved Permanently</code></pre>

<p class="lead" id="section_session">Session Helper</p>
    

              <p class="ml-3 alert alert-dark">Config file: <code class="text-alert ml-1">core/Conf/Session.php</code> <a class="ml-2" target="_blank" href="https://www.php.net/manual/en/session.configuration.php"><i class="fas fa-external-link-alt"></i> See more available options here.</a><br>Load this helper using <code>session();</code> function.</p>

              
              
</code></pre>
              <p class="ml-3">Set Session Data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$session->set('name', 'kyaaaa');
$session->set('country', 'usa');

// With array
$session_data = [
    'name' => 'nauf',
    'country' => 'usa'
];
$session->set($session_data);
</code></pre>

<p class="ml-3">Get Session Data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$name = $session->get('name');
$country = $session->:get('country');
echo 'My name is ' . $name . ', and Im from '. $country; // Produce My name is kyaaaa, and Im from usa
</code></pre>

<p class="ml-3">Set Flash Data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$session->flash('notification', 'success');
</code></pre>

<p class="ml-3">Get Flash Data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
echo $session->getFlash('notification'); // Produce : success;
</code></pre>

<p class="ml-3">Check if session has a key <code>boolean</code></p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$session->has('name'); // true
$session->has('address'); // false
</code></pre>

<p class="ml-3">Remove Session Data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$session->remove('name');
</code></pre>

<p class="ml-3">Clear all session data</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$session = session();
$session->clear();
</code></pre>

<p class="lead" id="section_request">HTTP Request Helper</p>
<p class="ml-3 alert alert-dark">Load this helper using <code>request();</code> function.</p>
<p class="ml-3">POST data by key name</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$this->request = request();
$this->request->post('example'); // Equal $_POST['example'];
</code></pre>

<p class="ml-3">GET data by key name</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$this->request = request();
$this->request->get('example'); // Equal $_GET['example'];
</code></pre>

<p class="ml-3">REQUEST data by key name</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$this->request = request();
$this->request->request('example'); // Equal $_REQUEST['example'];
</code></pre>

<p class="ml-3">Get Request Uri</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$this->request = request();
$this->request->getUri();
</code></pre>

<p class="ml-3">Get Request Uri Segments</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03"> // Current url : http://localhost:5555/docs/started
$this->request = request();
$this->request->getSegment(1); // Producce : docs
$this->request->getSegment(2); // Producce : started
</code></pre>

<p class="ml-3">Check Method Request</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">// is Ajax -Boolean Result (true or false)
$this->request = request();
$this->request->isAjax(); 

// is Post -Boolean Result (true or false)
$this->request = request();
$this->request->isPost(); 

// is Get -Boolean Result (true or false)
$this->request = request();
$this->request->isGet(); 

// or use get method instead
$this->request = request();
$this->request->getMethod(); // return : get, post, put, delete, etc.
</code></pre>

<p class="ml-3">Get Request File</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$file = $this->request->file('field_name'); // Get Files 
$this->request->getFileName($file); // Get Files Name
$this->request->getFileType($file); // Get Files Mime Type
$this->request->getFileSize($file); // Get Files Size - Return int (Megabytes)

// Validate file Types
$allowedTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
];
if (!$this->request->validate($file, $allowedTypes)) {
    die('file not allowed');
}

// Save (Moving file to public directory)
$path = 'upload/image'; // move to public/upload/image
$newfilename = 'newimage.png'; // new file name
$moveFile = $this->request->move($file, $path, $newfilename); // Return boolean 
</code></pre>



        <p class="lead" id="section_csrf">CSRF Helper</p>
        <p class="ml-3 alert alert-dark">Load this helper using <code>csrf();</code> function.</p>
        <p class="ml-3">Customize CSRF Options (Optional)</p>
        <pre class="line-numbers ml-3"><code class="language-php ml-n03">$this->csrf = csrf();
$this->csrf->setExpiry(3600);
$this->csrf->setTokenName('kyaaaa_csrf');
$this->csrf->setExpiry('kyaaaa_token');   
</code></pre>

<p class="ml-3">Echo hidden input csrf field to the form.</p>
        <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;form method="post" action="&lt;?= url('post') ?>">
    &lt;?php csrf()->tokenField(); ?>
    &lt;input type="text" class="form-control mb-2" name="address" placeholder="address">
    &lt;button type="submit" class="btn btn-primary">Save&lt;/button>
&lt;/form>
</code></pre>

<p class="ml-3">Echo hidden input csrf field to the form.</p>
        <pre class="line-numbers ml-3"><code class="language-php ml-n03">&lt;form method="post" action="&lt;?= url('post') ?>">
    &lt;?php csrf()->tokenField(); ?>
    &lt;input type="text" class="form-control mb-2" name="address" placeholder="address">
    &lt;button type="submit" class="btn btn-primary">Save&lt;/button>
&lt;/form>
</code></pre>
             
<p class="ml-3">CSRF Validation</p>
        <pre class="line-numbers ml-3"><code class="language-php ml-n03">if(!csrf()->isValidRequest()){
    die("die: eval csrf request rejected");
}
</code></pre>

<p class="ml-3">Example validation on Route Middleware</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$router->post('/post', [\Core\Controllers\HomeCtrl::class,'post'])->middleware(function(){
    if(!csrf()->isValidRequest()){
        die("die: eval csrf request rejected");
    }
});
</code></pre>

<p class="lead" id="section_email">Email Config File</p>
              <div class="alert alert-dark text-alert ml-3" role="alert">
                /core/Conf/Email.php
              </div>

              <p class="ml-3">Sending your email</p>
<pre class="line-numbers ml-3"><code class="language-php ml-n03">$email = \Core\Conf\Email::start();
$email->setFrom('me@gmail.com', 'Mr Lorem');
$email->setTo('to@gmail.com', 'Mr Ipsum');
$email->setSubject('Email Subject');
$email->setBody('Email Body');
$send = $email->send();
if ($send) {
    $status = "Sent successfully!";
} else {
    $status = "Sent failed!";
}
</code></pre>
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
<script src="assets/js/prism.js"></script> 
<!-- Easing --> 
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Magnific Popup --> 
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Custom Script -->
<script src="assets/js/theme.js"></script>

</body>
</html>
