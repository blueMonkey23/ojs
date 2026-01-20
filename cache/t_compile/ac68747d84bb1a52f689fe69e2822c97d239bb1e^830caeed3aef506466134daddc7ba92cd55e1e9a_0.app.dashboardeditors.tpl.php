<?php
/* Smarty version 4.5.5, created on 2026-01-15 13:34:40
  from 'app:dashboardeditors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, [
    'version' => '4.5.5',
    'unifunc' => 'content_69688a80e7d6b9_47584163',
    'has_nocache_code' => false,
    'file_dependency' =>
     [
         '830caeed3aef506466134daddc7ba92cd55e1e9a' =>
          [
              0 => 'app:dashboardeditors.tpl',
              1 => 1766649665,
              2 => 'app',
          ],
     ],
    'includes' =>
     [
     ],
], false)) {
    function content_69688a80e7d6b9_47584163(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, true);
        ?>


<?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30774557369688a80e7c6d8_94440036', 'page');
        ?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/backend.tpl');
    }
    /* {block "page"} */
    class Block_30774557369688a80e7c6d8_94440036 extends Smarty_Internal_Block
    {
        public $subBlocks = [
            'page' =>
             [
                 0 => 'Block_30774557369688a80e7c6d8_94440036',
             ],
        ];
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>

	<dashboard-page v-bind="pageInitConfig" />
<?php
        }
    }
/* {/block "page"} */
}
