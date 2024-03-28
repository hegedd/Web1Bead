<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<?php include_once('./connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
	<?php if(file_exists('./css/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./css/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
	<link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	<link rel="stylesheet" href="./css/carousel.css" type="text/css">
</head>
<body>
    
	<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
		<div class="container-fluid">
			<image class="rounded-circle" width="40" height="40" src="./images/rbok.png">
		  <a class="navbar-brand ms-2 align-middle">Web-I beadandó 2024</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav  align-middle">
				<?php foreach ($oldalak as $url => $oldal) { ?>
					<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
						<li<?= (($oldal == $keres) ? ' class="nav-item"' : '') ?>>
							<a class="nav-link active" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
			<div class="text-light ">
					<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></a><?php } ?>
			</div>
		</div>
		</div>
	  </nav>
	</header>
	
	<main>
		<div>
    		<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
		</div>

		
	</main>
	<hr class="featurette-divider">	
		<footer class="container">
			<div class="col">Hegedűds Ádám Csaba</div>
			<div class="col main-footer-nav first sub">
				<p class="float-end"><a href="#">Back to top</a></p>
			</div>
		</footer>
	
		<script src="./js/bootstrap.bundle.min.js"></script>
	
		  
	  </body>
</html>
