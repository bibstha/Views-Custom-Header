<?php
// Get Current group node information using
// og_get_group_context()
$groupNode = og_get_group_context();
print l(t('Add new blog'), "node/add/blog", array('query' => array('gids[]' => $groupNode->nid)));
