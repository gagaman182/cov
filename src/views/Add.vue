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
          <article class="tile is-child notification is-info ">
            <p class="title">ข้อมูลทั่วไป</p>
            <p class="subtitle">ประวัติ และ ที่อยู่อาศัย</p>
            <div class="content">
              <article class="tile is-child box ">
                <span class="tag is-info">
                  <p class="subtitle">ประวัติ</p>
                </span>

                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label class="label">คำนำหน้า</label>
                      <div class="control">
                        <div class="select is-medium ">
                          <select v-model="prename">
                            <option>นาย</option>
                            <option>นาง</option>
                            <option>นางสาว</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">ชื่อ-สกุล</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="ชื่อ" v-model="name">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">อายุ</label>
                      <div class="control">
                        <input class="input is-medium" type="number" placeholder="ปี" v-model="age">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">ตำแหน่ง</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="ตำแหน่ง" v-model="occupation">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">เลขที่บัตรประชาชน</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="เลขบัตร" v-model="idcard">
                      </div>
                    </div>
                  </div>

                </div>
                <span class="tag is-info">
                  <p class="subtitle">ที่อยู่ปัจจุบัน</p>
                </span>

                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label class="label">เลขที่</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="บ้านเลขที่" v-model="address">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">หมูที่</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="หมูที่" v-model="village">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">หมู่บ้าน</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="หมู่บ้าน" v-model="villname">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">ซอย</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="ซอย" v-model="soi">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">ถนน</label>
                      <div class="control">
                        <input class="input is-medium" type="text" placeholder="ถนน" v-model="road">
                      </div>
                    </div>
                  </div>

                </div>
                <div class="columns">
                  <div class="column">
                    <div class="field">

                      <div class="control">

                        <addressinput-subdistrict v-model="subdistrict" placeholder="ตำบล" />
                        <addressinput-zipcode v-model="zipcode" placeholder="รหัสไปรษณีย์" />

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

                </div>
                <span class="tag is-info">
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
          <article class="tile is-child notification is-success">
            <p class="title">การติดตามลักษณะอาการ/อาการแสดง</p>
            <p class="subtitle">With some content</p>
            <div class="content ">
          <div class="table-container">
              <table class="table ">
                <thead>
                  <tr>
                    <th>เริ่ม</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>1</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>


                  </tr>
                 
                  <tr>
                    <th>วัน/เดือน/ปี</th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <!-- <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th>
                    <th> <input type="date" v-model="day1"></th> -->


                  </tr>
                 
                </thead>
              </table>
             </div>
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
        prename: 'นาย',
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