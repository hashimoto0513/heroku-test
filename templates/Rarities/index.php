<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rarity[]|\Cake\Collection\CollectionInterface $rarities
 */
?>
<?php  $this->Html->css('rarities', ['block' => true]); ?>
<div class="rarities index content">
    <div class="header">
        <h3><?= __('レアリティ') ?></h3>
        <nav class="header-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="/Cards/index">Card</a></li>
                <li class="nav-item"><a href="/versions/index">Version</a></li>
                <li class="nav-item"><a href="">Rarty</a></li>
                <li class="nav-item"><a href="/Images/index">Image</a></li>
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
        <?= $this->Html->link(__('New Rarity'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class="results">
        <div class="rarities-index-content">
            <div class="rarities_table-responsive">
                <table class="table_rartylist">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('レアリティ名') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rarities as $rarity): ?>
                        <tr>
                            <td><?= $this->Number->format($rarity->id) ?></td>
                            <td><?= h($rarity->rarity_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('表示'), ['action' => 'view', $rarity->id]) ?>
                                <?= $this->Html->link(__('編集'), ['action' => 'edit', $rarity->id]) ?>
                                <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $rarity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rarity->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
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
