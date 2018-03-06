{extends file="parent:frontend/index/index.tpl"}

{block name="frontend_index_header_javascript"}
    {$smarty.block.parent}

    <script src="//{$Shop->getHost()}:35729/livereload.js" />
{/block}