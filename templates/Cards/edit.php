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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $card->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cards form content">
            <?= $this->Form->create($card) ?>
            <fieldset>
                <legend><?= __('Edit Card') ?></legend>
                <h3>Rarity</h3>
                <?php
                    echo $this->Form->select('rarity_id',$rarities);
                ?>
                <h3>Version</h3>
                <?php
                    echo $this->Form->select('version_id',$names);
                ?>
                <?php
                    echo $this->Form->select('version_id',$versions);
                    echo $this->Form->control('CardNumber');
                    echo $this->Form->control('CardName');
                    echo $this->Form->select('color',$options);
                    echo $this->Form->control('cost');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
