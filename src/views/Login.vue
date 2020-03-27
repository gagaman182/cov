<template>
  <div>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical"></div>
          <div class="tile is-parent">
            <article class="tile is-child notification is-info googlefont">
              <center>
                <p class="title">โรงพยาบาลหาดใหญ่</p>
                <p class="subtitle">แบบเฝ้าระวังติดตามผู้สัมผัสโรค COVID-19</p>
              </center>
              <p class="subtitle">Username</p>
              <b-field>
                <b-input placeholder="User" v-model="form.username"></b-input>
              </b-field>
              <p class="subtitle">Password</p>
              <b-field>
                <b-input
                  type="password"
                  placeholder="Pass"
                  v-model="form.password"
                  password-reveal
                >
                </b-input>
              </b-field>
              <br />
              <br />
              <div class="buttons">
                <b-button type="is-primary" expanded @click="login"
                  >ตกลง</b-button
                >
              </div>
            </article>
          </div>
        </div>
        <div class="tile is-parent"></div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "maintable",
  data() {
    return {
        //api_path: "http://192.168.5.187/0161/covid/cov/api/",
      //api_path: "http://localhost/covid/cov/api/",
       api_path: "http://192.168.4.3/webapp/tee/covid/api/",
      form: {
        username: "",
        password: "",
        token: ""
      },
      loginok: "",
      tokens: "",
      erroralert: ""
    };
  },
  methods: {
    login() {
      axios
        .get(this.api_path + "logincheck.php", {
          params: {
            username: this.form.username,
            password: this.form.password
          }
        })
        .then(response => {
          this.form.tokens = response.data;
          localStorage.setItem("token", JSON.stringify(this.form.tokens));
          this.form.token = JSON.parse(localStorage.getItem("token"));
          if (this.form.token[0].state == "no") {
            this.popuplogin();
            this.clear();
            // alert("no")
            this.$router.push("/login");
          } else {
            this.$router.push("/");
          }
        });
    },
    popuplogin() {
      this.notif = this.$buefy.notification.open({
        duration: 5000,
        message: this.form.token[0].message,
        position: "is-bottom-right",
        type: "is-danger",
        hasIcon: true
      });
    },
    clear() {
      this.form.username = "";
      this.form.password = "";
    }
  }
};
</script>
<style>
@import url("https://fonts.googleapis.com/css?family=Roboto+Condensed");
.googlefont {
  font-family: "Roboto Condensed", sans-serif;
}
</style>
