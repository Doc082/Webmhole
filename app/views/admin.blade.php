<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage">
  <head>
    <title>Webmhole - login</title>
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
  <div class="col-lg-12">
       
	
		<p>&nbsp;</p>    
    	@if($success=='ok')
        <h1>Sito registrato!</h1>
        @endif
        <form action="/register" method="post">
  			            
  		<div class="form-group">
    		<label for="url">Inserisci l'indirizzo del sito:</label>
 			<input class="form-control" rows="5" id="url" name="url"></input>
  		</div>
        <div class="form-group">
    		<label for="categoria">Inserisci la categoria, o le categorie di appartenenza del sito:</label>
 			<input class="form-control" rows="5" id="categoria" name="categoria"></input>
  		</div>
  			<button type="submit" class="btn btn-default">Invia sito</button>
		</form>
    <p>&nbsp;</p>
    
    <p>&nbsp;</p>
    </div>
 
  </div>
  
  
   	
   
   </div>
   
  
  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>