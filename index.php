<?php include __DIR__  .'/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<header>
		<img src="img/logo.png" alt="logo">
    </header>
     <main id="albums-container">
       <?php foreach(){ ?>
    	<div class="card">
        	<div class="card-img-wrapper">   
				<img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="album">          
            </div>
            <div class="card-txt">
              
              <span><strong>Titolo: </strong> </span>
              <span><strong>Autore: </strong></span>
              <span><strong>Genere: </strong></span>
            	<span><strong>Anno: </strong></span>          
            </div>
        </div>       
		<?php } ?>
      </main>
</body>
</html>