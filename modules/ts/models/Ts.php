<?php

namespace app\modules\ts\models;

use Yii;

/**
 * This is the model class for table "ts".
 *
 * @property int $nim
 * @property string|null $nama
 * @property int|null $masuk
 * @property int|null $lulus
 * @property int|null $hp
 * @property int|null $f201
 * @property int|null $f202
 * @property int|null $f203
 * @property int|null $f204
 * @property int|null $f205
 * @property int|null $f206
 * @property int|null $f207
 * @property string|null $f301
 * @property int|null $f302
 * @property int|null $f401
 * @property int|null $f402
 * @property int|null $f403
 * @property int|null $f404
 * @property int|null $f405
 * @property int|null $f406
 * @property int|null $f407
 * @property int|null $f408
 * @property int|null $f409
 * @property int|null $f410
 * @property int|null $f411
 * @property int|null $f412
 * @property int|null $f413
 * @property int|null $f414
 * @property int|null $f415
 * @property string|null $f501
 * @property int|null $f502
 * @property int|null $f6
 * @property string|null $f701
 * @property int|null $f702
 * @property int|null $f8
 * @property int|null $f901
 * @property int|null $f902
 * @property int|null $f903
 * @property int|null $f904
 * @property int|null $f905
 * @property string|null $f906
 * @property string|null $f1001
 * @property string|null $f1002
 * @property string|null $f1101
 * @property string|null $f1102
 * @property int|null $f1301
 * @property int|null $f1302
 * @property int|null $f1303
 * @property string|null $f14
 * @property string|null $f15
 * @property int|null $f1601
 * @property int|null $f1602
 * @property int|null $f1603
 * @property int|null $f1604
 * @property int|null $f1605
 * @property int|null $f1606
 * @property int|null $f1607
 * @property int|null $f1608
 * @property int|null $f1609
 * @property int|null $f1610
 * @property int|null $f1611
 * @property int|null $f1612
 * @property int|null $f1613
 * @property string|null $f1614
 * @property int|null $f17a01
 * @property int|null $f17a02
 * @property int|null $f17a03
 * @property int|null $f17a04
 * @property int|null $f17a05
 * @property int|null $f17a06
 * @property int|null $f17a07
 * @property int|null $f17a08
 * @property int|null $f17a09
 * @property int|null $f17a10
 * @property int|null $f17a11
 * @property int|null $f17a12
 * @property int|null $f17a13
 * @property int|null $f17a14
 * @property int|null $f17a15
 * @property int|null $f17a16
 * @property int|null $f17a17
 * @property int|null $f17a18
 * @property int|null $f17a19
 * @property int|null $f17a20
 * @property int|null $f17a21
 * @property int|null $f17a22
 * @property int|null $f17a23
 * @property int|null $f17a24
 * @property int|null $f17a25
 * @property int|null $f17a26
 * @property int|null $f17a27
 * @property int|null $f17a28
 * @property int|null $f17a29
 * @property int|null $f17b10
 * @property int|null $f17b01
 * @property int|null $f17b02
 * @property int|null $f17b03
 * @property int|null $f17b04
 * @property int|null $f17b05
 * @property int|null $f17b06
 * @property int|null $f17b07
 * @property int|null $f17b08
 * @property int|null $f17b09
 * @property int|null $f17b11
 * @property int|null $f17b12
 * @property int|null $f17b13
 * @property int|null $f17b14
 * @property int|null $f17b15
 * @property int|null $f17b16
 * @property int|null $f17b17
 * @property int|null $f17b18
 * @property int|null $f17b19
 * @property int|null $f17b20
 * @property int|null $f17b21
 * @property int|null $f17b22
 * @property int|null $f17b23
 * @property int|null $f17b24
 * @property int|null $f17b25
 * @property int|null $f17b26
 * @property int|null $f17b27
 * @property int|null $f17b28
 * @property int|null $f17b29
 * @property string|null $saran01
 * @property string|null $saran02
 * @property string|null $saran03
 * @property string|null $saran04
 * @property string|null $saran05
 * @property string|null $saran06
 * @property string|null $saran07
 * @property string|null $saran08
 * @property string|null $saran09
 * @property string|null $saran10
 * @property string|null $prodi
 */
class Ts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['nim', 'masuk', 'lulus', 'hp', 'f201', 'f202', 'f203', 'f204', 'f205', 'f206', 'f207', 'f302', 'f401', 'f402', 'f403', 'f404', 'f405', 'f406', 'f407', 'f408', 'f409', 'f410', 'f411', 'f412', 'f413', 'f414', 'f415', 'f502', 'f6', 'f702', 'f8', 'f901', 'f902', 'f903', 'f904', 'f905', 'f1301', 'f1302', 'f1303', 'f1601', 'f1602', 'f1603', 'f1604', 'f1605', 'f1606', 'f1607', 'f1608', 'f1609', 'f1610', 'f1611', 'f1612', 'f1613', 'f17a01', 'f17a02', 'f17a03', 'f17a04', 'f17a05', 'f17a06', 'f17a07', 'f17a08', 'f17a09', 'f17a10', 'f17a11', 'f17a12', 'f17a13', 'f17a14', 'f17a15', 'f17a16', 'f17a17', 'f17a18', 'f17a19', 'f17a20', 'f17a21', 'f17a22', 'f17a23', 'f17a24', 'f17a25', 'f17a26', 'f17a27', 'f17a28', 'f17a29', 'f17b10', 'f17b01', 'f17b02', 'f17b03', 'f17b04', 'f17b05', 'f17b06', 'f17b07', 'f17b08', 'f17b09', 'f17b11', 'f17b12', 'f17b13', 'f17b14', 'f17b15', 'f17b16', 'f17b17', 'f17b18', 'f17b19', 'f17b20', 'f17b21', 'f17b22', 'f17b23', 'f17b24', 'f17b25', 'f17b26', 'f17b27', 'f17b28', 'f17b29'], 'default', 'value' => null],
            [['masuk', 'lulus', 'hp', 'f201', 'f202', 'f203', 'f204', 'f205', 'f206', 'f207', 'f302', 'f401', 'f402', 'f403', 'f404', 'f405', 'f406', 'f407', 'f408', 'f409', 'f410', 'f411', 'f412', 'f413', 'f414', 'f415', 'f502', 'f6', 'f702', 'f8', 'f901', 'f902', 'f903', 'f904', 'f905', 'f1301', 'f1302', 'f1303', 'f1601', 'f1602', 'f1603', 'f1604', 'f1605', 'f1606', 'f1607', 'f1608', 'f1609', 'f1610', 'f1611', 'f1612', 'f1613', 'f17a01', 'f17a02', 'f17a03', 'f17a04', 'f17a05', 'f17a06', 'f17a07', 'f17a08', 'f17a09', 'f17a10', 'f17a11', 'f17a12', 'f17a13', 'f17a14', 'f17a15', 'f17a16', 'f17a17', 'f17a18', 'f17a19', 'f17a20', 'f17a21', 'f17a22', 'f17a23', 'f17a24', 'f17a25', 'f17a26', 'f17a27', 'f17a28', 'f17a29', 'f17b10', 'f17b01', 'f17b02', 'f17b03', 'f17b04', 'f17b05', 'f17b06', 'f17b07', 'f17b08', 'f17b09', 'f17b11', 'f17b12', 'f17b13', 'f17b14', 'f17b15', 'f17b16', 'f17b17', 'f17b18', 'f17b19', 'f17b20', 'f17b21', 'f17b22', 'f17b23', 'f17b24', 'f17b25', 'f17b26', 'f17b27', 'f17b28', 'f17b29'], 'integer'],
            [['nama', 'f301', 'f501', 'f701', 'f906', 'f1001', 'f1002', 'f1101', 'f1102', 'f14', 'f15', 'f1614', 'saran01', 'saran02', 'saran03', 'saran04', 'saran05', 'saran06', 'saran07', 'saran08', 'saran09', 'saran10', 'prodi'], 'string', 'max' => 255],
            [['nim'], 'number', 'min'=>999999999, 'max'=>9999999999],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()

    {
        return [
            'nim' => 'NIM',
            'nama' => 'Nama Alumni',
            'prodi' => 'Program Studi',
            'masuk' => 'Tahun Masuk',
            'lulus' => 'Tahun Lulus',
            'hp' => 'No Handphone',
            'f201' => 'F2-01. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam perkuliahan di bawah ini dilaksanakan di program studi anda?',
            'f202' => 'F2-02. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam demonstrasi di bawah ini dilaksanakan di program studi anda?',
            'f203' => 'F2-03. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam partisipasi dalam proyek riset di bawah ini dilaksanakan di program studi anda?',
            'f204' => 'F2-04. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam magang di bawah ini dilaksanakan di program studi anda?',
            'f205' => 'F2-05. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam praktikum di bawah ini dilaksanakan di program studi anda?',
            'f206' => 'F2-06. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam kerja lapangan di bawah ini dilaksanakan di program studi anda?',
            'f207' => 'F2-07. Menurut anda seberapa besar penekanan pada metode pembelajaran dalam diskusi di bawah ini dilaksanakan di program studi anda?',
            'f301' => 'F3. Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan',
            'f302' => 'Pada pertanyaan F3 diatas, masukkan banyaknya bulan (sebelum lulus berapa bulan / sesudah lulus berapa bulan) ?',
            'f401' => 'F401. Bagaimana anda mencari pekerjaan tersebut',
            'f402' => 'F402. Bagaimana anda mencari pekerjaan tersebut',
            'f403' => 'F403. Bagaimana anda mencari pekerjaan tersebut',
            'f404' => 'F404. Bagaimana anda mencari pekerjaan tersebut',
            'f405' => 'F405. Bagaimana anda mencari pekerjaan tersebut',
            'f406' => 'F406. Bagaimana anda mencari pekerjaan tersebut',
            'f407' => 'F407. Bagaimana anda mencari pekerjaan tersebut',
            'f408' => 'F408. Bagaimana anda mencari pekerjaan tersebut',
            'f409' => 'F409. Bagaimana anda mencari pekerjaan tersebut',
            'f410' => 'F410. Bagaimana anda mencari pekerjaan tersebut',
            'f411' => 'F411. Bagaimana anda mencari pekerjaan tersebut',
            'f412' => 'F412. Bagaimana anda mencari pekerjaan tersebut',
            'f413' => 'F413. Bagaimana anda mencari pekerjaan tersebut',
            'f414' => 'F414. Bagaimana anda mencari pekerjaan tersebut',
            'f415' => 'F415. Bagaimana anda mencari pekerjaan tersebut',
            'f501' => 'F5. Kapan anda pertama kali memperoleh pekerjaan pertama? Pilih salah satu',
            'f502' => 'Pada pertanyaan F5 diatas, berapa bulan lama nya Anda memperoleh pekerjaan tersebut ?',
            'f6' => 'F6. Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?',
            'f701' => 'F7. Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?',
            'f702' => 'F7-a. Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?',
            'f8' => 'F8. Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)? ',
            'f901' => 'F901. Bagaimana anda menggambarkan situasi anda saat ini? ',
            'f902' => 'F902. Bagaimana anda menggambarkan situasi anda saat ini?',
            'f903' => 'F903. Bagaimana anda menggambarkan situasi anda saat ini?',
            'f904' => 'F904. Bagaimana anda menggambarkan situasi anda saat ini?',
            'f905' => 'F905. Bagaimana anda menggambarkan situasi anda saat ini?',
            'f906' => 'F906. Pada pertanyaan F905 diatas, tuliskan jawaban anda jika pilihan anda adalah "Lainnya"',
            'f1001' => 'F10. Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah Satu Jawaban. KEMUDIAN LANJUT KE f17',
            'f1002' => 'Pada pertanyaan F10 diatas, tuliskan jawaban anda jika pilihan anda adalah "Lainnya"',
            'f1101' => 'F11. Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?',
            'f1102' => 'Pada pertanyaan F11 diatas, tuliskan jawaban anda jika pilihan anda adalah "Lainnya"',
            'f1301' => 'F1301. Kira-kira berapa pendapatan anda setiap bulannya Dari Pekerjaan Utama? (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)',
            'f1302' => 'F1302. Kira-kira berapa pendapatan anda setiap bulannya Dari Lembur dan Tips? (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)',
            'f1303' => 'F1303. Kira-kira berapa pendapatan anda setiap bulannya Dari Pekerjaan Lainnya? (Isilah dengan ANGKA saja, tanpa tanda Titik atau Koma)',
            'f14' => 'F14. Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?',
            'f15' => 'F15. Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?',
            'f1601' => 'F1601. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1602' => 'F1602. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1603' => 'F1603. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1604' => 'F1604. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1605' => 'F1605. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1606' => 'F1606. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1607' => 'F1607. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1608' => 'F1608. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1609' => 'F1609. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1610' => 'F1610. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1611' => 'F1611. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1612' => 'F1612. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1613' => 'F1613. Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?',
            'f1614' => 'F1614. Pada pertanyaan F1613 diatas, tuliskan jawaban anda jika pilihan anda adalah "Lainnya"',
            'f17a01' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan di bidang atau disiplin ilmu anda ini anda kuasai? *',
            'f17a02' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan di luar bidang atau disiplin ilmu anda ini anda kuasai? *',
            'f17a03' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan umum ini anda kuasai? *',
            'f17a04' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Bahasa Inggris ini anda kuasai? *',
            'f17a05' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan internet ini anda kuasai? *',
            'f17a06' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan komputer ini anda kuasai? *',
            'f17a07' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Berpikir kritis ini anda kuasai? *',
            'f17a08' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan riset ini anda kuasai? *',
            'f17a09' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan belajar ini anda kuasai? *',
            'f17a10' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan berkomunikasi ini anda kuasai? *',
            'f17a11' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Bekerja di bawah tekanan ini anda kuasai? *',
            'f17a12' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Manajemen waktu ini anda kuasai? *',
            'f17a13' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Bekerja secara mandiri ini anda kuasai? *',
            'f17a14' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Bekerja dalam tim/bekerjasama dengan orang lain ini anda kuasai? *',
            'f17a15' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam memecahkan masalah ini anda kuasai? *',
            'f17a16' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Negosiasi ini anda kuasai? *',
            'f17a17' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan analisis ini anda kuasai? *',
            'f17a18' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Toleransi ini anda kuasai? *',
            'f17a19' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan adaptasi ini anda kuasai? *',
            'f17a20' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Loyalitas ini anda kuasai? *',
            'f17a21' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Integritas ini anda kuasai? *',
            'f17a22' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Bekerja dengan orang yang berbeda budaya maupun latar belakang ini anda kuasai? *',
            'f17a23' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kepemimpinan ini anda kuasai? *',
            'f17a24' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam memegang tanggungjawab ini anda kuasai? *',
            'f17a25' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Inisiatif ini anda kuasai? *',
            'f17a26' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Manajemen proyek/program ini anda kuasai? *',
            'f17a27' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan untuk memresentasikan ide/produk/laporan ini anda kuasai? *',
            'f17a28' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam menulis laporan, memo dan dokumen ini anda kuasai? *',
            'f17a29' => 'F17A. Pada saat lulus, pada tingkat mana kompetensi Kemampuan untuk terus belajar sepanjang hayat ini anda kuasai? *',
            'f17b01' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan di bidang atau disiplin ilmu anda ini anda kuasai? *',
            'f17b02' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan di luar bidang atau disiplin ilmu anda ini anda kuasai? *',
            'f17b03' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Pengetahuan umum ini anda kuasai? *',
            'f17b04' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Bahasa Inggris ini anda kuasai? *',
            'f17b05' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan internet ini anda kuasai? *',
            'f17b06' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan komputer ini anda kuasai? *',
            'f17b07' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Berpikir kritis ini anda kuasai? *',
            'f17b08' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Ketrampilan riset ini anda kuasai? *',
            'f17b09' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan belajar ini anda kuasai? *',
            'f17b10' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan berkomunikasi ini anda kuasai? *',
            'f17b11' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Bekerja di bawah tekanan ini anda kuasai? *',
            'f17b12' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Manajemen waktu ini anda kuasai? *',
            'f17b13' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Bekerja secara mandiri ini anda kuasai? *',
            'f17b14' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Bekerja dalam tim/bekerjasama dengan orang lain ini anda kuasai? *',
            'f17b15' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam memecahkan masalah ini anda kuasai? *',
            'f17b16' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Negosiasi ini anda kuasai? *',
            'f17b17' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan analisis ini anda kuasai? *',
            'f17b18' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Toleransi ini anda kuasai? *',
            'f17b19' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan adaptasi ini anda kuasai? *',
            'f17b20' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Loyalitas ini anda kuasai? *',
            'f17b21' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Integritas ini anda kuasai? *',
            'f17b22' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Bekerja dengan orang yang berbeda budaya maupun latar belakang ini anda kuasai? *',
            'f17b23' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kepemimpinan ini anda kuasai? *',
            'f17b24' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam memegang tanggungjawab ini anda kuasai? *',
            'f17b25' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Inisiatif ini anda kuasai? *',
            'f17b26' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Manajemen proyek/program ini anda kuasai? *',
            'f17b27' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan untuk memresentasikan ide/produk/laporan ini anda kuasai? *',
            'f17b28' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan dalam menulis laporan, memo dan dokumen ini anda kuasai? *',
            'f17b29' => 'F17B. Pada saat lulus, pada tingkat mana kompetensi Kemampuan untuk terus belajar sepanjang hayat ini anda kuasai? *',
            'saran01' => 'Menurut Anda kelebihan apa yang perlu dipertahankan dan/atau ditingkatkan',
            'saran02' => 'Menurut Anda kelemahan-kelemahan apa yang masih ada',
            'saran03' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada lulusan baru',
            'saran04' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Mata Kuliah',
            'saran05' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Sarana dan Prasarana',
            'saran06' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Staf Pengajar/Dosen',
            'saran07' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Karyawan',
            'saran08' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Mahasiswa',
            'saran09' => 'Menurut Anda kelemahan-kelemahan apa yang ditemui pada Hubungan Eksternal',
        ];
    }
}
