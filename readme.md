# POS Backend PHP Native (with strict type and postgresql + doctrine orm)

In here I will built the backend/API for POS Retail app with native PHP.

## Start Server

`php -S localhost:8000 -t public`

## Alur Program Router

```
1. Buat Router
   ↓
2. Daftarkan route
   ↓
3. Route disimpan ke $routes
   ↓
4. Request browser sudah ada
   ↓
5. dispatch()
   ↓
6. Baca method dan URI request
   ↓
7. Cari route yang cocok
   ↓
8. Jalankan handler

------------------------------

REGISTER
────────
get()
  ↓
Simpan route


EXECUTE
───────
dispatch()
  ↓
Cari route
  ↓
Jalankan route
```
