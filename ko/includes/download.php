<?
// �ٿ�ε� ��ư ����� 

function download_button_desktop($button, $fx_version) {
?>
<aside id="download" class="download-button download-button-<?=$button?>">
    <noscript>
<div class="download download-dumb">
  <h4>Firefox ���� �ٿ�ε�- �ѱ���</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">����</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">������</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">�� OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">�ȵ���̵�</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox ���� �ٿ�ε�- �ѱ���</h4>
  <ul>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko" class="button-white">����</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko" class="button-white">������</a></li>
          <li><a href="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko" class="button-white">�� OS X</a></li>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">�ȵ���̵�</a></li>
   </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="os_windows">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=win&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            ���� �ٿ�ε�                      </span>
              </a>
    </li>
        <li class="os_linux">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=linux&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            ���� �ٿ�ε�                      </span>
              </a>
    </li>
        <li class="os_osx">
      <a class="download-link download-firefox"
         href="/ko/products/download.html?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko"         data-direct-link="https://download.mozilla.org/?product=firefox-<?=$fx_version?>&amp;os=osx&amp;lang=ko">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            ���� �ٿ�ε�                      </span>
              </a>
    </li>
        <li class="os_android">
      <a class="download-link download-firefox"
         href="https://market.android.com/details?id=org.mozilla.firefox">
                  <span class="download-content">
            <span class="download-title">Firefox</span>
            ���� �ٿ�ε�                      </span>
              </a>
    </li>
      </ul>
  
          <p class="unsupported-download">
      Firefox ��ġ <a href="/ko/firefox/<?=$fx_version?>/requirements">�䱸 ����</a>�� ���� �ʽ��ϴ�.
    </p>
  
    <small class="download-other">
    <a href="/ko/firefox/all.html">�� ����</a> |
    <a href="/ko/firefox/notes">��� �Ұ�</a> |
    <a href="/ko/legal/privacy/firefox.html">���� ���� ��ȣ</a>
  </small>
  
</aside>
<? }

function download_button_mobile($button) { 
?>
<aside id="primary-download-mobile" class="download-button download-button-mobile-button">
    <noscript>
    
<div class="download download-dumb">
  <h4>Firefox �ٿ�ε� - �ѱ��� ����</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android��</a></li>
      </ul>
</div>  </noscript>
  
    <div class="unrecognized-download">
    
<div class="download download-dumb">
  <h4>Firefox �ٿ�ε� - �ѱ��� ����</h4>
  <ul>
          <li><a href="https://market.android.com/details?id=org.mozilla.firefox" class="button-white">Android��</a></li>
      </ul>
</div>  </div>
  
    <ul class="download-list">
        <li class="">
      <a class="download-link download-firefox-mobile"
         href="https://market.android.com/details?id=org.mozilla.firefox">
          <span class="download-content-wrapper">          <span class="download-content">
            <span class="download-title">Firefox Android��</span>
            ���� �ٿ�ε�              <span class="download-info">
    Google Play ������ �̵�
  </span>
          </span>
        </span>
      </a>
    </li>
      </ul>
  
  
  <small class="download-other">
  <a href="/ko/firefox/mobile/platforms">���� �ܸ���</a> |
  <a href="/ko/mobile/notes">��� �Ұ�</a> |
  <a href="/ko/legal/privacy/firefox.html">���� ���� ��å</a>
</small>

</aside>
<? } ?>