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
            <?= $this->Html->link(__('収録弾リスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="add-column-responsive column-80">
        <div class="versions form content add-wrapper">
            <?= $this->Form->create($version) ?>
            <fieldset>
                <legend><?= __('Add Version') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('short_name');
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('登録',['class' => 'add_button']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
