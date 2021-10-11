<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('カードリスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="add-column-responsive column-80">
        <div class="cards form content add-wrapper">
            <?= $this->Form->create($card) ?>
            <fieldset>
                <legend><?= __('Add Card') ?></legend>
                <?php
                    echo $this->Form->label('レアリティ');
                    echo $this->Form->select('rarity_id',$rarities);
                    // echo $this->Form->control('version_id');
                    echo $this->Form->label('収録弾');
                    echo $this->Form->select('version_id',$names);
                    echo $this->Form->select('version_id',$versions);
                    echo $this->Form->control('CardNumber',['label' => 'カードNo.']);
                    echo $this->Form->control('CardName',['label' => 'カード名']);
                    echo $this->Form->label('色');
                    echo $this->Form->select('color',$options);
                    echo $this->Form->label('コスト');
                    echo $this->Form->select('cost',$array);
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('登録',['class' => 'add_button']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
