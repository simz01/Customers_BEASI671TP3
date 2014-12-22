<p>
<strong>Bonjour <?php echo $username; ?> </strong>
</p>
<p> Pour activer ce compter cliquer sur le lien suivant : </p> 
<p><?php echo $this->Html->link('Activer mon compte', $this->Html->url($link,true)); ?></p>