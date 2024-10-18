
<section class="section border-top">
    <div class="container">
        <form method="post" action="<?php echo base_url('daftar/submit'); ?>">
            <div class="form-section">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="idMember" class="form-label">ID Member</label>
                        <input type="text" class="form-control" id="idMember" name="idMember">
                    </div>
                    <div class="col-md-6">
                        <label for="namaMember" class="form-label">Nama Member <span style="color:red;">*</span></label></label>
                        <input type="text" class="form-control" id="namaMember" name="namaMember" required>
                    </div>
                </div>

                <!-- Address Information -->
                <h5>NEW MEMBER</h5>
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="col-md-2">
                        <label for="rt" class="form-label">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt">
                    </div>
                    <div class="col-md-2">
                        <label for="rw" class="form-label">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                    </div>
                    <div class="col-md-4">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                    <div class="col-md-4">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kodePos" name="kodePos">
                    </div>
                </div>
            </div>

            <!-- New Member Information -->
            <div class="form-section">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label><br>
                        <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki-laki">
                        <label for="lakiLaki" class="custom-radio-label">Laki-laki</label>
                        <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                        <label for="perempuan" class="custom-radio-label">Perempuan</label>
                    </div>
                    <div class="col-md-6">
                        <label for="noKtp" class="form-label">No KTP <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="noKtp" name="noKtp" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="ttl" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                    </div>
                    <div class="col-md-6">
                        <label for="tempatLahir" class="form-label">Tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="noHp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="noHp" name="noHp">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="namaBank" class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" id="namaBank" name="namaBank">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="noRekening" class="form-label">No Rekening</label>
                        <input type="text" class="form-control" id="noRekening" name="noRekening">
                    </div>
                </div>
            </div>

            <!-- Data Upline -->
            <div class="form-section">
                <h5>Data Upline</h5>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="idUpline" class="form-label">ID Member</label>
                        <input type="text" class="form-control" id="idUpline" name="idUpline">
                    </div>
                    <div class="col-md-6">
                        <label for="namaUpline" class="form-label">Nama Member</label>
                        <input type="text" class="form-control" id="namaUpline" name="namaUpline">
                    </div>
                </div>
            </div>

            <!-- Sponsor Information -->
            <div class="form-section">
                <h5>Data Sponsor Pendaftaran</h5>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="idSponsor" class="form-label">ID Member <span style="color:red;">*</span></label></label>
                        <input type="text" class="form-control" id="idSponsor" name="idSponsor" required>
                    </div>
                    <div class="col-md-6">
                        <label for="namaSponsor" class="form-label">Nama Member <span style="color:red;">*</span></label></label>
                        <input type="text" class="form-control" id="namaSponsor" name="namaSponsor" required>
                    </div>
                </div>
            </div>


            <!-- Paket Aktivasi -->
            <div class="form-section">
                <h5>Pilihan Paket Aktivasi</h5>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Wilayah</th>
                            <th>Fast Track</th>
                            <th>Smart Reward</th>
                            <th>Fast Track & Smart Reward</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WIL.A</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket" id="fastTrackSilverA"
                                        value="1">
                                    <label class="form-check-label" for="fastTrackSilverA">1.450.000
                                        (Silver)</label><br>
                                    <input class="form-check-input" type="radio" name="paket" id="fastTrackGoldA"
                                        value="2">
                                    <label class="form-check-label" for="fastTrackGoldA">4.350.000 (Gold)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="fastTrackPlatinumA" value="3">
                                    <label class="form-check-label" for="fastTrackPlatinumA">8.700.000
                                        (Platinum)</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardRegularA" value="4">
                                    <label class="form-check-label" for="smartRewardRegularA">3.000.000
                                        (Regular)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardRegularA" value="5">
                                    <label class="form-check-label" for="smartRewardRegularA">9.000.000
                                        (Executive)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardExecutiveA" value="6">
                                    <label class="form-check-label" for="smartRewardExecutiveA">21.000.000
                                        (Luxury)</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket" id="fastSmartRegularA"
                                        value="7">
                                    <label class="form-check-label" for="fastSmartRegularA">4.450.000
                                        (Regular)</label><br>
                                    <input class="form-check-input" type="radio" name="paket" id="fastSmartRegularA"
                                        value="8">
                                    <label class="form-check-label" for="fastSmartRegularA">13.350.000
                                        (Executive)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="fastSmartExecutiveA" value="9">
                                    <label class="form-check-label" for="fastSmartExecutiveA">31.150.000
                                        (Luxury)</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>WIL.B</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket" id="fastTrackSilverB"
                                        value="10">
                                    <label class="form-check-label" for="fastTrackSilverB">1.550.000
                                        (Silver)</label><br>
                                    <input class="form-check-input" type="radio" name="paket" id="fastTrackGoldB"
                                        value="11">
                                    <label class="form-check-label" for="fastTrackGoldB">4.655.000 (Gold)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="fastTrackPlatinumB" value="12">
                                    <label class="form-check-label" for="fastTrackPlatinumB">9.300.000
                                        (Platinum)</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardRegularB" value="13">
                                    <label class="form-check-label" for="smartRewardRegularB">3.210.000
                                        (Regular)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardRegularB" value="14">
                                    <label class="form-check-label" for="smartRewardRegularB">9.630.000
                                        (Executive)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="smartRewardExecutiveB" value="15">
                                    <label class="form-check-label" for="smartRewardExecutiveB">22.470.000
                                        (Luxury)</label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="paket" id="fastSmartRegularB"
                                        value="16">
                                    <label class="form-check-label" for="fastSmartRegularB">4.760.000
                                        (Regular)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="fastSmartExecutiveB" value="17">
                                    <label class="form-check-label" for="fastSmartExecutiveB">14.285.000
                                        (Executive)</label><br>
                                    <input class="form-check-input" type="radio" name="paket"
                                        id="fastSmartExecutiveB" value="18">
                                    <label class="form-check-label" for="fastSmartExecutiveB">33.330.000
                                        (Luxury)</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <label for="namaPaket" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" id="namaPaket" name="namaPaket">
            </div>

            <div class="form-section">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="managerArea" class="form-label">Nama Manager Area</label>
                        <input type="text" class="form-control" id="managerArea" name="managerArea">
                    </div>
                    <div class="col-md-6">
                        <label for="kartuStockist" class="form-label">Kirim Kartu ke Stockist</label>
                        <input type="text" class="form-control" id="kartuStockist" name="kartuStockist">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
            </div>



            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>