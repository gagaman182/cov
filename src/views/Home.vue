<template>
  <div class="home">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p>จำนวนผู้สัมผัสรวม</p>
          <p class="title">{{count_person[0].total}}</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p>เพศชาย</p>
          <p class="title">{{count_person[0].man}}</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p>เพศหญิง</p>
          <p class="title">{{count_person[0].women}}</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="reds">จำนวนผู้ติดเชื้อ</p>
          <p class="title">0</p>
        </div>
      </div>
    </nav>
    <div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child box">
          <!-- Put any content you want -->
        </article>
        <article class="tile is-child box">
          <!-- Put any content you want -->
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <!-- Put any content you want -->
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child box">
        <!-- Put any content you want -->
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
      <!-- Put any content you want -->
    </article>
  </div>
</div>
  </div>
</template>

<script>
import axios from "axios";
// @ is an alias to /src

export default {
  name: "Home",
  data() {
    return {
       //  api_path: "http://192.168.5.187/0161/covid/cov/api/",
      api_path: "http://localhost/covid/cov/api/",
      name: null,
      count_person:""
    };
  },
  created() {
      // count data
      
      axios.get(this.api_path + "count_person.php")
        .then(response => {
        this.count_person = response.data

        })
  }
};
</script>
<style >
.reds {
 
  color: #FF0000;
}
</style>
