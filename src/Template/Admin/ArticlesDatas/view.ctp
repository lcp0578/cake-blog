<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articles Data'), ['action' => 'edit', $articlesData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articles Data'), ['action' => 'delete', $articlesData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles Datas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articles Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articlesDatas view large-9 medium-8 columns content">
    <h3><?= h($articlesData->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($articlesData->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Article') ?></th>
            <td><?= $articlesData->has('article') ? $this->Html->link($articlesData->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesData->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($articlesData->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($articlesData->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Type Id') ?></th>
            <td><?= $articlesData->type_id ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($articlesData->content)); ?>
    </div>
</div>
