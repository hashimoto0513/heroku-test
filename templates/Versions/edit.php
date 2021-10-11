<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Version $version
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link('収録弾リスト', ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="edit-column-responsive column-80">
        <div class="versions form content edit-wrapper">
            <?= $this->Form->create($version) ?>
            <fieldset>
                <legend><?= __('Edit Version') ?></legend>
                <?php
                    echo $this->Form->control('収録弾名');
                    echo $this->Form->control('シリーズ名');
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('変更',['class' => 'edit_button']); ?>
                <?= $this->Form->end() ?>
                <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $version->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $version->id), 'class' => 'delete-btn']
                ) ?>
            </div>
        </div>
    </div>
</div>
