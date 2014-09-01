<?php /* Layout */ ?>
<?php $view->extend('SmurfSymfony2AppBundle::layout.html.php') ?>
<?php /* Layout Parameters */ ?>
<?php $view['slots']->set('page_title', 'Accueil') ?>
<?php $view['slots']->set('customer', 'Ministère de l\'Education nationale') ?>

<?php /* Start Content */ ?>
<?php WidgetsHelper::writeStartPanel("Accueil", array("type" => WidgetsHelper::NORMAL)) ?>
<?php WidgetsHelper::writeButton("Bouton de test", array("type" => WidgetsHelper::NORMAL, "icon" => WidgetsHelper::ICON_HDD)) ?>


<?php
$tabs = array(
    array("id" => "tab-1", "title" => "Test 1", "badge" => 45),
    array("id" => "tab-2", "title" => "Test 2"),
    array("id" => "tab-3", "title" => "Test 3"),
);
?>

<?php WidgetsHelper::writeStartTabs($tabs); ?>

<?php WidgetsHelper::writeStartTabContent("tab-1", true); ?>
<?php WidgetsHelper::writeTextInput("", "Nom d'utilisateur"); ?>

<?php WidgetsHelper::writeEndTabContent(); ?>

<?php WidgetsHelper::writeStartTabContent("tab-2"); ?>
contenu 2
<?php WidgetsHelper::writeEndTabContent(); ?>

<?php WidgetsHelper::writeStartTabContent("tab-3"); ?>
contenu 3
<?php WidgetsHelper::writeEndTabContent(); ?>

<?php WidgetsHelper::writeEndTabs(); ?>

<script>
    $(function() {
        $('ul.nav-tabs a').tab('show');
    })
</script>

<?php WidgetsHelper::writeAlert("ici", array("type" => WidgetsHelper::INFO, "closeable" => true)); ?>

<?php WidgetsHelper::writeEndPanel() ?>
