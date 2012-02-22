<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from includes/footer/footer.tpl */ ?>
        </div>
        <div id="footer">
        &nbsp;
        </div>
        </div>
        <a name="bottom"></a>
        <?php if ($this->_tpl_vars['SYSTEM_GOOGLE_ANALYTICS_KEY'] != ""): ?>
            <?php echo '
                <script type="text/javascript">
                    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
                    document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
                </script>
                <script type="text/javascript">
                    try {
                        var pageTracker = _gat._getTracker("';  echo $this->_tpl_vars['SYSTEM_GOOGLE_ANALYTICS_KEY'];  echo '");
                        pageTracker._trackPageview();
                    } catch(err) {}
                </script>
            '; ?>

        <?php endif; ?>
        <?php if ($this->_tpl_vars['SYSTEM_PIWIK_ID'] != ""): ?>
            <?php echo '
                <script type="text/javascript">
                    var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.iframe.ch/" : "http://piwik.iframe.ch/");
                    document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E"));
                </script>
                <script type="text/javascript">
                    try {
                        var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", ';  echo $this->_tpl_vars['SYSTEM_PIWIK_ID'];  echo ');
                        piwikTracker.trackPageView();
                        piwikTracker.enableLinkTracking();
                    } catch( err ) {}
                </script>
                <noscript>
                    <p><img src="http://piwik.iframe.ch/piwik.php?idsite=';  echo $this->_tpl_vars['SYSTEM_PIWIK_ID'];  echo '" style="border:0" alt="" /></p>
                </noscript>
            '; ?>

        <?php endif; ?>
    </body>
</html>
<!-- Created with S-Node XT Content Management System - http://www.iframe.ch -->