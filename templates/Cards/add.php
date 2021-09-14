<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
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
                    echo $this->Form->select('rarity_id',$rarities);
                    echo $this->Form->control('version_id');
                    echo $this->Form->select('version_id',$names);
                    echo $this->Form->select('version_id',$versions);
                    echo $this->Form->control('CardNumber');
                    echo $this->Form->control('CardName');
                    echo $this->Form->select('color',$options);
                    echo $this->Form->select('cost',$array);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
