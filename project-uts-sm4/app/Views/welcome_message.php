<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>First Document, Welcome</title>
	<style>
		.ml-5{
			margin-left: 1.5em;
		}
		.div-cost{
			width: 535px;
    		display: table-cell;
		}
	</style>
	
</head>
<body>
	<h1>Project UTS SMT 4 Web Pemograman II (Frameworks)</h1>
	<hr>
	Nama : Ahmad Fikri<br/>
	Kelas : IK-19-II-2<br/>
	UTS SMT 4 Web Pemograman II (Frameworks)
	<hr>
	<div class="div-cost"><h2>Post</h2>
	1. Get All Data (GET <?=base_url()?>/post)
	<pre class="ml-5"><a href="http://localhost:8080/post">GET http://localhost:8080/post</a><br/><br/></pre>
	2. Get data by id (GET <?=base_url()?>/post/$id)
	<pre class="ml-5"><a href="http://localhost:8080/post/$id">GET http://localhost:8080/post/$id</a><br/><br/></pre>
	3. Add new data (POST <?=base_url()?>/post)
	<pre class="ml-5"><a href="http://localhost:8080/post">POST http://localhost:8080/post</a><br/><br/></pre>
	4. Delete Data (DELETE <?=base_url()?>/post/$id)
	<pre class="ml-5"><a href="http://localhost:8080/post/$id">DELETE http://localhost:8080/post/$id</a><br/><br/></pre>
	5. Update Data (PUT <?=base_url()?>/post/$id)
	<pre class="ml-5"><a href="http://localhost:8080/post/$id">PUT http://localhost:8080/post/$id</a><br/><br/></pre></div>

	<div  class="div-cost"><h2>Komentar</h2>
	1. Get All Data (GET <?=base_url()?>/komentar)
	<pre class="ml-5"><a href="http://localhost:8080/komentar">GET http://localhost:8080/komentar</a><br/><br/></pre>
	2. Get data by id (GET <?=base_url()?>/komentar/$id)
	<pre class="ml-5"><a href="http://localhost:8080/komentar/$id">GET http://localhost:8080/komentar/$id</a><br/><br/></pre>
	3. Add new data (POST <?=base_url()?>/komentar)
	<pre class="ml-5"><a href="http://localhost:8080/komentar">POST http://localhost:8080/komentar</a><br/><br/></pre>
	4. Delete Data (DELETE <?=base_url()?>/komentar/$id)
	<pre class="ml-5"><a href="http://localhost:8080/komentar/$id">DELETE http://localhost:8080/komentar/$id</a><br/><br/></pre>
	5. Update Data (PUT <?=base_url()?>/komentar/$id)
	<pre class="ml-5"><a href="http://localhost:8080/komentar/$id">PUT http://localhost:8080/komentar/$id</a><br/><br/></pre></div>
</body>
</html>