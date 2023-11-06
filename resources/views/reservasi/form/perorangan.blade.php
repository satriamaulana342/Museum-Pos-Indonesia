<form id="individualReservationForm" onsubmit="return false;">
    {{ csrf_field() }}
    <div class="row g-3">
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Nama</label>
            <input type="text" name="nama" class="form-control border-0" placeholder="Nama"
                style="height: 55px" required="" />
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Email</label>
            <input type="email" name="email" class="form-control border-0" placeholder="Email" required=""
                style="height: 55px" />
        </div>

        <input type="hidden" name="jenis_reservasi" value="Perorangan">

        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Jumlah Pengunjung</label>
            <input type="text" id="individualVisitors" name="jumlah_pengunjung" class="form-control border-0 numeric-input" required=""
                placeholder="Jumlah Pengunjung / Number of Visitors" style="height: 55px" />
            <p><small class="text-muted">*Maksimal 5 orang</small></p>
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">No Telephone</label>
            <input type="text" name="no_telp" class="form-control border-0" placeholder="No.Telephone" required=""
                style="height: 55px" />
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Kewarganegaraan / Nationality</label>
            <select name="kewarganegaraan" class="form-control border-0 bg-white" required=""
                placeholder="Kewarganegaraan / Nationality" style="height: 55px;">
                <option value="" selected disabled>Kewarganegaraan / Nationality</option>
                <option value="WNI">WNI (Warga Negara Indonesia)</option>
                <option value="WNA">WNA (Warga Negara Asing)</option>
            </select>
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Tanggal Reservasi</label>
            <div data-target-input="nearest">
                <input name="tanggal" id="individualReservationDate" type="date" class="form-control border-0" placeholder="Tanggal kunjungan" required=""
                    style="height: 55px" max="yyyy-mm-dd" />
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Waktu Kunjungan</label>
            <select name="jam" id="individualReservationTime" class="form-control border-0 bg-white" placeholder="Waktu Kunjungan / Time" style="height: 55px;" required="">
                <option value="" selected disabled>Waktu Kunjungan / Time</option>
            </select>
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Kelompok Kunjungan / Category</label>
            <select name="kelompok" class="form-control border-0 bg-white" placeholder="Kelompok Kunjungan / Category" required=""
                style="height: 55px;">
                <option value="" selected disabled>Kelompok Kunjungan / Category</option>
                <option value="umum">Umum</option>
                <option value="pelajar">Pelajar</option>
            </select>
        </div>
        <div class="col-12 col-sm-6">
            <label class="form-label text-sm">Jenjang Pendidikan / Educational</label>
            <select name="jenjang" class="form-control border-0 bg-white" placeholder="Jenjang Pendidikan / Educational" style="height: 55px;" required="">
                <option value="" selected disabled>Jenjang Pendidikan / Educational</option>
                <option value="UMUM">Umum</option>
                <option value="SLB">SLB</option>
                <option value="KB/TK/PAUD">KB/TK/PAUD</option>
                <option value="SD">SD</option>
                <option value="SLTP">SLTP</option>
                <option value="SLTA">SLTA</option>
                <option value="Mahasiswa">Mahasiswa</option>
            </select>
        </div>
    </div>
    <div class="col-12 mt-3">
        <button class="btn btn-primary w-100 py-3" type="submit">Reservasi Sekarang</button>
    </div>
</form>
