# Regions Pingability

Regions Pingability is an opensource tool developed in PHP, to help cloud providers customers, in the choice of their server region. With this tool, you can make a cloud ping similar page. You have so many settings to personalize this tools, with visual identity of your brand. You can add up to 3 endpoint (url, or ip). Your customer will be advised about the best server/cloud location for his project. 

![screenshot-region-pingability](https://zupimages.net/up/20/05/dmmu.png)

If you're looking to host this app, or many other, you can look at [Scaleway](https://scaleway.com).


## Automated installation via Docker

You can easily deploy this app via Docker.
Obviously, install Docker before pulling this tool.

```linux
docker pull tjorge/regions-pingability:latest
```
After this deployment, type:
```linux
docker run -itd -p 80:80 tjorge/regions-pingability
```
Now you can check your URL, and your tool is fully functional at this 
>https://YOURIP

or 

>https://YOURDOMAIN.TLD

## Manual installation via a web server

If you're not familiar with Docker, you can deploy this tool using an FTP client.

**There is 2 use case:** 

`shared web hosting` : Please be sure that you've the last PHP version

`cloud/server/vps hosting` : Please be sure that you've installed a web server. Apache or Ngnix are suitable for this usage.

1. Download this project, via clicking on "Clone or download", and click on "Download ZIP". 
2. Unzip this zip file with your favorite software
3. Upload all theses files on your FTP Server


Now you can check your URL, and your tool is fully functional at this 
>https://YOURIP

or 

>https://YOURDOMAIN.TLD



## Configuration

This tool is created with an file called `config.inc.php`, where you can do main modifications. 

```php
// THEMING CONFIGURATION
$plogo = "https://www.stickpng.com/assets/images/58568d224f6ae202fedf2720.png"; // Paste path to your logo (png)
$plogow = "20%"; // Width of your logo (% or other php/html supported units)
$pfavicon = "./inc/favicon.png"; // Insert path to your favicon (png only, ico forbidden)

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
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License 
[MIT](https://choosealicense.com/licenses/mit/)

