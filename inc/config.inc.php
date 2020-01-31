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

// THEMING CONFIGURATION
$plogo = "https://www.stickpng.com/assets/images/58568d224f6ae202fedf2720.png"; // Paste path to your logo (png)
$plogow = "20%"; // Width of your logo (% or other php/html supported units)
$pfavicon = "./inc/favicon.png"; // Insert path to your favicon (png only, ico forbidden)
$pcolor = "#BDC7C4"; // Insert here your color in HEX format only pls

//REGION CONFIGURATION // 
// Region 1
$reg1country = "France";
$reg1city = "Paris"; // City where you server is located
$reg1code = "fr"; // Used to display falgs (refers to this pls https://www.iso.org/obp/ui/#search)
$reg1sn = "PAR-1"; // Shortname you want to display for this "datacenter"
$reg1node = "ping.online.net"; // Please enter a server able to receive ping request

// Region 2
$reg2country = "Netherlands";
$reg2city = "Amsterdam"; // City where you server is located
$reg2code = "nl"; // Used to display falgs (refers to this pls https://www.iso.org/obp/ui/#search)
$reg2sn = "AMS-1"; // Shortname you want to display for this "datacenter"
$reg2node = "ping-ams1.online.net"; // Please enter a server able to receive ping request

// Region 2
$reg3country = "Poland";
$reg3city = "Warsaw"; // City where you server is located
$reg3code = "pl"; // Used to display falgs (refers to this pls https://www.iso.org/obp/ui/#search)
$reg3sn = "WAW-1"; // Shortname you want to display for this "datacenter"
$reg3node = "credit-agricole.pl"; // Please enter a server able to receive ping request

//OTHER CONFIGURATIONS
// Welcome area
$h3title = "Latency Checking Tool"; // H3 Title, displayed as welcome title under your logo
$h5subtitle = "Check out, what is the best location for your usage."; // H5 Subtitle, displayed under your welcome title

// HTML Tags
$ptitle = "Latency Checking Tool "; // Title of your page (HTML tag)
$pdesc = "Check out, what is the best location for your usage."; // Description of your page (HTML tag)
// Btn 1
$btn1title = "CTA Button title 1"; // Insert text wanted on your button
$btn1link = "https://google.com"; // Insert link for this first button
// Btn 2
$btn2title = "CTA Button title 2"; // Insert text wanted on your button
$btn2link = "https://google.com"; // Insert link for this second button
// Copyright footer
$footer = "Copyright - All right reserved."; // Insert a copyright sentence. Current year will be already displayed.

?>