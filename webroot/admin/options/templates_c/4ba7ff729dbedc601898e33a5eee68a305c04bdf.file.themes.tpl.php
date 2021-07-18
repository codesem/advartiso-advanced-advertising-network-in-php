<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 11:28:47
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/themes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132644111260cdd99ba80a27-34183968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ba7ff729dbedc601898e33a5eee68a305c04bdf' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/themes.tpl',
      1 => 1624323112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132644111260cdd99ba80a27-34183968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdd99bab6e47_35052976',
  'variables' => 
  array (
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'required' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    'themes' => 0,
    'TMPL' => 0,
    'foo' => 0,
    'THEME' => 0,
    'AST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdd99bab6e47_35052976')) {function content_60cdd99bab6e47_35052976($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Theme Deactivated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Theme Activated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Theme Deleted Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   
                                   <form id="upload_form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-group text-center">
                                            <p class="badge badge-success">
                                                <i class="fa fa-search"></i> 
                                                You can check some amazing themes <a href="https://codsem.com/category/themes" class="blue-color" target="_blank">here</a>
                                            </p>
                                            <div class="empty-h"></div>
                                            <div class="col-md-12">
                                                <label for="Icon" >ZIP FILE (THEME)</label>
                                                    <div id="upload-files" class="upload-file">
                                                        <label for="file-input">
                                                            <i class="fa fa-cloud-upload up-icon"></i>
                                                        </label>
                                                        <input id="file-input" type="file" name="theme-file" onchange="uploadTheme()"/>
                                                    </div>
                                                    <div id="progress" class="progress" style="display: none;">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:0%">0%
                                                        </div>
                                                    </div>
                                                    <div id="response" class=""></div>
                                            </div>
                                        </div>
                                    </form><br/>
                                    <div class="row">
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                        <div class="col-lg-4">
                                            <div class="theme-design" style="margin-right:10px;margin-top: 15px;">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['TMPL']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
/Assets/<?php echo $_smarty_tpl->tpl_vars['foo']->value['screen'];?>
" style="width: 100%;height: 100%;">
                                            </div><br>
                                            <form method="POST">
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"/>
                                                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
"/>
                                        <?php if ($_smarty_tpl->tpl_vars['THEME']->value==$_smarty_tpl->tpl_vars['foo']->value['name']) {?>
                                                <button type="submit" class="btn btn-info" disabled="disabled">Activated</button>
                                                <button type="submit" class="btn btn-danger" disabled="disabled">Delete</button>
                                        <?php } else { ?>
                                                <button type="submit" class="btn btn-info" name="activate" value="activate">Activate</button>
                                                <button type="submit" class="btn btn-danger" name="delete" value="delete">Delete</button>
                                        <?php }?>
                                            </form>
                                        </div> 
                            <?php } ?>
                                        <div class="col-lg-4">
                                            <div class="theme-design" style="margin-top: 15px;">
                                                <a href="https://codsem.com/search?term=advartiso" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
images/new-theme.svg" style="width: 100%;height: 100%;"></a>
                                            </div><br>
                                            <button class="btn btn-info" disabled="disabled">Activate</button>
                                            <button class="btn btn-danger" disabled="disabled">Delete</button>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
