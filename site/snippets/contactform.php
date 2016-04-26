<?php if(param('status') == "go"): ?>
<?php $email = get('email');
      $name  = get('name');
      $text  = get('text');

      $contact = email(array(
          'to'      => 'YourName <your@mail.com>',
          'from'    => "$name <$email>",
          'subject' => 'From www.boitealumiere.fr',
          'body'    => "Message: \n $text"
)); ?>

<?php if($contact->send()): ?>
<div class="alert success">
    <h3>Thank you very much for your request.</h3>
    <p>We will get in contact as soon as possible!</p>
</div>
<?php else: ?>
<div class="alert error">
    <h3>The email could not be sent.</h3>
    <p>Please try again later.</p>
</div>
<?php endif ?>

<?php else: ?>
<ul class="contactfrom">
<form action="<?php echo $page->url() ?>/status:go" method="post">
    <li><label for="contactform-name">Nom <span class="red">*</span></label></li>
    <li><input type="text" id="contactform-name" name="name" /></li>
    <li><label for="contactform-email">Email <span class="red">*</span></label></li>
    <li><input type="email" id="contactform-email" name="email" /></li>
    <li><label for="contactform-text">Text <span class="red">*</span></label></li>
    <li><textarea rows="10" cols="30" name="text" id="contactform-text"></textarea></li>
    <li><button type="submit" name="submit">Envoyer</button></li>
</form>
<?php endif ?>
</ul>
