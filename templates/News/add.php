<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List News'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="news form content">
            <?= $this->Form->create($news, ['type' => 'file']); ?>
            <fieldset>
                <legend><?= __('Add News') ?></legend>
                <?php
                    echo $this->Form->control('title_date');
                    echo $this->Form->control('title');
                    echo $this->Form->control('body');
                    echo $this->Form->file('file_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
