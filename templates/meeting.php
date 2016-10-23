<?php $this->layout('template', ['title' => 'Meeting']) ?>

<h1>Meeting <?=$this->e($meeeting['topic'])?> </h1>

<h2>Puggers</h2>
<ul>
    <?php foreach($meeting['puggers'] as $pugger): ?>
        <li>
            <?=$this->e($pugger['name'])?> (<?=$this->e($pugger['company'])?>)
        </li>
    <?php endforeach ?>
</ul>