<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:37:02
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Options/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1542600107608a29def32fb2-61101435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b6b4e14ba3c02e8e264dfdb7710c6f5490899e' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Options/index.tpl',
      1 => 1619056044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1542600107608a29def32fb2-61101435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'generale' => 0,
    'design' => 0,
    'extra' => 0,
    'interg' => 0,
    'captcha' => 0,
    'system' => 0,
    'social' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    'HOST' => 0,
    '_SAVE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a29df0281f3_18076197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a29df0281f3_18076197')) {function content_608a29df0281f3_18076197($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['generale']->value) {?><div class='alert alert-success'><b>#Generale</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['design']->value) {?><div class='alert alert-success'><b>#Design</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['extra']->value) {?><div class='alert alert-success'><b>#Extra</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['interg']->value) {?><div class='alert alert-success'><b>#Integration</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?><div class='alert alert-success'><b>#Captcha</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['system']->value) {?><div class='alert alert-success'><b>#System</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['social']->value) {?><div class='alert alert-success'><b>#Social</b> Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing Wrong! Please Try again <small><b>[Reasons: Required Fields, SQL Error]</b></small></div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                               </div>
                               <div class="card-box">
                                 <!-- Tab links -->
                                 <div class="tab">
                                     <button class="tablinks" onclick="openTAB(event, 'General')"<?php if ($_smarty_tpl->tpl_vars['generale']->value) {?>id="defaultOpen"<?php }
if (!$_smarty_tpl->tpl_vars['generale']->value&&!$_smarty_tpl->tpl_vars['design']->value&&!$_smarty_tpl->tpl_vars['interg']->value&&!$_smarty_tpl->tpl_vars['extra']->value&&!$_smarty_tpl->tpl_vars['captcha']->value&&!$_smarty_tpl->tpl_vars['system']->value&&!$_smarty_tpl->tpl_vars['social']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-wrench"></i> General</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Design')"<?php if ($_smarty_tpl->tpl_vars['design']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-paint-brush"></i> Design</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Extra')"<?php if ($_smarty_tpl->tpl_vars['extra']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-plus-circle"></i> Extra</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Integration')"<?php if ($_smarty_tpl->tpl_vars['interg']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-code"></i> Integration</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Captcha')" <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-refresh"></i> Captcha</button>
                                     <button class="tablinks" onclick="openTAB(event, 'System')"<?php if ($_smarty_tpl->tpl_vars['system']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-gears"></i> System</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Social')"<?php if ($_smarty_tpl->tpl_vars['social']->value) {?>id="defaultOpen"<?php }?>><i class="fa fa-feed"></i> Social Links</button>
                                 </div>
                                 <!-- Tab content -->
                                 <div id="General" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-generale" value="up-generale" />
                                         <div class="form-group">
                                             <label for="Name" class="col-md-6"> Name *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="name" class="form-control" value="<?php echo do_config(0);?>
" required="required"/>
                                                 <em class="font-600 forhelp">Your website Name</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Title" class="col-md-6">Title *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="site_title" class="form-control" value="<?php echo do_config(10);?>
" required="required"/>
                                                 <em class="font-600 forhelp">Your home page title</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Description" class="col-md-6">Description</label>
                                             <div class="col-md-10">
                                                 <textarea name="site_description" class="form-control" type="text"><?php echo do_config(9);?>
</textarea>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Keywords</label>
                                             <div class="col-md-10">
                                                 <input name="keywords" class="form-control" type="text" data-role="tagsinput" value="<?php echo do_config(41);?>
"/>
                                                 <em class="font-600 forhelp">Press (ENTER) after typing each keyword.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for=" UserNote" class="col-md-6">Landing Page note</label>
                                             <div class="col-md-10">
                                                 <input name="home_sec_desc" class="form-control" type="text" value="<?php echo do_config(23);?>
" />
                                                 <em class="font-600 forhelp">Specify a short note displayed on home page.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="MainDomain" class="col-md-6"> Main Domain *</label>
                                             <div class="col-md-10">
                                                 <input type="url" name="main_domain" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" required="required"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="UsersActivation" class="col-md-6">Users Activation</label>
                                             <div class="col-md-10">
                                                 <select name="account_activate_email" class="form-control">
                                                     <option value="1"<?php if (do_config(29)==1) {?> selected="selected"<?php }?>>Yes</option>
                                                     <option value="2"<?php if (do_config(29)==2) {?> selected="selected"<?php }?>>No</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Users need to confirm thier email after signup.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="Design" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-design" value="up-design" />
                                         <div class="form-group">
                                             <label for="LogoUrl" class="col-md-6"> Logo Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="logo_url" class="form-control" value="<?php echo do_config(27);?>
" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="LogoUrl" class="col-md-6"> Users Logo Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="users_logo_url" class="form-control" value="<?php echo do_config(28);?>
" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="FaviconURL" class="col-md-6"> Favicon URL *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="icon_url" class="form-control" value="<?php echo do_config(8);?>
" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Metaimage" class="col-md-6"> Meta image</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="meta_img" class="form-control" value="<?php echo do_config(26);?>
"/>
                                                 <em class="font-600 forhelp">Main Meta image url.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                    </form>
                                 </div>
                                 <div id="Extra" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-extra" value="up-extra" />
                                         <div class="form-group">
                                             <label for="Perfix" class="col-md-6"> Perfix *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="meta_perfix" class="form-control" value="<?php echo do_config(7);?>
" required=""/>
                                                 <em class="font-600 forhelp">Title Perfix</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Title" class="col-md-6">Search Index *</label>
                                             <div class="col-md-10">
                                                 <select name="enable_search_index" class="form-control">
                                                     <option value="1"<?php if (do_config(38)==1) {?> selected="selected"<?php }?>>Indexed</option>
                                                     <option value="2"<?php if (do_config(38)==2) {?> selected="selected"<?php }?>>No Index</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Search Engines Index Your Website.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Description" class="col-md-6">Symbole Position *</label>
                                             <div class="col-md-10">
                                                 <select name="sumbole_position" class="form-control">
                                                     <option value="before"<?php if (do_config(18)=='before') {?> selected="selected"<?php }?>>Before</option>
                                                     <option value="after"<?php if (do_config(18)=='after') {?> selected="selected"<?php }?>>After</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Amount Decimal *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="amount_decimal" class="form-control" value="<?php echo do_config(19);?>
" min="1" required=""/>
                                                 <em class="font-600 forhelp">Apply to general decimal on your website.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="admin_percent" class="col-md-6">Admin Percent</label>
                                             <div class="col-md-10">
                                                 <input name="admin_percent" class="form-control" type="number" value="<?php echo do_config(40);?>
" min="5" max="60"/>
                                                 <em class="font-600 forhelp">Enter percent in number.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="Integration" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-interg" value="up-interg" />
                                         <div class="form-group">
                                             <label for="FrontHeadCode" class="col-md-6"> Front Head Code</label>
                                             <div class="col-md-10">
                                                 <textarea type="text" name="head_code" class="form-control"><?php echo do_config(14);?>
</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="AfterBodyTagCode" class="col-md-6"> After Body Tag Code</label>
                                            <div class="col-md-10">
                                                <textarea type="text" name="body_code" class="form-control"><?php echo do_config(16);?>
</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="AfterFooterTagCode" class="col-md-6"> After Footer Tag Code</label>
                                            <div class="col-md-10">
                                                <textarea type="text" name="footer_code" class="form-control"><?php echo do_config(15);?>
</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                    </form>
                                 </div>
                                 <div id="Captcha" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-captcha" value="up-captcha" />
                                         <div class="form-group">
                                             <label for="CaptchaType" class="col-md-6">Type</label>
                                             <div class="col-md-10">
                                                 <select name="captcha_type" class="form-control" >
                                                     <option value="recaptcha" selected="selected">Recaptcha</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Get your reCAPTCHA keys from <a href="https://www.google.com/recaptcha/" target="_blank">here</a>.</em>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reCAPTCHASitekey" class="col-md-6"> reCAPTCHA Site key</label>
                                            <div class="col-md-10">
                                                <input type="text" name="reCAPTCHA_site_key" class="form-control" value="<?php echo do_config(5);?>
"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reCAPTCHASecretkey" class="col-md-6"> reCAPTCHA Secret key</label>
                                            <div class="col-md-10">
                                                <input type="text" name="reCAPTCHA_secret_key" class="form-control" value="<?php echo do_config(6);?>
"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Captchaonsignup" class="col-md-6">Captcha on signup</label>
                                            <div class="col-md-10">
                                                <select name="captcha_signup" class="form-control">
                                                    <option value="1"<?php if (do_config(54)==1) {?> selected="selected"<?php }?>>Yes</option>
                                                    <option value="2"<?php if (do_config(54)==2) {?> selected="selected"<?php }?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Captchaonlogin" class="col-md-6"> Captcha on login</label>
                                            <div class="col-md-10">
                                                <select name="captcha_login" class="form-control">
                                                    <option value="1"<?php if (do_config(55)==1) {?> selected="selected"<?php }?>>Yes</option>
                                                    <option value="2"<?php if (do_config(55)==2) {?> selected="selected"<?php }?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CaptchaonForgot" class="col-md-6">Captcha on Forgot Password</label>
                                            <div class="col-md-10">
                                                <select name="captcha_forgot" class="form-control">
                                                    <option value="1"<?php if (do_config(56)==1) {?> selected="selected"<?php }?>>Yes</option>
                                                    <option value="2"<?php if (do_config(56)==2) {?> selected="selected"<?php }?>>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>

                    </form>
                                 </div>
                                 <div id="System" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-system" value="up-system" />
                                         <div class="form-group">
                                             <label for="DefaultLanguage" class="col-md-6">Default Language</label>
                                             <div class="col-md-10">
                                                 <select class="form-control">
                                                     <option selected="selected">English (United States)</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Landing" class="col-md-6">Home Landing</label>
                                             <div class="col-md-10">
                                                 <select name="landing" class="form-control">
                                                     <option value="adfancy" <?php if (do_config(42)=='adfancy') {?>selected="selected"<?php }?>>AdFancy</option>
                                                     <option value="adcrypto" <?php if (do_config(42)=='adcrypto') {?>selected="selected"<?php }?>>AdCrypto</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Protected Usernames</label>
                                             <div class="col-md-10">
                                                 <input name="protected_usernames" class="form-control" type="text" data-role="tagsinput" value="<?php echo do_config(11);?>
"/>
                                                 <em class="font-600 forhelp">Enter Usernames that users cannot use them.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="adv_support_email" class="col-md-6">Advertiser Support Email</label>
                                             <div class="col-md-10">
                                                 <input name="adv_support_email" class="form-control" type="text" value="<?php echo do_config(24);?>
"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="pub_support_email" class="col-md-6">Publisher Support Email</label>
                                             <div class="col-md-10">
                                                 <input name="pub_support_email" class="form-control" type="text" value="<?php echo do_config(25);?>
"/>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                     </form>
                                 </div>
                                 <div id="Social" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-social" value="up-social" />
                                        <div class="form-group">
                                             <label for="Facebook" class="col-md-6"> Facebook</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="fb_link" class="form-control" value="<?php echo do_config(57);?>
"/>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Instagram" class="col-md-6"> Instagram</label>
                                            <div class="col-md-10">
                                                <input type="text" name="insta_link" class="form-control" value="<?php echo do_config(58);?>
"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Twitter" class="col-md-6"> Twitter</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tweet_link" class="form-control" value="<?php echo do_config(59);?>
"/>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>
                                    </form>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========================
                           TABS
                        ============================== -->
                        <?php echo $_smarty_tpl->getSubTemplate ("../Layout/tab.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
