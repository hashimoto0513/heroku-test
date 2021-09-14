<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rarity $rarity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rarity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rarity->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rarities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rarities form content">
            <?= $this->Form->create($rarity) ?>
            <fieldset>
                <legend><?= __('Edit Rarity') ?></legend>
                <?php
                    echo $this->Form->control('rarity_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
