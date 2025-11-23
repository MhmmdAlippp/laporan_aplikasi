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

/* ---------- REKAP HEADER ---------- */
.rekap-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .rekap-header h2 {
    font-size: 20px;
    font-weight: 600;
  }
  
  .rekap-actions button {
    padding: 8px 14px;
    border: 1px solid #dcdcdc;
    background: white;
    border-radius: 6px;
    cursor: pointer;
    font-size: 13px;
    margin-left: 10px;
    display: flex;
    align-items: center;
    flex-direction: row;
    gap: 6px;
  }
  
  .rekap-actions button:hover {
    background: #e5e5e5;
  }

  .rekap-actions {
    display: flex;
    flex-direction: row;
    align-items: center;
}

  
  /* ---------- CARD BASE ---------- */
  .card {
    background: white;
    padding: 18px;
    border-radius: 10px;
    margin-bottom: 20px;
    border: 1px solid #efefef;
  }
  
  /* ---------- CARD 1 (FILTER) ---------- */
  .card-1 {
    display: flex;
    gap: 20px;
}

.filter-group {
    display: flex;
    flex-direction: column;
    font-size: 14px;
    flex: 1;             /* <-- membuat bulan dan tahun sama-sama memanjang */
}

.filter-group select {
    padding: 8px 12px;
    border-radius: 6px;
    border: 1px solid #ddd;
    width: 100%;        /* <-- select full width */
}
  
  .btn-filter {
    padding: 8px 20px;
    background: black;
    color: white;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    margin-left: auto;
  }
  
  .btn-filter:hover {
    opacity: 0.8;
  }
  
  /* ---------- CARD 2 & 3 ROW ---------- */
  .graph-row {
    display: flex;
    gap: 20px;
  }
  
  .card-2, .card-3 {
    flex: 1;
  }
  
  .chart-placeholder {
    background: #e8f1ff;
    height: 220px;
    border-radius: 8px;
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #1d4ed8;
    font-weight: 500;
  }
  
  /* ---------- CARD 4, 5, 6 ---------- */
  .bottom-row {
    display: flex;
    gap: 20px;
  }
  
  .small-card {
    flex: 1;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fafafa;
    border: 1px solid #efefef;
  }

</style>

@endsection

@section('content')
<main class="main-content">

    <!-- HEADER SECTION -->
    <div class="rekap-header">
      <h2>Rekap Bulanan</h2>
  
      <div class="rekap-actions">
        <button class="btn-export"><i class="ri-upload-2-line"></i> Export</button>
        <button class="btn-import"><i class="ri-download-2-line"></i> Import</button>
      </div>
    </div>
  
    <!-- CARD 1 — FILTER -->
    <div class="card card-1">
      <div class="filter-group">
        <label>Periode Bulan</label>
        <select>
          <option>Januari</option>
          <option>Februari</option>
          <option>Maret</option>
        </select>
      </div>
  
      <div class="filter-group">
        <label>Tahun</label>
        <select>
          <option>2024</option>
          <option>2025</option>
        </select>
      </div>
  
    </div>
  
    <!-- CARD 2 & 3 — GRAPH ROW -->
    <div class="graph-row">
      <div class="card card-2">
        <h3>Presentasi Uptime per Aplikasi</h3>
        <div class="chart-placeholder">Grafik Batang</div>
      </div>
  
      <div class="card card-3">
        <h3>Distribusi Uptime</h3>
        <div class="chart-placeholder">Grafik Lingkaran</div>
      </div>
    </div>
  
    <!-- CARD 4, 5, 6 — 3 COLUMN -->
    <div class="bottom-row">
      <div class="card small-card">Card 4</div>
      <div class="card small-card">Card 5</div>
      <div class="card small-card">Card 6</div>
    </div>
  
  </main>
@endsection
