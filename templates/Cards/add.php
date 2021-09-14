<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 * @var \Cake\Collection\CollectionInterface|string[] $versions
 * @var \Cake\Collection\CollectionInterface|string[] $rarities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cards form content">
            <?= $this->Form->create($card) ?>
            <fieldset>
                <legend><?= __('Add Card') ?></legend>
                <?php
                    echo $this->Form->control('CardNumber');
                    echo $this->Form->control('CardName');
                    echo $this->Form->control('color');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('version_id', ['options' => $versions]);
                    echo $this->Form->control('rarity_id', ['options' => $rarities]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
