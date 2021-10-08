<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card[]|\Cake\Collection\CollectionInterface $cards
 */
?>

<?php  $this->Html->css('reset', ['block' => true]); ?>
<?php  $this->Html->css('cake', ['block' => true]); ?>
<!-- <div class="card-search"> -->
<!-- post情報として送るFormを生成 -->
    <body>
     <!-- header   -->
        <div class="header">
            <h1 class="site-title"><a href="">デジモンカード検索</a></h1>
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="">Edit</a></li>
                    <li class="nav-item"><a href="/versions/index">Version</a></li>
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
        <!-- //header -->

        <!-- main -->
        <main>
            <div class="primary-container">
                <div class="wrapper-outer">
                        <div>
                            <div class="search-container">
                                <h3>カード検索</h3>
                            </div>
                        </div>
                    <div class="wrapper_inner">
                        <div class="card_search">
                            <div class="post"><?php echo $this->Form->create(null, ['type' => 'post'],); ?></div>
                            <div class="search-inner">
                                <div class="search-item">
                                    <div class="version-search">
                                        <p>収録弾</p>
                                            <?php
                                            echo $this->Form->select('versions',$varsion_option,['default' => '選択','class' =>['class' => 'ver-select']]);
                                        ?>
                                    </div>
                                </div>
                                <div class="search-item">
                                    <div class="rarity-search">
                                        <p>レアリティ</p>
                                        <?php
                                            echo $this->Form->select('rarities',$rearty_option,['default' => '選択','class' =>['class' => 'rea-select']]);
                                        ?>
                                    </div>
                                </div>
                                <!-- keyword情報を設定  -->
                                <div class="search-item">
                                    <div class="cardname-search">
                                        <p>カードネーム</p>
                                        <?php
                                            echo $this->Form->text('keyword',['class' =>['class' => 'cardname-text']]);
                                        ?>
                                    </div>
                                </div>
                                <!-- cost情報を設定 -->
                                <div class="search-item">
                                    <div class="cost-search">
                                        <p>コスト</p>
                                        <?php
                                            echo $this->Form->select('cost',$array,['default' => '0','class' =>['class' => 'cost-select']]);
                                            echo "～";
                                            echo $this->Form->select('end_cost',$array,['default' => $num,'class' =>['class' => 'end_cost-select']]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="search-outer">
                                    <!-- color情報を設定 -->
                                    <!-- color情報を設定(チェックボックス) -->
                                <div class="search-item">
                                    <div class="color-search">
                                        <p>色</p>
                                        <?php
                                            echo $this->Form->select('color', $options, [
                                                'multiple' => 'checkbox'
                                            ]);
                                        ?>
                                    </div>
                                </div>
                                <!-- post情報送信ボタンの設置＆post情報用のform終了を宣言 -->
                                <?php
                                    echo $this->Form->submit('検索する',['type' => 'submit','class' => ['class' => 'search-button']]);?>
                                    <!-- echo $this->Form->submit(?> -->
                                    <?php echo $this->Form->end();
                                ?></div>
                            </div>
                            <?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'button float-right']) ?>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination-wrapper">
                        <?= $this->Paginator->prev('<<') ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('>>') ?>
                    </ul>
                </div>
                <div class="results">
                    <div class="cards-index-content">
                        <!-- <?= __('カード') ?> -->
                        <div class="table-responsive">
                            <table class="table_cardlist">
                                <thead>
                                    <tr>
                                        <th class="tit_id"><?= $this->Paginator->sort('ID'); ?></th>
                                        <th class="tit_rea"><?= $this->Paginator->sort('レア') ?></th>
                                        <th class="tit_var"><?= $this->Paginator->sort('収録弾') ?></th>
                                        <th class="tit_short_ver"><?= $this->Paginator->sort('弾数') ?></th>
                                        <th class="tit_no"><?= $this->Paginator->sort('カードNo.') ?></th>
                                        <th class="tit_name"><?= $this->Paginator->sort('カード名') ?></th>
                                        <th class="tit_color"><?= $this->Paginator->sort('色') ?></th>
                                        <th class="tit_cost"><?= $this->Paginator->sort('コスト') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                            </table>
                            <table id="search_results">
                                <tbody>
                                    <?php foreach ($cards as $card): ?>
                                    <tr>
                                        <td class="cardlist_id"><?= $this->Number->format($card->id) ?></td>
                                        <td class="cardlist_rea"><?= h($card->rarity->rarity_name) ?></td>
                                        <td class="cardlist_ver"><?= h($card->version->name) ?></td>
                                        <td class="cardlist_short_ver"><?= h($card->version->short_name) ?></td>
                                        <td class="cardlist_no"><?= $this->Number->format($card->CardNumber) ?></td>
                                        <td class="cardlist_name"><?= h($card->CardName) ?></td>
                                        <td class="cardlist_color"><?= h($card->color) ?></td>
                                        <td class="cardlist_cost"><?= h($card->cost) ?></td>
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
                    </div>
                </div>
                <div class="pagination2">
                    <ul class="pagination2-wrapper">
                        <?= $this->Paginator->prev('<<') ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('>>') ?>
                    </ul>
                </div>
            </div>
        </main>
        <!-- main -->

        <!-- footer -->
        <footer class="footer">
            <small>&copy; デジモンカード検索</small>
        </footer>
        <!-- footer -->
    </body>
