<?php
// Get Current group node information using
// og_get_group_context()
$groupNode = og_get_group_context();
print '<div class="add-new-link">';
print l(t('Add new Document'), "node/add/ipaper", array('query' => array('gids[]' => $groupNode->nid)));
print '</div>';
