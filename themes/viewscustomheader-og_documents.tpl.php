<?php
// Get Current group node information using
// og_get_group_context()
$groupNode = og_get_group_context();
print '<div class="add-new-link">';
print l('<span>'. t('Add new Document'). '</span>', "node/add/ipaper", array('html' => TRUE, 'query' => array('gids[]' => $groupNode->nid)));
print '</div>';
