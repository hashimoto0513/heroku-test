<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cards view content">
            <!-- <h3><?= h($card->CardName) ?></h3> -->
            <table class="view_table" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td class="card_detail" colspan="6">カード詳細</td>
                    </tr>
                    <tr>
                        <th class="view_no"><?= __('カードナンバー') ?></th>
                        <td><?= $this->Number->format($card->CardNumber) ?></td>
                        <th class="view_th_rea"><?= __('レアリティ') ?></th>
                        <td class="view_td_id"><?= h($card->rarity->rarity_name) ?></td>
                        <th class="view_th_color"><?= __('色') ?></th>
                        <td class="view_td_color"><?= h($card->color) ?></td>
                    </tr>
                    <tr>
                        <th class="view_ver" ><?= __('収録弾') ?></th>
                        <td><?= h($card->version->name) ?></td>
                        <th class="view_cardname"><?= __('カード名') ?></th>
                        <td><?= h($card->CardName) ?></td>
                        <th class="view_cost"><?= __('コスト') ?></th>
                        <td><?= h($card->cost) ?></td>
                    </tr>
                    <tr>
                        <th class="view_th_id"><?= __('Id') ?></th>
                        <td class="view_td_id"><?= $this->Number->format($card->id) ?></td>
                        <th class="view_created"><?= __('Created') ?></th>
                        <td><?= h($card->created) ?></td>
                        <th class="view_modified"><?= __('Modified') ?></th>
                        <td><?= h($card->modified) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
