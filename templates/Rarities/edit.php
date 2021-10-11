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
    <div class="edit-column-responsive column-80">
        <div class="rarities form content edit-wrapper">
            <?= $this->Form->create($rarity) ?>
            <fieldset>
                <legend><?= __('レアリティ編集') ?></legend>
                <?php
                    echo $this->Form->control('rarity_name');
                    echo $this->Form->control('start_time');
                    echo $this->Form->control('end_time');
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('変更',['class' => 'edit_button']); ?>
                <?= $this->Form->end() ?>
                <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $rarity->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $rarity->id), 'class' => 'delete-btn']
                ) ?>
            </div>
        </div>
    </div>
</div>
