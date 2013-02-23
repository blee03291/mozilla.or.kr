<?php
if ($Fproduct == 'desktop_beta') {
  $newsletter_product_name = 'Beta';
} else if ($Fproduct == 'desktop_aurora') {
  $newsletter_product_name = 'Aurora';
}
?>
<div id="main-content">

    <div id="channel_news" class="">
          <div id="newsletter-signup">
            <div class="title">
              <h3>Get the latest <span><?=$newsletter_product_name?> news</span></h3>
              <p>Sign up for our <?=$newsletter_product_name?> newsletter for desktop and mobile.</p>
            </div>
            <div class="success-pane">
              <h3>Thanks for subscribing!</h3>
            </div>
            <form id="email-form" action="#newsletter-signup" method="post">
              <input id="email" name="email" type="email" value="" placeholder="Your email address">
              <div id="email-error">Whoops! Be sure to enter a valid email address.</div>
              <div class="more">
                <div class="row">
                  <select id="country" name="country">
                      <option value="">Select country</option>
                      <option value='af'>Afghanistan</option>
<option value='al'>Albania</option>
<option value='dz'>Algeria</option>
<option value='as'>American Samoa</option>
<option value='ad'>Andorra</option>
<option value='ao'>Angola</option>
<option value='ai'>Anguilla</option>
<option value='aq'>Antarctica</option>
<option value='ag'>Antigua and Barbuda</option>
<option value='ar'>Argentina</option>
<option value='am'>Armenia</option>
<option value='aw'>Aruba</option>
<option value='au'>Australia</option>
<option value='at'>Austria</option>
<option value='az'>Azerbaijan</option>
<option value='bs'>Bahamas</option>
<option value='bh'>Bahrain</option>
<option value='bd'>Bangladesh</option>
<option value='bb'>Barbados</option>
<option value='by'>Belarus</option>
<option value='be'>Belgium</option>
<option value='bz'>Belize</option>
<option value='bj'>Benin</option>
<option value='bm'>Bermuda</option>
<option value='bt'>Bhutan</option>
<option value='bo'>Bolivia</option>
<option value='ba'>Bosnia and Herzegovina</option>
<option value='bw'>Botswana</option>
<option value='bv'>Bouvet Island</option>
<option value='br'>Brazil</option>
<option value='io'>British Indian Ocean Territory</option>
<option value='vg'>British Virgin Islands</option>
<option value='bn'>Brunei Darussalam</option>
<option value='bg'>Bulgaria</option>
<option value='bf'>Burkina Faso</option>
<option value='bi'>Burundi</option>
<option value='kh'>Cambodia</option>
<option value='cm'>Cameroon</option>
<option value='ca'>Canada</option>
<option value='cv'>Cape Verde</option>
<option value='ky'>Cayman Islands</option>
<option value='cf'>Central African Republic</option>
<option value='td'>Chad</option>
<option value='cl'>Chile</option>
<option value='cn'>China</option>
<option value='cx'>Christmas Island</option>
<option value='cc'>Cocos (Keeling) Islands</option>
<option value='co'>Colombia</option>
<option value='km'>Comoros</option>
<option value='cg'>Congo-Brazzaville</option>
<option value='cd'>Congo-Kinshasa</option>
<option value='ck'>Cook Islands</option>
<option value='cr'>Costa Rica</option>
<option value='hr'>Croatia</option>
<option value='cu'>Cuba</option>
<option value='cy'>Cyprus</option>
<option value='cz'>Czech Republic</option>
<option value='dk'>Denmark</option>
<option value='dj'>Djibouti</option>
<option value='dm'>Dominica</option>
<option value='do'>Dominican Republic</option>
<option value='ec'>Ecuador</option>
<option value='eg'>Egypt</option>
<option value='sv'>El Salvador</option>
<option value='gq'>Equatorial Guinea</option>
<option value='er'>Eritrea</option>
<option value='ee'>Estonia</option>
<option value='et'>Ethiopia</option>
<option value='fk'>Falkland Islands (Malvinas)</option>
<option value='fo'>Faroe Islands</option>
<option value='fj'>Fiji</option>
<option value='fi'>Finland</option>
<option value='fr'>France</option>
<option value='gf'>French Guiana</option>
<option value='pf'>French Polynesia</option>
<option value='tf'>French Southern Territories</option>
<option value='ga'>Gabon</option>
<option value='gm'>Gambia</option>
<option value='ge'>Georgia</option>
<option value='de'>Germany</option>
<option value='gh'>Ghana</option>
<option value='gi'>Gibraltar</option>
<option value='gr'>Greece</option>
<option value='gl'>Greenland</option>
<option value='gd'>Grenada</option>
<option value='gp'>Guadeloupe</option>
<option value='gu'>Guam</option>
<option value='gt'>Guatemala</option>
<option value='gg'>Guernsey</option>
<option value='gn'>Guinea</option>
<option value='gw'>Guinea-Bissau</option>
<option value='gy'>Guyana</option>
<option value='ht'>Haiti</option>
<option value='hm'>Heard Island and McDonald Islands</option>
<option value='hn'>Honduras</option>
<option value='hk'>Hong Kong</option>
<option value='hu'>Hungary</option>
<option value='is'>Iceland</option>
<option value='in'>India</option>
<option value='id'>Indonesia</option>
<option value='ir'>Iran</option>
<option value='iq'>Iraq</option>
<option value='ie'>Ireland</option>
<option value='im'>Isle of Man</option>
<option value='il'>Israel</option>
<option value='it'>Italy</option>
<option value='ci'>Ivory Coast</option>
<option value='jm'>Jamaica</option>
<option value='jp'>Japan</option>
<option value='je'>Jersey</option>
<option value='jo'>Jordan</option>
<option value='kz'>Kazakhstan</option>
<option value='ke'>Kenya</option>
<option value='ki'>Kiribati</option>
<option value='kw'>Kuwait</option>
<option value='kg'>Kyrgyzstan</option>
<option value='la'>Laos</option>
<option value='lv'>Latvia</option>
<option value='lb'>Lebanon</option>
<option value='ls'>Lesotho</option>
<option value='lr'>Liberia</option>
<option value='ly'>Libya</option>
<option value='li'>Liechtenstein</option>
<option value='lt'>Lithuania</option>
<option value='lu'>Luxembourg</option>
<option value='mo'>Macao</option>
<option value='mk'>Macedonia, F.Y.R. of</option>
<option value='mg'>Madagascar</option>
<option value='mw'>Malawi</option>
<option value='my'>Malaysia</option>
<option value='mv'>Maldives</option>
<option value='ml'>Mali</option>
<option value='mt'>Malta</option>
<option value='mh'>Marshall Islands</option>
<option value='mq'>Martinique</option>
<option value='mr'>Mauritania</option>
<option value='mu'>Mauritius</option>
<option value='yt'>Mayotte</option>
<option value='mx'>Mexico</option>
<option value='fm'>Micronesia</option>
<option value='md'>Moldova</option>
<option value='mc'>Monaco</option>
<option value='mn'>Mongolia</option>
<option value='me'>Montenegro</option>
<option value='ms'>Montserrat</option>
<option value='ma'>Morocco</option>
<option value='mz'>Mozambique</option>
<option value='mm'>Myanmar</option>
<option value='na'>Namibia</option>
<option value='nr'>Nauru</option>
<option value='np'>Nepal</option>
<option value='nl'>Netherlands</option>
<option value='an'>Netherlands Antilles</option>
<option value='nc'>New Caledonia</option>
<option value='nz'>New Zealand</option>
<option value='ni'>Nicaragua</option>
<option value='ne'>Niger</option>
<option value='ng'>Nigeria</option>
<option value='nu'>Niue</option>
<option value='nf'>Norfolk Island</option>
<option value='kp'>North Korea</option>
<option value='mp'>Northern Mariana Islands</option>
<option value='no'>Norway</option>
<option value='ps'>Occupied Palestinian Territory</option>
<option value='om'>Oman</option>
<option value='pk'>Pakistan</option>
<option value='pw'>Palau</option>
<option value='pa'>Panama</option>
<option value='pg'>Papua New Guinea</option>
<option value='py'>Paraguay</option>
<option value='pe'>Peru</option>
<option value='ph'>Philippines</option>
<option value='pn'>Pitcairn</option>
<option value='pl'>Poland</option>
<option value='pt'>Portugal</option>
<option value='pr'>Puerto Rico</option>
<option value='qa'>Qatar</option>
<option value='re'>Reunion</option>
<option value='ro'>Romania</option>
<option value='ru'>Russian Federation</option>
<option value='rw'>Rwanda</option>
<option value='bl'>Saint Barthélemy</option>
<option value='sh'>Saint Helena</option>
<option value='kn'>Saint Kitts and Nevis</option>
<option value='lc'>Saint Lucia</option>
<option value='mf'>Saint Martin</option>
<option value='pm'>Saint Pierre and Miquelon</option>
<option value='vc'>Saint Vincent and the Grenadines</option>
<option value='ws'>Samoa</option>
<option value='sm'>San Marino</option>
<option value='st'>Sao Tome and Principe</option>
<option value='sa'>Saudi Arabia</option>
<option value='sn'>Senegal</option>
<option value='rs'>Serbia</option>
<option value='sc'>Seychelles</option>
<option value='sl'>Sierra Leone</option>
<option value='sg'>Singapore</option>
<option value='sk'>Slovakia</option>
<option value='si'>Slovenia</option>
<option value='sb'>Solomon Islands</option>
<option value='so'>Somalia</option>
<option value='za'>South Africa</option>
<option value='gs'>South Georgia and the South Sandwich Islands</option>
<option value='kr'>South Korea</option>
<option value='es'>Spain</option>
<option value='lk'>Sri Lanka</option>
<option value='sd'>Sudan</option>
<option value='sr'>Suriname</option>
<option value='sj'>Svalbard and Jan Mayen</option>
<option value='sz'>Swaziland</option>
<option value='se'>Sweden</option>
<option value='ch'>Switzerland</option>
<option value='sy'>Syria</option>
<option value='tw'>Taiwan</option>
<option value='tj'>Tajikistan</option>
<option value='tz'>Tanzania</option>
<option value='th'>Thailand</option>
<option value='tl'>Timor-Leste</option>
<option value='tg'>Togo</option>
<option value='tk'>Tokelau</option>
<option value='to'>Tonga</option>
<option value='tt'>Trinidad and Tobago</option>
<option value='tn'>Tunisia</option>
<option value='tr'>Turkey</option>
<option value='tm'>Turkmenistan</option>
<option value='tc'>Turks and Caicos Islands</option>
<option value='tv'>Tuvalu</option>
<option value='ae'>U.A.E.</option>
<option value='vi'>U.S. Virgin Islands</option>
<option value='ug'>Uganda</option>
<option value='ua'>Ukraine</option>
<option value='gb'>United Kingdom</option>
<option value='us' selected='selected'>United States</option>
<option value='um'>United States Minor Outlying Islands</option>
<option value='uy'>Uruguay</option>
<option value='uz'>Uzbekistan</option>
<option value='vu'>Vanuatu</option>
<option value='va'>Vatican City</option>
<option value='ve'>Venezuela</option>
<option value='vn'>Vietnam</option>
<option value='wf'>Wallis and Futuna</option>
<option value='eh'>Western Sahara</option>
<option value='ye'>Yemen</option>
<option value='zm'>Zambia</option>
<option value='zw'>Zimbabwe</option>
<option value='ax'>Åland Islands</option>
                  </select>
                </div>
                <p>Aurora and Beta newsletters are currently only available in English.</p>
                <ul class="channels_signup">
                  <li>
                    <label for="check_aurora">
                                            <input type="checkbox" id="check_aurora" name="aurora" value="Y"  />
                      <span>Aurora</span>
                    </label>
                  </li>
                  <li>
                    <label for="check_beta">
                                            <input type="checkbox" id="check_beta" name="beta" value="Y"  />
                      <span>Beta</span>
                    </label>
                  </li>
                  <li>
                    <label for="check_general">
                                            <input type="checkbox" id="check_general" name="mozilla-and-you" value="Y"  />
                      <span>Firefox</span>
                    </label>
                  </li>
                </ul>
                <div id="channel-error">Please select at least one newsletter.</div>
                <div class="privacy-field">
                                    <label for="inline-privacy-check" class="privacy-check-label">
                    <span class="error-wrapper">
                      <input type="checkbox" class="privacy-check" id="inline-privacy-check" name="privacy" >
                    </span> 
                    <span class="title">
                      I agree to the <a href="/en-US/privacy-policy">Privacy Policy</a>
                    </span>
                    <div class="clear"></div>
                  </label>
                </div>
                <div id="privacy-error">Please agree to the Privacy Policy.</div>
                <input name="submit" class="button" type="submit" value="Sign me up »" id="subscribe"
                       onclick="dcsMultiTrack('DCS.dcssip', 'www.mozilla.org',
                                'DCS.dcsuri', '/mainstream_newsletter/signup',
                                'WT.ti', 'Link: Sign me up »',
                                'WT.dl', 99,
                                'WT.nv', 'Content',
                                'WT.ac', 'Newsletter');">
                <p class="footnote">We will only send you Mozilla-related information.</p>
              </div>
            </form>
          </div>

        <div id="blog">
            <div class="title">
            <h3>Read about the latest <span><?=$newsletter_product_name?> features <a href="http://blog.mozilla.com/futurereleases/category/aurora/feed/">RSS Feed</a></span></h3>
            <p>Follow the <a href="http://blog.mozilla.com/futurereleases/">Future Release Blog</a> to stay in the loop.</p>
            </div>
<?php
if ($Fproduct == 'desktop_aurora') {
?>
            <ul><li><h4><a href="http://blog.mozilla.com/futurereleases/2012/03/19/the-latest-firefox-aurora-is-now-available-for-download-and-testing/">The latest Firefox Aurora is now available for download and testing!</a></h4><div class="info"><span class="date">March 19, 2012</span> • Firefox Aurora</div></li><li><h4><a href="http://blog.mozilla.com/futurereleases/2012/02/10/help-us-test-new-tab/">Help us test New Tab!</a></h4><div class="info"><span class="date">February 10, 2012</span> • Feedback, Firefox Aurora</div></li><li><h4><a href="http://blog.mozilla.com/futurereleases/2012/02/03/firefoxaurora12/">The latest Firefox Aurora is now available for download and testing!</a></h4><div class="info"><span class="date">February 3, 2012</span> • Firefox Aurora</div></li><li><h4><a href="http://blog.mozilla.com/futurereleases/2011/12/23/firefoxaurora11/">Get the Latest Firefox Aurora</a></h4><div class="info"><span class="date">December 23, 2011</span> • Firefox Aurora, For Android</div></li></ul>
<?php
}
?>
                    </div>

<?php
if ($Fproduct == 'desktop_aurora') {
?>
    <div id="stay-connected">
        <h4>Stay <span>Connected</span></h4>
        <p>Firefox <?=$newsletter_product_name?> is on your favorite social media sites. Connect with us and join the conversation!</p>
        <a href="http://www.facebook.com/Firefox<?=$newsletter_product_name?>" class="button">Join the conversation<span> »</span></a>
    </div>
<?php
}
?>

    </div>

</div><!-- end #main-content div -->

</div><!-- end #doc -->
</div><!-- end #wrapper -->
</div><!-- end #outer-wrapper -->

<div class="clear"></div>

  <!-- start #footer -->
  <div id="sub-footer">
    <div id="sub-footer-contents">
                  <h3>Let’s be <span>friends!</span></h3>
                  <ul>
                    <li id="footer-twitter">
                      <a href="http://twitter.com/firefox"
                         onclick="dcsMultiTrack('DCS.dcssip', 'twitter.com', 'DCS.dcsuri', '/firefox', 'WT.ti', 'Twitter');">
                        Twitter
                      </a>
                    </li>
                    <li id="footer-facebook">
                      <a href="http://facebook.com/Firefox"
                         onclick="dcsMultiTrack('DCS.dcssip', 'facebook.com', 'DCS.dcsuri', '/Firefox', 'WT.ti', 'Facebook');">
                        Facebook
                      </a>
                    </li>
                    <li id="footer-affiliates">
                      <a href="https://affiliates.mozilla.org/"
                         onclick="dcsMultiTrack('DCS.dcsuri', 'https://affiliates.mozilla.org/', 'WT.ti', 'Affiliates');">
                       Firefox Affiliates
                      </a>
                    </li>
                  </ul>
      <div id="sub-footer-newsletter">

<div class="newsletter-signup  " id="newsletter">
  <div class="container">

    <form class="email-form inline-email-form"
          action="#subscribe-form"
          method="post">
      <input type="hidden" name="target" value="inline" />
      <input type="hidden" name="mozilla-and-you" value="Y" />

      <ul class="">
        <li class="open-pane" data-wt_uri="" data-wt_ti="">
          <h3>Get Monthly News</h3>
                    <div class="email-field field">
            <span class="error-wrapper ">
              <input
                 name="email"
                 type="email"
                 placeholder="Your Email Address"
                 value=""
                 class="email  placeholder">
            </span>
            <a class="email-open"
               href="/en-US/newsletter/"
               onclick="dcsMultiTrack('DCS.dcssip', 'www.mozilla.org',
                        'DCS.dcsuri', '/mainstream_newsletter/step1', 
                        'WT.ti', 'Link: Monthly News - First Step',
                        'WT.dl', 99,
                        'WT.nv', 'Content',
                        'WT.ac', 'Newsletter');">»</a>
          </div>
        </li>
        <li class="form-pane">

          <div class="form-details">

            <div class="field country-field">
              <select class="country" name="country">
                <option value="">Select country</option>
                <option value='af'>Afghanistan</option>
<option value='al'>Albania</option>
<option value='dz'>Algeria</option>
<option value='as'>American Samoa</option>
<option value='ad'>Andorra</option>
<option value='ao'>Angola</option>
<option value='ai'>Anguilla</option>
<option value='aq'>Antarctica</option>
<option value='ag'>Antigua and Barbuda</option>
<option value='ar'>Argentina</option>
<option value='am'>Armenia</option>
<option value='aw'>Aruba</option>
<option value='au'>Australia</option>
<option value='at'>Austria</option>
<option value='az'>Azerbaijan</option>
<option value='bs'>Bahamas</option>
<option value='bh'>Bahrain</option>
<option value='bd'>Bangladesh</option>
<option value='bb'>Barbados</option>
<option value='by'>Belarus</option>
<option value='be'>Belgium</option>
<option value='bz'>Belize</option>
<option value='bj'>Benin</option>
<option value='bm'>Bermuda</option>
<option value='bt'>Bhutan</option>
<option value='bo'>Bolivia</option>
<option value='ba'>Bosnia and Herzegovina</option>
<option value='bw'>Botswana</option>
<option value='bv'>Bouvet Island</option>
<option value='br'>Brazil</option>
<option value='io'>British Indian Ocean Territory</option>
<option value='vg'>British Virgin Islands</option>
<option value='bn'>Brunei Darussalam</option>
<option value='bg'>Bulgaria</option>
<option value='bf'>Burkina Faso</option>
<option value='bi'>Burundi</option>
<option value='kh'>Cambodia</option>
<option value='cm'>Cameroon</option>
<option value='ca'>Canada</option>
<option value='cv'>Cape Verde</option>
<option value='ky'>Cayman Islands</option>
<option value='cf'>Central African Republic</option>
<option value='td'>Chad</option>
<option value='cl'>Chile</option>
<option value='cn'>China</option>
<option value='cx'>Christmas Island</option>
<option value='cc'>Cocos (Keeling) Islands</option>
<option value='co'>Colombia</option>
<option value='km'>Comoros</option>
<option value='cg'>Congo-Brazzaville</option>
<option value='cd'>Congo-Kinshasa</option>
<option value='ck'>Cook Islands</option>
<option value='cr'>Costa Rica</option>
<option value='hr'>Croatia</option>
<option value='cu'>Cuba</option>
<option value='cy'>Cyprus</option>
<option value='cz'>Czech Republic</option>
<option value='dk'>Denmark</option>
<option value='dj'>Djibouti</option>
<option value='dm'>Dominica</option>
<option value='do'>Dominican Republic</option>
<option value='ec'>Ecuador</option>
<option value='eg'>Egypt</option>
<option value='sv'>El Salvador</option>
<option value='gq'>Equatorial Guinea</option>
<option value='er'>Eritrea</option>
<option value='ee'>Estonia</option>
<option value='et'>Ethiopia</option>
<option value='fk'>Falkland Islands (Malvinas)</option>
<option value='fo'>Faroe Islands</option>
<option value='fj'>Fiji</option>
<option value='fi'>Finland</option>
<option value='fr'>France</option>
<option value='gf'>French Guiana</option>
<option value='pf'>French Polynesia</option>
<option value='tf'>French Southern Territories</option>
<option value='ga'>Gabon</option>
<option value='gm'>Gambia</option>
<option value='ge'>Georgia</option>
<option value='de'>Germany</option>
<option value='gh'>Ghana</option>
<option value='gi'>Gibraltar</option>
<option value='gr'>Greece</option>
<option value='gl'>Greenland</option>
<option value='gd'>Grenada</option>
<option value='gp'>Guadeloupe</option>
<option value='gu'>Guam</option>
<option value='gt'>Guatemala</option>
<option value='gg'>Guernsey</option>
<option value='gn'>Guinea</option>
<option value='gw'>Guinea-Bissau</option>
<option value='gy'>Guyana</option>
<option value='ht'>Haiti</option>
<option value='hm'>Heard Island and McDonald Islands</option>
<option value='hn'>Honduras</option>
<option value='hk'>Hong Kong</option>
<option value='hu'>Hungary</option>
<option value='is'>Iceland</option>
<option value='in'>India</option>
<option value='id'>Indonesia</option>
<option value='ir'>Iran</option>
<option value='iq'>Iraq</option>
<option value='ie'>Ireland</option>
<option value='im'>Isle of Man</option>
<option value='il'>Israel</option>
<option value='it'>Italy</option>
<option value='ci'>Ivory Coast</option>
<option value='jm'>Jamaica</option>
<option value='jp'>Japan</option>
<option value='je'>Jersey</option>
<option value='jo'>Jordan</option>
<option value='kz'>Kazakhstan</option>
<option value='ke'>Kenya</option>
<option value='ki'>Kiribati</option>
<option value='kw'>Kuwait</option>
<option value='kg'>Kyrgyzstan</option>
<option value='la'>Laos</option>
<option value='lv'>Latvia</option>
<option value='lb'>Lebanon</option>
<option value='ls'>Lesotho</option>
<option value='lr'>Liberia</option>
<option value='ly'>Libya</option>
<option value='li'>Liechtenstein</option>
<option value='lt'>Lithuania</option>
<option value='lu'>Luxembourg</option>
<option value='mo'>Macao</option>
<option value='mk'>Macedonia, F.Y.R. of</option>
<option value='mg'>Madagascar</option>
<option value='mw'>Malawi</option>
<option value='my'>Malaysia</option>
<option value='mv'>Maldives</option>
<option value='ml'>Mali</option>
<option value='mt'>Malta</option>
<option value='mh'>Marshall Islands</option>
<option value='mq'>Martinique</option>
<option value='mr'>Mauritania</option>
<option value='mu'>Mauritius</option>
<option value='yt'>Mayotte</option>
<option value='mx'>Mexico</option>
<option value='fm'>Micronesia</option>
<option value='md'>Moldova</option>
<option value='mc'>Monaco</option>
<option value='mn'>Mongolia</option>
<option value='me'>Montenegro</option>
<option value='ms'>Montserrat</option>
<option value='ma'>Morocco</option>
<option value='mz'>Mozambique</option>
<option value='mm'>Myanmar</option>
<option value='na'>Namibia</option>
<option value='nr'>Nauru</option>
<option value='np'>Nepal</option>
<option value='nl'>Netherlands</option>
<option value='an'>Netherlands Antilles</option>
<option value='nc'>New Caledonia</option>
<option value='nz'>New Zealand</option>
<option value='ni'>Nicaragua</option>
<option value='ne'>Niger</option>
<option value='ng'>Nigeria</option>
<option value='nu'>Niue</option>
<option value='nf'>Norfolk Island</option>
<option value='kp'>North Korea</option>
<option value='mp'>Northern Mariana Islands</option>
<option value='no'>Norway</option>
<option value='ps'>Occupied Palestinian Territory</option>
<option value='om'>Oman</option>
<option value='pk'>Pakistan</option>
<option value='pw'>Palau</option>
<option value='pa'>Panama</option>
<option value='pg'>Papua New Guinea</option>
<option value='py'>Paraguay</option>
<option value='pe'>Peru</option>
<option value='ph'>Philippines</option>
<option value='pn'>Pitcairn</option>
<option value='pl'>Poland</option>
<option value='pt'>Portugal</option>
<option value='pr'>Puerto Rico</option>
<option value='qa'>Qatar</option>
<option value='re'>Reunion</option>
<option value='ro'>Romania</option>
<option value='ru'>Russian Federation</option>
<option value='rw'>Rwanda</option>
<option value='bl'>Saint Barthélemy</option>
<option value='sh'>Saint Helena</option>
<option value='kn'>Saint Kitts and Nevis</option>
<option value='lc'>Saint Lucia</option>
<option value='mf'>Saint Martin</option>
<option value='pm'>Saint Pierre and Miquelon</option>
<option value='vc'>Saint Vincent and the Grenadines</option>
<option value='ws'>Samoa</option>
<option value='sm'>San Marino</option>
<option value='st'>Sao Tome and Principe</option>
<option value='sa'>Saudi Arabia</option>
<option value='sn'>Senegal</option>
<option value='rs'>Serbia</option>
<option value='sc'>Seychelles</option>
<option value='sl'>Sierra Leone</option>
<option value='sg'>Singapore</option>
<option value='sk'>Slovakia</option>
<option value='si'>Slovenia</option>
<option value='sb'>Solomon Islands</option>
<option value='so'>Somalia</option>
<option value='za'>South Africa</option>
<option value='gs'>South Georgia and the South Sandwich Islands</option>
<option value='kr'>South Korea</option>
<option value='es'>Spain</option>
<option value='lk'>Sri Lanka</option>
<option value='sd'>Sudan</option>
<option value='sr'>Suriname</option>
<option value='sj'>Svalbard and Jan Mayen</option>
<option value='sz'>Swaziland</option>
<option value='se'>Sweden</option>
<option value='ch'>Switzerland</option>
<option value='sy'>Syria</option>
<option value='tw'>Taiwan</option>
<option value='tj'>Tajikistan</option>
<option value='tz'>Tanzania</option>
<option value='th'>Thailand</option>
<option value='tl'>Timor-Leste</option>
<option value='tg'>Togo</option>
<option value='tk'>Tokelau</option>
<option value='to'>Tonga</option>
<option value='tt'>Trinidad and Tobago</option>
<option value='tn'>Tunisia</option>
<option value='tr'>Turkey</option>
<option value='tm'>Turkmenistan</option>
<option value='tc'>Turks and Caicos Islands</option>
<option value='tv'>Tuvalu</option>
<option value='ae'>U.A.E.</option>
<option value='vi'>U.S. Virgin Islands</option>
<option value='ug'>Uganda</option>
<option value='ua'>Ukraine</option>
<option value='gb'>United Kingdom</option>
<option value='us' selected='selected'>United States</option>
<option value='um'>United States Minor Outlying Islands</option>
<option value='uy'>Uruguay</option>
<option value='uz'>Uzbekistan</option>
<option value='vu'>Vanuatu</option>
<option value='va'>Vatican City</option>
<option value='ve'>Venezuela</option>
<option value='vn'>Vietnam</option>
<option value='wf'>Wallis and Futuna</option>
<option value='eh'>Western Sahara</option>
<option value='ye'>Yemen</option>
<option value='zm'>Zambia</option>
<option value='zw'>Zimbabwe</option>
<option value='ax'>Åland Islands</option>
              </select>
            </div>

            <div class="field format-field">
                            <div class="field-radios">
                <span class="radio-wrapper"><input type="radio" name="format" class="html-format" id="inline-html-format" value="html" checked="checked"></span>
                <label for="inline-html-format">HTML</label>
                <span class="radio-wrapper"><input type="radio" name="format" class="text-format" id="inline-text-format" value="text" ></span>
                <label for="inline-text-format">Text</label>&nbsp;
              </div>
            </div>

            <div class="privacy-field">
                            <label for="inline-privacy-check" class="privacy-check-label">
                <span class="error-wrapper ">
                   <input type="checkbox" class="privacy-check" id="inline-privacy-check" name="privacy" >
                </span>
                I agree to the <a href="/en-US/privacy-policy">Privacy Policy</a>
              </label>
            </div>

            <input name="submit" type="submit" value="Sign me up!" class="subscribe"
                   onclick="dcsMultiTrack('DCS.dcssip', 'www.mozilla.org',
                            'DCS.dcsuri', '/mainstream_newsletter/signup',
                            'WT.ti', 'Link: Mozilla Newsletter',
                            'WT.dl', 99,
                            'WT.z_convert', 'newsletter',
                            'WT.z_page_location', 'footer',
                            'WT.nv', 'Content',
                            'WT.ac', 'Newsletter');">

            <p class="footnote">We will only send you Mozilla-related information.</p>
          </div>

        </li>
        <li class="success-pane">
          <h3>Thanks for Subscribing!</h3>
          <p>We look forward to soon begin sharing tips &amp; tricks on getting the most out of Firefox, as well as exciting news about Mozilla and how we’re working to create a better Web.</p>
        </li>
      </ul>
    </form>
  </div>
</div>

    </div>

                <div class="clear"></div>
    </div>
  </div>

    <div id="footer">
  <div id="footer-contents" role="contentinfo">

    <div id="footer-right">

    <form id="lang_form" dir="ltr" method="get"><div>
      <label for="flang">Other Languages</label>
      
<select id="flang" name="flang" dir="ltr" onchange="this.form.submit()">    <option value="ach">Acholi</option>
    <option value="af">Afrikaans</option>
    <option value="ak">Akan</option>
    <option value="ar">&#1593;&#1585;&#1576;&#1610;</option>
    <option value="as">&#2437;&#2488;&#2478;&#2496;&#2479;&#2492;&#2494;</option>
    <option value="ast">Asturianu</option>
    <option value="be">Беларуская</option>
    <option value="bg">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080;</option>
    <option value="bn-BD">বাংলা (বাংলাদেশ)</option>
    <option value="bn-IN">&#2476;&#2494;&#2434;&#2482;&#2494;</option>
    <option value="br">Brezhoneg</option>
    <option value="bs">Bosanski</option>
    <option value="ca">Catal&#224;</option>
    <option value="cs">&#268;e&#353;tina</option>
    <option value="csb">Kaszëbsczi</option>
    <option value="cy">Cymraeg</option>
    <option value="da">Dansk</option>
    <option value="de">Deutsch</option>
    <option value="el">&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;</option>
    <option value="en-ZA">English (South African)</option>
    <option value="eo">Esperanto</option>
    <option value="es-AR">Español (Argentina)</option>
    <option value="es-CL">Español (Chile)</option>
    <option value="es-ES">Español (España)</option>
    <option value="es-MX">Español (México)</option>
    <option value="et">Eesti keel</option>
    <option value="eu">Euskara</option>
    <option value="en-GB">English (British)</option>
    <option value="en-US" selected="selected">English (US)</option>
    <option value="fa">&#1601;&#1575;&#1585;&#1587;&#1740;</option>
    <option value="ff">Pulaar-Fulfulde</option>
    <option value="fi">Suomi</option>
    <option value="fr">Fran&#231;ais</option>
    <option value="fy-NL">Frysk</option>
    <option value="ga-IE">Gaeilge</option>
    <option value="gd">Gàidhlig</option>
    <option value="gl">Galego</option>
    <option value="gu-IN">&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752;</option>
    <option value="he">&#1506;&#1489;&#1512;&#1497;&#1514;</option>
    <option value="hi-IN">&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (&#2349;&#2366;&#2352;&#2340;)</option>
    <option value="hy-AM">&#1344;&#1377;&#1397;&#1381;&#1408;&#1381;&#1398;</option>
    <option value="hr">Hrvatski</option>
    <option value="hu">magyar</option>
    <option value="id">Bahasa Indonesia</option>
    <option value="is">&#205;slenska</option>
    <option value="it">Italiano</option>
    <option value="ja">&#26085;&#26412;&#35486;</option>
    <option value="ka">&#4325;&#4304;&#4320;&#4311;&#4323;&#4314;&#4312;&#32;&#4308;&#4316;&#4304;</option>
    <option value="kk">Қазақ</option>
    <option value="kn">&#57522;&#38368;&#45736;&#57523;&#36320;&#45736;&#57522;</option>
    <option value="km">&#6039;&#6070;&#6047;&#6070;&#6017;&#6098;&#6040;&#6082;&#6042;</option>
    <option value="ko">&#54620;&#44397;&#50612;</option>
    <option value="ku">Kurd&#238;</option>
    <option value="lg">Luganda</option>
    <option value="lij">Ligure</option>
    <option value="lt">Lietuvi&#371;</option>
    <option value="lv">Latvie&#353;u</option>
    <option value="mk">&#1052;&#1072;&#1082;&#1077;&#1076;&#1086;&#1085;&#1089;&#1082;&#1080;</option>
    <option value="ml">&#3374;&#3378;&#3375;&#3390;&#3379;&#3330;</option>
    <option value="mn">&#1052;&#1086;&#1085;&#1075;&#1086;&#1083;</option>
    <option value="mr">&#2350;&#2352;&#2366;&#2336;&#2368;</option>
    <option value="nl">Nederlands</option>
    <option value="no">Norsk bokm&#229;l</option>
    <option value="nso">Sepedi</option>
    <option value="oc">occitan (lengadocian)</option>
    <option value="pa-IN">&#2602;&#2672;&#2588;&#2622;&#2604;&#2624;</option>
    <option value="pl">Polski</option>
    <option value="pt-BR">Portugu&#234;s (do Brasil)</option>
    <option value="pt-PT">Portugu&#234;s (Europeu)</option>
    <option value="rm">Rumantsch</option>
    <option value="ro">Rom&#226;n&#259;</option>
    <option value="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081;</option>
    <option value="sk">Sloven&#269;ina</option>
    <option value="si">&#3523;&#3538;&#3458;&#3524;&#3517;</option>
    <option value="sl">slovensko</option>
    <option value="son">Soŋay</option>
    <option value="sq">Shqip</option>
    <option value="sr">&#1057;&#1088;&#1087;&#1089;&#1082;&#1080;</option>
    <option value="sv-SE">Svenska</option>
    <option value="ta">&#2980;&#2990;&#3007;&#2996;&#3021;</option>
    <option value="ta-LK">Tamil (Sri Lanka)</option>
    <option value="te">&#57520;&#42208;&#45446;&#57520;&#45792;&#45441;&#57520;&#38880;&#45441;</option>
    <option value="th">&#3616;&#3634;&#3625;&#3634;&#3652;&#3607;&#3618;</option>
    <option value="tr">T&#252;rk&#231;e</option>
    <option value="uk">&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072;</option>
    <option value="vi">Tiếng Việt</option>
    <option value="zh-CN">&#20013;&#25991; (&#31616;&#20307;)</option>
    <option value="zh-TW">&#27491;&#39636;&#20013;&#25991; (&#32321;&#39636;)</option>
    <option value="zu">isiZulu</option>
</select>
      <noscript>
        <div><input type="submit" id="lang_submit" value="Go" /></div>
      </noscript>
    </div></form>

    </div>

    <h3 id="footer-logo"><a href="/en-US/firefox/" title="Back to home page">Firefox</a></h3>

                
<!-- start menu #footer-menu -->
<div id="footer-menu" role="navigation">
  <ul>
    <li><a href="/en-US/firefox/features/">Desktop</a><ul><li><a href="/en-US/firefox/features/">Features</a></li><li><a href="/en-US/firefox/customize/">Customize</a></li><li><a href="/en-US/firefox/performance/">Performance</a></li><li><a href="/en-US/firefox/technology/">Technology</a></li><li><a href="/en-US/firefox/security/">Privacy &amp; Security</a></li></ul></li>
    <li><a href="/en-US/mobile/">Mobile</a><ul><li><a href="/en-US/mobile/">Download</a></li><li><a href="/en-US/mobile/features/">Features</a></li><li><a href="https://addons.mozilla.org/en-US/mobile/?browse=featured">Customize</a></li><li><a href="/en-US/mobile/faq/">FAQ</a></li></ul></li>
    <li><a href="/en-US/firefox/channel/">Releases</a><ul><li><a href="/en-US/firefox/channel/">Overview</a></li><li><a href="/en-US/firefox/aurora/">Firefox Aurora</a></li><li><a href="/beta/">Firefox Beta</a></li><li><a href="/en-US/firefox/">Firefox</a></li><li><a href="/en-US/firefox/organizations/">Firefox for Organizations</a></li></ul></li>
    <li><a href="https://addons.mozilla.org/">Add-ons</a><ul><li><a href="https://addons.mozilla.org/firefox/">Desktop Add-ons</a></li><li><a href="https://addons.mozilla.org/mobile/">Mobile Add-ons</a></li><li><a href="http://www.getpersonas.com/">Personas</a></li></ul></li>
    <li><a href="http://support.mozilla.org/">Support</a><ul><li><a href="http://support.mozilla.org/en-US/kb/">Desktop Support</a></li><li><a href="http://support.mozilla.org/mobile">Mobile Support</a></li></ul></li>
    <li><a href="/en-US/firefox/about/">About</a><ul><li><a href="http://blog.mozilla.com/">Blog</a></li><li><a href="/en-US/firefox/about/">About Firefox</a></li><li><a href="http://www.mozilla.org/join">Join Mozilla</a></li><li><a href="/en-US/about/participate/">Participate</a></li><li><a href="/en-US/press/">Press Center</a></li><li><a href="/en-US/firefox/brand/">Brand Toolkit</a></li><li><a href="/en-US/about/careers.html">Careers</a></li><li><a href="/en-US/about/partnerships.html">Partnerships</a></li><li><a href="/en-US/about/contact.html">Contact Us</a></li></ul></li>
  </ul>
</div>
<!-- end menu #footer-menu -->

    <div id="copyright">
      <p id="footer-links"><a href="/en-US/privacy-policy.html">Privacy Policy</a> &nbsp;|&nbsp;
      <a href="/en-US/about/legal.html">Legal Notices</a> &nbsp;|&nbsp;
                        <a href="/en-US/legal/fraud-report/index.html">Report Trademark Abuse</a></p>
      <p>Except where otherwise <a href="/en-US/about/legal.html#site">noted</a>, content on this site is licensed under the <br /><a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> or any later version.</p>
    </div>

  </div>
  </div>
  <!-- end #footer -->
    <script type="text/javascript" src="//www.mozilla.org/includes/min/min.js?g=js_stats"></script>
<script type="text/javascript">
//<![CDATA[
var _tag=new WebTrends({"dcsid":"dcsis0ifv10000gg3ag82u4rf_7b1e","rate":50,"fpcdom":"mozilla.org"});
_tag.dcsGetId();
//]]>
</script>
<script>
//<![CDATA[

_tag.dcsCollect();
//]]>
</script>
<noscript>
<div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="//statse.webtrendslive.com/dcsis0ifv10000gg3ag82u4rf_7b1e/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2"/></div>
</noscript>    <script src="//www.mozilla.org/en-US/tabzilla/media/js/tabzilla.js"></script>
  
    <script>
    // <![CDATA[

    // Firefox 3.x update notice. Only show for Firefox 3.x, don't show for
    // cousins that say they are Firefox 3.x.
    var isOldVersion = (navigator.userAgent &&
        navigator.userAgent.indexOf('Firefox/3.') !== -1 &&
        navigator.userAgent.indexOf('Camino') === -1 &&
        navigator.userAgent.indexOf('SeaMonkey') === -1);

    if (isOldVersion) {
        var oldOnload = window.onload;
        window.onload = function() {
            var script = document.createElement('script');
            script.src = '/js/update-v3.js';
            document.body.appendChild(script);
            if (typeof oldOnload == 'function') {
                oldOnload();
            }
        }
    }

    // ]]>
    </script>

</body>
</html>