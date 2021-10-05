<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rarity $rarity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rarity'), ['action' => 'edit', $rarity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rarity'), ['action' => 'delete', $rarity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rarity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rarities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rarity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rarities view content">
            <h3><?= h($rarity->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rarity Name') ?></th>
                    <td><?= h($rarity->rarity_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rarity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Time') ?></th>
                    <td><?= h($rarity->start_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Time') ?></th>
                    <td><?= h($rarity->end_time) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cards') ?></h4>
                <?php if (!empty($rarity->cards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('CardNumber') ?></th>
                            <th><?= __('CardName') ?></th>
                            <th><?= __('Color') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Version Id') ?></th>
                            <th><?= __('Rarity Id') ?></th>
                            <th><?= __('Full Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($rarity->cards as $cards) : ?>
                        <tr>
                            <td><?= h($cards->id) ?></td>
                            <td><?= h($cards->CardNumber) ?></td>
                            <td><?= h($cards->CardName) ?></td>
                            <td><?= h($cards->color) ?></td>
                            <td><?= h($cards->cost) ?></td>
                            <td><?= h($cards->created) ?></td>
                            <td><?= h($cards->modified) ?></td>
                            <td><?= h($cards->version_id) ?></td>
                            <td><?= h($cards->rarity_id) ?></td>
                            <td><?= h($cards->full_description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cards', 'action' => 'edit', $cards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
