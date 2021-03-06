<?php $this->beginPage() ;?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="">
        <meta name="author" content="Djava UI">
        <title><?= $this->title ?></title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="<?= \Yii::getAlias('@asset') ?>/global/img/ico/apple-touch-icon.png" rel="shortcut icon">
        <!-- END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <!--/ END FONT STYLES -->


        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../../assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="../../../assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
        
        <?php $this->head();  ?>
    </head>
    <!--/ END HEAD -->

    <!--

    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
	|=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
	|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
	|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
	|  04. @FONT STYLES                 |  Font from google fonts                                                             |
	|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
	|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
	|  07. @THEME STYLES                |  The main theme css file                                                            |
	|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
	|=========================================================================================================================|
	|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
	|  10. @ERROR PAGE                  |  Wrapping error page design                                                         |
	|=========================================================================================================================|
	|  11. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="bg-light">
          <?php $this->beginBody() ?>
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @ERROR PAGE -->
        <?php echo $content ?>
        <!--/ END ERROR PAGE -->

    <?php $this->endBody() ?>
    </body>
    <!--/ END BODY -->

</html>
<?php $this->endPage() ?>
