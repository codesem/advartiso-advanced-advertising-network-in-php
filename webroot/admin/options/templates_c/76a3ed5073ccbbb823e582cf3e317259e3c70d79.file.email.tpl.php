<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 13:36:53
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52415161760cdf2f53c7192-31522447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a3ed5073ccbbb823e582cf3e317259e3c70d79' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/email.tpl',
      1 => 1619059738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52415161760cdf2f53c7192-31522447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailer' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    '_SAVE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf2f53fd9c4_05041620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf2f53fd9c4_05041620')) {function content_60cdf2f53fd9c4_05041620($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['mailer']->value) {?><div class='alert alert-success'>Email settings saved with success</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing Wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   
                                   <form class="form-horizontal" method="POST">
                                       
                                       <input type="hidden" name="up-email" value="up-email" />
                                       <div class="form-group">
                                           <label for="Type" class="col-md-10">
                                               Type
                                           </label>
                                           <div class="col-md-6">
                                               <select id="select_role" name="option" class="form-control">
                                                   <option value="smtp" <?php if (do_config(30)=='smtp') {?>selected="selected"<?php }?>>SMTP</option>
                                                   <option value="php_mail" <?php if (do_config(30)=='php_mail') {?>selected="selected"<?php }?>>PHP Mail</option>
                                               </select>
                                          </div>
                                       </div>
                                       <?php echo '<script'; ?>
>
                                           document.getElementById('select_role').addEventListener('change', function () {
                                               var style = this.value == 'php_mail' ? 'block' : 'yes';
                                               document.getElementById('hidden_div').style.display = style;
                                               var style = this.value == 'smtp' ? 'block' : 'none';
                                               document.getElementById('hidden_div').style.display = style;
                                           });
                                       <?php echo '</script'; ?>
>
                                       <div class="form-group">
                                           <label for="Supportemail" class="col-md-10"> Support email </label>
                                           <div class="col-md-6">
                                               <input type="text" name="support_email" class="form-control" value="<?php echo do_config(13);?>
"/>
                                           </div>
                                       </div>
                                       <div id="hidden_div" <?php if (do_config(30)=='smtp') {?> style="display: yes;" <?php } else { ?> style="display: none;" <?php }?>>
                                            <div class="form-group">
                                               <label for="Username" class="col-md-10"> Username</label>
                                               <div class="col-sm-6">
                                                   <input type="text" name="username" class="form-control" value="<?php echo do_config(31);?>
"/>
                                               </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Port" class="col-md-10"> Port </label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="port" class="form-control" value="<?php echo do_config(33);?>
"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Host" class="col-md-10"> Host </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="host" class="form-control" value="<?php echo do_config(32);?>
"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Using" class="col-md-10">Using</label>
                                                <div class="col-md-6">
                                                    <select name="ssl" class="form-control">
                                                        <option value="ssl" <?php if (do_config(34)=='ssl') {?> selected="selected" <?php }?>>SSL</option>
                                                        <option value="tls" <?php if (do_config(34)=='tls') {?> selected="selected" <?php }?> >TLS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Password" class="col-md-10"> Password</label>
                                                <div class="col-md-6">
                                                    <input type="password" name="pass" class="form-control" value="<?php echo do_config(35);?>
"/>
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                   </form>
                               </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
