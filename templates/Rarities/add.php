<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rarity $rarity
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('レアリティリスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="add-column-responsive column-80">
        <div class="rarities form content add-wrapper">
            <?= $this->Form->create($rarity) ?>
            <fieldset>
                <legend><?= __('Add Rarity') ?></legend>
                <?php
                    echo $this->Form->control('レアリティ名');
                    // echo $this->Form->control('start_time');
                    // echo $this->Form->control('end_time');
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('登録',['class' => 'add_button']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
