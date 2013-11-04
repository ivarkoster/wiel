<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <?php echo Phalcon\Tag::getTitle(); ?>
    <?php echo Phalcon\Tag::stylesheetLink('css/bootstrap.css'); ?>
    <?php echo Phalcon\Tag::stylesheetLink('css/style.css'); ?>
    <?php echo Phalcon\Tag::stylesheetLink('css/smoothness/jquery-ui-1.10.3.custom.css'); ?>
    <?php echo Phalcon\Tag::javascriptInclude('js/jquery.js'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test this suckorr">
    <meta name="author" content="Phalcon Team">
    </head>
    <body>
        <?php echo $this->getContent(); ?>

        <?php echo Phalcon\Tag::javascriptInclude('js/jquery-ui-1.10.3.custom.js'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/bootstrap.js'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/utils.js'); ?>
    </body>
</html>
