@extends('layouts.admin')
@section('title', 'Profil Saya - Admin')

@section('content')
<style>
    .pf-wrap { max-width: 720px; margin: 0 auto; }
    .pf-wrap > h1 { text-align:center; }
    .pf-card { background:white; border-radius:20px; overflow:hidden; box-shadow:0 10px 30px rgba(11,61,145,0.08); }
    .pf-banner { height:120px; background:linear-gradient(135deg, #0B3D91, #3b82f6); }
    .pf-head { display:flex; flex-direction:column; align-items:center; text-align:center; margin-top:-55px; padding:0 2rem; }
    .pf-avatar { position:relative; width:110px; height:110px; cursor:pointer; }
    .pf-avatar img, .pf-avatar .pf-initial {
        width:110px; height:110px; border-radius:50%; object-fit:cover;
        border:5px solid white; box-shadow:0 6px 18px rgba(0,0,0,0.15); background:#0B3D91;
    }
    .pf-avatar .pf-initial { display:flex; align-items:center; justify-content:center; color:white; font-size:2.6rem; font-weight:700; }
    .pf-avatar .pf-cam {
        position:absolute; right:2px; bottom:2px; width:32px; height:32px; border-radius:50%;
        background:#0B3D91; color:white; display:flex; align-items:center; justify-content:center;
        font-size:0.9rem; border:3px solid white;
    }
    .pf-head h2 { font-size:1.3rem; color:#1e293b; margin:0.8rem 0 0.3rem; }
    .pf-badge { display:inline-block; background:#e0e7ff; color:#0B3D91; font-size:0.75rem; font-weight:600; padding:3px 12px; border-radius:20px; text-transform:capitalize; }

    .pf-body { padding:1.8rem 2rem 2rem; }
    .pf-grid { display:grid; grid-template-columns:1fr 1fr; gap:1.2rem; }
    .pf-field { margin-bottom:1.2rem; }
    .pf-field label.lbl { display:block; font-size:0.8rem; font-weight:600; color:#475569; margin-bottom:0.45rem; }
    .pf-field input[type="text"] {
        width:100%; padding:0.8rem 1rem; border:1.5px solid #e2e8f0; border-radius:12px;
        font-size:0.95rem; font-family:inherit; background:#f8fafc; transition:all .2s;
    }
    .pf-field input[type="text"]:focus { outline:none; border-color:#0B3D91; background:white; box-shadow:0 0 0 4px rgba(11,61,145,0.1); }
    .pf-field input:disabled { background:#f1f5f9; color:#94a3b8; cursor:not-allowed; }
    .pf-hint { font-size:0.75rem; color:#94a3b8; margin-top:0.35rem; }

    .pf-upload {
        display:flex; align-items:center; gap:1rem; border:2px dashed #cbd5e1; border-radius:14px;
        padding:1rem 1.2rem; cursor:pointer; transition:all .2s; background:#f8fafc;
    }
    .pf-upload:hover { border-color:#0B3D91; background:#eef2ff; }
    .pf-upload .pf-ico { width:42px; height:42px; border-radius:12px; background:#e0e7ff; color:#0B3D91; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0; }
    .pf-upload strong { display:block; font-size:0.9rem; color:#1e293b; }
    .pf-upload span { font-size:0.78rem; color:#94a3b8; }

    .pf-edit-old { background:none; border:none; color:#0B3D91; font-size:0.82rem; font-weight:600; cursor:pointer; margin-top:0.6rem; padding:0; }

    .crop-area { display:none; margin-top:1rem; text-align:center; background:#f8fafc; border-radius:16px; padding:1.2rem; }
    .crop-wrap { position:relative; width:280px; height:280px; margin:0 auto; border-radius:16px; overflow:hidden; background:#0f172a; touch-action:none; cursor:grab; }
    .crop-wrap:active { cursor:grabbing; }
    .crop-wrap canvas { display:block; }
    .crop-wrap::after { content:''; position:absolute; inset:0; border-radius:50%; box-shadow:0 0 0 400px rgba(15,23,42,0.6); pointer-events:none; border:2px solid rgba(255,255,255,0.8); }
    .crop-tip { font-size:0.78rem; color:#64748b; margin:0.8rem 0 0.4rem; }
    .crop-zoom { display:flex; align-items:center; gap:0.6rem; max-width:280px; margin:0 auto; color:#64748b; }
    .crop-zoom input { flex:1; accent-color:#0B3D91; }

    .pf-actions { display:flex; justify-content:flex-end; gap:0.8rem; margin-top:0.5rem; }
    .pf-btn { padding:0.75rem 1.6rem; border-radius:50px; font-size:0.9rem; font-weight:600; cursor:pointer; border:none; text-decoration:none; }
    .pf-btn-primary { background:#0B3D91; color:white; box-shadow:0 6px 16px rgba(11,61,145,0.3); transition:all .2s; }
    .pf-btn-primary:hover { background:#082c6b; transform:translateY(-1px); }
    .pf-btn-ghost { background:#f1f5f9; color:#475569; }

    @media (max-width: 600px) { .pf-grid { grid-template-columns:1fr; } }
</style>

<div class="pf-wrap">
    <h1>Profil Saya</h1>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <div class="pf-card">
        <div class="pf-banner"></div>

        <div class="pf-head">
            <label class="pf-avatar" for="fotoPilih">
                @if ($user->foto)
                    <img src="{{ asset('storage/' . $user->foto) }}" alt="Foto profil">
                @else
                    <div class="pf-initial">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                @endif
                <span class="pf-cam">&#128247;</span>
            </label>
            <h2>{{ $user->name }}</h2>
            <span class="pf-badge">{{ $user->role }}</span>
        </div>

        <div class="pf-body">
            <form id="formProfil" action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="pf-grid">
                    <div class="pf-field">
                        <label class="lbl">Nama</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}">
                        @error('name') <div class="error-text">{{ $message }}</div> @enderror
                    </div>

                    <div class="pf-field">
                        <label class="lbl">Email</label>
                        <input type="text" value="{{ $user->email }}" disabled>
                        <div class="pf-hint">Email tidak bisa diubah.</div>
                    </div>
                </div>

                <div class="pf-field">
                    <label class="lbl">Foto Profil</label>
                    <label class="pf-upload" for="fotoPilih">
                        <div class="pf-ico">&#128443;</div>
                        <div>
                            <strong id="namaFile">Pilih foto baru</strong>
                            <span>JPG atau PNG. Kosongkan jika tidak diubah.</span>
                        </div>
                    </label>
                    <input type="file" id="fotoPilih" accept="image/*" style="display:none;">
                    <input type="file" name="foto" id="fotoFinal" style="display:none;">

                    @if ($user->foto)
                        <button type="button" class="pf-edit-old" id="btnAturLama">&#9998; Atur posisi foto saat ini</button>
                    @endif

                    <div class="crop-area" id="cropArea">
                        <div class="crop-wrap" id="cropWrap">
                            <canvas id="cropCanvas" width="280" height="280"></canvas>
                        </div>
                        <div class="crop-tip">Geser foto untuk mengatur posisi, pakai slider untuk zoom.</div>
                        <div class="crop-zoom">
                            <span>&#8722;</span>
                            <input type="range" id="zoom" min="1" max="3" step="0.01" value="1">
                            <span>+</span>
                        </div>
                    </div>

                    @error('foto') <div class="error-text" style="margin-top:0.4rem;">{{ $message }}</div> @enderror
                </div>

                <div class="pf-actions">
                    <a href="{{ route('admin.dashboard') }}" class="pf-btn pf-btn-ghost">Batal</a>
                    <button type="submit" class="pf-btn pf-btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const V = 280;
    const canvas = document.getElementById('cropCanvas');
    const ctx = canvas.getContext('2d');
    const cropArea = document.getElementById('cropArea');
    const zoom = document.getElementById('zoom');
    const form = document.getElementById('formProfil');
    const fotoPilih = document.getElementById('fotoPilih');
    const fotoFinal = document.getElementById('fotoFinal');

    let img = null, scale = 1, minScale = 1, ox = 0, oy = 0;
    let dragging = false, sx = 0, sy = 0;

    function clamp() {
        const w = img.width * scale, h = img.height * scale;
        ox = Math.min(0, Math.max(V - w, ox));
        oy = Math.min(0, Math.max(V - h, oy));
    }

    function draw(c, k) {
        c.fillStyle = '#0f172a';
        c.fillRect(0, 0, V * k, V * k);
        c.drawImage(img, ox * k, oy * k, img.width * scale * k, img.height * scale * k);
    }

    function loadImage(src) {
        const i = new Image();
        i.onload = function () {
            img = i;
            minScale = Math.max(V / i.width, V / i.height);
            scale = minScale;
            ox = (V - i.width * scale) / 2;
            oy = (V - i.height * scale) / 2;
            zoom.min = minScale;
            zoom.max = minScale * 3;
            zoom.step = minScale / 100;
            zoom.value = scale;
            cropArea.style.display = 'block';
            draw(ctx, 1);
        };
        i.src = src;
    }

    fotoPilih.addEventListener('change', function () {
        const file = this.files[0];
        if (!file) return;
        document.getElementById('namaFile').textContent = file.name;
        const reader = new FileReader();
        reader.onload = e => loadImage(e.target.result);
        reader.readAsDataURL(file);
    });

    const btnLama = document.getElementById('btnAturLama');
    if (btnLama) {
        btnLama.addEventListener('click', function () {
            document.getElementById('namaFile').textContent = 'Foto saat ini';
            loadImage("{{ $user->foto ? asset('storage/' . $user->foto) : '' }}");
        });
    }

    zoom.addEventListener('input', function () {
        if (!img) return;
        const cx = (V / 2 - ox) / scale;
        const cy = (V / 2 - oy) / scale;
        scale = parseFloat(this.value);
        ox = V / 2 - cx * scale;
        oy = V / 2 - cy * scale;
        clamp();
        draw(ctx, 1);
    });

    canvas.addEventListener('pointerdown', function (e) {
        if (!img) return;
        dragging = true;
        sx = e.clientX; sy = e.clientY;
        canvas.setPointerCapture(e.pointerId);
    });
    canvas.addEventListener('pointermove', function (e) {
        if (!dragging) return;
        ox += e.clientX - sx;
        oy += e.clientY - sy;
        sx = e.clientX; sy = e.clientY;
        clamp();
        draw(ctx, 1);
    });
    canvas.addEventListener('pointerup', () => dragging = false);
    canvas.addEventListener('pointercancel', () => dragging = false);

    form.addEventListener('submit', function (e) {
        if (!img) return;
        e.preventDefault();
        const out = document.createElement('canvas');
        out.width = 500; out.height = 500;
        draw(out.getContext('2d'), 500 / V);
        out.toBlob(function (blob) {
            const file = new File([blob], 'foto-profil.jpg', { type: 'image/jpeg' });
            const dt = new DataTransfer();
            dt.items.add(file);
            fotoFinal.files = dt.files;
            form.submit();
        }, 'image/jpeg', 0.9);
    });
</script>
@endsection