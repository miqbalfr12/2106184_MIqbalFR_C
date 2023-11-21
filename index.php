<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="card">
        <form class="form" method="POST" action="proses_input.php">
          <div class="form">
            <div class="left-side">
              <div class="left-heading">
                <h3>Sensus Penduduk</h3>
              </div>
              <div class="steps-content">
                <h3>Step <span class="step-number">1</span></h3>
                <p class="step-number-content active">Jelaskan tentang diri.</p>
                <p class="step-number-content d-none">
                  Jelaskan tentang alamat.
                </p>
                <p class="step-number-content d-none">
                  Jelaskan tentang tempat tinggal.
                </p>
                <p class="step-number-content d-none">Pilih aktivitas.</p>
              </div>
              <ul class="progress-bar">
                <li class="active">Data Pribadi</li>
                <li>Alamat</li>
                <li>Keterangan Tempat Tinggal</li>
                <li>Aktivitas</li>
              </ul>
            </div>
            <div class="right-side">
              <div class="main active">
                <div class="text">
                  <h2>Data Pribadi</h2>
                  <p>Masukan data diri.</p>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input
                      type="text"
                      required
                      require
                      name="user_name"
                      id="user_name"
                    />
                    <span for="user_name">Nama</span>
                  </div>
                  <div class="input-div">
                    <select name="jenis_kelamin">
                      <option disabled selected hidden>Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input
                      type="date"
                      required
                      require
                      name="tanggal"
                      placeholder=" "
                    />
                    <span>Tanggal lahir</span>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <select name="perkawinan">
                      <option disabled selected hidden>
                        Status Perkawinan
                      </option>
                      <option value="true">Menikah</option>
                      <option value="false">Belum menikah</option>
                    </select>
                  </div>
                  <div class="input-div">
                    <select name="hubungan">
                      <option disabled selected hidden>Status Hubungan</option>
                      <option value="Kepala keluarga">Kepala keluarga</option>
                      <option value="Suami">Suami</option>
                      <option value="Istri">Istri</option>
                      <option value="Anak">Anak</option>
                      <option value="Menantu">Menantu</option>
                      <option value="Cucu">Cucu</option>
                    </select>
                  </div>
                </div>
                <div class="buttons">
                  <button type="button" class="next_button">Next Step</button>
                </div>
              </div>
              <div class="main">
                <div class="text">
                  <h2>Alamat</h2>
                  <p>Masukan informasi alamat.</p>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <select name="provinsi">
                      <option disabled selected hidden>Provinsi</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="Jawa Timur">Jawa Timur</option>
                    </select>
                  </div>
                  <div class="input-div">
                    <input type="text" required require name="kota" />
                    <span>Kabupaten/Kota</span>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input type="text" required require name="kecamatan" />
                    <span>Kecamatan</span>
                  </div>
                  <div class="input-div">
                    <input type="text" required require name="desa" />
                    <span>Desa</span>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input type="number" required require name="rt" />
                    <span>RT</span>
                  </div>
                  <div class="input-div">
                    <input type="number" required require name="rw" />
                    <span>RW</span>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input type="text" required require name="jalan" />
                    <span>Jalan</span>
                  </div>
                </div>
                <div class="buttons button_space">
                  <button type="button" class="back_button">Back</button>
                  <button type="button" class="next_button">Next Step</button>
                </div>
              </div>
              <div class="main">
                <div class="text">
                  <h2>Keterangan Tempat Tinggal</h2>
                  <p>Jelaskan keterangan tempat tinggal</p>
                </div>
                <div class="input-text">
                  <span>Status Kepemilikan</span>
                  <div class="input-div">
                    <select name="status_kepemilikan">
                      <option disabled selected hidden>
                        Status Kepemilikan
                      </option>
                      <option value="Milik Sendiri">Milik Sendiri</option>
                      <option value="Sewa">Sewa</option>
                      <option value="Menumpang">Menumpang</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input type="text" required require name="listrik" />
                    <span>Listrik</span>
                  </div>
                  <div class="input-div">
                    <input type="text" required require name="air_minum" />
                    <span>Air Minum</span>
                  </div>
                </div>
                <div class="buttons button_space">
                  <button type="button" class="back_button">Back</button>
                  <button type="button" class="next_button">Next Step</button>
                </div>
              </div>
              <div class="main">
                <div class="text">
                  <h2>Aktivitas</h2>
                  <p>Pilih Aktivitas yang sedang dilakukan.</p>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input
                      type="radio"
                      id="bekerja"
                      name="aktivitas"
                      value="bekerja"
                    />
                    <label for="bekerja">Bekerja</label>
                  </div>
                  <div class="input-div">
                    <input
                      type="radio"
                      id="mrt"
                      name="aktivitas"
                      value="Rumah Tangga"
                    />
                    <label for="mrt">Rumah Tangga</label>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input
                      type="radio"
                      id="sekolah/kuliah"
                      name="aktivitas"
                      value="sekolah/kuliah"
                    />
                    <label for="sekolah/kuliah">Sekolah/Kuliah</label>
                  </div>
                  <div class="input-div">
                    <input
                      type="radio"
                      id="pensiun"
                      name="aktivitas"
                      value="pensiunan"
                    />
                    <label for="pensiun">Pensiunan</label>
                  </div>
                </div>
                <div class="input-text">
                  <div class="input-div">
                    <input
                      type="radio"
                      id="pnggrn"
                      name="aktivitas"
                      value="tidak bekerja"
                    />
                    <label for="pnggrn">Tidak bekerja</label>
                  </div>
                  <div class="input-div">
                    <input
                      type="radio"
                      id="lainnya"
                      name="aktivitas"
                      value="lainnya"
                    />
                    <label for="lainnya">lainnya</label>
                  </div>
                </div>
                <div class="buttons button_space">
                  <button type="button" class="back_button">Back</button>
                  <button type="submit" class="submit_button">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
