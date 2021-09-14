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
            <h3><?= h($card->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('CardName') ?></th>
                    <td><?= h($card->CardName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($card->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Version') ?></th>
                    <td><?= $card->has('version') ? $this->Html->link($card->version->name, ['controller' => 'Versions', 'action' => 'view', $card->version->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Rarity') ?></th>
                    <td><?= $card->has('rarity') ? $this->Html->link($card->rarity->id, ['controller' => 'Rarities', 'action' => 'view', $card->rarity->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($card->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('CardNumber') ?></th>
                    <td><?= $this->Number->format($card->CardNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($card->cost) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($card->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($card->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
