<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'Strona notatek';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.css', 'custom.css']) ?>
    <?= $this->fetch('script'); ?>
    <?= $this->Html->script('https://code.jquery.com/jquery-1.12.4.js') ?>
    <?= $this->Html->script('ckeditor/ckeditor') ?>
    <?= $this->Html->script('ckeditor/adapters/jquery.js') ?>
    <script>
        jQuery(function ($) {
            $('#tresc').ckeditor();
        })
    </script>

</head>
<body>

<?= $this->Flash->render() ?>
<div class="container clearfix">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->link('System notatek', '/', ['class' => 'navbar-brand']) ?>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <?= $this->Html->link('Notatki', '/notes') ?>
                    </li>
                </ul>
                <div class="navbar-text navbar-right">
                    <?php
                    $user = $this->request->Session()->read('Auth.User.username');
                    if (!$this->request->Session()->read('Auth.User.username')) {
                        echo $this->Html->link('Log in', '/users/login');
                    } else {
                        echo $this->Html->link('Logout', '/users/logout') . " : " . $user;
                    }
                     ?>

                </div>
            </div>
        </div>
    </nav>
    <div>
        <p class="text-right">
            <?= $this->Flash->render() ?>
        </p>
        <div class="page-header">
            <h3>System notatek
                <small>
                    <?php
                    $user = $this->request->Session()->read('Auth.User.username');
                    if ($this->request->Session()->read('Auth.User.username')) {
                        echo "Zalogowany jesteś jako : <span class=\"text-danger\">$user</span>";
                    } else {
                        echo "<span class=\"text-primary\">!!! nie jesteś zalogowany !!!</span>";
                    }
                    ?></small>
            </h3>
        </div>
        <?= $this->fetch('content') ?>
    </div>
</div>
<footer>
</footer>
<?= $this->Html->script('bootstrap.js'); ?>
<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'); ?>
</body>
</html>
