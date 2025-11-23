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

.title button {
    background-color: black;
    color: #fff;
    border: none;
    cursor: pointer;
    width: 5rem;
    padding: 8px 0;
    border-radius: 6px;
    font-weight: 500;
    transition: 0.2s ease;
    font-size: 12px;
}

.title button:hover {
    background-color: #334155;
}

.title button:active {
    transform: scale(0.97);
}

/* TABLE -------------------------------------------------- */
table {
    width: 100%;
    border-collapse: collapse;
    background: #ffffff; /* full putih */
    border-radius: 6px;
    overflow: hidden;
}

/* Header full putih + bold */
thead {
    background: #ffffff;
    color: #000;
    border-bottom: 1px solid #e5e7eb; /* garis bawah header */
}

thead th {
    padding: 12px;
    text-align: left;
    font-size: 13px;
    font-weight: 600;
}

/* Body */
tbody td {
    padding: 12px;
    font-size: 13px;
    border-bottom: 1px solid #e5e7eb;
}

/* Hover row */
tbody tr:hover {
    background: #f7f7f7; /* abu gelap sedikit */
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

/* Aksi buttons */
.aksi-btn {
    display: flex;
    gap: 8px;
}

.aksi-btn button {
    padding: 6px 10px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    background: #e2e8f0;
    font-size: 12px;
}

.aksi-btn button:hover {
    background: #d4d4d8; /* sedikit lebih gelap */
}

</style>

@endsection

@section('content')
<main class="main-content">
        <div class="title">
            <p>Data Aplikasi</p>
            <button class="btn-add">
                <i class="ri-add-line"></i>
                Tambah
            </button>
        </div>
        

                <div>
                    <table>
                        <thead>
                          <tr>
                            <th>Nama Aplikasi</th>
                            <th>Database</th>
                            <th>URL</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Aplikasi Contoh</td>
                            <td>MySQL</td>
                            <td>https://example.com</td>
                            <td>Aplikasi untuk contoh tabel</td>
                            <td>
                              <span class="badge">Aktif</span>
                            </td>
                            <td>
                              <div class="aksi-btn">
                                <button><i class="ri-pencil-line"></i></button>
                                <button style="background-color: #e83023; color: white;"><i class="ri-delete-bin-line"></i></button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
    </main>
@endsection
