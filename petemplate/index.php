<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>

<html lang="<?php echo $this->language; ?>" >

    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    </head>

    <body>
        <jdoc:include type="modules" name="top" /> 
        <p>Greetings, Earthlings</p>
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="bottom" />
    </body>

</html>

