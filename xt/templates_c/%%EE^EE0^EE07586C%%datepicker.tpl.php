<?php /* Smarty version 2.6.9, created on 2011-01-21 10:27:09
         compiled from includes/widgets/datepicker.tpl */ ?>
<script type="text/javascript">
    //<![CDATA[
        <?php echo '
            $(\''; ?>
#x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['relative'];  echo '\').datepicker({
                clickInput:true,
                firstDay: 1,
                showWeeks: true,
                dateFormat: \'dd.mm.yy\',
                monthNames: [\'Januar\',\'Februar\',\'März\',\'April\',\'Mai\',\'Juni\',\'Juli\',\'August\',\'September\',\'Oktober\',\'November\',\'Dezember\'],
                dayNames: [\'Sonntag\',\'Montag\',\'Dienstag\',\'Mittwoch\',\'Donnerstag\',\'Freitag\',\'Samstag\',\'Sonntag\'],
                dayNamesShort: [\'So\',\'Mo\',\'Di\',\'Mi\',\'Do\',\'Fr\',\'Sa\'],
                dayNamesMin: [\'So\',\'Mo\',\'Di\',\'Mi\',\'Do\',\'Fr\',\'Sa\']
             });
        '; ?>

    //]]>
</script>