<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage">
  <head>
    <title>Webmhole - motore di ricerca ad improbabilità</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mirko Fenu">
    
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/public/style.css" rel="stylesheet" type="text/css"> 
	<style>
    body,td,th {
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
    </style>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  <meta charset="utf-8">
  </head>
  <body>
 
 <div class="row"> 
  <div class="col-lg-12" style="text-align:center;">
  	<h1>Web'm'hole</h1>
  </div>
 </div>
 <div class="row"> 
  <div class="col-lg-12" style="text-align:center;">
  <p>&nbsp;</p>
  	<h4>Fattore di improbabilità di 1 a {{ $improbabilita }} </h4>
    <a class="button" href="/home">Home Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="button" href="{{ $url }}" target="_blank">Apri a tutto schermo</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="button" href="/whool/{{ $ricerca }}">Prossimo Sito</a>
    <p>&nbsp;</p>
  </div>
 </div>
 
 
       
	
		<iframe src="{{ $url }}" width="100%" height="800"></iframe>
    <p>&nbsp;</p>
    
    <p>&nbsp;</p>
   
  
   	
   
   </div>
   
  
  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>