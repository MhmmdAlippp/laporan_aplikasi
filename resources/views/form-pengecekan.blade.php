@extends('layouts.app')

@section('title','Judul Halaman')

@section('page-title','Judul di Header')
@section('styles')
<style>
.main-content {
    margin-left: 220px;
    margin-top: 70px;
    padding: 20px;
    flex-grow: 1;
    background: #f0f0f0;
    height: calc(100vh - 70px);
    overflow-y: auto;
}

.main-content {
    margin-left: 220px;
    margin-top: 70px;
    padding: 20px;
    flex-grow: 1;
    background: #f0f0f0;
    height: calc(100vh - 70px);
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}

/* Wrapper agar tabel bisa full width */
.content-wrapper {
    width: 100%;
}

/* TITLE BAR --------------------------------------------- */
.title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin-bottom: 20px;
}

.title p {
    font-size: 17px;
    font-weight: 500;
}

.main-content {
    padding: 20px;
}

.title p {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
}

/* Layout card atas */
.cards-top {
    display: flex;
    gap: 20px;
}

.card-1,
.card-2 {
    flex: 1;        /* <-- ukuran seimbang */
}


/* Card umum */
.card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.card h3 {
    font-size: 16px;
    margin-bottom: 15px;
    font-weight: 600;
}

/* CARD 1 FORM */
.card-1 form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.card-1 label {
    font-size: 13px;
    font-weight: 500;
}

.card-1 input,
.card-1 select,
.card-1 textarea {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #d0d5dd;
    font-size: 13px;
}

.btn-save {
    margin-top: 10px;
    background: black;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 6px;
    cursor: pointer;
    width: 100%;
    font-size: 14px;
}

/* CARD 2 */
.recent-check p {
    font-size: 13px;
    margin: 6px 0;
}

/* CARD 3 – Full width */
.card-3 {
    margin-top: 20px;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 6px;
    overflow: hidden;
}

thead th {
    background: white;
    padding: 10px;
    text-align: left;
    font-size: 13px;
    border-bottom: 2px solid #e2e8f0;
}

tbody td {
    padding: 10px;
    font-size: 13px;
    border-bottom: 1px solid #e2e8f0;
}

tbody tr:hover {
    background: #f4f4f4;
}

/* Badge status */
.badge {
    background: #000;
    color: #fff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 12px;
    display: inline-block;
}

.card-2 {
    background: white;
    padding: 16px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}

.card-2 h3 {
    margin-bottom: 12px;
    font-size: 15px;
}

.recent-checks {
    display: flex;
    flex-direction: column;
    gap: 12px;     /* jarak antar mini card */
}

.mini-card {
    background: #f8fafc;
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #e2e8f0;
    font-size: 13px;
    display: flex;
    flex-direction: column;
    gap: 4px;
    transition: 0.2s;
}

.mini-card:hover {
    background: #f1f5f9;
}

</style>

@endsection

@section('content')
<main class="main-content">

        <div class="title">
            <p>Form Pengecekan Aplikasi</p>
        </div>

        <!-- TOP 2 CARDS -->
        <div class="cards-top">

            <!-- CARD 1 - FORM -->
            <div class="card card-1">
                <h3>Form Pengecekan</h3>

                <form>
                    <label>Aplikasi</label>
                    <select>
                        <option>Pilih aplikasi</option>
                    </select>

                    <label>Tanggal Pengecekan</label>
                    <input type="date">

                    <label>Status</label>
                    <select>
                        <option>Normal</option>
                        <option>Gangguan</option>
                    </select>

                    <label>Response Time (ms)</label>
                    <input type="number">

                    <label>Catatan</label>
                    <textarea rows="3"></textarea>

                    <button class="btn-save">Simpan Hasil Pengecekan</button>
                </form>
            </div>

            <!-- CARD 2 - PENGECEKAN TERBARU -->
            <div class="card card-2">
                <h3>Pengecekan Terbaru</h3>

                <div class="recent-checks">
                    <div class="mini-card">
                        <strong>Aplikasi A</strong>
                        <span>Status: Normal</span>
                        <span>RT: 123 ms</span>
                        <span>Tanggal: 2025-11-23</span>
                    </div>

                    <div class="mini-card">
                        <strong>Aplikasi B</strong>
                        <span>Status: Gangguan</span>
                        <span>RT: 900 ms</span>
                        <span>Tanggal: 2025-11-23</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- CARD 3 - TABEL -->
        <div class="card card-3">
            <h3>Riwayat Pengecekan</h3>

            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Aplikasi</th>
                        <th>Status</th>
                        <th>Response Time</th>
                        <th>Catatan</th>
                        <th>Diperiksa Oleh</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>2025-11-23</td>
                        <td>Aplikasi A</td>
                        <td><span class="badge">Normal</span></td>
                        <td>120 ms</td>
                        <td>OK</td>
                        <td>Admin</td>
                    </tr>

                    <tr>
                        <td>2025-11-23</td>
                        <td>Aplikasi B</td>
                        <td><span class="badge">Gangguan</span></td>
                        <td>900 ms</td>
                        <td>Error DB</td>
                        <td>Admin</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
@endsection
