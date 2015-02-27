<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico"/>
        <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/apple-touch-icon-152x152.png" />
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery/jquery-1.11.1.min.js"></script>
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
            <!-- Modal Task Progress -->    
    <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                  </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                  </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                  </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                  </div>
                </div>
                <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div>
        
    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3>Confirmación <strong>Cerrar sesión</strong></h3>
            <div>
                <p class="text-center">¿Estas seguro que deseas cerrar la sesión de tu usuario?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">No!</button>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/logout/" class="btn btn-success md-close">Si, estoy seguro</a>
                </p>
            </div>
        </div>
    </div>        <!-- Modal End -->    
    <!-- Begin page -->
    <div id="wrapper">
        
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quienes_somos/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_azul.jpg" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <?php
                            $criteria=new CDbCriteria;
                            $criteria->condition='ESTADO=:ESTADO';
                            $criteria->params=array(':ESTADO'=>0);
                            $criteria->order='ID_MENSAJE DESC';
                            $notificaciones= Mensajes::model()->count($criteria);
                            $model= Mensajes::model()->findAll($criteria);
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i>
                            <?php if($notificaciones>0): ?>
                                <span class="label label-danger absolute"><?php echo $notificaciones ?></span>
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> Nuevos mensajes</li>
                            <?php if(empty($model)): ?>
                                <li class="unread">
                                    <a class="clearfix">
                                        <p>No hay mensajes nuevos</p>
                                    </a>
                                </li>
                            <?php endif;?>
                            <?php foreach ($model as $m): ?>
                                <li class="unread">
                                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/admin/ver_mensaje/<?php echo $m->ID_MENSAJE ?>" class="clearfix">
                                        <img src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-man.png" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong><?php echo $m->NOMBRES ?></strong><i class="pull-right msg-time"><?php echo $m->FECHA ?></i><br>
                                        <p><?php echo substr($m->MENSAJE,0,45)."..." ?></p>
                                    </a>
                                </li>
                            <?php endforeach;?>
                            <li class="dropdown-footer"><div class=""><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/mensajes" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> Ver todos</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/dinamov-logo.png"></span> <!--ARREGLAR NOMBRE USUSARIO-->Admin</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cambiar_clave">Cambiar contraseña</a></li>
                            <li class="divider"></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
            <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <br>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quienes_somos/" class="rounded-image profile-image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/dinamov-logo.png"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Bienvenido(a) <b><!--ARREGLAR NOMBRE USUSARIO--> Admin</b></div>
                        <div class="profile-buttons">
                          <a class="md-trigger" title="Cerrar Sesión" data-modal="logout-modal"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a id="quienes_somos" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/quienes_somos/'>
                                <i class='icon-users'></i>
                                <span>Quiénes Somos</span> 
                            </a>
                        </li>
                        <li class='has_sub'>
                            <a id="como_trabajamos" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/como_trabajamos/'>
                                <i class='fa fa-cogs'></i>
                                <span>Cómo Trabajamos</span> 
                                <span class="pull-right">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a id="ver_contenidos" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/como_trabajamos/'>
                                        <i class="fa fa-eye"></i>
                                        <span>Ver contenidos</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="tips_como_trabajamos" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/tips_como_trabajamos/'>
                                        <i class="fa fa-eye"></i>
                                        <span>Tips Cómo Trabajamos</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="agregar_contenidos" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_contenidos/'>
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Agregar contenidos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='has_sub'>
                            <a id="servicios" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/servicios/'>
                                <i class='fa fa-sitemap'></i>
                                <span>Servicios</span> 
                                <span class="pull-right">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a id="ver_servicios" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/ver_servicios/'>
                                        <i class="fa fa-eye"></i>
                                        <span>Ver</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="agregar_servicios" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_servicios/'>
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Agregar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='has_sub'>
                            <a id="blogs" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/blogs/'>
                                <i class='fa fa-book'></i>
                                <span>Blogs</span> 
                                <span class="pull-right">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a id="ver_blogs" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/ver_blogs/'>
                                        <i class="fa fa-eye"></i>
                                        <span>Ver</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="agregar_blogs" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_blogs/'>
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Agregar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='has_sub'>
                            <a id="noticias" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/noticias/'>
                                <i class='fa fa-bullhorn'></i>
                                <span>Noticias</span> 
                                <span class="pull-right">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a id="ver_noticias" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/ver_noticias/'>
                                        <i class="fa fa-eye"></i>
                                        <span>Ver</span>
                                    </a>
                                </li>
                                <li>
                                    <a id="agregar_noticias" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/agregar_noticias/'>
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Agregar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a id="contacto" href='<?php echo Yii::app()->request->baseUrl; ?>/admin/contacto/'>
                                <i class='fa fa-info-circle'></i>
                                <span>Información Contácto</span> 
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="portlets">
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->           <!-- Right Sidebar Start -->
    <!-- Right Sidebar End -->      
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">

            <?php echo $content; ?>

            <footer>
                DOD media group SAS &copy; 2015
            </footer>
            <!-- Footer End -->         
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <div id="contextMenu" class="dropdown clearfix">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
            </ul>
        </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>

    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-detectmobile/detect.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/ios7-switch/ios7.switch.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/fastclick/fastclick.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/nifty-modal/js/classie.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/sortable/sortable.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-select2/select2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/pace/pace.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-icheck/icheck.min.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-notifyjs/notify.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/pages/notifications.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/prettify/prettify.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/summernote/summernote.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/pages/forms.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/init.js"></script>
    <!-- Page Specific JS Libraries -->   
    </body>
</html>