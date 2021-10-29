<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>
<?php  $this->Html->css('images', ['block' => true]); ?>
<div class="images index content">
    <div class="header">
            <h3><?= __('イメージ') ?></h3>
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="/Cards/index">Card</a></li>
                    <li class="nav-item"><a href="/versions/index">Version</a></li>
                    <li class="nav-item"><a href="/Rarities/index">Rarty</a></li>
                    <li class="nav-item"><a href="">Image</a></li>
                </ul>
            </nav>
            <button class="burger-btn">
            <span class="bars">
                <span class="bar bar_top"></span>
                <span class="bar bar_mid"></span>
                <span class="bar bar_bottom"></span>
            </span>
            <span class="menu">MENU</span>
        </button>
        <span class="burger-musk"></span>
    </div>
    <div class="pagination">
        <ul class="pagination-wrapper">
            <?= $this->Paginator->prev('<<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>>') ?>
        </ul>
        <?= $this->Html->link(__('New Image'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class="results">
        <div class="images-index-content">
            <div class="images_table-responsive">
                <table class="table_rartylist">
                    <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('イメージ名') ?></th>
                        <th class="th-img"><?= $this->Paginator->sort('イメージ') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                    <td><?= $this->Number->format($image->id) ?></td>
                    <td><?= h($image->image_name) ?></td>
                    <td><?= $this->Html->image($image->img,['class' => 'img']) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('表示'), ['action' => 'view', $image->id]) ?>
                        <?= $this->Html->link(__('編集'), ['action' => 'edit', $image->id]) ?>
                        <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="pagination2">
        <ul class="pagination2-wrapper">
            <?= $this->Paginator->prev('<<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>>') ?>
        </ul>
    </div>
    <footer  class="footer">
        <small>&copy; デジモンカード検索</small>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?= $this->Html->script('version'); ?>
</div>
