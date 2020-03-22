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
                      <b-field label="ชื่อ-สกุล" expanded>
                        <b-field>
                          <b-select
                            placeholder="คำนำหน้า"
                            v-model="prename"
                            required
                            validation-message="ข้อมูลยังไม่ถูกกรอก"
                            size="is-medium"
                          >
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                          </b-select>
                          <b-input
                            placeholder="ชื่อ-สกุล"
                            expanded
                            v-model="name"
                            required
                            validation-message="ข้อมูลยังไม่ถูกกรอก"
                            size="is-medium"
                          ></b-input>
                        </b-field>
                      </b-field>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="อายุ">
                      <b-input
                        placeholder="ปี"
                        size="is-medium"
                        required
                        validation-message="ข้อมูลยังไม่ถูกกรอก"
                        v-model="age"
                      >
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="อาชีพ">
                      <b-input
                        placeholder="อาชีพ"
                        size="is-medium"
                        v-model="occupation"
                      >
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="เลขที่บัตรประชาชน">
                      <b-input
                        placeholder="เลขบัตร"
                        size="is-medium"
                        required
                        validation-message="ข้อมูลยังไม่ถูกกรอก"
                        v-model="idcard"
                      >
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
                      <b-input
                        placeholder="บ้านเลขที่"
                        size="is-medium"
                        v-model="address"
                      >
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="หมูที่">
                      <b-input
                        placeholder="หมูที่"
                        size="is-medium"
                        v-model="village"
                      >
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="หมู่บ้าน">
                      <b-input
                        placeholder="หมู่บ้าน"
                        size="is-medium"
                        v-model="villname"
                      >
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="ซอย">
                      <b-input placeholder="ซอย" size="is-medium" v-model="soi">
                      </b-input>
                    </b-field>
                  </div>
                  <div class="column">
                    <b-field label="ถนน">
                      <b-input
                        placeholder="ถนน"
                        size="is-medium"
                        v-model="road"
                      >
                      </b-input>
                    </b-field>
                  </div>
                </div>
                <b-message>
                  <div class="columns">
                    <div class="column">
                      <div class="field">
                        <div class="control">
                          <addressinput-subdistrict
                            v-model="subdistrict"
                            placeholder="ตำบล"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="field">
                        <div class="control">
                          <addressinput-district
                            v-model="district"
                            placeholder="อำเภอ"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="field">
                        <div class="control">
                          <addressinput-province
                            v-model="province"
                            placeholder="จังหวัด"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="field">
                        <div class="control">
                          <addressinput-zipcode
                            v-model="zipcode"
                            placeholder="รหัสไปรษณีย์"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </b-message>
                <span class="tag is-primary">
                  <p class="subtitle">ประวัติเสี่ยง</p>
                </span>
                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label class="label">ข้อมูลการเดินทาง</label>
                      <div class="control">
                        <textarea
                          class="textarea is-primary"
                          placeholder="ข้อมูลการเดินทาง"
                          v-model="travel"
                        ></textarea>
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
            <div class="columns">
              <div class="column">
                <b-field label="วันที่เริ่มต้น">
                  <b-datepicker
                    placeholder="ระบุวันที่"
                    editable
                    v-model="startday"
                    @input="selectstart()"
                  ></b-datepicker>
                </b-field>
              </div>
              <div class="column">
                <b-field label="วันที่สิ้นสุด">
                  <b-datepicker
                    placeholder="ระบุวันที่"
                    editable
                    v-model="endday"
                    @input="selectend()"
                  ></b-datepicker>
                </b-field>
              </div>
            </div>

            <div class="content ">
              <b-tabs size="is-medium" class="block">
                <!-- 1-7 -->
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
                        <th>วัน-เดือน-ปี</th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day1"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day2"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day3"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day4"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day5"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day6"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day7"
                            ></b-datepicker>
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>อาการ / อาการแสดง</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                      </tr>
                      <tr>
                        <th>ไข้(ระบุ Temp.C)</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ไอ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>เจ็บคอ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>มีน้ำมูก</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ทีเสมหะ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>หายใจลำบาก</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>หอบเหนื่อย</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ปวดกล้ามเนื้อ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ปวดศรีษะ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ถ่ายเหลว</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          อื่นๆ<b-field label="">
                            <!-- <b-input placeholder="ระบุ" v-model="other_detail" rounded></b-input> -->
                            <b-input
                              placeholder="ระบุ"
                              type="textarea"
                              v-model="other_detail"
                            ></b-input>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other1"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other1"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other2"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other2"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other3"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other3"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other4"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other4"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other5"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other5"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other6"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other6"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other7"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other7"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          ผู้รับแจ้ง
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer1"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer2"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer3"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer4"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer5"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer6"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer7"
                            disabled
                          ></b-input>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          เวลา
                        </th>
                        <th>
                          <b-timepicker v-model="times1" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times2" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times3" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times4" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times5" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times6" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times7" inline></b-timepicker>
                        </th>
                      </tr>
                    </table>
                  </div>
                </b-tab-item>
                <!-- 8-14 -->
                <b-tab-item label="วันที่ 8 - 14">
                  <div class="table-container">
                    <table class="table ">
                      <thead>
                        <tr>
                          <th>เริ่ม</th>
                          <th>8</th>
                          <th>9</th>
                          <th>10</th>
                          <th>11</th>
                          <th>12</th>
                          <th>13</th>
                          <th>14</th>
                        </tr>
                      </thead>
                      <tr>
                        <th>วัน-เดือน-ปี</th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day8"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day9"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day10"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day11"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day12"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day13"
                            ></b-datepicker>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-datepicker
                              placeholder="ระบุวัน"
                              editable
                              v-model="day14"
                            ></b-datepicker>
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>อาการ / อาการแสดง</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                        <th>มี/ไม่มี</th>
                      </tr>
                      <tr>
                        <th>ไข้(ระบุ Temp.C)</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="temp14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="temp14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ไอ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="steam14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="steam14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>เจ็บคอ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="throat14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="throat14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>มีน้ำมูก</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="runny14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="runny14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ทีเสมหะ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="phlegm14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="phlegm14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>หายใจลำบาก</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="breath14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="breath14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>หอบเหนื่อย</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="gasp14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="gasp14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ปวดกล้ามเนื้อ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="muscle14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="muscle14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ปวดศรีษะ</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="head14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="head14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>ถ่ายเหลว</th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="liquid14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="liquid14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          อื่นๆ<b-field label="">
                            <!-- <b-input placeholder="ระบุ" v-model="other_detail" rounded></b-input> -->
                            <b-input
                              placeholder="ระบุ"
                              type="textarea"
                              v-model="other_detail"
                            ></b-input>
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other8"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other8"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other9"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other9"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other10"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other10"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other11"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other11"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other12"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other12"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other13"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other13"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                        <th>
                          <b-field>
                            <b-radio-button
                              v-model="other14"
                              native-value="1"
                              type="is-success"
                              ><span>มี</span></b-radio-button
                            >
                            <b-radio-button
                              v-model="other14"
                              native-value=""
                              type="is-danger"
                              ><span>ไม่มี</span></b-radio-button
                            >
                          </b-field>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          ผู้รับแจ้ง
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer8"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer9"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer10"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer11"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer12"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer13"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="ชื่อ"
                            rounded
                            v-model="informer14"
                            disabled
                          ></b-input>
                        </th>
                      </tr>
                      <tr>
                        <th>
                          เวลา
                        </th>
                        <th>
                          <b-timepicker v-model="times8" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times9" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times10" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times11" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times12" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times13" inline></b-timepicker>
                        </th>
                        <th>
                          <b-timepicker v-model="times14" inline></b-timepicker>
                        </th>
                      </tr>
                    </table>
                  </div>
                </b-tab-item>
              </b-tabs>
              <div class="columns">
                <div class="column">
                  <b-button type="is-primary" @click="adddata">บันทึก</b-button>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
export default {
  name: "Add",
  data() {
    return {
      //  api_path: "http://192.168.5.187/0161/covid/cov/api/",
      api_path: "http://localhost/covid/cov/api/",
      message_res: "",
      prename: null,
      name: "",
      age: "",
      occupation: "",
      idcard: "",
      address: "",
      village: "",
      villname: "",
      soi: "",
      road: "",
      subdistrict: "",
      district: "",
      province: "",
      travel: "",
      startday: "",
      endday: "",
      dates: [],
      day1: "",
      day2: "",
      day3: "",
      day4: "",
      day5: "",
      day6: "",
      day7: "",
      day8: "",
      day9: "",
      day10: "",
      day11: "",
      day12: "",
      day13: "",
      day14: "",
      temp1: "",
      temp2: "",
      temp3: "",
      temp4: "",
      temp5: "",
      temp6: "",
      temp7: "",
      temp8: "",
      temp9: "",
      temp10: "",
      temp11: "",
      temp12: "",
      temp13: "",
      temp14: "",
      steam1: "",
      steam2: "",
      steam3: "",
      steam4: "",
      steam5: "",
      steam6: "",
      steam7: "",
      steam8: "",
      steam9: "",
      steam10: "",
      steam11: "",
      steam12: "",
      steam13: "",
      steam14: "",
      throat1: "",
      throat2: "",
      throat3: "",
      throat4: "",
      throat5: "",
      throat6: "",
      throat7: "",
      throat8: "",
      throat9: "",
      throat10: "",
      throat11: "",
      throat12: "",
      throat13: "",
      throat14: "",
      runny1: "",
      runny2: "",
      runny3: "",
      runny4: "",
      runny5: "",
      runny6: "",
      runny7: "",
      runny8: "",
      runny9: "",
      runny10: "",
      runny11: "",
      runny12: "",
      runny13: "",
      runny14: "",
      phlegm1: "",
      phlegm2: "",
      phlegm3: "",
      phlegm4: "",
      phlegm5: "",
      phlegm6: "",
      phlegm7: "",
      phlegm8: "",
      phlegm9: "",
      phlegm10: "",
      phlegm11: "",
      phlegm12: "",
      phlegm13: "",
      phlegm14: "",
      breath1: "",
      breath2: "",
      breath3: "",
      breath4: "",
      breath5: "",
      breath6: "",
      breath7: "",
      breath8: "",
      breath9: "",
      breath10: "",
      breath11: "",
      breath12: "",
      breath13: "",
      breath14: "",
      gasp1: "",
      gasp2: "",
      gasp3: "",
      gasp4: "",
      gasp5: "",
      gasp6: "",
      gasp7: "",
      gasp8: "",
      gasp9: "",
      gasp10: "",
      gasp11: "",
      gasp12: "",
      gasp13: "",
      gasp14: "",
      muscle1: "",
      muscle2: "",
      muscle3: "",
      muscle4: "",
      muscle5: "",
      muscle6: "",
      muscle7: "",
      muscle8: "",
      muscle9: "",
      muscle10: "",
      muscle11: "",
      muscle12: "",
      muscle13: "",
      muscle14: "",
      head1: "",
      head2: "",
      head3: "",
      head4: "",
      head5: "",
      head6: "",
      head7: "",
      head8: "",
      head9: "",
      head10: "",
      head11: "",
      head12: "",
      head13: "",
      head14: "",
      liquid1: "",
      liquid2: "",
      liquid3: "",
      liquid4: "",
      liquid5: "",
      liquid6: "",
      liquid7: "",
      liquid8: "",
      liquid9: "",
      liquid10: "",
      liquid11: "",
      liquid12: "",
      liquid13: "",
      liquid14: "",
      other_detail: "",
      other1: "",
      other2: "",
      other3: "",
      other4: "",
      other5: "",
      other6: "",
      other7: "",
      other8: "",
      other9: "",
      other10: "",
      other11: "",
      other12: "",
      other13: "",
      other14: "",
      informer1: "",
      informer2: "",
      informer3: "",
      informer4: "",
      informer5: "",
      informer6: "",
      informer7: "",
      informer8: "",
      informer9: "",
      informer10: "",
      informer11: "",
      informer12: "",
      informer13: "",
      informer14: "",
      times1: "",
      times2: "",
      times3: "",
      times4: "",
      times5: "",
      times6: "",
      times7: "",
      times8: "",
      times9: "",
      times10: "",
      times11: "",
      times12: "",
      times13: "",
      times14: ""
    };
  },
  methods: {
    selectstart() {
      this.day1 = this.startday;
    },
    selectend() {
      this.day14 = this.endday;
    },
    adddata() {
      // if (
      //   this.prename == "" ||
      //   this.name == "" ||
      //   this.age == "" ||
      //   this.idcard == ""
      // ) {
      //   this.$buefy.dialog.alert("ท่านยังไม่ได้กรอกข้อมูลเบื่องต้น!");
      // } else {

      axios

        .get(this.api_path + "save_data.php", {
          params: {
            prename: this.prename,
            name: this.name,
            age: this.age,
            occupation: this.occupation,
            idcard: this.idcard,
            address: this.address,
            village: this.village,
            villname: this.villname,
            soi: this.soi,
            road: this.road,
            subdistrict: this.subdistrict,
            district: this.district,
            province: this.province,
            travel: this.travel,
            startday: moment(this.startday, "YYYY/MM/DD ").format(
              "YYYY/MM/DD "
            ),
            endday: moment(this.endday, "YYYY/MM/DD ").format("YYYY/MM/DD ")
          }
        })
        .then(response => {
          this.message_res = response.data;
        });
      // }
    }
  },

  computed: {},
  mounted() {}
};
</script>
<style>
div.ex1 {
  width: 100%;
  height: 100%;
  overflow: scroll;
}
</style>
