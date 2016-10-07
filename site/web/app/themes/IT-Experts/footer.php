    </div>
    <!-- footer -->
    <div class="footer" role="contentinfo">
        <div class="container padding_top_bot">
            <div class="col-md-3 marker_title_left">
                <h1 class="big_text2">WIR FREUEN UNS AUF SIE</h1>
                <ul class="footer_list">
                    <li class="tel"><a href="tel:0346029991-0">+49 3 46 02 99 91-0</a></li>
                    <li class="mail"><a href="mailto:it-experts@doegel.de">it-experts@doegel.de</a></li>
                    <li class="adress">Dögel IT-Experts GmbH<br>Geltestraße 9<br>06184 Kabelsketal OT Dölbau
                    </li>
                    <li class="maps"><a href="https://www.google.de/maps/place/D%C3%96GEL/@51.4744067,12.0863324,17z/data=!3m1!4b1!4m5!3m4!1s0x47a67b4dfff5308d:0x3be13ff0bed49c39!8m2!3d51.4744067!4d12.0885211" target="_blank">In Google Maps öffnen</a></li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="footer_text">
                    <p>Wir sind es gewohnt, dass unsere Kunden schon einige, wenn nicht sogar eine Vielzahl der
                        gennanten Lösungen im Einsatz haben, in der Ganzheitlichkeit aber sehr selten.</p>
                    <p>Trotzdass die Lösungen perfekt untereinander harmonieren und sich teilweise austauschen,
                        können Sie diese auch unabhängig voneinander erwerben - wir passen sie individuell an
                        Ihre Infrastruktur an.</p>
                    <p>Teststellungen sind jederzeit möglich und werden von uns auch dringend empfohlen, damit
                        Sie prüfen können, wie die Applikationen in Ihre Umgebung passen und wie Sie die
                        entsprechenden Compliance-Maßnahmen damit umsetzen können!</p>
                    <p>Sprechen Sie mit uns und lassen Sie uns gemeinsam herausfinden, wie wir Sie hierbei
                        unterstützen können und Sie mit möglichst geringen Aufwan einschätzen können, welches
                        Tool sich am besten in Ihre Umgebung einbauen lässt.</p>
                </div>
                <div class="footer_formular">
                    <?= do_shortcode("[ninja_form id=1]"); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="imprint">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="siegel">
                        <p>© <?php echo date('Y'); ?> Dögel IT-Experts GmbH</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="imprint_link">
                        <a href="#">Impressum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /footer -->

    <?php wp_footer(); ?>

    <!-- analytics -->
    <script>
        (function (f, i, r, e, s, h, l) {
            i['GoogleAnalyticsObject'] = s;
            f[s] = f[s] || function () {
                    (f[s].q = f[s].q || []).push(arguments)
                }, f[s].l = 1 * new Date();
            h = i.createElement(r),
                l = i.getElementsByTagName(r)[0];
            h.async = 1;
            h.src = e;
            l.parentNode.insertBefore(h, l)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');
    </script>
    </body>
    </html>
