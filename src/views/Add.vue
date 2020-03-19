<template>
  <div>
    <div class="columns">
      <div class="column">
        <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                ส่วนที่1
              </h1>
              <h2 class="subtitle">
                ข้อมูลทั่วไป
              </h2>
            </div>
          </div>
        </section>
      </div>
      <div class="column is-four-fifths">
        <div class="tile is-parent ">
          <article class="tile is-child notification ">
            <p class="title">ข้อมูลทั่วไป</p>
            <p class="subtitle">ประวัติ และ ที่อยู่อาศัย</p>
            <div class="content">
              <article class="tile is-child box ">
                <span class="tag is-primary">
                    <p class="subtitle">ประวัติ</p>
                  </span>
                <div class="columns">
                  <div class="column">
                    <b-field grouped>
                      <b-field label="ชื่อ-สกุล" expanded >
                        <b-field>
                          <b-select placeholder="คำนำหน้า" v-model="prename"  size="is-medium">
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                          </b-select>
                          <b-input placeholder="ชื่อ-สกุล" expanded v-model="name"  size="is-medium"></b-input>
                        </b-field>
                      </b-field>
                      
                    </b-field>
                  </div>
                  <div class="column">
                  
                         <b-field label="อายุ">
                        <b-input placeholder="ปี"
                            size="is-medium"
                            v-model="age">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                   
                     <b-field label="ตำแหน่ง">
                        <b-input placeholder="ตำแหน่ง"
                            size="is-medium"
                            v-model="occupation">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    
                     <b-field label="เลขที่บัตรประชาชน">
                        <b-input placeholder="เลขบัตร"
                            size="is-medium"
                            v-model="idcard">
                        </b-input>
                    </b-field>
                  </div>
                </div>
                <span class="tag is-primary">
                    <p class="subtitle">ที่อยู่ปัจจุบัน</p>
                  </span>
                <div class="columns">
                  <div class="column">
                     <b-field label="บ้านเลขที่">
                        <b-input placeholder="บ้านเลขที่"
                            size="is-medium"
                            v-model="address">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="หมูที่">
                        <b-input placeholder="หมูที่"
                            size="is-medium"
                            v-model="village">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                     <b-field label="หมู่บ้าน">
                        <b-input placeholder="หมู่บ้าน"
                            size="is-medium"
                            v-model="villname">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                   <b-field label="ซอย">
                        <b-input placeholder="ซอย"
                            size="is-medium"
                            v-model="soi">
                        </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="ถนน">
                        <b-input placeholder="ถนน"
                            size="is-medium"
                            v-model="road">
                        </b-input>
                    </b-field>
                  </div>
                </div>
                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <div class="control">
                        <addressinput-subdistrict v-model="subdistrict" placeholder="ตำบล" />
                        
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <div class="control">
                        <addressinput-district v-model="district" placeholder="อำเภอ" />
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <div class="control">
                        <addressinput-province v-model="province" placeholder="จังหวัด" />
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <div class="control">
                        <addressinput-zipcode v-model="zipcode" placeholder="รหัสไปรษณีย์" />
                      </div>
                    </div>
                  </div>
                </div>
                <span class="tag is-primary">
                    <p class="subtitle">ประวัติเสี่ยง</p>
                  </span>
                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label class="label">ข้อมูลการเดินทาง</label>
                      <div class="control">
                        <textarea class="textarea is-primary" placeholder="ข้อมูลการเดินทาง"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                ส่วนที่2
              </h1>
              <h2 class="subtitle">
                การติดตามลักษณะอาการ
              </h2>
            </div>
          </div>
        </section>
      </div>
      <div class="column is-four-fifths">
        <div class="tile is-parent ">
          <article class="tile is-child notification ">
            <p class="title">การติดตามลักษณะอาการ/อาการแสดง</p>
            <p class="subtitle">ตารางติดตาม 14 วัน</p>
            <div class="content ">
              <b-tabs size="is-medium" class="block">
            <b-tab-item label="วันที่ 1 - 7">
              <div class="table-container">
                <table class="table ">
                  <thead>
                    <tr>
                      <th>เริ่ม</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>5</th>
                      <th>6</th>
                      <th>7</th>
                      
                    </tr>
                  </thead>
                    <tr>
                      <th>วัน-เดือน-ปี </th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day1"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day2"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day3"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day4"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day5"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day6"></b-datepicker></b-field></th>
                      <th><b-field><b-datepicker placeholder="ระบุวัน" editable v-model="day7"></b-datepicker></b-field></th>
                   
                    </tr>
                     <tr>
                      <th>ไอfffffffgfgfgfgf</th>
                      <th><b-field>
                        <b-radio-button v-model="radioButton" native-value="1" type="is-success"><span>มี</span></b-radio-button>
                       <b-radio-button v-model="radioButton" native-value="" type="is-danger"><span>ไม่มี</span></b-radio-button>
                     </b-field></th>
                     
                   
                    </tr>
            
            
            
            
                   
            
                     
                </table>
              </div></b-tab-item>
            <b-tab-item label="วันที่ 8 - 14"></b-tab-item>
            
        </b-tabs>
              
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  // @ is an alias to /src
  export default {
    name: "Add",
    data() {
      return {
        prename: null,
        name: '',
        age: '',
        occupation: '',
        idcard: '',
        address: '',
        village: '',
        villname: '',
        soi: '',
        road: '',
        subdistrict: '',
        district: '',
        province: '',
        day1: '',
        day2: '',
        day3: '',
        day4: '',
        day5: '',
        day6: '',
        day7: '',
        day8: '',
        day9: '',
        day10: '',
        day11: '',
        day12: '',
        day13: '',
        day14: '',
        radioButton:'',
      }
    }
  };
</script>
<style>
  div.ex1 {
    width: 100%;
    height: 100%;
    overflow: scroll;
  }
</style>