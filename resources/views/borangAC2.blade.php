@extends('layouts\layout')

@section('title', 'Borang AC2 - Banci Pertanian')

@section('content')
<div class="card">
    <div class="card-body pt-3">
    <button class="toggleButton"><span>KEGUNAAN PEJABAT</span><br><i>OFFICE USE </i></button>
    <button class="toggleButton"><span>ALAMAT LENGKAP</span><br><span><i>FULL ADDRESS</i></span></button>
    <button class="toggleButton"><span>MAKLUMAT RESPONDEN</span><br><span><i>RESPONDENT INFORMATION</i></span></button>
    <button class="toggleButton"><span>A1 MAKLUMAT AHLI ISI RUMAH</span><br><span><i>INFORMATION OF HOUSEHOLD MEMBERS</i></span></button>
    <button class="toggleButton"><span>A1 MAKLUMAT AHLI ISI RUMAH (samb.)</span><br><span><i>INFORMATION OF HOUSEHOLD MEMBERS (cont'd.)</i></span></button>
    <button class="toggleButton"><span>A2 / A3</span></button>
    <button class="toggleButton"><span>A4</i></span></button>
    <button class="toggleButton"><span>A5 / A6</button>
    <button class="toggleButton"><span>A7</button>
    <form action="/insert-AC1" method="post">
        @csrf
        <div class="myDiv">
            <fieldset>
                <legend>
                    <span>KEGUNAAN PEJABAT / <i>OFFICE USE </i></span>
                </legend>
                <table>
                    <tr>
                        <td><span>a)</span></td>
                        <td>
                            <span>Kod Respon</span><br>
                            <span><i>Respond Code</i></span><br>
                        </td>
                        <td>R</td>
                        <td>11</td>
                        <td><input type="text" name="R" id="R"></td>
                    </tr>
                    <tr>
                        <td><span>b)</span></td>
                        <td>
                            <span>Negeri</span><br>
                            <span><i>State</i></span><br>
                        </td>
                        <td>NG</td>
                        <td>01</td>
                        <td><input type="text" name="NG" id="NG"></td>
                    </tr>
                    <tr>
                        <td><span>c)</span></td>
                        <td>
                            <span>Daerah Pentadbiran</span><br>
                            <span><i>Administrative District</i></span><br>
                        </td>
                        <td>DP</td>
                        <td>02</td>
                        <td><input type="text" name="DP" id="DP"></td>
                    </tr>
                    <tr>
                        <td><span>d)</span></td>
                        <td>
                            <span>Daerah Banci</span><br>
                            <span><i>Census District</i></span><br>
                        </td>
                        <td>DB</td>
                        <td>03</td>
                        <td><input type="text" name="DB" id="DB"></td>
                    </tr>
                    <tr>
                        <td><span>e)</span></td>
                        <td>
                            <span>No. BP</span><br>
                            <span><i>EB No.</i></span><br>
                        </td>
                        <td>BP</td>
                        <td>04</td>
                        <td><input type="text" name="BP" id="BP"></td>
                    </tr>
                    <tr>
                        <td><span>f)</span></td>
                        <td>
                            <span>No. TK</span><br>
                            <span><i>TK No.</i></span><br>
                        </td>
                        <td>TK</td>
                        <td>06</td>
                        <td><input type="text" name="TK" id="TK"></td>
                    </tr>
                    <tr>
                        <td><span>g)</span></td>
                        <td>
                            <span>No. Isi Rumah</span><br>
                            <span><i>Household No.</i></span><br>
                        </td>
                        <td>IR</td>
                        <td>07</td>
                        <td><input type="text" name="IR" id="IR"></td>
                    </tr>
                    <tr>
                        <td><span>h)</span></td>
                        <td>
                            <span>Jumlah Isi Rumah</span><br>
                            <span><i>Total of Household</i></span><br>
                        </td>
                        <td>JIR</td>
                        <td>08</td>
                        <td><input type="text" name="JIR" id="JIR"></td>
                    </tr>
                    <tr>
                        <td><span>i)</span></td>
                        <td>
                            <span>Jumlah Ahli Isi Rumah</span><br>
                            <span><i>Total of Household Members</i></span><br>
                        </td>
                        <td>JAIR</td>
                        <td>09</td>
                        <td><input type="text" name="JAIR" id="JAIR"></td>
                    </tr>
                    <tr>
                        <td><span>j)</span></td>
                        <td>
                            <span>Jumlah Ahli Isi Rumah Pertanian</span><br>
                            <span><i>Total of Agriculture Household Members</i></span><br>
                        </td>
                        <td>JAIRP</td>
                        <td>10</td>
                        <td><input type="text" name="JAIRP" id="JAIRP"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="myDiv hidden">
            <fieldset>
                <legend>
                    <span>ALAMAT LENGKAP</span><br>
                    <span><i>FULL ADDRESS</i></span><br>
                </legend>
                <span>1 Alamat</span><br>
                <span>1.1 Nombor Rumah / Unit / Lot</span><br>
                <span><i>House / Unit / Lot Number</i></span><br>
                <input type="text" Name="ac1_001101" id="001101"><br>
                <span>1.2 Nombor Tingkat</span><br>
                <span><i>Level Number</i></span><br>
                <input type="text" Name="ac1_001102" id="001102"><br>
                <span>1.3 Nombor Blok</span><br>
                <span><i>Block Number</i></span><br>
                <input type="text" Name="ac1_001103" id="001103"><br>
                <span>1.4 Bangunan / Pangsapuri / Kondominium</span><br>
                <span><i>Building / Apartment / Condominium</i></span><br>
                <input type="text" Name="ac1_001104" id="001104"><br>
                <span>1.5 Jalan / Batu / Lorong /Parit</span><br>
                <span><i>Road / Mile / Street / Parit</i></span><br>
                <input type="text" Name="ac1_001105" id="001105"><br>
                <span>1.6 Taman / Kampung / Desa / Presint</span><br>
                <span><i>Housing estate / Village / Rural/ Precinct</i></span><br>
                <input type="text" Name="ac1_001107" id="001107"><br>
                <span>1.7 Bandar</span><br>
                <span><i>Town</i></span><br>
                <input type="text" Name="ac1_001106" id="001106"><br>
                <span>1.8 Negeri</span><br>
                <span><i>State</i></span><br>
                <select Name="ac1_001109" id="001109">
                    <option value="01">Johor</option>
                    <option value="02">Kedah</option>
                    <option value="03">Kelantan</option>
                    <option value="04">Melaka</option>
                    <option value="05">Negeri Sembilan</option>
                    <option value="06">Pahang</option>
                    <option value="07">Pulau Pinang</option>
                    <option value="08">Perak</option>
                    <option value="09">Perlis</option>
                    <option value="10">Selangor</option>
                    <option value="11">Terengganu</option>
                    <option value="12">Sabah</option>
                    <option value="13">Sarawak</option>
                    <option value="14">Wilayah Persekutuan (Kuala Lumpur)</option>
                    <option value="15">Wilayah Persekutuan (Labuan)</option>
                    <option value="16">Wilayah Persekutuan (Putrajaya)</option>
                </select><br>
                <span>1.7 Poskod</span><br>
                <span><i>Poscode</i></span><br>
                <input type="text" Name="ac1_001108" id="001108"><br>
            </fieldset>
        </div>
        <div class="myDiv hidden">
            <fieldset>
                <legend>
                    <span>MAKLUMAT RESPONDEN</span><br>
                    <span><i>RESPONDENT INFORMATION</i></span><br>
                </legend>
                <span>2 Nama responden</span><br>
                <span><i>Name of respondent</i></span><br>
                <input type="text" Name="ac1_001111" id="001111"><br>
                <span>3 No. Telefon: Bimbit/ Rumah/ Pejabat</span><br>
                <span><i>Telephone No: H/P / Home / Office</i></span><br>
                <input type="text" Name="ac1_001113" id="001113"><br>
                <span>4 Tarikh lawatan</span><br>
                <span><i>Date of visit</i></span><br>
                <input type="date" Name="ac1_001119" id="001119"><br>
                <span>5 Catatan</span><br>
                <span><i>Comments</i></span><br>
                <input type="text" Name="ac1_catatan" id="catatan"><br>
            </fieldset>
        </div>
        <div class="myDiv hidden">
            <fieldset>
                <legend>
                    <span>A1 MAKLUMAT AHLI ISI RUMAH</span><br>
                    <span><i>INFORMATION OF HOUSEHOLD MEMBERS</i></span><br>
                </legend>
                
                <br>
                <table id="myTable">
                    <tr>
                        <td>No</td>
                        <td>
                            <span>Nama Ahli Isi Rumah</span><br>
                            <span><i>Name of Household Members</i></span><br>
                            <span>(Mulakan dengan nama Ketua Isi Rumah)</span><br>
                            <span><i>(Start with the name of Head of Household)</i></span><br>
                        </td>
                        <td>
                            <span>No. Pengenalan Diri</span><br>
                            <span><i>Self-Identification No.</i></span><br>
                        </td>
                        <td>
                            <span>Jenis pengenalan diri</span><br>
                            <span><i>Type of self-identification</i></span><br>
                        </td>
                    </tr>
                    <tr>
                    <td><span>01</span><br></td>
                    <td><input type="text" Name="ac1_0100[]" id="0100"><br></td>
                    <td><input type="text" Name="ac1_0101[]" id="0101"><br></td>
                    <td><input type="text" Name="ac1_0102[]" id="0102"><br></td>
                    </tr>
                </table>
                <button id="addRowBtn">
                    <span>Tambah</span><br>
                    <span><i>Add</i></span><br>
                </button>
            </fieldset>
        </div>
        <div class="myDiv hidden">
            <fieldset>
                <legend>
                    <span>A1 MAKLUMAT AHLI ISI RUMAH (samb.)</span><br>
                    <span><i>INFORMATION OF HOUSEHOLD MEMBERS (cont'd.)</i></span><br>
                </legend>
                
                <br>
                <table id="myTable2">
                    <tr>
                        <td>No</td>
                        <td>
                            <span>No. Ahli Isi Rumah</span><br>
                            <span><i>No. Household Members</i></span><br>
                        </td>
                        <td>
                            <span>Hubungan dengan Ketua Isi Rumah (KIR)</span><br>
                            <span><i>Relationship with Head of Household</i></span><br>
                        </td>
                        <td>
                            <span>Jantina</span><br>
                            <span><i>Sex</i></span><br>
                        </td>
                        <td>
                            <span>Umur</span><br>
                            <span><i>Age</i></span><br>
                        </td>
                        <td>
                            <span>Kumpulan etnik</span><br>
                            <span><i>Ethnic Ethnic</i></span><br>
                        </td>
                        <td>
                            <span>Kewarganegaraan</span><br>
                            <span><i>Citizenship</i></span><br>
                        </td>
                        <td>
                            <span>Taraf perkahwinan</span><br>
                            <span><i>Marital status</i></span><br>
                        </td>
                        <td>
                            <span>Sijil tertinggi yang diperoleh</span><br>
                            <span><i>Highest certificate attained</i></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td><span>01</span><br></td>
                        <td><input type="text" Name="ac1_0103[]" id="0103"><br></td>
                        <td><input type="text" Name="ac1_0104[]" id="0104"><br></td>
                        <td><input type="text" Name="ac1_0105[]" id="0105"><br></td>
                        <td><input type="text" Name="ac1_0106[]" id="0106"><br></td>
                        <td><input type="text" Name="ac1_0107[]" id="0107"><br></td>
                        <td><input type="text" Name="ac1_0108[]" id="0108"><br></td>
                        <td><input type="text" Name="ac1_0109[]" id="0109"><br></td>
                        <td><input type="text" Name="ac1_0110[]" id="0110"><br></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="myDiv hidden">
            <table id="tableA2A3">
                <tr>
                    <th colspan="7"><h2>A2 MAKLUMAT AKTIVITI PERTANIAN</h2></th>
                    <th colspan="5"><h2>A3 AGENSI PEMBANGUNAN WILAYAH</h2></th>
                </tr>
                <tr>
                    <th rowspan="3">No</th>
                    <th rowspan="2">Penglibatan dalam aktiviti pertanian <i><h5>Involvement in agriculture acitivites</h5></i></th>
                    <th colspan="5">Jenis aktiviti pertanian</th>
                    <th rowspan="2">Adakah anda peserta agensi pembanguna wilayah? <i><h5>Are you regional development agency participent?</h5></th>
                    <th rowspan="2">Agensi 1<i><h5>Agency 1</h5></i></th>
                    <th rowspan="2">Agensi 2<i><h5>Agency 2</h5></i></th>
                    <th rowspan="2">Agensi 3<i><h5>Agency 3</h5></i></th>
                    <th rowspan="3">Aksi <i><h5>Action</h5></i></th>
                </tr>
                <tr>      
                    <th>Tanaman <i><h5>Crops</h5></i></th>
                    <th>Ternakan <i><h5>Livestocks</h5></i></th>
                    <th>Perikanan Tangkapan <i><h5>Captured Fisheries</h5></i></th>
                    <th>Akuakultur <i><h5>Aquaculture</h5></i></th>
                    <th>Perhutanan dan Pembalakan <i><h5>Foriesty & Logging</h5></i></th>
                </tr>
                <tr>
                    <th>0200</th>
                    <th>0201</th>
                    <th>0202</th>
                    <th>0203</th>
                    <th>0204</th>
                    <th>0205</th>
                    <th>0300</th>
                    <th>0301</th>
                    <th>0302</th>
                    <th>0303</th>
                </tr>
                <tr>
                    <td><span>01</span><br></td>
                    <td><input type="number" Name="ac1_0200[]" ></td>
                    <td><input type="number" Name="ac1_0201[]" ></td>
                    <td><input type="number" Name="ac1_0202[]" ></td>
                    <td><input type="number" Name="ac1_0203[]" ></td>
                    <td><input type="number" Name="ac1_0204[]" ></td>
                    <td><input type="number" Name="ac1_0205[]" ></td>
                    <td><input type="number" Name="ac1_0300[]" ></td>
                    <td><input type="number" Name="ac1_0301[]" ></td>
                    <td><input type="number" Name="ac1_0302[]" ></td>
                    <td><input type="number" Name="ac1_0303[]" ></td>
                </tr>
            </table>
        </div>
        <div class="myDiv hidden">
            <table id="tableA4">
                <tr>
                    <th colspan="12"><h2>A4 PENDAFTARAN DENGAN AGENSI PERTANIAN</h2></th>
                </tr>
                <tr>
                    <th rowspan="3">No</th>
                    <th rowspan="2">Adakah anda berdaftar dengan mana-mana agensi? <i><h5>Are you registered with any agency?</h5></i></th>
                    <th colspan="6">Agensi pertanian <i><h5>Agriculture agency</h5></i></th>
                    <th rowspan="2">Lain-lain agensi. Sila nyatakan. <i><h5>Other agencies. Please specify. </h5></th>
                    <th rowspan="3">Aksi <i><h5>Action</h5></th>
                </tr>
                <tr>
                    <th>Agensi 1<i><h5>Agency 1</h5></i></th>
                    <th>Agensi 2<i><h5>Agency 2</h5></i></th>
                    <th>Agensi 3<i><h5>Agency 3</h5></i></th>
                    <th>Agensi 4<i><h5>Agency 4</h5></i></th>
                    <th>Agensi 5<i><h5>Agency 5</h5></i></th>
                    <th>Agensi 6<i><h5>Agency 6</h5></i></th>
                </tr>
                <tr>
                    <th>0400</th>
                    <th>0401</th>
                    <th>0402</th>
                    <th>0403</th>
                    <th>0404</th>
                    <th>0405</th>
                    <th>0406</th>
                    <th>0407</th>
                </tr>
                <tr>
                    <td><span>01</span><br></td>
                    <td><input type="number" Name="ac1_0400[]" ></td>
                    <td><input type="number" Name="ac1_0401[]" ></td>
                    <td><input type="number" Name="ac1_0402[]" ></td>
                    <td><input type="number" Name="ac1_0403[]" ></td>
                    <td><input type="number" Name="ac1_0404[]" ></td>
                    <td><input type="number" Name="ac1_0405[]" ></td>
                    <td><input type="number" Name="ac1_0406[]" ></td>
                    <td><input type="text" Name="ac1_0407[]" ></td>
                </tr>
            </table>
        </div>
        <div class="myDiv hidden">
            <table id="tableA5A6">
                <tr>
                <th colspan="3"><h2>A5 PENDAFTARAN PERNIAGAAN</h2></th>
                <th colspan="5"><h2>A6 PENGLIBATAN DALAM AKTIVITI PERTANIAN</h2></th>
                </tr>
                <tr>
                <td colspan="3">Sila masukkan kod pada agensi berkaitan <i><h5>Please enter the code of the relevant agency</h5></i></td>
                <td rowspan="2">Tujuan akitiviti pertanian <i><h5>Purpose of agriculture activites</h5></i></td>
                <td rowspan="2">Adakah pertanian merupakan pekerjaan utama? <i><h5>Are agriculture activites is main job?</h5></i></td>
                <td rowspan="2">Adakah aktiviti pertanian merupakan pendapatan utama? <i><h5>Are agriculture acitivies is main income?</h5></i></td>
                <td rowspan="2">Penglibatan dalam membuat keputusan dalam pegangan pertanian <i><h5>Involvement in decision making in the agricultural holding</h5></td>
                <td rowspan="2">Penglibatan selain daripada aktiviti pertanian <i><h5>Involvement in other than agriculture activities</h5></i></td>
                </tr>
                <tr>
                <td rowspan="2">No.</td>
                <td>Pendaftaran perniagaan <i><h5>Business registration</h5></i></td>
                <td>No. Pendaftaran (SSM/LHDN/PBT/SKM) <i><h5>Registration number</h5></i></td>
                </tr>
                <tr>
                <td>0500</td>
                <td>0501</td>
                <td>0600</td>
                <td>0601</td>
                <td>0602</td>
                <td>0603</td>
                <td>0604</td>
                </tr>
                <tr>
                <td><span>01</span><br></td>
                <td><input type="number" Name="ac1_0500[]" ></td>
                <td><input type="text" Name="ac1_0501[]" ></td>
                <td><input type="number" Name="ac1_0600[]" ></td>
                <td><input type="number" Name="ac1_0601[]" ></td>
                <td><input type="number" Name="ac1_0602[]" ></td>
                <td><input type="number" Name="ac1_0603[]" ></td>
                <td><input type="number" Name="ac1_0604[]" ></td>
                </tr>
            </table>
        </div>
        <div class="myDiv hidden">
            <table id="tableA7">
                <th>
                <h2>A7 PENDAPATAN TAHUNAN ISI RUMAH</h2>
                </th>
                <tr>
                <td style="text-align: left">
                    1. Bekerja sendiri <input style="width: 10%;" type="number" Name="ac1_0701" ><br>
                    <i>&nbsp; &nbsp;Self employment</i><br><br>
                    2. Pekerjaan bergaji <input style="width: 10%;" type="number" Name="ac1_0702" ><br>
                    <i>&nbsp; &nbsp;Paid employment</i><br><br>
                    3. Pendapatan daripada harta dan pelaburan <input style="width: 10%;" type="number" Name="ac1_0703" ><br>
                    <i>&nbsp; &nbsp;Income from property and investment</i><br><br>
                    4. Pindahan semasa diterima <input style="width: 10%;" type="number" Name="ac1_0704" ><br>
                    <i>&nbsp; &nbsp; Current transfer received</i><br><br>
                    5. Jumlah<input style="width: 10%;" type="number" Name="ac1_0705" ><br>
                    <i>&nbsp; &nbsp;Total</i><br>
                </td>
                </tr>
            </table>
        </div>
        <button type="submit"><span>Hantar</span><br>
        <span><i>Submit</i></span></button>
    </form>
</div>
</div>
@endsection