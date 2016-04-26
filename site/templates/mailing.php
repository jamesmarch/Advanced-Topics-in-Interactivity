<!-- site/templates/page.php -->
<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php
if ($email = stripslashes($_POST['email'])) {
$filename = "emails.phplist";
$filecontents = @file_get_contents($filename);
if ($_POST['choice'] == "join") {
if (strpos($filecontents) != "") break;
if (strlen($filecontents) > 0) $comma = ", ";
$add = $comma.$email;
$emails = $filecontents.$add;
$file = @fopen($filename, "w+");
@fwrite($file, $emails);
@fclose($file);
$message = "Your email was added to the mailing list.".
"<br>Redirecting to the last page.";
}
elseif ($_POST['choice'] == "leave") {
$edited = str_replace($email,"",$filecontents);
$file = @fopen($filename, "w+");
@fwrite($file, $edited);
@fclose($file);
$message = "Your email was removed from the mailing list.".
"<br>Redirecting to the last page.";
}
}
if ($message != "") die("<html><head>".
"<meta http-equiv=\"refresh\" content=\"3;url=\">".
"</head><body>$message</body></html>");
?>

<section>
<article>  


<div class="container">
<h2><?php echo kirbytext($page->title()) ?></h2>
<?php echo kirbytext($page->text()) ?>

<form action="" method="post">
<br>
<input type="text" name="email" placeholder="Entrez votre email"  class="input"><br>
<select name="choice" class="chosen-select">
<option value="join">Inscription</option>
<option value="leave">Dé-inscription</option>
</select>
<br>
<input type="Submit" value="Envoyer" class="button">
</form>
</div>


<!-- Javascript Styling formulaire / Start -->
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
<!-- Javascript Styling formulaire / End -->


</article>
</section>
<?php snippet('social') ?>
<?php snippet('footer') ?>