<?php
include('../cpage/header.php');
?>
    <link rel="stylesheet" href="../cpage/balancingModal.css">
    <div class="batasan2">
        <div>

        </div>
        <div class="konten">
            <div>
                <p id="tulisan">SEMOGA TIDAK BONCOS YA</p>
            </div>
            <div class="yuser">
                <form id="Usher">
                    <div>
                        <div>
                            <label name="tanggal" id="tanggal">Senin, 29 Maret 2004 || 15:00</label>
                        </div>
                        <div><label name="user" id="user">Shangguan Tou</label>
                        </div>
                        <div>
                            <label name="closeStore" id="closeStore">Tutup Shift</label>
                        </div>
                        <div>
                            <label name="idBm" id="idBm">Id Balancing Modal : #56</label>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <form id="uang">
                    <div id="field" class="f2atas">
                        <label>Total uang yang seharusnya</label>
                        <!-- <input type="text" id="uangSeharusnya" name="uangSeharusnya" placeholder="Nominal uang" value="20000000" readonly> -->
                        <label id="L2">2000000</label>
                    </div>
                    <div id="field">
                        <div id="inField">
                            <div id="inInField" class="kiri">
                                <label>Uang Rp. 100</label>
                                <input type="text" id="rp100.00" name="rp100.00" placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 200</label>
                                <input type="text" id="rp200.00" name="rp200.00" placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 500</label>
                                <input type="text" id="rp500.00" name="rp500.00" placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 1000</label>
                                <input type="text" id="rp1000.0" name="rp1000.0" placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 2000</label>
                                <input type="text" id="rp2000.0" name="rp2000.0" placeholder="jumlah uang">
                            </div>
                        </div>
                        <div id="inField" class="pembatas">
                            <p>11</p>
                        </div>
                        <div id="inField" class="kanan">
                            <div id="inInField">
                                <label>Uang Rp. 5000</label>
                                <input type="text" id="rp5000.0" name="rp5000.0" placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 10000</label>
                                <input type="text" id="rp10000." name="rp10000." placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 20000</label>
                                <input type="text" id="rp20000." name="rp20000." placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 50000</label>
                                <input type="text" id="rp50000." name="rp50000." placeholder="jumlah uang">
                            </div>
                            <div id="inInField">
                                <label>Uang Rp. 100000</label>
                                <input type="text" id="rp100000" name="rp100000" placeholder="jumlah uang">
                            </div>
                        </div>
                    </div>
                    <div id="field">
                        <label>Total uang Offline</label>
                        <input type="text" id="uangOffline" name="uangOffline" value="" placeholder="Nominal uang" readonly>
                    </div>
                    <div>
                        <input type="submit" id="Submit" name="Submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript" src="balancingModal.js"></script>