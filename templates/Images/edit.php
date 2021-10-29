<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('イメージリスト'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="edit-column-responsive column-80">
        <div class="images form content edit-wrapper">
        <?= $this->Form->create($image, ['type' => 'file']); ?>
            <fieldset>
                <legend><?= __('Edit Image') ?></legend>
                <?php
                    echo $this->Form->control('イメージ名');
                    echo $this->Form->file('img',['class' => 'img_button']);
                ?>
            </fieldset>
            <div class="btn-wrapper">
                <?= $this->Form->button('変更',['class' => 'edit_button']); ?>
                <?= $this->Form->end() ?>
                <?= $this->Form->postLink(
                    '削除',
                    ['action' => 'delete', $image->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => 'delete-btn']
                ) ?>
            </div>
        </div>
    </div>
</div>
