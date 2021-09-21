<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card[]|\Cake\Collection\CollectionInterface $cards
 */
?>

<?php  $this->Html->css('reset', ['block' => true]); ?>
<?php  $this->Html->css('my', ['block' => true]); ?>
<!-- <div class="card-search"> -->
    <!-- post情報として送るFormを生成 -->
    <body>
        <!-- header -->
        <div class="header">
            <div class="header-inner">
                <h1 class="site-title"><a href="">デジモンカード検索</a></h1>
                <nav class="header-nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="">Edit</a></li>
                        <li class="nav-item"><a href="">Version</a></li>
                        <li class="nav-item"><a href="">Rarty</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- //header -->
        <!-- main -->
        <div class="main">
            <div class="copy-container">
                <div class="item">カード検索</div>
            </div>
        </div>

            <h1 class="search-wrapper"><?php echo $this->Form->create(null, ['type' => 'post'],); ?></h1>　<!-- keyword情報を設定 -->
            <div>
                <?php
                    echo 'カードネーム';
                    echo $this->Form->text('keyword');
                ?>
            </div>
            <!-- color情報を設定 -->
            <!-- color情報を設定(チェックボックス) -->
            <div class="color-search">
            <?php
                echo $this->Form->select('color', $options, [
                    'multiple' => 'checkbox'
                ]);
                ?>
            </div>
            <!-- cost情報を設定 -->
            <div>
                <?php
                    echo 'コスト';
                    echo $this->Form->select('cost',$array,['default' => '0']);
                    echo $this->Form->select('end_cost',$array,['default' => $num]);
                ?>
            </div>
            <!-- post情報送信ボタンの設置＆post情報用のform終了を宣言 -->
            <?php
                echo $this->Form->submit('検索');
                echo $this->Form->end();
            ?>
        </main>
<!-- </div> -->
<div class="cards index content">
<?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('カード') ?></h3>
<div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('rarity') ?></th>
                    <th><?= $this->Paginator->sort('version_name') ?></th>
                    <th><?= $this->Paginator->sort('short_name') ?></th>
                    <th><?= $this->Paginator->sort('CardNumber') ?></th>
                    <th><?= $this->Paginator->sort('CardName') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cards as $card): ?>
                <tr>
                    <td><?= $this->Number->format($card->id) ?></td>
                    <td><?= h($card->rarity->rarity_name) ?></td>
                    <td><?= h($card->version->name) ?></td>
                    <td><?= h($card->version->short_name) ?></td>
                    <td><?= $this->Number->format($card->CardNumber) ?></td>
                    <td><?= h($card->CardName) ?></td>
                    <td><?= h($card->color) ?></td>
                    <td><?= h($card->cost) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $card->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $card->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
</div>
</div>
