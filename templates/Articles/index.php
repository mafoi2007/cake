<h1>Articles</h1>
<table>
    <tr>
        <th>Titre</th>
        <th>Crée le</th>
    </tr>
<?php 
if(is_null($articles)){ ?>
    <h2>Aucun article publié.</h2>
<?php }else{ ?>
    <?php foreach($articles as $article): ?>
    <tr>
        <td><?php $this->Html->link($article->title, ['action' => 'view', $article->slug]); ?></td>
        <td><?php $article->created->format(DATE_RFC850); ?></td>
    </tr>
<?php endforeach; 
    }
?>