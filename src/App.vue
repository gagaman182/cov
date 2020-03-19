<template>
  <div id="app">
<article class="media">
 <figure class="image is-96x96">
  <img src="./assets/logo_hos.png">
</figure>
  <div class="media-content">
    <div class="field">
      <p class="title"> แบบเฝ้าระวังติดตามผู้สัมผัสโรค COVID-19 (14 วัน)</p>
    </div>
     <p class="subtitle">กลุ่มงานส่งเสริมป้องกันโรค โรงพยาบาลหาดใหญ่</p>
    <nav class="level">
      <div class="level-left">
        <div class="level-item">
           <div class="navbar-start">
      <a class="navbar-item">
          <router-link to="/">หน้าแรก</router-link> |
      </a>

      <a class="navbar-item">
        <router-link to="/add">แบบฟอร์มเฝ้าระวัง</router-link>
      </a>
          </div>
        </div>
      </div>
      <div class="level-right">
        <div class="level-item">
          <label class="checkbox">
            <input type="checkbox"> Press enter to submit
          </label>
        </div>
      </div>
    </nav>
  </div>
</article>

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    



    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

</nav>
    <router-view />
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>
  </div>
</template>

