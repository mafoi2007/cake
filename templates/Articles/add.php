<h1>Ajouter un article</h1>
<?php 
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type'=>'hidden', 'value'=>1]);
    echo $this->Form->control('title');

    echo $this->Form->end();