<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Version[]|\Cake\Collection\CollectionInterface $versions
 */
?>
<?php  $this->Html->css('versions', ['block' => true]); ?>
<?= $this->fetch('script') ?>
<div class="versions index content">
    <div class="header">
        <h3><?= __('Versions') ?></h3>
        <nav class="header-nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="/Cards/index">Card</a></li>
                <li class="nav-item"><a href="">Version</a></li>
                <li class="nav-item"><a href="/Rarities/index">Rarty</a></li>
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
        <?= $this->Html->link(__('New Version'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    </div>
    <div class="results">
        <div class="versions-index-content">
            <div class="versions_table-responsive">
                <table class="table_versionlist">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('収録弾名') ?></th>
                            <th><?= $this->Paginator->sort('シリーズ名') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($versions as $version): ?>
                        <tr>
                            <td><?= $this->Number->format($version->id) ?></td>
                            <td><?= h($version->name) ?></td>
                            <td><?= h($version->short_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('表示'), ['action' => 'view', $version->id]) ?>
                                <?= $this->Html->link(__('編集'), ['action' => 'edit', $version->id]) ?>
                                <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?>
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
