<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">

        <div class="row">
            <div class="col col-1">
                <div class="col-inner">
                    <ul>
                        <li><a href="#" title="FAQ">FAQ</a></li>
                        <li><a href="#" title="CGV">CGV</a></li>
                        <li><a href="#" title="Mentions l&eacutegales">Mentions l&eacutegales</a></li>
                        <li><a href="#" title="Plan du site">Plan du site</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-1">
                <div class="col-inner">
                    <ul>
                        <li><a href="#" title="Presse">Presse</a></li>
                        <li><a href="#" title="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-1">
                <div class="col-inner">
                    <ul>
                        <li><a href="#" title="L’&eacutequipe">L'&eacutequipe</a></li>
                        <li><a href="#" title="Partenaire">Partenaire</a></li>
                        <li><a href="#" title="Villes couvertes">Villes couvertes</a></li>
                        <li><a href="#" title="Carri&egrave;res">Carri&egrave;res</a></li>
                        <li><a href="#" title="Offre &eacutev&eacutenements">Offre &eacutev&eacutenements</a></li>
                    </ul>
                </div>
            </div>
            <div class="col col-2">
                <div class="col-inner">
                    <p>T&eacutel&eacutechargez l'application</p>
                    <div class="app-store">
                        <?php $mobileimg = get_field('mobile_app_image', 'option'); ?>
                        <a href="<?php echo get_field('app_store_link', 'option'); ?>" title="Available on the iPhone App Store" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/store-iphone.png" alt="Available on the iPhone App Store" />
                        </a>
                        <a href="<?php echo get_field('google_play_link', 'option'); ?>" title="Get it on Google Play" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/store-google.png" alt="Get it on Google Play" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="col-inner">
                    <p>Suivez-nous !</p>
                    <ul class="social">
                        <li><a href="<?php echo get_field('facebook_link', 'option'); ?>" class="fb" title="Facebook" target="_blank"></a></li>
                        <li><a href="<?php echo get_field('twitter_link', 'option'); ?>" class="tw" title="Twitter" target="_blank"></a></li>
                        <li><a href="<?php echo get_field('linkedin_link', 'option'); ?>" class="ln" title="LinkedIn" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<!--</div> #mp-pusher -->


<?php wp_footer(); ?>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>-->
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/mlpushmenu.js"></script>-->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.0.9/jquery.mCustomScrollbar.css" rel="stylesheet">-->

<script src="<?php echo get_template_directory_uri(); ?>/js/enu-menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.0.9/jquery.mCustomScrollbar.concat.min.js"></script>-->

<script src="<?php echo get_template_directory_uri(); ?>/js/placeholder.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>

<script>
                (function ($) {
                    /* --------------------------
                     Custom Upload control
                     -------------------------- */
                    // Browser supports HTML5 multiple file?
                    var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
                            isIE = /msie/i.test(navigator.userAgent);

                    $.fn.customFile = function () {
                        return this.each(function () {
                            var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
                                    $wrap = $('<div class="file-upload-wrapper">'),
                                    $input = $('<input type="text" class="file-upload-input" placeholder="Photo de profil" />'),
                                    // Button that will be used in non-IE browsers
                                    $button = $('<span class="browse-button"><button type="button" class="file-upload-button"></button></span>'),
                                    // Hack for IE
                                    $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Photo de profil</label>');

                            $caption = $('<label class="file-upload-caption">Photo de profil</label>');

                            var tabindex = $file.attr('tabindex');
                            $input.attr('tabindex', tabindex);

                            // Hide by shifting to the left so we
                            // can still trigger events
                            $file.css({
                                position: 'absolute',
                                left: '-9999px'
                            });

                            $wrap.insertAfter($file).append($file, $caption, $input, (isIE ? $label : $button));

                            // Prevent focus
                            $file.attr('tabIndex', -1);
                            $button.attr('tabIndex', -1);

                            $button.click(function () {
                                $file.focus().click(); // Open dialog
                            });

                            $file.change(function () {
                                var files = [], fileArr, filename;
                                // If multiple is supported then extract
                                // all filenames from the file array
                                if (multipleSupport) {
                                    fileArr = $file[0].files;
                                    for (var i = 0, len = fileArr.length; i < len; i++) {
                                        files.push(fileArr[i].name);
                                    }
                                    filename = files.join(', ');
                                    console.log(filename);

                                    // If not supported then just take the value
                                    // and remove the path to just show the filename
                                } else {
                                    filename = $file.val().split('\\').pop();
                                }

                                $input.val(filename) // Set the value
                                        .attr('title', filename) // Show filename in title tootlip
                                        .focus(); // Regain focus
                            });

                            $input.on({
                                blur: function () {
                                    $file.trigger('blur');
                                },
                                keydown: function (e) {
                                    if (e.which === 13) { // Enter
                                        if (!isIE) {
                                            $file.trigger('click');
                                        }
                                    } else if (e.which === 8 || e.which === 46) { // Backspace & Del
                                        // On some browsers the value is read-only
                                        // with this trick we remove the old input and add
                                        // a clean clone with all the original events attached
                                        $file.replaceWith($file = $file.clone(true));
                                        $file.trigger('change');
                                        $input.val('');
                                    } else if (e.which === 9) { // TAB
                                        return;
                                    } else { // All other keys
                                        return false;
                                    }
                                }
                            });
                        });
                    };

                    // Old browser fallback
                    if (!multipleSupport) {
                        $(document).on('change', 'input.customfile', function () {
                            var $this = $(this),
                                    // Create a unique ID so we
                                    // can attach the label to the input
                                    uniqId = 'customfile_' + (new Date()).getTime(),
                                    $wrap = $this.parent(),
                                    // Filter empty input
                                    $inputs = $wrap.siblings().find('.file-upload-input')
                                    .filter(function () {
                                        return !this.value;
                                    }),
                                    $file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');

                            // 1ms timeout so it runs after all other events
                            // that modify the value have triggered
                            setTimeout(function () {
                                // Add a new input
                                if ($this.val()) {
                                    // Check for empty fields to prevent
                                    // creating new inputs when changing files
                                    if (!$inputs.length) {
                                        $wrap.after($file);
                                        $file.customFile();
                                    }
                                    // Remove and reorganize inputs
                                } else {
                                    $inputs.parent().remove();
                                    // Move the input so it's always last on the list
                                    $wrap.appendTo($wrap.parent());
                                    $wrap.find('input').focus();
                                }
                            }, 1);
                        });
                    }

                    /* --------------------------
                     Custom Upload control End
                     -------------------------- */

                    $('input[type=file]').customFile();


                })(jQuery);
</script>
</body>
</html>
