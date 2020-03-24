<template>
  <div id="app">
    <article class="media notification ">
      <figure class="image is-96x96">
        <img src="./assets/logo_hos.png" />
      </figure>
      <div class="media-content">
        <div class="field">
          <p class="title">แบบเฝ้าระวังติดตามผู้สัมผัสโรค COVID-19 (14 วัน)</p>
        </div>
        <p class="subtitle">
          งานส่งเสริมป้องกันโรค กลุ่มงานเวชกรรมสังคม โรงพยาบาลหาดใหญ่
        </p>
        <nav class="level">
          <div class="level-left">
            <div class="level-item">
              <div class="navbar-start">
                <a class="navbar-item">
                  <router-link to="/">
                    <p class="subtitle">หน้าแรก</p></router-link
                  >
                </a>

                <a class="navbar-item">
                  <router-link to="/add"
                    ><p class="subtitle">แบบฟอร์มเฝ้าระวัง</p></router-link
                  >
                </a>
                
              </div>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
              <label class="checkbox">
                <input type="checkbox" /> Press enter to submit
              </label>
            </div>
          </div>
        </nav>
      </div>
    </article>

    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a
          role="button"
          class="navbar-burger burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarBasicExample"
        >
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
          <strong>แบบเฝ้าระวังติดตามผู้สัมผัสโรค COVID-19 โดย</strong
          ><strong> @ งานส่งเสริมป้องกันโรค </strong> กลุ่มงานเวขกรรมสังคม

          <a href="https://www.hatyaihospital.go.th/">โรงพยาบาลหาดใหญ่</a>. TEL.
          074-273100 ต่อ 1925
        </p>
      </div>
    </footer>
  </div>
</template>
