<template>
  <div class="home">
    <b-loading :is-full-page="isFullPage" :active.sync="isLoading" :can-cancel="true"></b-loading>
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
        <div class="card">
           
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
 </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
           
            <b-navbar>
       
     <template slot="brand">
             <p class="subtitle">ข้อมูลผู้สัมผัสโรค</p> 
        </template>

        <template slot="end">
            <b-navbar-item tag="div">
                <div class="buttons">
                    <a class="button is-primary" 
                    @click="clickadd"
                    
                    >
                    <b-icon icon="check"></b-icon>
                        <strong>เพิ่มข้อมูล</strong>
                    </a>
                    
                     <a class="button is-success" 
                    @click="clickexcel"
                    
                    >
                     
                        <strong>Excel</strong>
                    </a>
                </div>
               
            </b-navbar-item>
        </template>
    </b-navbar>
            <vue-good-table
              :columns="columnperson"
              :rows="rowperson"
              :search-options="{ enabled: true }"
              ref="persontableref"
              :pagination-options="{ enabled: true }"
              :totalRows="totalRecords"
              @on-row-dblclick="PersonClick"
               theme="black-rhino"
               :line-numbers="true"
               
               
            />
     <pre>{{on_excel}}</pre>
             
          </article>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import XLSX from 'xlsx' // import xlsx
// @ is an alias to /src
export default {
  name: "Home",

  data() {
    return {
       //api_path: "http://192.168.5.187/0161/covid/cov/api/",
      //api_path: "http://localhost/covid/cov/api/",
       api_path: "http://192.168.4.3/webapp/tee/covid/api/",
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
        },
         {
          label: "วันที่เริ่มติดตาม",
          field: "startday",
          dateInputFormat: 'DD-MM-YYYY  HH:mm:ss', 
          dateOutputFormat: 'DD-MM-YYYY HH:mm:ss'
        },
         {
          label: "เฝ้าระวังครบ 14 วัน",
          field: "total14"
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
      },
       isLoading: false,
       isFullPage: true,
         json_excel : []
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
         this.openLoading();
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
    openLoading() {
                this.isLoading = true
                setTimeout(() => {
                    this.isLoading = false
                }, 1 * 1000)
            },
      //ปุ่มเพิ่ม
     clickadd(){
    this.$router.push("/add");
     } ,   
     //สงออก excel
      clickexcel(){
      axios.get(this.api_path + "show_person.php").then(response => {
        this.json_excel = response.data;
      const dataWS = XLSX.utils.json_to_sheet(this.json_excel)
      const wb = XLSX.utils.book_new()
      XLSX.utils.book_append_sheet(wb, dataWS)
      XLSX.writeFile(wb,'export.xlsx')
      });
   
     } ,      
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
