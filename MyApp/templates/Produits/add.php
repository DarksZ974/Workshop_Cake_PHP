<h1> Nouveau produit </h1>

<?php
    echo $this->Form->create($produit);
    echo $this->Form->control('user_id', ['type'=> 'hidden', 'value'=> 1]);
    // les différents Forms à ajouter
    echo $this->Form->end();
?>