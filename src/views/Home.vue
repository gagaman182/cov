<template>
  <div class="home">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p>จำนวนผู้สัมผัสรวม</p>
          <p class="title">{{ count_person[0].total }}</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p>เพศชาย</p>
          <p class="title">{{ count_person[0].man }}</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p>เพศหญิง</p>
          <p class="title">{{ count_person[0].women }}</p>
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
      <div class="tile is-vertical is-12">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child box">
              <p class="subtitle">กราฟแสดงตามประเภทกลุ่มผู้ป่วย</p>
              <div class="chart">
                <pie-chart :data="data_pui" />
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="subtitle">กราฟแสดงรายตำบลในเขตอำเภอหาดใหญ่</p>
              <div class="chart">
                <BarChart
                  :data="data_tumbon"
                  x-name="ตำบล"
                  y-name=""
                  label-rotate
                  rainbow
                />
              </div>
            </article>
          </div>
           <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="subtitle">กราฟเส้นแสดงเปรียบเทียบระหว่าง rowrisk กับ hightrisk</p>
              <div class="chart">
                 <line-chart 
                 :data="data_pui_line" 
                 area />
              </div>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p class="subtitle">ข้อมูลผู้สัมผัสโรค</p>
            <vue-good-table
              :columns="columnperson"
              :rows="rowperson"
              :search-options="{ enabled: true }"
              ref="persontableref"
              :pagination-options="{ enabled: true }"
              :totalRows="totalRecords"
              @on-row-dblclick="PersonClick"
            />
          </article>
        </div>
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
      api_path: "http://192.168.5.187/0161/covid/cov/api/",
      //api_path: "http://localhost/covid/cov/api/",
      // name: null,
      count_person: "",
      columnperson: [
        {
          label: "id",
          field: "id"
        },
        {
          label: "ชื่อ-สกุล",
          field: "name"
        },
        {
          label: "อายุ",
          field: "age"
        },
        {
          label: "เลขบัตรประชาชน",
          field: "idcard"
        },
        {
          label: "อาชีพ",
          field: "occupation"
        },
        {
          label: "ประเภทกลุ่มผู้ป่วย",
          field: "pui"
        }
      ],
      // rowperson: [],
      totalRecords: 0,
      data_tumbon: [
        {
          name: "year",
          data: [
            {
              label: "หาดใหญ่",
              value: 45
            },
            {
              label: "พะตง",
              value: 60
            }
          ]
        }
      ],
      data_pui: [
        {
          name: "pui",
          value: 30
        },
        {
          name: "rowrisk",
          value: 15
        },
        {
          name: "hightrisk",
          value: 8
        }
      ],
       data_pui_line: [
        {
          name: "rowrisk",
          data: [
            { label: "2016", value: 1040000 },
            { label: "2017", value: 1200000 },
            { label: "2018", value: 1800000 },
            { label: "2019", value: 2000000 }
          ]
        },
        {
          name: "hightrisk",
          data: [
            { label: "2016", value: 1040000 },
            { label: "2017", value: 1200000 },
            { label: "2018", value: 600000 },
            { label: "2019", value: 700000 }
          ]
        }
      ],
      form: {
        token: ""
      }
    };
  },
  created() {},
  mounted() {
    //เริ่มระบบเช็ค  login
    this.LoadPage();
  },
  methods: {
    LoadPage() {
      // session login
      this.form.token = JSON.parse(localStorage.getItem("token"));

      //  alert(this.form.token[0].token )

      if (this.form.token == undefined) {
        this.$router.push("/login");
      } else {
        //แสดงการนับจำนวน
        this.CountPerson();
        //แสดงคน
        this.ShowPerson();

        //แสดงกราฟ
        this.ShowChart_tumbon();
        this.ShowChart_pui();
         this.ShowChart_pui_line();
      }
    },
    CountPerson() {
      // count person
      axios.get(this.api_path + "count_person.php").then(response => {
        this.count_person = response.data;
      });
    },
    ShowPerson() {
      // show person
      axios.get(this.api_path + "show_person.php").then(response => {
        this.rowperson = response.data;
      });
    },
    ShowChart_tumbon() {
      // show person
      axios.get(this.api_path + "chart_tumbon.php").then(response => {
        this.data_tumbon = response.data;
      });
    },
    ShowChart_pui() {
      // show person
      axios.get(this.api_path + "chart_pui.php").then(response => {
        this.data_pui = response.data;
      });
    },

    ShowChart_pui_line() {
      // show person
      axios.get(this.api_path + "chart_pui_line.php").then(response => {
        this.data_pui_line = response.data;
      });
    },

    //double click ที่ตาราง
    PersonClick(params) {
      this.$router.push("/edit/" + params.row.id);
    }
  }
};
</script>
<style>
.reds {
  color: #ff0000;
}
.chart {
  width: 100%;
  height: 300px;
}
</style>
