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
                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label class="label">คำนำหน้า</label>
                      <div class="control">
                        <div class="select">
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
                        <input class="input" type="text" placeholder="ชื่อ" v-model="name">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="field">
                      <label class="label">อายุ</label>
                      <div class="control">
                        <input class="input" type="number" placeholder="ปี" v-model="age">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                     <div class="field">
                      <label class="label">ตำแหน่ง</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="ตำแหน่ง" v-model="occupation">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                     <div class="field">
                      <label class="label">เลขที่บัตรประชาชน</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="เลขบัตร" v-model="idcard">
                      </div>
                    </div>
                  </div>
                  
                </div>
                 <p class="subtitle">ที่อยู่ปัจจุบัน</p>
                 <div class="columns">
                    <div class="column">
                     <div class="field">
                      <label class="label">เลขที่</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="บ้านเลขที่" v-model="address">
                      </div>
                    </div>
                  </div>
                   <div class="column">
                     <div class="field">
                      <label class="label">หมูที่</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="หมูที่" v-model="village">
                      </div>
                    </div>
                  </div>
                   <div class="column">
                     <div class="field">
                      <label class="label">หมู่บ้าน</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="หมู่บ้าน" v-model="villname">
                      </div>
                    </div>
                  </div>
                   <div class="column">
                     <div class="field">
                      <label class="label">ซอย</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="ซอย" v-model="soi">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                     <div class="field">
                      <label class="label">ถนน</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="ถนน" v-model="road">
                      </div>
                    </div>
                  </div>
                     </div >
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
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
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
        name:'',
        age:'',
        occupation:'',
        idcard:'',
        address:'',
        village:'',
        villname:'',
        soi:'',
        road:'',
      }
    }
  };
</script>