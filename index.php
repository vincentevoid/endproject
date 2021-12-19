<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta name="viewport" content="width=1000">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Endproject - 「엔드프로젝트」</title>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" type="text/css" href="stylesheet.css" media ="all">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
      // Set trigger and container variables
      var trigger = $('#nav tr td a'),
          container = $('#content');
      
      // Fire on click
      trigger.on('click', function(){
        // Set $this for re-use. Set target from data attribute
        var $this = $(this),
          target = $this.data('target');       
        
        // Load target page into container
        container.load(target + '.php');
        
        // Stop normal link behavior
        return false;
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      var trigger2 = $('#menu a');
          container = $('#content');
      
      // Fire on click
      trigger2.on('click', function(){
        // Set $this for re-use. Set target from data attribute
        var $this = $(this),
          target = $this.data('target');       
        
        // Load target page into container
        container.load(target + '.php');
        
        // Stop normal link behavior
        return false;
      });
    });
  </script>

</head>
<body tabindex="0">
<center>

<h1 id="menu"><a href="#" data-target="home">ENDPROJECT</a></h1>

<table id="nav" border=0 cellpadding=10 cellspacing=10 width=450em height=20em style="padding-bottom:5px;">
<tr>
<td width="33.33%" align="center">[<a href="#" data-target="manifesto">manifesto</a>]</td>
<td width="33.33%" align="center">[<a href="#" data-target="appendix">appendix</a>]</td>
<td width="33.33%" align="center">[<a href="mailto:contact@endproject.닷컴"_blank>contact</a>]</td>
</tr>
</table>

<table border=0 cellpadding=3 cellspacing=3 width=900em height=20em>
<tr>
<td class="flash" colspan=2>
<marquee direction ="left" scrollamount="10">You have reached the end of the internet
</marquee></td>
</tr>
</table>

<iframe src="/chat/index.html" width="900em" height="600em" style="border: none;padding-top:15px;"></iframe>

<div id="content">
    <?php include('home.php'); ?>
</div>

<footer>
<a href="https://viralpubliclicense.org/" target="_blank">VIRAL PUBLIC LICENSE<br />
Copyleft (ɔ) All Rights Reserved</a>
</footer>

</center>
</body>
</html>
