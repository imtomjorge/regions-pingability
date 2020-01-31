<html>
<?php 
/*
                 _                         _                   _     _ _ _ _         
                (_)                       (_)                 | |   (_) (_) |        
  _ __ ___  __ _ _  ___  _ __  ___   _ __  _ _ __   __ _  __ _| |__  _| |_| |_ _   _ 
 | '__/ _ \/ _` | |/ _ \| '_ \/ __| | '_ \| | '_ \ / _` |/ _` | '_ \| | | | __| | | |
 | | |  __/ (_| | | (_) | | | \__ \ | |_) | | | | | (_| | (_| | |_) | | | | |_| |_| |
 |_|  \___|\__, |_|\___/|_| |_|___/ | .__/|_|_| |_|\__, |\__,_|_.__/|_|_|_|\__|\__, |
            __/ |                   | |             __/ |                       __/ |
           |___/                    |_|            |___/                       |___/ 

V0.1 - Public release - github.com/tjorge-scw/regions-pingability/
Proudly made from Paris, at "La Maison Scaleway".
Any question? tomjorge@tomjorge.com
*/

?>
<?php require('./inc/config.inc.php') ?>
<?php require('./inc/scripting.php') ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $ptitle ?></title>
  <link rel="stylesheet" href="inc/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="<?php echo $pfavicon ?>"/>
  <link href="<?php echo $purlfont;?>" rel="stylesheet"></head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="text-align: center;">
        <img src="<?php echo $plogo ?>" width="<?php echo $plogow?>">
        <h3><?php echo $h3title ?></h3>
        <h5><?php echo $h5subtitle ?></h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Flag</th>
                  <th>City/Country</th>
                  <th>Name</th>
                  <th>Ping</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><span class="flag-icon flag-icon-<?php echo $reg1code ?>"></span></th>
                  <td><?php echo $reg1city ?>, <?php echo $reg1country ?></td>
                  <td><?php echo $reg1sn ?></td>
                  <td><?php echo $reg1 ?></td>
                </tr>
                <tr>
                  <th scope="row"><span class="flag-icon flag-icon-<?php echo $reg2code ?>"></span></th>
                  <td><?php echo $reg2city ?>, <?php echo $reg2country ?></td>
                  <td><?php echo $reg2sn ?></td>
                  <td><?php echo $reg2 ?></td>
                </tr>
                <tr>
                  <th scope="row"><span class="flag-icon flag-icon-<?php echo $reg3code ?>"></span></th>
                  <td><?php echo $reg3city ?>, <?php echo $reg3country ?></td>
                  <td><?php echo $reg3sn ?></td>
                  <td><?php echo $reg3 ?></td>
                </tr>
              </tbody>
            </table>
            <div class="row">
              <div class="col-sm-8">
                <div class="alert alert-secondary" role="alert">
                  <b>The best region for your project is:</b> <br>
                  <h4><?php print $bc; ?></h4>
                  <small><b><i>Information:</b> Latency is displayed, based on your current location. This information can be false, or altered.</i><br></small>
                </div>
              </div>
              <div class="col-sm-4">
                <a href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-sm btn-block btn-info" role="button"><small>Retry ping</small></a><br>
                <div class="alert alert-secondary" role="alert">
                  <b>Your IP is:</b> <?php echo $_SERVER['REMOTE_ADDR']; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2 center-block space-1"></div>
      <div class="top align-self-center mx-auto">
        <a class="btn btn-primary" href="<?php echo $btn1link ?>" role="button"><?php echo $btn1title ?></a>
        <a class="btn btn-primary" href="<?php echo $btn2link ?>" role="button"><?php echo $btn2title ?></a>
      </div>
    </div>
  </div>
</body>
<footer class="f"><br>
  <?php echo date("Y"); ?> - <?php echo $footer ?>
</footer>

</html>