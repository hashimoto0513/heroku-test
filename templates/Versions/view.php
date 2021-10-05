<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Version $version
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Version'), ['action' => 'edit', $version->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Version'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Versions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Version'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="versions view content">
            <h3><?= h($version->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($version->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Short Name') ?></th>
                    <td><?= h($version->short_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($version->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cards') ?></h4>
                <?php if (!empty($version->cards)) : ?>
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
                        <?php foreach ($version->cards as $cards) : ?>
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
