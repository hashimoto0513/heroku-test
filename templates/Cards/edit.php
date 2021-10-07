<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><? __('Actions') ?></h4>
            <?= $this->Html->link(__('カードリスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="edit-column-responsive column-80">
        <div class="cards form content edit-wrapper">
            <?= $this->Form->create($card) ?>
            <fieldset>
                <legend><?= __('Edit Card') ?></legend>
                <?php
                    echo $this->Form->label('レアリティ');
                    echo $this->Form->select('rarity_id',$rarities,['label' => 'Number']);
                    echo $this->Form->label('収録弾');
                    echo $this->Form->select('version_id',$names);
                    echo $this->Form->select('version_id',$versions,['class' => 'eidt_short_ver']);
                    echo $this->Form->control('CardNumber',['label' => 'カードNo.']);
                    echo $this->Form->control('CardName',['label' => 'カード名']);
                    echo $this->Form->label('色');
                    echo $this->Form->select('color',$options);
                    echo $this->Form->control('cost',['label' => 'コスト','class' => 'edit_cost']);
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('変更',['class' => 'edit_button']); ?>
                <?= $this->Form->end() ?>
                <?= $this->Form->postLink(
                    __('削除'),
                    ['action' => 'delete', $card->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'delete-btn']
                ) ?>
            </div>
        </div>
    </div>
</div>
<!-- __('Actions') -->
