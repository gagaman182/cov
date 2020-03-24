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
            <pre>{{ updateperson }}</pre>
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
                        type="number"
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
                        maxlength="13"
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
                  <div class="column">
                    <h5>ประเภทกลุ่มผู้ป่วย</h5>
                    <div class="block">
                      <b-radio v-model="pui" name="name" native-value="pui">
                        PUI
                      </b-radio>
                      <b-radio
                        v-model="pui"
                        name="name"
                        native-value="hightrisk"
                      >
                        HIGHTRISK
                      </b-radio>
                      <b-radio v-model="pui" name="name" native-value="rowrisk">
                        ROWRISK
                      </b-radio>
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
                <!-- <b-field label="วันที่สิ้นสุด">
                <b-input 
                placeholder="ระบุวันที่" 
                v-model="endday" 
                disabled></b-input>
            </b-field> -->
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
                            <b-input
                              v-model="temp_detail1"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail2"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail3"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail4"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail5"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail6"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail7"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                          อื่นๆ
                          <b-field label="">
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
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times1"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times2"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times3"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times4"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times5"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times6"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="times7"
                            disabled
                          ></b-input>
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
                            <b-input
                              v-model="temp_detail8"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail9"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail10"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail11"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail12"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail13"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                            <b-input
                              v-model="temp_detail14"
                              placeholder="°C "
                            ></b-input>
                          </b-field>
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
                          อื่นๆ
                          <b-field label="">
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
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer8"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer9"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer10"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer11"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer12"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer13"
                            disabled
                          ></b-input>
                        </th>
                        <th>
                          <b-input
                            placeholder="เวลาที่บันทึก"
                            rounded
                            v-model="informer14"
                            disabled
                          ></b-input>
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
      //api_path: "http://192.168.5.187/0161/covid/cov/api/",
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
      pui: "",
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
      temp_detail1: "",
      temp_detail2: "",
      temp_detail3: "",
      temp_detail4: "",
      temp_detail5: "",
      temp_detail6: "",
      temp_detail7: "",
      temp_detail8: "",
      temp_detail9: "",
      temp_detail10: "",
      temp_detail11: "",
      temp_detail12: "",
      temp_detail13: "",
      temp_detail14: "",
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
      times14: "",
      user_create: "",
      updateperson: "",
      id: this.$route.params.id
    };
  },
  methods: {
    selectstart() {
      this.day1 = this.startday;
      // this.endday =  moment(this.startday,'YYYY-MM-DD').add('days', 13).format('YYYY-MM-DD ')
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
            zipcode: this.zipcode,
            travel: this.travel,
            pui: this.pui,
            startday: moment(this.startday, "YYYY/MM/DD ").format(
              "YYYY/MM/DD "
            ),
            endday: moment(this.endday, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day1: moment(this.day1, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day2: moment(this.day2, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day3: moment(this.day3, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day4: moment(this.day4, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day5: moment(this.day5, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day6: moment(this.day6, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day7: moment(this.day7, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day8: moment(this.day8, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day9: moment(this.day9, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day10: moment(this.day10, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day11: moment(this.day11, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day12: moment(this.day12, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day13: moment(this.day13, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            day14: moment(this.day14, "YYYY/MM/DD ").format("YYYY/MM/DD "),
            temp_detail1: this.temp_detail1,
            temp_detail2: this.temp_detail2,
            temp_detail3: this.temp_detail3,
            temp_detail4: this.temp_detail4,
            temp_detail5: this.temp_detail5,
            temp_detail6: this.temp_detail6,
            temp_detail7: this.temp_detail7,
            temp_detail8: this.temp_detail8,
            temp_detail9: this.temp_detail9,
            temp_detail10: this.temp_detail10,
            temp_detail11: this.temp_detail11,
            temp_detail12: this.temp_detail12,
            temp_detail13: this.temp_detail13,
            temp_detail14: this.temp_detail14,
            temp1: this.temp1,
            temp2: this.temp2,
            temp3: this.temp3,
            temp4: this.temp4,
            temp5: this.temp5,
            temp6: this.temp6,
            temp7: this.temp7,
            temp8: this.temp8,
            temp9: this.temp9,
            temp10: this.temp10,
            temp11: this.temp11,
            temp12: this.temp12,
            temp13: this.temp13,
            temp14: this.temp14,
            steam1: this.steam1,
            steam2: this.steam2,
            steam3: this.steam3,
            steam4: this.steam4,
            steam5: this.steam5,
            steam6: this.steam6,
            steam7: this.steam7,
            steam8: this.steam8,
            steam9: this.steam9,
            steam10: this.steam10,
            steam11: this.steam11,
            steam12: this.steam12,
            steam13: this.steam13,
            steam14: this.steam14,
            throat1: this.throat1,
            throat2: this.throat2,
            throat3: this.throat3,
            throat4: this.throat4,
            throat5: this.throat5,
            throat6: this.throat6,
            throat7: this.throat7,
            throat8: this.throat8,
            throat9: this.throat9,
            throat10: this.throat10,
            throat11: this.throat11,
            throat12: this.throat12,
            throat13: this.throat13,
            throat14: this.throat14,
            runny1: this.runny1,
            runny2: this.runny2,
            runny3: this.runny3,
            runny4: this.runny4,
            runny5: this.runny5,
            runny6: this.runny6,
            runny7: this.runny7,
            runny8: this.runny8,
            runny9: this.runny9,
            runny10: this.runny10,
            runny11: this.runny11,
            runny12: this.runny12,
            runny13: this.runny13,
            runny14: this.runny14,
            phlegm1: this.phlegm1,
            phlegm2: this.phlegm2,
            phlegm3: this.phlegm3,
            phlegm4: this.phlegm4,
            phlegm5: this.phlegm5,
            phlegm6: this.phlegm6,
            phlegm7: this.phlegm7,
            phlegm8: this.phlegm8,
            phlegm9: this.phlegm9,
            phlegm10: this.phlegm10,
            phlegm11: this.phlegm11,
            phlegm12: this.phlegm12,
            phlegm13: this.phlegm13,
            phlegm14: this.phlegm14,
            breath1: this.breath1,
            breath2: this.breath2,
            breath3: this.breath3,
            breath4: this.breath4,
            breath5: this.breath5,
            breath6: this.breath6,
            breath7: this.breath7,
            breath8: this.breath8,
            breath9: this.breath9,
            breath10: this.breath10,
            breath11: this.breath11,
            breath12: this.breath12,
            breath13: this.breath13,
            breath14: this.breath14,
            gasp1: this.gasp1,
            gasp2: this.gasp2,
            gasp3: this.gasp3,
            gasp4: this.gasp4,
            gasp5: this.gasp5,
            gasp6: this.gasp6,
            gasp7: this.gasp7,
            gasp8: this.gasp8,
            gasp9: this.gasp9,
            gasp10: this.gasp10,
            gasp11: this.gasp11,
            gasp12: this.gasp12,
            gasp13: this.gasp13,
            gasp14: this.gasp14,
            muscle1: this.muscle1,
            muscle2: this.muscle2,
            muscle3: this.muscle3,
            muscle4: this.muscle4,
            muscle5: this.muscle5,
            muscle6: this.muscle6,
            muscle7: this.muscle7,
            muscle8: this.muscle8,
            muscle9: this.muscle9,
            muscle10: this.muscle10,
            muscle11: this.muscle11,
            muscle12: this.muscle12,
            muscle13: this.muscle13,
            muscle14: this.muscle14,
            head1: this.head1,
            head2: this.head2,
            head3: this.head3,
            head4: this.head4,
            head5: this.head5,
            head6: this.head6,
            head7: this.head7,
            head8: this.head8,
            head9: this.head9,
            head10: this.head10,
            head11: this.head11,
            head12: this.head12,
            head13: this.head13,
            head14: this.head14,
            liquid1: this.liquid1,
            liquid2: this.liquid2,
            liquid3: this.liquid3,
            liquid4: this.liquid4,
            liquid5: this.liquid5,
            liquid6: this.liquid6,
            liquid7: this.liquid7,
            liquid8: this.liquid8,
            liquid9: this.liquid9,
            liquid10: this.liquid10,
            liquid11: this.liquid11,
            liquid12: this.liquid12,
            liquid13: this.liquid13,
            liquid14: this.liquid14,
            other_detail: this.other_detail,
            other1: this.other1,
            other2: this.other2,
            other3: this.other3,
            other4: this.other4,
            other5: this.other5,
            other6: this.other6,
            other7: this.other7,
            other8: this.other8,
            other9: this.other9,
            other10: this.other10,
            other11: this.other11,
            other12: this.other12,
            other13: this.other13,
            other14: this.other14,
            informer1: this.informer1,
            informer2: this.informer2,
            informer3: this.informer3,
            informer4: this.informer4,
            informer5: this.informer5,
            informer6: this.informer6,
            informer7: this.informer7,
            informer8: this.informer8,
            informer9: this.informer9,
            informer10: this.informer10,
            informer11: this.informer11,
            informer12: this.informer12,
            informer13: this.informer13,
            informer14: this.informer14,
            user_create: this.user_create
          }
        })
        .then(response => {
          this.message_res = response.data;
          this.$buefy.notification.open({
            message: this.message_res[0].message,
            type: "is-success"
          });
          this.$router.push("/");
        });
      // }
    }
  },
  computed: {},
  mounted() {
    window.scrollTo(0, 0);
    axios
      .get(this.api_path + "edit_person.php", {
        params: {
          num: this.id //num last
        }
      })
      .then(response => {
        // JSON responses are automatically parsed.
        this.updateperson = response.data;
        this.prename = this.updateperson[0].prename;
        this.name = this.updateperson[0].name;
        this.age = this.updateperson[0].age;
        this.occupation = this.updateperson[0].occupation;
        this.idcard = this.updateperson[0].idcard;
        this.address = this.updateperson[0].address;
        this.village = this.updateperson[0].village;
        this.villname = this.updateperson[0].villname;
        this.soi = this.updateperson[0].soi;
        this.road = this.updateperson[0].road;
        this.subdistrict = this.updateperson[0].subdistrict;
        this.district = this.updateperson[0].district;
        this.province = this.updateperson[0].province;
        this.zipcode = this.updateperson[0].zipcode;
        this.travel = this.updateperson[0].travel;
        this.pui = this.updateperson[0].pui;
        this.startday = new Date(this.updateperson[0].startday);
        this.endday = new Date(this.updateperson[0].endday);
        this.day1 = new Date(this.updateperson[0].day1);
        this.day2 = new Date(this.updateperson[0].day2);
        this.day3 = new Date(this.updateperson[0].day3);
        this.day4 = new Date(this.updateperson[0].day4);
        this.day5 = new Date(this.updateperson[0].day5);
        this.day6 = new Date(this.updateperson[0].day6);
        this.day7 = new Date(this.updateperson[0].day7);
        this.day8 = new Date(this.updateperson[0].day8);
        this.day9 = new Date(this.updateperson[0].day9);
        this.day10 = new Date(this.updateperson[0].day10);
        this.day11 = new Date(this.updateperson[0].day11);
        this.day12 = new Date(this.updateperson[0].day12);
        this.day13 = new Date(this.updateperson[0].day13);
        this.day14 = new Date(this.updateperson[0].day14);
        this.temp_detail1 = this.updateperson[0].temp_detail1;
        this.temp_detail2 = this.updateperson[0].temp_detail2;
        this.temp_detail3 = this.updateperson[0].temp_detail3;
        this.temp_detail4 = this.updateperson[0].temp_detail4;
        this.temp_detail5 = this.updateperson[0].temp_detail5;
        this.temp_detail6 = this.updateperson[0].temp_detail6;
        this.temp_detail7 = this.updateperson[0].temp_detail7;
        this.temp_detail8 = this.updateperson[0].temp_detail8;
        this.temp_detail9 = this.updateperson[0].temp_detail9;
        this.temp_detail10 = this.updateperson[0].temp_detail10;
        this.temp_detail11 = this.updateperson[0].temp_detail11;
        this.temp_detail12 = this.updateperson[0].temp_detail12;
        this.temp_detail13 = this.updateperson[0].temp_detail13;
        this.temp_detail14 = this.updateperson[0].temp_detail14;
        this.temp1 = this.updateperson[0].temp1;
        this.temp2 = this.updateperson[0].temp2;
        this.temp3 = this.updateperson[0].temp3;
        this.temp4 = this.updateperson[0].temp4;
        this.temp5 = this.updateperson[0].temp5;
        this.temp6 = this.updateperson[0].temp6;
        this.temp7 = this.updateperson[0].temp7;
        this.temp8 = this.updateperson[0].temp8;
        this.temp9 = this.updateperson[0].temp9;
        this.temp10 = this.updateperson[0].temp10;
        this.temp11 = this.updateperson[0].temp11;
        this.temp12 = this.updateperson[0].temp12;
        this.temp13 = this.updateperson[0].temp13;
        this.temp14 = this.updateperson[0].temp14;
        this.steam1 = this.updateperson[0].steam1;
        this.steam2 = this.updateperson[0].steam2;
        this.steam3 = this.updateperson[0].steam3;
        this.steam4 = this.updateperson[0].steam4;
        this.steam5 = this.updateperson[0].steam5;
        this.steam6 = this.updateperson[0].steam6;
        this.steam7 = this.updateperson[0].steam7;
        this.steam8 = this.updateperson[0].steam8;
        this.steam9 = this.updateperson[0].steam9;
        this.steam10 = this.updateperson[0].steam10;
        this.steam11 = this.updateperson[0].steam11;
        this.steam12 = this.updateperson[0].steam12;
        this.steam13 = this.updateperson[0].steam13;
        this.steam14 = this.updateperson[0].steam14;
        this.throat1 = this.updateperson[0].throat1;
        this.throat2 = this.updateperson[0].throat2;
        this.throat3 = this.updateperson[0].throat3;
        this.throat4 = this.updateperson[0].throat4;
        this.throat5 = this.updateperson[0].throat5;
        this.throat6 = this.updateperson[0].throat6;
        this.throat7 = this.updateperson[0].throat7;
        this.throat8 = this.updateperson[0].throat8;
        this.throat9 = this.updateperson[0].throat9;
        this.throat10 = this.updateperson[0].throat10;
        this.throat11 = this.updateperson[0].throat11;
        this.throat12 = this.updateperson[0].throat12;
        this.throat13 = this.updateperson[0].throat13;
        this.throat14 = this.updateperson[0].throat14;
        this.runny1 = this.updateperson[0].runny1;
        this.runny2 = this.updateperson[0].runny2;
        this.runny3 = this.updateperson[0].runny3;
        this.runny4 = this.updateperson[0].runny4;
        this.runny5 = this.updateperson[0].runny5;
        this.runny6 = this.updateperson[0].runny6;
        this.runny7 = this.updateperson[0].runny7;
        this.runny8 = this.updateperson[0].runny8;
        this.runny9 = this.updateperson[0].runny9;
        this.runny10 = this.updateperson[0].runny10;
        this.runny11 = this.updateperson[0].runny11;
        this.runny12 = this.updateperson[0].runny12;
        this.runny13 = this.updateperson[0].runny13;
        this.runny14 = this.updateperson[0].runny14;
        this.phlegm1 = this.updateperson[0].phlegm1;
        this.phlegm2 = this.updateperson[0].phlegm2;
        this.phlegm3 = this.updateperson[0].phlegm3;
        this.phlegm4 = this.updateperson[0].phlegm4;
        this.phlegm5 = this.updateperson[0].phlegm5;
        this.phlegm6 = this.updateperson[0].phlegm6;
        this.phlegm7 = this.updateperson[0].phlegm7;
        this.phlegm8 = this.updateperson[0].phlegm8;
        this.phlegm9 = this.updateperson[0].phlegm9;
        this.phlegm10 = this.updateperson[0].phlegm10;
        this.phlegm11 = this.updateperson[0].phlegm11;
        this.phlegm12 = this.updateperson[0].phlegm12;
        this.phlegm13 = this.updateperson[0].phlegm13;
        this.phlegm14 = this.updateperson[0].phlegm14;
        this.breath1 = this.updateperson[0].breath1;
        this.breath2 = this.updateperson[0].breath2;
        this.breath3 = this.updateperson[0].breath3;
        this.breath4 = this.updateperson[0].breath4;
        this.breath5 = this.updateperson[0].breath5;
        this.breath6 = this.updateperson[0].breath6;
        this.breath7 = this.updateperson[0].breath7;
        this.breath8 = this.updateperson[0].breath8;
        this.breath9 = this.updateperson[0].breath9;
        this.breath10 = this.updateperson[0].breath10;
        this.breath11 = this.updateperson[0].breath11;
        this.breath12 = this.updateperson[0].breath12;
        this.breath13 = this.updateperson[0].breath13;
        this.breath14 = this.updateperson[0].breath14;
        this.gasp1 = this.updateperson[0].gasp1;
        this.gasp2 = this.updateperson[0].gasp2;
        this.gasp3 = this.updateperson[0].gasp3;
        this.gasp4 = this.updateperson[0].gasp4;
        this.gasp5 = this.updateperson[0].gasp5;
        this.gasp6 = this.updateperson[0].gasp6;
        this.gasp7 = this.updateperson[0].gasp7;
        this.gasp8 = this.updateperson[0].gasp8;
        this.gasp9 = this.updateperson[0].gasp9;
        this.gasp10 = this.updateperson[0].gasp10;
        this.gasp11 = this.updateperson[0].gasp11;
        this.gasp12 = this.updateperson[0].gasp12;
        this.gasp13 = this.updateperson[0].gasp13;
        this.gasp14 = this.updateperson[0].gasp14;
        this.muscle1 = this.updateperson[0].muscle1;
        this.muscle2 = this.updateperson[0].muscle2;
        this.muscle3 = this.updateperson[0].muscle3;
        this.muscle4 = this.updateperson[0].muscle4;
        this.muscle5 = this.updateperson[0].muscle5;
        this.muscle6 = this.updateperson[0].muscle6;
        this.muscle7 = this.updateperson[0].muscle7;
        this.muscle8 = this.updateperson[0].muscle8;
        this.muscle9 = this.updateperson[0].muscle9;
        this.muscle10 = this.updateperson[0].muscle10;
        this.muscle11 = this.updateperson[0].muscle11;
        this.muscle12 = this.updateperson[0].muscle12;
        this.muscle13 = this.updateperson[0].muscle13;
        this.muscle14 = this.updateperson[0].muscle14;
        this.head1 = this.updateperson[0].head1;
        this.head2 = this.updateperson[0].head2;
        this.head3 = this.updateperson[0].head3;
        this.head4 = this.updateperson[0].head4;
        this.head5 = this.updateperson[0].head5;
        this.head6 = this.updateperson[0].head6;
        this.head7 = this.updateperson[0].head7;
        this.head8 = this.updateperson[0].head8;
        this.head9 = this.updateperson[0].head9;
        this.head10 = this.updateperson[0].head10;
        this.head11 = this.updateperson[0].head11;
        this.head12 = this.updateperson[0].head12;
        this.head13 = this.updateperson[0].head13;
        this.head14 = this.updateperson[0].head14;
        this.liquid1 = this.updateperson[0].liquid1;
        this.liquid2 = this.updateperson[0].liquid2;
        this.liquid3 = this.updateperson[0].liquid3;
        this.liquid4 = this.updateperson[0].liquid4;
        this.liquid5 = this.updateperson[0].liquid5;
        this.liquid6 = this.updateperson[0].liquid6;
        this.liquid7 = this.updateperson[0].liquid7;
        this.liquid8 = this.updateperson[0].liquid8;
        this.liquid9 = this.updateperson[0].liquid9;
        this.liquid10 = this.updateperson[0].liquid10;
        this.liquid11 = this.updateperson[0].liquid11;
        this.liquid12 = this.updateperson[0].liquid12;
        this.liquid13 = this.updateperson[0].liquid13;
        this.liquid14 = this.updateperson[0].liquid14;
        this.other_detail = this.updateperson[0].other_detail;
        this.other1 = this.updateperson[0].other1;
        this.other2 = this.updateperson[0].other2;
        this.other3 = this.updateperson[0].other3;
        this.other4 = this.updateperson[0].other4;
        this.other5 = this.updateperson[0].other5;
        this.other6 = this.updateperson[0].other6;
        this.other7 = this.updateperson[0].other7;
        this.other8 = this.updateperson[0].other8;
        this.other9 = this.updateperson[0].other9;
        this.other10 = this.updateperson[0].other10;
        this.other11 = this.updateperson[0].other11;
        this.other12 = this.updateperson[0].other12;
        this.other13 = this.updateperson[0].other13;
        this.other14 = this.updateperson[0].other14;
        this.informer1 = this.updateperson[0].informer1;
        this.informer2 = this.updateperson[0].informer2;
        this.informer3 = this.updateperson[0].informer3;
        this.informer4 = this.updateperson[0].informer4;
        this.informer5 = this.updateperson[0].informer5;
        this.informer6 = this.updateperson[0].informer6;
        this.informer7 = this.updateperson[0].informer7;
        this.informer8 = this.updateperson[0].informer8;
        this.informer9 = this.updateperson[0].informer9;
        this.informer10 = this.updateperson[0].informer10;
        this.informer11 = this.updateperson[0].informer11;
        this.informer12 = this.updateperson[0].informer12;
        this.informer13 = this.updateperson[0].informer13;
        this.informer14 = this.updateperson[0].informer14;
        this.user_create = this.updateperson[0].user_create;
        this.times1 = this.updateperson[0].times1;
        this.times2 = this.updateperson[0].times2;
        this.times3 = this.updateperson[0].times3;
        this.times4 = this.updateperson[0].times4;
        this.times5 = this.updateperson[0].times5;
        this.times6 = this.updateperson[0].times6;
        this.times7 = this.updateperson[0].times7;
        this.times8 = this.updateperson[0].times8;
        this.times9 = this.updateperson[0].times9;
        this.times10 = this.updateperson[0].times10;
        this.times11 = this.updateperson[0].times11;
        this.times12 = this.updateperson[0].times12;
        this.times13 = this.updateperson[0].times13;
        this.times14 = this.updateperson[0].times14;
      });
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
